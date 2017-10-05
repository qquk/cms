<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Engine\Cms;
use Engine\DI\DI;

try{
    (new Cms(new DI()))->run();

}catch (Exception $e){
  echo $e->getMessage();
}