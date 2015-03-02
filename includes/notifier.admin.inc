<?php

function notifier_admin_form() {
  return DIC::service('notifier.admin_form')->buildForm();
}
