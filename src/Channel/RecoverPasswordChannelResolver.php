<?php

namespace Drupal\notifier\Channel;

use Notifier\Channel\ChannelInterface;
use Notifier\Channel\ChannelResolverInterface;
use Notifier\Channel\ChannelStore;
use Notifier\Recipient\RecipientInterface;
use Notifier\Type\TypeInterface;

class RecoverPasswordChannelResolver implements ChannelResolverInterface {

  /**
   * @param  RecipientInterface $recipient
   * @param  TypeInterface $type
   * @param  ChannelInterface[] $channels
   * @return ChannelInterface[]
   */
  public function filterChannels(RecipientInterface $recipient, TypeInterface $type, array $channels) {
    // TODO: Implement filterChannels() method.
  }

  /**
   * Get all channels for a given type of message.
   *
   * @param  TypeInterface $type
   * @param  ChannelStore $channelStore
   * @return ChannelInterface[]
   */
  public function getChannels(TypeInterface $type, ChannelStore $channelStore) {
    // TODO: Implement getChannels() method.
  }

}