<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 09.10.2017
 * Time: 16:29
 */

namespace Engine;


abstract class Controller
{

    /**
     * @var DI\DI
     */
    protected $di;

    public function __construct(DI\DI $di)
    {
        $this->di = $di;
    }

}