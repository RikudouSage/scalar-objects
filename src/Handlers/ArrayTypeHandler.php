<?php

namespace Rikudou\ScalarObjects\Handlers;

class ArrayTypeHandler extends AbstractTypeableHandler
{
    public static function isArray(): bool
    {
        return true;
    }
}
