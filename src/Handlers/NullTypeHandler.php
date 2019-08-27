<?php

namespace Rikudou\ScalarObjects\Handlers;

class NullTypeHandler extends AbstractConvertibleTypeHandler
{
    public static function isNull(): bool
    {
        return true;
    }
}
