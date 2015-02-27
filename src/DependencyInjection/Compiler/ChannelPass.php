<?php

namespace Drupal\notifier\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;


class ChannelPass implements CompilerPassInterface {

  /**
   * Find the Notifier channels and register them.
   *
   * @param ContainerBuilder $container
   */
  public function process(ContainerBuilder $container) {
    if (!$container->hasDefinition('notifier')) {
      return;
    }

    $notifier = $container->getDefinition('notifier');
    foreach ($container->findTaggedServiceIds('notifier.channel') as $id => $attr) {
      $notifier->addMethodCall('addChannel', array(new Reference($id)));
    }
  }
}
