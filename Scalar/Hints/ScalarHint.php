<?php

namespace Scalar\Hints;

abstract class ScalarHint {
	/**
	 * @return string|StringHint
	 */
	public function toString() {}

	/**
	 * @return bool
	 */
	public function toBool() {}

	/**
	 * @return float|FloatHint
	 */
	public function toFloat() {}

	/**
	 * @return int|IntHint
	 */
	public function toInt() {}

	/**
	 * @return bool
	 */
	public function isString() {}

	/**
	 * @return bool
	 */
	public function isBool() {}

	/**
	 * @return bool
	 */
	public function isFloat() {}

	/**
	 * @return bool
	 */
	public function isInt() {}

	/**
	 * @return bool
	 */
	public function isArray() {}

  /**
   * @return bool
   */
	public function isNull() {}

  /**
   * @return bool
   */
	public function isNumeric() {}

  /**
   * @return bool
   */
	public function isNumber() {}
}