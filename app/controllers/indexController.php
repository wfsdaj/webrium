<?php
namespace app\controllers;

use webrium\foxql\db as DB;
use webrium\core\Event;


class indexController
{

  public function index()
  {



    $variable = 'salam';

    foreach ($variable as $key => $value) {
      $value->name;
    }

    return view('welcome');
  }

}
