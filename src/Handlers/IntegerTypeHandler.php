<?php

namespace Rikudou\ScalarObjects\Handlers;

class IntegerTypeHandler extends AbstractNumericTypeHandler
{
    public static function isInt(): bool
    {
        return true;
    }

    public static function even(int $self): bool
    {
        return $self % 2 === 0;
    }

    public static function odd(int $self): bool
    {
        return $self % 2 === 1;
    }
}
