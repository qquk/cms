<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 12.10.2017
 * Time: 17:17
 */

namespace Cms\Controller;


use Engine\Controller;
use Engine\DI;

class CmsController extends Controller
{
    public function __construct(DI\DI $di)
    {
        parent::__construct($di);
    }

}