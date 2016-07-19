<?php

namespace Scalar\Handlers;

abstract class ScalarHandler {

	/**
	 * @param string $self
	 * @return string
	 */
	public static function toString($self) {
		return strval($self);
	}

	/**
	 * @param string $self
	 * @return bool
	 */
	public static function toBool($self) {
		return boolval($self);
	}

	/**
	 * @param string $self
	 * @return float
	 */
	public static function toFloat($self) {
		return floatval($self);
	}

	/**
	 * @param string $self
	 * @return int
	 */
	public static function toInt($self) {
		return intval($self);
	}

	/**
	 * @return bool
	 */
	public static function isString() {
		return false;
	}

	/**
	 * @return bool
	 */
	public static function isBool() {
		return false;
	}

	/**
	 * @return bool
	 */
	public static function isFloat() {
		return false;
	}

	/**
	 * @return bool
	 */
	public static function isInt() {
		return false;
	}

	/**
	 * @return bool
	 */
	public static function isArray() {
		return false;
	}

  /**
   * @return bool
   */
	public static function isNull() {
	  return false;
  }

  /**
   * @return bool
   */
  public static function isNumeric($self) {
    return is_numeric($self);
  }

  /**
   * @return bool
   */
  public static function isNumber() {
    return false;
  }
}