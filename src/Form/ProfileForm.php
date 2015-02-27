<?php

namespace Drupal\notifier\Form;

use Drupal\notifier\Type\TypeStore;
use Notifier\Notifier;

class ProfileForm {

  /**
   * @var Notifier
   */
  private $notifier;

  /**
   * @var TypeStore
   */
  private $typeStore;

  /**
   * @param Notifier $notifier
   * @param TypeStore $type_store
   */
  public function __construct(Notifier $notifier, TypeStore $type_store) {
    $this->notifier = $notifier;
    $this->typeStore = $type_store;
  }

  public function buildMenu() {
    return array(
      'user/%user/notifier' => array(
        'title' => 'Notifications',
        'description' => 'Notification settings.',
        'page callback' => 'notifier_profile_form',
        'page arguments' => array(1),
        'access arguments' => array('access administration pages'),
        'weight' => 0,
        'type' => MENU_LOCAL_TASK,
        'file' => 'includes/notifier.forms.inc',
      ),
    );
  }

  public function buildForm() {
    $form = array();

    $types = $this->typeStore->getTypes();
    $channels = $this->notifier->getChannelStore()->getChannels();

    $channel_options = array();
    foreach ($channels as $channel) {
      $channel_options[$channel->getIdentifier()] = $channel->getIdentifier();
    }

    foreach ($types as $identifier => $type) {
      $form[$identifier] = array(
        '#type' => 'select',
        '#title' => $type->getDescription(),
        '#options' => $channel_options,
      );
    }

    return $form;
  }
}
