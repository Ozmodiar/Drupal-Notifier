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

  public function getDescription() {
    return 'The message you get when you want to recover your password.';
  }
}