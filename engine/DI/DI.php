<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 05.10.2017
 * Time: 17:13
 */

namespace Engine\DI;


class DI
{
    /**
     * @var array
     */
    private $container = [];

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function set($key, $value){
        $this->container[$key] = $value;
        return $this;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function get($key){
        return $this->has($key) ? $this->container[$key] : null;
    }

    /**
     * @param $key
     * @return bool
     */
    public function has($key){
        return isset($this->container[$key]);
    }

}