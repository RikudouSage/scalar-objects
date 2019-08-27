<?php

use Rikudou\ScalarObjects\Handlers\ArrayTypeHandler;
use Rikudou\ScalarObjects\Handlers\BooleanTypeHandler;
use Rikudou\ScalarObjects\Handlers\FloatTypeHandler;
use Rikudou\ScalarObjects\Handlers\IntegerTypeHandler;
use Rikudou\ScalarObjects\Handlers\NullTypeHandler;
use Rikudou\ScalarObjects\Handlers\ResourceTypeHandler;
use Rikudou\ScalarObjects\Handlers\StringTypeHandler;

register_primitive_type_handler('string', StringTypeHandler::class);
register_primitive_type_handler('int', IntegerTypeHandler::class);
register_primitive_type_handler('float', FloatTypeHandler::class);
register_primitive_type_handler('bool', BooleanTypeHandler::class);
register_primitive_type_handler('null', NullTypeHandler::class);
register_primitive_type_handler('resource', ResourceTypeHandler::class);
register_primitive_type_handler('array', ArrayTypeHandler::class);
