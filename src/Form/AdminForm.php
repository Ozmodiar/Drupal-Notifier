<?php

namespace Drupal\notifier\Form;

class AdminForm {

  public function buildMenu() {
    return array(
      'admin/config/notifications' => array(
        'title' => 'Notifications',
        'description' => 'Notification settings.',
        'position' => 'right',
        'weight' => -20,
        'page callback' => 'system_admin_menu_block_page',
        'access arguments' => array('access administration pages'),
        'file path' => drupal_get_path('module', 'system'),
        'file' => 'system.admin.inc',
      ),
      'admin/config/notifications/settings' => array(
        'title' => 'Notification settings',
        'description' => 'Notification settings.',
        'page callback' => 'notifier_admin_form',
        'access arguments' => array('access administration pages'),
        'weight' => 0,
        'type' => MENU_NORMAL_ITEM,
        'file' => 'includes/notifier.admin.inc',
      ),
    );
  }

  public function buildForm() {
    $form = array();



    return $form;
  }

  public function validateForm($form, &$form_state) {

  }

  public function submitForm($form, &$form_state) {

  }
}
