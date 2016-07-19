<?php

namespace Scalar\Handlers;

class StringHandler extends ScalarHandler {

	/**
	 * @var string $encoding
	 */
	public static $encoding = "UTF-8";

	/**
	 * @return bool
	 */
	public static function isString() {
		return true;
	}

	/**
	 * @param string $self
	 * @param string $compare
	 * @return int
	 */
	public static function caseCompare($self, $compare) {
		return strcasecmp($self, $compare);
	}

	/**
	 * @param string $self
	 * @param int $algo
	 * @param array $options
	 * @return bool|string
	 */
	public static function password($self, $algo = PASSWORD_DEFAULT, $options = []) {
		return password_hash($self, $algo, $options);
	}

	/**
	 * @param string $self
	 * @return int
	 */
	public static function length($self) {
		return mb_strlen($self, self::$encoding);
	}

	/**
	 * @param string $self
	 * @return string
	 */
	public static function toLower($self) {
		return mb_strtolower($self, self::$encoding);
	}

	/**
	 * @param string $self
	 * @return string
	 */
	public static function toUpper($self) {
		return mb_strtoupper($self, self::$encoding);
	}

	/**
	 * @param string $self
	 * @param string $pattern
	 * @param int $limit
	 * @return array
	 */
	public static function split($self, $pattern, $limit = -1) {
		return mb_split($pattern, $self, $limit);
	}

	/**
	 * @param string $self
	 * @param int $start
	 * @param null|int $length
	 * @return string
	 */
	public static function cut($self, $start, $length = NULL) {
		return mb_strcut($self, $start, $length, self::$encoding);
	}

	/**
	 * @param string $self
	 * @param int $start
	 * @param int $width
	 * @param string $trimmaker
	 * @return string
	 */
	public static function trimwidth($self, $start, $width, $trimmaker = "") {
		return mb_strimwidth($self, $start, $width, $trimmaker, self::$encoding);
	}

	/**
	 * @param string $self
	 * @param string $needle
	 * @param int $offset
	 * @return int
	 */
	public static function ipos($self, $needle, $offset = 0) {
		return mb_stripos($self, $needle, $offset, self::$encoding);
	}

	/**
	 * @param string $self
	 * @param string $needle
	 * @param int $offset
	 * @return int
	 */
	public static function pos($self, $needle, $offset = 0) {
		return mb_strpos($self, $needle, $offset, self::$encoding);
	}

	/**
	 * @param string $self
	 * @param string $needle
	 * @param int $offset
	 * @return int
	 */
	public static function lastIndexOf($self, $needle, $offset = 0) {
		return mb_strpos($self, $needle, $offset, self::$encoding);
	}

	/**
	 * @param string $self
	 * @param string $string
	 * @param int $offset
	 * @return int
	 */
	public static function indexOf($self, $needle, $offset = 0) {
		return self::pos($self, $needle, $offset);
	}

	/**
	 * @param string $self
	 * @return string
	 */
	public static function capitalize($self) {
		return ucwords($self);
	}

	/**
	 * @param string $self
	 * @param string $string
	 * @return bool
	 */
	public static function contains($self, $string) {
		return self::indexOf($self, $string) !== false;
	}

	/**
	 * @param string $self
	 * @param string $string
	 * @return bool
	 */
	public static function startsWith($self, $string) {
		return self::indexOf($self, $string) === 0 || $self === "";
	}

	/**
	 * @param string $self
	 * @param string $string
	 * @return bool
	 */
	public static function endsWith($self, $string) {
		$length = self::length($string);
		if($length === 0) {
			return true;
		}
		return (substr($self, -$length) === $string);
	}

	/**
	 * @param string $self
	 * @param string $needle
	 * @return int
	 */
	public static function count($self, $needle) {
		return mb_substr_count($self, $needle, self::$encoding);
	}

	/**
	 * @param string $self
	 * @param string|array $search
	 * @param string|array $replace
	 * @return mixed
	 */
	public static function replace($self, $search, $replace) {
		return str_replace($search, $replace, $self);
	}

	/**
	 * @param string $self
	 * @param int $split_length
	 * @return array
	 */
	public static function chunk($self, $split_length = 1) {
		return str_split($self, $split_length);
	}

	/**
	 * @param string $self
	 * @param int $multiplier
	 * @return string
	 */
	public static function repeat($self, $multiplier) {
		return str_repeat($self, $multiplier);
	}

	/**
	 * @param string $self
	 * @return string
	 */
	public static function reverse($self) {
		return strrev($self);
	}

	/**
	 * @param string $self
	 * @param string $character_mask
	 * @return string
	 */
	public static function trim($self, $character_mask = " \t\n\r\0\x0B") {
		return trim($self, $character_mask);
	}

	/**
	 * @param string $self
	 * @param string $character_mask
	 * @return string
	 */
	public static function trimLeft($self, $character_mask = " \t\n\r\0\x0B") {
		return ltrim($self, $character_mask);
	}

	/**
	 * @param string $self
	 * @param string $character_mask
	 * @return string
	 */
	public static function trimRight($self, $character_mask = " \t\n\r\0\x0B") {
		return rtrim($self, $character_mask);
	}

	/**
	 * @param string $self
	 * @param int $pad_length
	 * @param string $pad_string
	 * @param int $pad_type
	 * @return string
	 */
	public static function pad($self, $pad_length, $pad_string = " ", $pad_type = STR_PAD_RIGHT) {
		return str_pad($self, $pad_length, $pad_string, $pad_type);
	}

	/**
	 * @param string $self
	 * @param int $pad_length
	 * @param string $pad_string
	 * @return string
	 */
	public static function padLeft($self, $pad_length, $pad_string = " ") {
		return self::pad($self, $pad_length, $pad_string, STR_PAD_LEFT);
	}

	/**
	 * @param string $self
	 * @param int $pad_length
	 * @param string $pad_string
	 * @return string
	 */
	public static function padRight($self, $pad_length, $pad_string = " ") {
		return self::pad($self, $pad_length, $pad_string, STR_PAD_RIGHT);
	}

}