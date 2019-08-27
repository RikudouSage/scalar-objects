<?php

use Rikudou\ReflectionFile;

require_once __DIR__ . "/vendor/autoload.php";

$hintsDir = __DIR__ . "/ide/TypeHints";

try {

    function getPhpdocType(string $docBlock, string $parameterName): string
    {
        $docBlock = trim(str_replace(['/', '*'], '', $docBlock));
        $lines = array_map(function (string $line) {
            return trim($line);
        }, explode("\n", $docBlock));

        $regex = '#^@param (.+?) \$(.+)$#';

        foreach ($lines as $line) {
            if (!preg_match($regex, $line, $matches)) {
                continue;
            }

            if ($matches[2] === $parameterName) {
                return $matches[1];
            }
        }

        return 'mixed';
    }

    function getReturnTypeFromDocBlock(string $docBlock): array
    {
        $docBlock = trim(str_replace(['/', '*'], '', $docBlock));
        $lines = array_map(function (string $line) {
            return trim($line);
        }, explode("\n", $docBlock));

        $regex = '#^@return (.+)#';

        $types = [
            'mixed',
        ];

        foreach ($lines as $line) {
            if (!preg_match($regex, $line, $matches)) {
                continue;
            }

            $types = explode('|', $matches[1]);
            break;
        }

        return $types;
    }

    function getNormalizedTypehints(array $typehints): array
    {
        foreach ($typehints as $typehint) {
            switch ($typehint) {
                case 'array':
                    $typehints[] = 'ArrayTypehint';
                    break;
                case 'bool':
                case 'boolean':
                case 'true':
                case 'false':
                    $typehints[] = 'BooleanTypehint';
                    break;
                case 'float':
                    $typehints[] = 'FloatTypehint';
                    break;
                case 'int':
                case 'integer':
                    $typehints[] = 'IntegerTypehint';
                    break;
                case 'null':
                    $typehints[] = 'NullTypehint';
                    break;
                case 'resource':
                    $typehints[] = 'ResourceTypehint';
                    break;
                case 'string':
                    $typehints[] = 'StringTypehint';
                    break;
            }
        }

        return $typehints;
    }

    function getTypeFromClass(ReflectionClass $class): string
    {
        return str_replace(
            'TypeHandler',
            '',
            substr($class->getName(), strlen($class->getNamespaceName()) + 1)
        );
    }

    if (!is_dir($hintsDir) && !mkdir($hintsDir)) {
        throw new Exception("Could not create typehints directory");
    }

    $sourceDir = __DIR__ . "/src/Handlers";

    foreach (glob("{$sourceDir}/*.php") as $file) {
        $reflection = new ReflectionFile($file);
        $class = $reflection->getClass();

        $type = getTypeFromClass($class);

        $config = [
            'file' => "{$hintsDir}/{$type}Typehint.php",
            'name' => "{$type}Typehint",
            'methods' => [],
            'abstract' => false,
            'parent' => '',
        ];


        if ($class->isAbstract()) {
            $config['abstract'] = true;
        }

        if ($parent = $class->getParentClass()) {
            $config['parent'] = getTypeFromClass($parent) . 'Typehint';
        }

        $methods = $class->getMethods(ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_STATIC);

        foreach ($methods as $method) {
            $methodConfig = [
                'parameters' => [],
                'types' => [],
            ];

            $returnTypes = [];

            if ($type = $method->getReturnType()) {
                $returnTypes[] = $type->getName();
                if ($type->allowsNull()) {
                    $returnTypes[] = 'null';
                }
            } else {
                $returnTypes = getReturnTypeFromDocBlock($method->getDocComment());
            }

            $methodConfig['types'] = getNormalizedTypehints($returnTypes);

            $parameters = $method->getParameters();
            foreach ($parameters as $parameter) {
                if ($parameter->getName() === 'self') {
                    continue;
                }
                $parameterConfig = [
                    'types' => [],
                    'defaultValueType' => 'none',
                    'defaultValue' => '',
                ];

                if ($type = $parameter->getType()) {
                    $parameterConfig['types'][] = $type->getName();
                    if ($type->allowsNull()) {
                        $parameterConfig['type'][] = 'null';
                    }
                } else {
                    $parameterConfig['types'] = explode('|', getPhpdocType($method->getDocComment(), $parameter->getName()));
                }

                $parameterConfig['types'] = implode('|', getNormalizedTypehints($parameterConfig['types']));

                if ($parameter->isDefaultValueAvailable()) {
                    if ($parameter->isDefaultValueConstant()) {
                        $parameterConfig['defaultValueType'] = 'constant';
                        $parameterConfig['defaultValue'] = $parameter->getDefaultValueConstantName();
                    } else {
                        $parameterConfig['defaultValueType'] = 'value';
                        $parameterConfig['defaultValue'] = $parameter->getDefaultValue();
                    }
                }

                $methodConfig['parameters'][$parameter->getName()] = $parameterConfig;
            }

            $config['methods'][$method->getName()] = $methodConfig;
        }

        $fileContent = [
            '<?php',
            '',
            "namespace Rikudou\\ScalarObjects\\TypeHint;\n",
            ($config['abstract'] ? 'abstract ' : '') . "class {$config['name']}",
        ];

        if ($config['parent']) {
            $fileContent[] = "\textends {$config['parent']}";
        }

        $fileContent[] = '{';

        foreach ($config['methods'] as $methodName => $method) {
            if (count($method['parameters']) || count($method['types'])) {
                $docBlock = [
                    "\t/**",
                ];

                foreach ($method['parameters'] as $parameterName => $parameter) {
                    $docBlock[] = "\t * @param {$parameter['types']} \${$parameterName}";
                }

                $docBlock[] = "\t * @return " . implode("|", $method['types']);

                $docBlock[] = "\t */";

                $fileContent = array_merge($fileContent, $docBlock);
            }

            $paramLine = '(';

            $i = 1;
            foreach ($method['parameters'] as $parameterName => $parameter) {
                $tmp = "\t\t\${$parameterName}";
                if ($parameter['defaultValueType'] !== 'none') {
                    $tmp .= ' = ';
                    if ($parameter['defaultValueType'] === 'constant') {
                        $tmp .= $parameter['defaultValue'];
                    } else {
                        $tmp .= var_export($parameter['defaultValue'], true);
                    }
                }

                if ($i !== count($method['parameters'])) {
                    $tmp .= ',';
                }

                $paramLine .= $tmp;
                $i++;
            }

            $paramLine .= ')';

            $fileContent[] = "\tpublic function {$methodName}{$paramLine} {}";
            $fileContent[] = '';
        }

        unset($fileContent[count($fileContent) - 1]);

        $fileContent[] = '}';
        $fileContent[] = '';

        file_put_contents($config['file'], str_replace("\t", '    ', implode("\n", $fileContent)));
    }

} catch (Exception $exception) {
    echo $exception->getMessage(), PHP_EOL;
    exit(1);
}
