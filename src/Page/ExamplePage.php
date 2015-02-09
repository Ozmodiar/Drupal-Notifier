<?php

namespace Drupal\notifier\Page;

use Drupal\notifier\Channel\DrupalChannelResolver;
use Drupal\notifier\Type\RecoverPasswordType;
use Notifier\Mail\ParameterBag\MailMessageParameterBag;
use Notifier\Mail\ParameterBag\MailRecipientParameterBag;
use Notifier\Message\Message;
use Notifier\Notifier;
use Notifier\Recipient\Recipient;

class ExamplePage {

  public function buildMenu() {
    return array(
      'notifier/example' => array(
        'title' => 'Notifier Example',
        'description' => 'This page shows a notifier example page.',
        'page callback' => 'notifier_example_page',
        'access arguments' => array('access administration pages'),
        'weight' => 0,
        'file' => 'includes/notifier.pages.inc',
      ),
    );
  }

  public function buildPage() {
    $message = new Message(new RecoverPasswordType());
    $message->addParameterBag(new MailMessageParameterBag('Mail subject', 'Body...'));

    $recipient = new Recipient();
    $recipient->addParameterBag(new MailRecipientParameterBag('joeri.vandooren@gmail.com'));

    // The ChannelResolver will decide to which channels a message of a specific type must be sent.
    $notifier = new Notifier(new DrupalChannelResolver());
    $notifier->sendMessage($message, array($recipient));

    return 'woot';
  }
}
