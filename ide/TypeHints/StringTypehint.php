<?php

namespace Rikudou\ScalarObjects\TypeHint;

class StringTypehint extends AbstractConvertibleTypehint
{
    /**
     * @return bool|BooleanTypehint
     */
    public function isString()
    {
    }

    /**
     * @param string|StringTypehint $compare
     *
     * @return int|IntegerTypehint
     */
    public function caseInsensitiveCompare($compare)
    {
    }

    /**
     * @param int|IntegerTypehint $algorithm
     * @param array|ArrayTypehint $options
     *
     * @return bool|string|BooleanTypehint|StringTypehint
     */
    public function createPassword($algorithm = PASSWORD_DEFAULT, $options = [
])
    {
    }

    /**
     * @return int|IntegerTypehint
     */
    public function length()
    {
    }

    /**
     * @return string|StringTypehint
     */
    public function toLower()
    {
    }

    /**
     * @return string|StringTypehint
     */
    public function toUpper()
    {
    }

    /**
     * @param string|StringTypehint $pattern
     * @param int|IntegerTypehint   $limit
     *
     * @return array|ArrayTypehint
     */
    public function split($pattern, $limit = -1)
    {
    }

    /**
     * @param int|IntegerTypehint $start
     * @param int|IntegerTypehint $length
     *
     * @return string|StringTypehint
     */
    public function cut($start, $length = null)
    {
    }

    /**
     * @param int|IntegerTypehint   $start
     * @param int|IntegerTypehint   $width
     * @param string|StringTypehint $append
     *
     * @return string|StringTypehint
     */
    public function trimWidth($start, $width, $append = null)
    {
    }

    /**
     * @param string|StringTypehint $needle
     * @param int|IntegerTypehint   $offset
     *
     * @return int|false|IntegerTypehint|BooleanTypehint
     */
    public function caseInsensitivePosition($needle, $offset = 0)
    {
    }

    /**
     * @param string|StringTypehint $needle
     * @param int|IntegerTypehint   $offset
     *
     * @return int|false|IntegerTypehint|BooleanTypehint
     */
    public function position($needle, $offset = 0)
    {
    }

    /**
     * @param string|StringTypehint $needle
     * @param int|IntegerTypehint   $offset
     *
     * @return int|false|IntegerTypehint|BooleanTypehint
     */
    public function lastIndexOf($needle, $offset = 0)
    {
    }

    /**
     * @param string|StringTypehint $needle
     * @param int|IntegerTypehint   $offset
     *
     * @return false|int|BooleanTypehint|IntegerTypehint
     */
    public function indexOf($needle, $offset = 0)
    {
    }

    /**
     * @return string|StringTypehint
     */
    public function capitalize()
    {
    }

    /**
     * @param string|StringTypehint $string
     *
     * @return bool|BooleanTypehint
     */
    public function contains($string)
    {
    }

    /**
     * @param string|StringTypehint $string
     *
     * @return bool|BooleanTypehint
     */
    public function startsWith($string)
    {
    }

    /**
     * @param string|StringTypehint $string
     *
     * @return bool|BooleanTypehint
     */
    public function endsWith($string)
    {
    }

    /**
     * @param string|StringTypehint $needle
     *
     * @return int|IntegerTypehint
     */
    public function countSubstring($needle)
    {
    }

    /**
     * @param string|array|StringTypehint|ArrayTypehint $search
     * @param string|array|StringTypehint|ArrayTypehint $replace
     *
     * @return string|array|StringTypehint|ArrayTypehint
     */
    public function replace($search, $replace)
    {
    }

    /**
     * @param int|IntegerTypehint $splitLength
     *
     * @return array|ArrayTypehint
     */
    public function chunk($splitLength = 1)
    {
    }

    /**
     * @param int|IntegerTypehint $multiplier
     *
     * @return string|StringTypehint
     */
    public function repeat($multiplier)
    {
    }

    /**
     * @return string|StringTypehint
     */
    public function reverse()
    {
    }

    /**
     * @param array|ArrayTypehint  $characters
     * @param bool|BooleanTypehint $appendCharacters
     *
     * @return string|StringTypehint
     */
    public function trim($characters = [
], $appendCharacters = true)
    {
    }

    /**
     * @param array|ArrayTypehint  $characters
     * @param bool|BooleanTypehint $appendCharacters
     *
     * @return string|StringTypehint
     */
    public function trimLeft($characters = [
], $appendCharacters = true)
    {
    }

    /**
     * @param array|ArrayTypehint  $characters
     * @param bool|BooleanTypehint $appendCharacters
     *
     * @return string|StringTypehint
     */
    public function trimRight($characters = [
], $appendCharacters = true)
    {
    }

    /**
     * @param int|IntegerTypehint   $padLength
     * @param string|StringTypehint $padString
     * @param int|IntegerTypehint   $padType
     *
     * @return string|StringTypehint
     */
    public function pad($padLength, $padString = ' ', $padType = STR_PAD_RIGHT)
    {
    }

    /**
     * @param int|IntegerTypehint   $padLength
     * @param string|StringTypehint $padString
     *
     * @return string|StringTypehint
     */
    public function padLeft($padLength, $padString = ' ')
    {
    }

    /**
     * @param int|IntegerTypehint   $padLength
     * @param string|StringTypehint $padString
     *
     * @return string|StringTypehint
     */
    public function padRight($padLength, $padString = ' ')
    {
    }

    /**
     * @return string|StringTypehint
     */
    public function lowerFirst()
    {
    }

    /**
     * @return string|StringTypehint
     */
    public function upperFirst()
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
    public function isNumeric()
    {
    }

    /**
     * @return bool|BooleanTypehint
     */
    public function isNumber()
    {
    }

    /**
     * @return bool|BooleanTypehint
     */
    public function isResource()
    {
    }
}
