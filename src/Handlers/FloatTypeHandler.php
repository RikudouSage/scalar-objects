<?php

namespace Rikudou\ScalarObjects\Handlers;

class FloatTypeHandler extends AbstractNumericTypeHandler
{
    public static function isFloat(): bool
    {
        return true;
    }
}
