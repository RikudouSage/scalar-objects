<?php

namespace Scalar\Hints;

class StringHint extends ScalarHint {

	/**
	 * @param string|StringHint $compare
	 * @return int|IntHint
	 */
	public function caseCompare($compare) {}

	/**
	 * @param int|IntHint $algo
	 * @param array $options
	 * @return bool|BoolHint|string|StringHint
	 */
	public function password($algo = PASSWORD_DEFAULT, $options = []) {}

	/**
	 * @return int|IntHint
	 */
	public function length() {}

	/**
	 * @return string|StringHint
	 */
	public function toLower() {}

	/**
	 * @return string|StringHint
	 */
	public function toUpper() {}

	/**
	 * @param string|StringHint $pattern
	 * @param int|IntHint $limit
	 * @return array
	 */
	public function split($pattern, $limit = -1) {}

	/**
	 * @param int|IntHint $start
	 * @param null|int|IntHint $length
	 * @return string|StringHint
	 */
	public function cut($start, $length = NULL) {}

	/**
	 * @param int|IntHint $start
	 * @param int|IntHint $width
	 * @param string|StringHint $trimmaker
	 * @return string|StringHint
	 */
	public function trimwidth($start, $width, $trimmaker = "") {}

	/**
	 * @param string|StringHint $needle
	 * @param int|IntHint $offset
	 * @return int|IntHint
	 */
	public function ipos($needle, $offset = 0) {}

	/**
	 * @param string|StringHint $needle
	 * @param int|IntHint $offset
	 * @return int|IntHint
	 */
	public function pos($needle, $offset = 0) {}

	/**
	 * @param string|StringHint $needle
	 * @param int|IntHint $offset
	 * @return int|IntHint
	 */
	public function lastIndexOf($needle, $offset = 0) {}

	/**
	 * @param string|StringHint $needle
	 * @param int|IntHint $offset
	 * @return int|IntHint
	 */
	public function indexOf($needle, $offset = 0) {}

	/**
	 * @return string|StringHint
	 */
	public function capitalize() {}

	/**
	 * @param string|StringHint $string
	 * @return bool|BoolHint
	 */
	public function contains($string) {}

	/**
	 * @param string|StringHint $string
	 * @return bool|BoolHint
	 */
	public function startsWith($string) {}

	/**
	 * @param string|StringHint $string
	 * @return bool|BoolHint
	 */
	public function endsWith($string) {}

	/**
	 * @param string|StringHint $needle
	 * @return int|IntHint
	 */
	public function count($needle) {}

	/**
	 * @param string|StringHint|array $search
	 * @param string|StringHint|array $replace
	 * @return string|array|StringHint
	 */
	public function replace($search, $replace) {}

	/**
	 * @param int|IntHint $split_length
	 * @return array
	 */
	public function chunk($split_length = 1) {}

	/**
	 * @param int|IntHint $multiplier
	 * @return string|StringHint
	 */
	public function repeat($multiplier) {}

	/**
	 * @return string|StringHint
	 */
	public function reverse() {}

	/**
	 * @param string|StringHint $character_mask
	 * @return string|StringHint
	 */
	public function trim($character_mask = " \t\n\r\0\x0B") {}

	/**
	 * @param string|StringHint $character_mask
	 * @return string|StringHint
	 */
	public function trimLeft($character_mask = " \t\n\r\0\x0B") {}

	/**
	 * @param string|StringHint $character_mask
	 * @return string|StringHint
	 */
	public function trimRight($character_mask = " \t\n\r\0\x0B") {}

	/**
	 * @param int|IntHint $pad_length
	 * @param string|StringHint $pad_string
	 * @param int|IntHint $pad_type
	 * @return string|StringHint
	 */
	public function pad($pad_length, $pad_string = " ", $pad_type = STR_PAD_RIGHT) {}

	/**
	 * @param int|IntHint $pad_length
	 * @param string|StringHint $pad_string
	 * @return string|StringHint
	 */
	public function padLeft($pad_length, $pad_string = " ") {}

	/**
	 * @param int|IntHint $pad_length
	 * @param string|StringHint $pad_string
	 * @return string|StringHint
	 */
	public function padRight($pad_length, $pad_string = " ") {}

}