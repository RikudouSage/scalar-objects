<?php

namespace Scalar\Handlers;

class NullHandler extends ScalarHandler {

  public static function isNull() {
    return true;
  }

}