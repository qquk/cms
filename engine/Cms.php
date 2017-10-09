<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 05.10.2017
 * Time: 17:35
 */

namespace Engine;


use Engine\Helper\Common;

class Cms
{

    /**
     * @var \Engine\DI\DI
     */
    private $di;

    /**
     * @var \Engine\Core\Router\Router
     */
    private $router;

    public function __construct($di)
    {
        $this->di = $di;

        $this->router = $this->di->get('router');

    }

    public function run(){
       echo "hello from cms";

       $routerDispath = $this->router->dispatch(Common::getMethod())
    }

}