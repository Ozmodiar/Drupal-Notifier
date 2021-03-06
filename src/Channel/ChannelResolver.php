<?php

namespace Drupal\notifier\Channel;

use Notifier\Channel\ChannelInterface;
use Notifier\Channel\ChannelResolverInterface;
use Notifier\Channel\ChannelStore;
use Notifier\Mail\MailChannel;
use Notifier\Recipient\RecipientInterface;
use Notifier\Type\TypeInterface;
use Drupal\notifier_display\Channel\DisplayChannel;

class ChannelResolver implements ChannelResolverInterface {

  /**
   * @param  RecipientInterface $recipient
   * @param  TypeInterface $type
   * @param  ChannelInterface[] $channels
   *
   * @return ChannelInterface[]
   */
  public function filterChannels(RecipientInterface $recipient, TypeInterface $type, array $channels) {
    return $channels;
  }

  /**
   * Get all channels for a given type of message.
   *
   * @param  TypeInterface $type
   * @param  ChannelStore $channelStore
   * @return ChannelInterface[]
   */
  public function getChannels(TypeInterface $type, ChannelStore $channelStore) {
    //TODO: Get this info from the user notification form.
    return array(new DisplayChannel(), new MailChannel());
  }
}
