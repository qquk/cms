<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 05.10.2017
 * Time: 17:35
 */

namespace Engine;


use Engine\Core\Router\DispatchedRoute;
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

       $this->router->add('home', '/', 'HomeController:index');
       $this->router->add('news_one', '/news/(id:int)', 'HomeController:news');
       $this->router->add('product', '/product/12', 'ProductController:index');

       $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

//       if($routerDispatch === null){
//           $routerDispatch = new DispatchedRoute('ErrorController:page404');
//       }

       list($class, $action) = explode(':', $routerDispatch->getController(), 2);

       $class = '\\Cms\\Controller\\' . $class;
       $action = $action . 'Action';
       call_user_func_array([new $class($this->di), $action], $routerDispatch->getParameters());
       
//       echo "<pre>";
//          var_dump($class);
//       echo "</pre>";
//        echo "<pre>";
//        var_dump($action);
//        echo "</pre>";
//       die;
    }

}