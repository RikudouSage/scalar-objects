<?php

namespace Rikudou\ScalarObjects\Handlers;

use const PHP_ROUND_HALF_UP;

abstract class AbstractNumericTypeHandler extends AbstractConvertibleTypeHandler
{
    public static function isNumber(): bool
    {
        return true;
    }

    public static function isNumeric($self): bool
    {
        return true;
    }

    /**
     * @param float|int $self
     *
     * @return float|int
     */
    public static function abs($self)
    {
        return abs($self);
    }

    /**
     * @param int|float $self
     * @param int       $precision
     *
     * @return float
     */
    public static function ceil($self, int $precision = 0): float
    {
        $fig = (int) str_pad(1, $precision, 0);

        return (ceil($self * $fig) / $fig);
    }

    /**
     * @param float|int $self
     * @param int       $precision
     *
     * @return float
     */
    public static function floor($self, int $precision = 0): float
    {
        $fig = (int) str_pad(1, $precision, 0);

        return (floor($self * $fig) / $fig);
    }

    /**
     * @param float|int $self
     * @param float|int $num
     *
     * @return int
     */
    public static function mod($self, $num): int
    {
        return $self % $num;
    }

    /**
     * @param float|int $self
     *
     * @return float
     */
    public static function sqrt($self): float
    {
        return sqrt($self);
    }

    /**
     * @param float|int $self
     * @param int       $precision
     * @param int       $mode
     *
     * @return float
     */
    public static function round($self, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float
    {
        return round($self, $precision, $mode);
    }
}
