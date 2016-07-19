<?php

namespace Scalar\Handlers;

class IntHandler extends NumberHandler {

  /**
   * @return bool
   */
  public static function isInt() {
    return true;
  }

  /**
   * @param int $self
   * @return bool
   */
  public static function even($self) {
    return $self % 2 === 0;
  }

  /**
   * @param int $self
   * @return bool
   */
  public static function odd($self) {
    return $self % 2 === 1;
  }

}