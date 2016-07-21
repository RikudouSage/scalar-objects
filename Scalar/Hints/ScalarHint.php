<?php

namespace Scalar\Hints;

abstract class ScalarHint {
	/**
	 * @return string|StringHint
	 */
	public function toString() {}

	/**
	 * @return bool|BoolHint
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
	 * @return bool|BoolHint
	 */
	public function isString() {}

	/**
	 * @return bool|BoolHint
	 */
	public function isBool() {}

	/**
	 * @return bool|BoolHint
	 */
	public function isFloat() {}

	/**
	 * @return bool|BoolHint
	 */
	public function isInt() {}

	/**
	 * @return bool|BoolHint
	 */
	public function isArray() {}

  /**
   * @return bool|BoolHint
   */
	public function isNull() {}

  /**
   * @return bool|BoolHint
   */
	public function isNumeric() {}

  /**
   * @return bool|BoolHint
   */
	public function isNumber() {}

  /**
   * @return bool|BoolHint
   */
	public function isResource() {}
}