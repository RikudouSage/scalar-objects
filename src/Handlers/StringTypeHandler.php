<?php

namespace Rikudou\ScalarObjects\Handlers;

use function array_merge;
use function count;
use function implode;
use const PASSWORD_DEFAULT;
use function rtrim;
use const STR_PAD_LEFT;
use const STR_PAD_RIGHT;

class StringTypeHandler extends AbstractConvertibleTypeHandler
{
    /**
     * @var string $encoding
     */
    public static $encoding = 'UTF-8';

    /**
     * @return bool
     */
    public static function isString(): bool
    {
        return true;
    }

    /**
     * @param string $self
     * @param string $compare
     *
     * @return int
     */
    public static function caseInsensitiveCompare(string $self, string $compare): int
    {
        return strcasecmp($self, $compare);
    }

    /**
     * @param string $self
     * @param int    $algorithm
     * @param array  $options
     *
     * @return bool|string
     */
    public static function createPassword(string $self, int $algorithm = PASSWORD_DEFAULT, array $options = [])
    {
        return password_hash($self, $algorithm, $options);
    }

    public static function length(string $self): int
    {
        return mb_strlen($self, self::$encoding);
    }

    public static function toLower(string $self): string
    {
        return mb_strtolower($self, self::$encoding);
    }

    public static function toUpper(string $self): string
    {
        return mb_strtoupper($self, self::$encoding);
    }

    /**
     * @param string $self
     * @param string $pattern
     * @param int    $limit
     *
     * @return string[]
     */
    public static function split(string $self, string $pattern, int $limit = -1): array
    {
        return mb_split($pattern, $self, $limit);
    }

    public static function cut(string $self, int $start, ?int $length = null): string
    {
        return mb_strcut($self, $start, $length, self::$encoding);
    }

    public static function trimWidth(string $self, int $start, int $width, ?string $append = null): string
    {
        return mb_strimwidth($self, $start, $width, $append, self::$encoding);
    }

    /**
     * @param string $self
     * @param string $needle
     * @param int    $offset
     *
     * @return int|false
     */
    public static function caseInsensitivePosition(string $self, string $needle, int $offset = 0)
    {
        return mb_stripos($self, $needle, $offset, self::$encoding);
    }

    /**
     * @param string $self
     * @param string $needle
     * @param int    $offset
     *
     * @return int|false
     */
    public static function position(string $self, string $needle, int $offset = 0)
    {
        return mb_strpos($self, $needle, $offset, self::$encoding);
    }

    /**
     * @param string $self
     * @param string $needle
     * @param int    $offset
     *
     * @return int|false
     */
    public static function lastIndexOf(string $self, string $needle, int $offset = 0)
    {
        return mb_strrpos($self, $needle, $offset, self::$encoding);
    }

    /**
     * @param string $self
     * @param string $needle
     * @param int    $offset
     *
     * @return false|int
     */
    public static function indexOf(string $self, string $needle, int $offset = 0)
    {
        return self::position($self, $needle, $offset);
    }

    public static function capitalize(string $self): string
    {
        return ucwords($self);
    }

    public static function contains(string $self, string $string): bool
    {
        return self::indexOf($self, $string) !== false;
    }

    public static function startsWith(string $self, string $string): bool
    {
        return self::indexOf($self, $string) === 0 || $self === '';
    }

    public static function endsWith(string $self, string $string): bool
    {
        $length = self::length($string);
        if ($length === 0) {
            return true;
        }

        return (substr($self, -$length) === $string);
    }

    /**
     * @param string $self
     * @param string $needle
     *
     * @return int
     */
    public static function countSubstring(string $self, string $needle): int
    {
        return mb_substr_count($self, $needle, self::$encoding);
    }

    /**
     * @param string       $self
     * @param string|array $search
     * @param string|array $replace
     *
     * @return string|array
     */
    public static function replace(string $self, $search, $replace)
    {
        return str_replace($search, $replace, $self);
    }

    public static function chunk(string $self, int $splitLength = 1): array
    {
        return str_split($self, $splitLength);
    }

    public static function repeat(string $self, int $multiplier): string
    {
        return str_repeat($self, $multiplier);
    }

    public static function reverse(string $self): string
    {
        return strrev($self);
    }

    public static function trim(
        string $self,
        array $characters = [],
        bool $appendCharacters = true
    ): string {
        $defaultCharacters = [' ', "\t", "\n", "\r", "\0", "\x0B"];
        if ($appendCharacters || !count($characters)) {
            $characters = array_merge($defaultCharacters, $characters);
        }

        return trim($self, implode('', $characters));
    }

    public static function trimLeft(string $self, array $characters = [], bool $appendCharacters = true): string
    {
        $defaultCharacters = [' ', "\t", "\n", "\r", "\0", "\x0B"];
        if ($appendCharacters || !count($characters)) {
            $characters = array_merge($defaultCharacters, $characters);
        }

        return ltrim($self, implode('', $characters));
    }

    public static function trimRight(string $self, array $characters = [], bool $appendCharacters = true): string
    {
        $defaultCharacters = [' ', "\t", "\n", "\r", "\0", "\x0B"];
        if ($appendCharacters || !count($characters)) {
            $characters = array_merge($defaultCharacters, $characters);
        }

        return rtrim($self, implode('', $characters));
    }

    public static function pad(
        string $self,
        int $padLength,
        string $padString = ' ',
        int $padType = STR_PAD_RIGHT
    ): string {
        return str_pad($self, $padLength, $padString, $padType);
    }

    public static function padLeft(string $self, int $padLength, string $padString = ' '): string
    {
        return self::pad($self, $padLength, $padString, STR_PAD_LEFT);
    }

    public static function padRight(string $self, int $padLength, string $padString = ' '): string
    {
        return self::pad($self, $padLength, $padString, STR_PAD_RIGHT);
    }

    public static function lowerFirst(string $self): string
    {
        return lcfirst($self);
    }

    public static function upperFirst(string $self): string
    {
        return ucfirst($self);
    }
}
