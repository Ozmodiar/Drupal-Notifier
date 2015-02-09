<?php

namespace Drupal\notifier\Type;

use Notifier\Type\TypeInterface;

class RecoverPasswordType implements TypeInterface {

  /**
   * @todo: enforce in TypeInterface.
   *
   * @return string
   */
  public function getIdentifier() {
    return 'recover_password_type';
  }
}