<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Engine\Cms;
use Engine\DI\DI;

try {
    $di = new DI();
    $services = require __DIR__ . "/Config/Service.php";

    foreach ($services as $service) {
        $service = new $service($di);
        $service->init();
    }

    (new Cms($di))->run();


} catch (Exception $e) {
    echo $e->getMessage();
}