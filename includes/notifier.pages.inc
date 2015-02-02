<?php

function notifier_example_page() {
  return DIC::service('notifier.example_page')->buildPage();
}