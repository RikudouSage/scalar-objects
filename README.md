# Scalar types as objects for php

This php library requires php extension from <https://github.com/nikic/scalar_objects>.

## Installation

Run `composer require rikudou/scalar-objects`.

## Usage

The handlers are automatically registered when you include composer
autoload. That means you can use it immediately with no configuration.

Since IDEs don't understand the syntax, there are typehint classes
available to help you.

## Examples
```php
<?php

use Rikudou\ScalarObjects\TypeHint\IntegerTypehint;
use Rikudou\ScalarObjects\TypeHint\StringTypehint;

require_once "vendor/autoload.php";

/** @var IntegerTypehint|int $num1 */
$num1 = 5;
/** @var StringTypehint|string $num2 */
$num2 = "10";

// the two variables are not actually objects, the typehints
// are just for IDE completion

var_dump($num1->isInt()); // bool(true)
var_dump($num2->isString()); // bool(true)
var_dump($num2->isNumeric()); // bool(true)
var_dump($num2->isNumber()); // bool(false) - isNumber() returns true only for int and float

var_dump($num1->toString()->length()); // int(1)

/** @var StringTypehint $string */
$string = "This is a test string";

var_dump($string->length()); // int(21);
var_dump($string->capitalize()); // string(21) "This Is A Test String"
var_dump($string->caseInsensitiveCompare("this Is a TESt STRInG")); // int(0)
var_dump($string->toUpper()); // string(21) "THIS IS A TEST STRING"
var_dump($string->toLower()); //string(21) "this is a test string"

```

As you can see, you can use the scalar values as objects.

But you can still use them as regular scalar types.

```php
<?php

use Rikudou\ScalarObjects\TypeHint\IntegerTypehint;
use Rikudou\ScalarObjects\TypeHint\StringTypehint;

require_once __DIR__."/vendor/autoload.php";

/** @var StringTypehint|string $string */
$string = "test";
$string .= "test"; // works without a problem
var_dump($string); // string(8) "testtest"

/** @var IntegerTypehint|int $int1 */
$int1 = 5;
/** @var IntegerTypehint|int $int2 */
$int2 = -10;
/** @var IntegerTypehint|int $int3 */
$int3 = "-15";

var_dump($int1 + $int2->abs()); // int(15)
var_dump($int1 + $int2); // int(-5)
var_dump($int1 + $int2 + $int3->toInt()->abs()); // int(10)

```
