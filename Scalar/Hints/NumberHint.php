<?php

namespace Scalar\Hints;

abstract class NumberHint extends ScalarHint {

  /**
   * @return int|float|IntHint|FloatHint
   */
  public function abs() {}

  /**
   * @param int|IntHint $precision
   * @return float|int|FloatHint|IntHint
   */
  public function ceil($precision = 0) {}

  /**
   * @param int|float|IntHint|FloatHint $number
   * @return bool
   */
  public function equals($number) {}

  /**
   * @param int|IntHint $precision
   * @return float|int|FloatHint|IntHint
   */
  public function floor($precision = 0) {}

  /**
   *
   * @param int|float|IntHint|FloatHint $num
   * @return int|IntHint
   */
  public function mod($num) {}

  /**
   * @return float|FloatHint
   */
  public function sqrt() {}

  /**
   * @param int|IntHint $precision
   * @param int|IntHint $mode
   * @return float|FloatHint
   */
  public function round($precision = 0, $mode = PHP_ROUND_HALF_UP) {}

}