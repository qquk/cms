<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 09.10.2017
 * Time: 16:00
 */

namespace Engine\Core\Router;


class Router
{

    private $host;

    private $routes;

    private $dispatcher;

    public function __construct($host)
    {
        $this->host = $host;
    }

    public function add($key, $pattern, $controller, $method = "GET"){
        $this->routes[$key] = [
            'pattern'    => $pattern,
            'controller' => $controller,
            'method'     => $method
        ];
    }

    public function dispatch($method, $uri){

    }

    public function getDispatcher(){
        if($this->dispatcher == null){

        }

        return $this->dispatcher;
    }

}