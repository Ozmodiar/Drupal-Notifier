<?php
/**
 * Created by PhpStorm.
 * User: jvandooren
 * Date: 02/02/15
 * Time: 13:01
 */

namespace Drupal\notifier\Message;

use Notifier\Message\Message;

class RecoverPasswordMessage extends Message {

  private $body;

  /**
   * @return mixed
   */
  public function getBody() {
    return $this->body;
  }

  /**
   * @param mixed $body
   */
  public function setBody($body) {
    $this->body = $body;
  }
}