<?php

namespace Drupal\notifier\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class TypePass implements CompilerPassInterface {
  /**
   * Find the Notifier types in the services.yml files and register them.
   *
   * @param ContainerBuilder $container
   */
  public function process(ContainerBuilder $container) {
    $tagged_services = $container->findTaggedServiceIds('notifier.type');

    $type_store = $container->getDefinition('notifier.type_store');

    foreach ($tagged_services as $id => $tag_attributes) {
      $type_store->addMethodCall('addType', array(new Reference($id)));
    }
  }
}
