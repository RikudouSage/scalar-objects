<?php

namespace Rikudou\ScalarObjects\Handlers;

class BooleanTypeHandler extends AbstractConvertibleTypeHandler
{
    public static function isBool(): bool
    {
        return true;
    }

    public static function isTrue(bool $self): bool
    {
        return $self === true;
    }

    public static function isFalse(bool $self): bool
    {
        return $self === false;
    }
}
