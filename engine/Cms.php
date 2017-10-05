<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 05.10.2017
 * Time: 17:35
 */

namespace Engine;


class Cms
{

    private $di;

    public function __construct($di)
    {
        $this->di = $di;
    }

    public function run(){
       echo "hello from cms";
    }

}