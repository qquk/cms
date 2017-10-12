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

    public static function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST' ? true : false;
    }

    public static function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }


    public static function getPathUrl()
    {
        $pathUrl = $_SERVER['REQUEST_URI'];
        if($pos = strpos($pathUrl, '?')){
            $pathUrl = substr($pathUrl, 0, $pos);
        }
        return $pathUrl;
    }
}