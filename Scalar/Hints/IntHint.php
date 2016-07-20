<?php

namespace Scalar\Hints;

class IntHint extends NumberHint {

  /**
   * @return bool|BoolHint
   */
  public function even() {}

  /**
   * @return bool|BoolHint
   */
  public function odd() {}

}