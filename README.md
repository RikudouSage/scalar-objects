# Scalar types as objects for php

This php library requires php extension from <https://github.com/nikic/scalar_objects>.

When you install from composer, it's just enough to include `vendor/autoload.php`.

When you install from github, you must include all files from `Scalar/Handlers` and possibly `Scalar/RegisterHandlers.php`.
The directory `Scalar/Hints` doesn't need to be included, it's just for IDE completion.

## Example
```php
<?php

use Scalar\Hints\IntHint;
use Scalar\Hints\StringHint;

require_once "vendor/autoload.php";

// these @var comments are just for the IDE completion

/** @var IntHint $num1 */
/** @var StringHint $num2 */

$num1 = 5;
$num2 = "10";

var_dump($num1->isInt()); // true
var_dump($num2->isString()); // true
var_dump($num2->isNumeric()); // true
var_dump($num2->isNumber()); // false - isNumber() returns true
                             // only for int and float
                             
var_dump($num1->toString()->length()); // int(1)

/** @var StringHint $string */
$string = "This is a test string";

var_dump($string->length()); // int(21);
var_dump($string->capitalize()); // string(21) "This Is A Test String"
var_dump($string->caseCompare("this Is a TESt STRInG")); // int(0)
var_dump($string->toUpper()); // string(21) "THIS IS A TEST STRING"
var_dump($string->toLower()); //string(21) "this is a test string"

```

As you can see, you can use the scalar values as objects.

But you can still use them as the scalar types.

```php
<?php

use Scalar\Hints\StringHint;
use Scalar\Hints\IntHint;

/** @var StringHint $string */

$string = "test";
$string .= "test"; // works without a problem
var_dump($string); // string(8) "testtest"

/** @var IntHint $int1 */
/** @var IntHint $int2 */
/** @var IntHint $int3 */
$int1 = 5;
$int2 = -10;
$int3 = "-15";

var_dump($int1 + $int2->abs()); // int(15)
var_dump($int1 + $int2); // int(-5)
var_dump($int1 + $int2 + $int3->toInt()->abs()); // int(10)
```