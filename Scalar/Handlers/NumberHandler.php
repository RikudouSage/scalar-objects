<?php

namespace Scalar\Handlers;

abstract class NumberHandler extends ScalarHandler {

  /**
   * @return bool
   */
  public static function isNumber() {
    return true;
  }

  /**
   * @param number $self
   * @return number
   */
  public static function abs($self) {
    return abs($self);
  }

  /**
   * @param number $self
   * @param int $precision
   * @return float
   */
  public static function ceil($self, $precision = 0) {
    $fig = (int) str_pad(1, $precision, 0);
    return (ceil($self * $fig) / $fig);
  }

  /**
   * @param number $self
   * @param number $number
   * @return bool
   */
  public static function equals($self, $number) {
    return $self === $number;
  }

  /**
   * @param number $self
   * @param int $precision
   * @return float
   */
  public static function floor($self, $precision = 0) {
    $fig = (int) str_pad(1, $precision, 0);
    return (floor($self * $fig) / $fig);
  }

  /**
   * @param number $self
   * @param number $num
   * @return int
   */
  public static function mod($self, $num) {
    return $self % $num;
  }

  /**
   * @param number $self
   * @return float
   */
  public static function sqrt($self) {
    return sqrt($self);
  }

  /**
   * @param number $self
   * @param int $precision
   * @param int $mode
   * @return float
   */
  public static function round($self, $precision = 0, $mode = PHP_ROUND_HALF_UP) {
    return round($self, $precision, $mode);
  }

}