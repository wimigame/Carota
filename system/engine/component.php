<?php

namespace Carota\System\Engine;

class Component Extends \Twig\Extension\AbstractExtension
{
    protected $registry = array();
    protected $name;
    protected $method;

    public function __construct()
    {
        
    }

    public function __get($key)
    {
        return $this->registry->get($key);
    }

    public function __set($key, $value)
    {
        $this->registry->set($key, $value);
    }

    public function getFunctions()
    {
        return [
            new \Twig\TwigFunction($this->name, [$this, $this->method]),
        ];
    }
}