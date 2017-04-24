<?php
register_primitive_type_handler('string','Scalar\Handlers\StringHandler');
register_primitive_type_handler('int','Scalar\Handlers\IntHandler');
register_primitive_type_handler('float','Scalar\Handlers\FloatHandler');
register_primitive_type_handler('bool','Scalar\Handlers\BoolHandler');
register_primitive_type_handler('null','Scalar\Handlers\NullHandler');
register_primitive_type_handler('resource','Scalar\Handlers\ResourceHandler');