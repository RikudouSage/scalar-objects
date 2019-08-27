<?php

namespace Rikudou\ScalarObjects\Handlers;

class ResourceTypeHandler extends AbstractTypeableHandler
{
    public static function isResource(): bool
    {
        return true;
    }
}
