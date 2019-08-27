<?php

namespace Rikudou\ScalarObjects\TypeHint;

abstract class AbstractNumericTypehint extends AbstractConvertibleTypehint
{
    /**
     * @return bool|BooleanTypehint
     */
    public function isNumber()
    {
    }

    /**
     * @return bool|BooleanTypehint
     */
    public function isNumeric()
    {
    }

    /**
     * @return float|int|FloatTypehint|IntegerTypehint
     */
    public function abs()
    {
    }

    /**
     * @param int|IntegerTypehint $precision
     *
     * @return float|FloatTypehint
     */
    public function ceil($precision = 0)
    {
    }

    /**
     * @param int|IntegerTypehint $precision
     *
     * @return float|FloatTypehint
     */
    public function floor($precision = 0)
    {
    }

    /**
     * @param float|int|FloatTypehint|IntegerTypehint $num
     *
     * @return int|IntegerTypehint
     */
    public function mod($num)
    {
    }

    /**
     * @return float|FloatTypehint
     */
    public function sqrt()
    {
    }

    /**
     * @param int|IntegerTypehint $precision
     * @param int|IntegerTypehint $mode
     *
     * @return float|FloatTypehint
     */
    public function round($precision = 0, $mode = PHP_ROUND_HALF_UP)
    {
    }

    /**
     * @return string|StringTypehint
     */
    public function toString()
    {
    }

    /**
     * @return bool|BooleanTypehint
     */
    public function toBool()
    {
    }

    /**
     * @return float|FloatTypehint
     */
    public function toFloat()
    {
    }

    /**
     * @return int|IntegerTypehint
     */
    public function toInt()
    {
    }

    /**
     * @return bool|BooleanTypehint
     */
    public function isString()
    {
    }

    /**
     * @return bool|BooleanTypehint
     */
    public function isBool()
    {
    }

    /**
     * @return bool|BooleanTypehint
     */
    public function isFloat()
    {
    }

    /**
     * @return bool|BooleanTypehint
     */
    public function isInt()
    {
    }

    /**
     * @return bool|BooleanTypehint
     */
    public function isArray()
    {
    }

    /**
     * @return bool|BooleanTypehint
     */
    public function isNull()
    {
    }

    /**
     * @return bool|BooleanTypehint
     */
    public function isResource()
    {
    }
}
