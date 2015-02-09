<?php

namespace Drupal\notifier\Type;

use Notifier\Type\TypeInterface;

class TypeStore {

  /**
   * @var TypeInterface
   */
  private $types = array();

  /**
   * @return TypeInterface[]
   */
  public function getTypes() {
    return $this->types;
  }

  /**
   * @param TypeInterface $type
   */
  public function addType(TypeInterface $type) {
    $this->types[$type->getIdentifier()] = $type;
  }
}
