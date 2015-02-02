<?php

namespace Drupal\notifier\Page;

use Drupal\notifier\Channel\RecoverPasswordChannelResolver;
use Drupal\notifier\Message\RecoverPasswordMessage;
use Drupal\notifier\Recipient\TestRecipient;
use Drupal\notifier\Type\InformationType;
use Notifier\Notifier;

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
    $message = new RecoverPasswordMessage(new InformationType());
    $message->setBody('Woooooot!');

    $recipient = new TestRecipient();

    $notifier = new Notifier(new RecoverPasswordChannelResolver());
    $notifier->sendMessage($message, array($recipient));

//    drupal_mail('notifier', 'example_mail', 'joeri.vandooren@gmail.com', 'nl');

    return 'woot';
  }
}
