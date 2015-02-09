<?php

namespace Drupal\notifier\Form;


class ProfileForm {

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
    var_dump(\DIC::service('notifier.type_store')->getTypes());

    return 'woot';
  }
}