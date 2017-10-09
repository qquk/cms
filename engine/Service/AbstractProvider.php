<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 09.10.2017
 * Time: 13:28
 */

namespace Engine\Service;


abstract class AbstractProvider
{

    /**
     * @var \Engine\DI\DI
     */
    protected $di;

    public function __construct(\Engine\DI\DI $di)
    {
        $this->di = $di;
    }

    abstract function init();

}