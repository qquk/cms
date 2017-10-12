<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 12.10.2017
 * Time: 17:09
 */

namespace Cms\Controller;


use Engine\Controller;

class ErrorController extends CmsController
{

    public function page404Action()
    {
        echo "not found";
    }
}