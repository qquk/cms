<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 09.10.2017
 * Time: 17:43
 */

namespace Engine\Helper;


class Common
{

    public static function idPost(){
        return $_SERVER['REQUEST_METHOD'] === 'POST' ? true : false;
    }

    public static function getMethod(){
        return $_SERVER['REQUEST_METHOD'];
    }
}