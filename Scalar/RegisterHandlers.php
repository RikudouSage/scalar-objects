<?php
register_primitive_type_handler('string','Scalar\Handlers\StringHandler');
register_primitive_type_handler('int','Scalar\Handlers\IntHandler');
register_primitive_type_handler('float','Scalar\Handlers\FloatHandler');