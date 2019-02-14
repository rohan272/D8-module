<?php

namespace Drupal\Manager\Controller;

class ManagerController {
    public function hello() {
        return array(
                '#title' => 'Hello Manager!',
                '#markup' => 'Here is a skeleton code for D8 module.',
            );
    }
}
