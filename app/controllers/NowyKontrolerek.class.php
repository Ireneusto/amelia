<?php

namespace app\controllers;

use core\App;

class NowyKontrolerek {
 
  public function action_nowy() {
 
    App::getSmarty()->display("nowy_widok1.tpl");
 
  }
 
}