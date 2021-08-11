<?php

namespace Carota\System\Engine;

abstract class Controller
{
    protected $registry;

    public function __construct(\Carota\System\Engine\Registry $registry)
    {
        $this->registry = $registry;
    }

    public function __get($key)
    {
        return $this->registry->get($key);
    }

    public function __set($key, $value)
    {
        $this->registry->set($key, $value);
    }
}