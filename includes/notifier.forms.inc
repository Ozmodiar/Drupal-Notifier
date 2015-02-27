<?php

function notifier_profile_form() {
  return DIC::service('notifier.profile_form')->buildForm();
}
