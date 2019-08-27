<?php

namespace Rikudou\ScalarObjects\Handlers;

abstract class AbstractConvertibleTypeHandler extends AbstractTypeableHandler
{
    public static function toString($self): string
    {
        return (string) $self;
    }

    public static function toBool($self): bool
    {
        return (bool) $self;
    }

    public static function toFloat($self): float
    {
        return (float) $self;
    }

    public static function toInt($self): int
    {
        return (int) $self;
    }
}
