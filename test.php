<?php

require_once "Scalar/Handlers/ScalarHandler.php";
require_once "Scalar/Handlers/NumberHandler.php";
require_once "Scalar/Handlers/FloatHandler.php";
require_once "Scalar/Handlers/IntHandler.php";
require_once "Scalar/Handlers/StringHandler.php";
require_once "Scalar/RegisterHandlers.php";

use Scalar\Hints\StringHint;

/** @var StringHint $string */
$string = "This is a test string";

var_dump($string->length());
var_dump($string->capitalize());
var_dump($string->caseCompare("this Is a TESt STRInG"));
var_dump($string->toUpper());
var_dump($string->toLower());