<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 09.10.2017
 * Time: 13:31
 */

namespace Engine\Service\Database;


use Engine\Core\Database\Connection;
use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider
{

    private $serviceName = 'db';

    function init()
    {
        $db = new Connection();
        $this->di->set($this->serviceName, $db);
    }
}