<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 12.10.2017
 * Time: 16:31
 */

namespace Cms\Controller;


class HomeController extends CmsController
{

    public function indexAction()
    {
        echo "HomeController:index";
    }

    public function newsAction($id)
    {
        echo "news " . $id;
    }
}