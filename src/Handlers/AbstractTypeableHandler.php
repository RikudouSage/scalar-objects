<?php

namespace Rikudou\ScalarObjects\Handlers;

abstract class AbstractTypeableHandler
{
    public static function isString(): bool
    {
        return false;
    }

    public static function isBool(): bool
    {
        return false;
    }

    public static function isFloat(): bool
    {
        return false;
    }

    public static function isInt(): bool
    {
        return false;
    }

    public static function isArray(): bool
    {
        return false;
    }

    public static function isNull(): bool
    {
        return false;
    }

    public static function isNumeric($self): bool
    {
        return is_numeric($self);
    }

    public static function isNumber(): bool
    {
        return false;
    }

    public static function isResource(): bool
    {
        return false;
    }
}
