<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 09.10.2017
 * Time: 16:03
 */

namespace Engine\Service\Router;


use Engine\Core\Router\Router;
use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider
{
    public $serviceName = 'router';

    function init()
    {
        $router = new Router('http://cms.loc');
        $this->di->set($this->serviceName, $router);
    }

}