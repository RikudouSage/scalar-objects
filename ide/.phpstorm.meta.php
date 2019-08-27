<?php

namespace PHPSTORM_META {

    registerArgumentsSet(
        'rounding',
        PHP_ROUND_HALF_UP,
        PHP_ROUND_HALF_DOWN,
        PHP_ROUND_HALF_EVEN,
        PHP_ROUND_HALF_ODD
    );

    registerArgumentsSet(
        'passwordAlgorithm',
        PASSWORD_DEFAULT,
        PASSWORD_BCRYPT,
        PASSWORD_ARGON2I,
        PASSWORD_ARGON2ID
    );

    registerArgumentsSet(
        'stringPadding',
        STR_PAD_LEFT,
        STR_PAD_RIGHT,
        STR_PAD_BOTH
    );

    expectedArguments(
        \Rikudou\ScalarObjects\TypeHint\AbstractNumericTypehint::round(),
        1,
        argumentsSet('rounding')
    );

    expectedArguments(
        \Rikudou\ScalarObjects\TypeHint\StringTypehint::createPassword(),
        0,
        argumentsSet('passwordAlgorithm')
    );

    expectedArguments(
        \Rikudou\ScalarObjects\TypeHint\StringTypehint::pad(),
        2,
        argumentsSet('stringPadding')
    );

}
