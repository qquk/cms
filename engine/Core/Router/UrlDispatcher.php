<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 09.10.2017
 * Time: 16:49
 */

namespace Engine\Core\Router;


class UrlDispatcher
{
    private $methods = [
        'GET', 'POST'
    ];

    private $routes = [
        'GET' => [],
        'POST' => []
    ];

    private $patterns = [
        'int' => '[0-9]+',
        'str' => '[a-zA-Z\.\-_%]+',
        'any' => '[a-zA-Z0-9\.\-_%]+'
    ];

    /**
     * @param $key
     * @param $pattern
     */
    public function addPattern($key, $pattern)
    {
        $this->patterns[$key] = $pattern;
    }

    private function routes($method)
    {
        return isset($this->routes[$method]) ? $this->routes[$method] : [];
    }

    public function register($method, $pattern, $controller)
    {

        $convert = $this->convertPattern($pattern);
        $this->routes[strtoupper($method)][$convert] = $controller;
    }

    public function convertPattern($pattern)
    {
        if (strpos($pattern, '(') === false) {
            return $pattern;
        }
        return preg_replace_callback("#\((\w+):(\w+)\)#", [$this, 'replacePattern'], $pattern);
    }

    public function replacePattern($matches)
    {
        return "(?<" . $matches[1] . ">" . strtr($matches[2], $this->patterns) . ")";
    }


    public function dispatch($method, $uri)
    {
        $routes = $this->routes(strtoupper($method));

        if (array_key_exists($uri, $routes)) {
            return new DispatchedRoute($routes[$uri]);
        }

        return $this->doDispatch($method, $uri);
    }

    public function doDispatch($method, $uri)
    {
        $routes = $this->routes(strtoupper($method));

        foreach ($routes as $route => $controller) {
            $pattern = "#^" . $route . "$#s";
            if (preg_match($pattern, $uri, $parameters)) {
                return new DispatchedRoute($controller, $parameters);
            }
        }

        return new DispatchedRoute("ErrorController:page404");
    }
}