<?php

namespace Carota\System\Engine;

class Action
{
    private $route;
    private $pathInfo = array();
    private $module;
    private $group;
    private $class;
    private $method;

    private $args = array();

    public function __construct(string $route)
    {
        $this->route = preg_replace('/[^a-zA-Z0-9_|\/]/', '', $route);

        $this->pathInfo = explode('/',$this->route);

        $this->module = $this->pathInfo[1];
        $this->group = $this->pathInfo[2];
        $this->class  = ucwords($this->module).'\\Controller\\'.ucwords($this->group).'\\'.ucwords($this->pathInfo[3]).'Controller';
        $this->method = $this->pathInfo[4];
        $this->args = array_slice($this->pathInfo,5);
    }

    public function getRoute(): string {
		return $this->route;
	}

    public function execute(\Carota\System\Engine\Registry $registry)
    {
        // Stop any magical methods being called
        if (substr($this->method, 0, 2) == '__') {
            return new \Exception('Error: Calls to magic methods are not allowed!');
        }

        $class = '\\Carota\\App\\' . $this->class;

        if (class_exists($class)) {
			$controller = new $class($registry);
		} else {
			return new \Exception('Error: Could not call route ' . $this->route . '!');
		}

        if (is_callable([$controller, $this->method])) {
			return call_user_func_array([$controller, $this->method], $this->args);
		} else {
			return new \Exception('Error: Could not call route ' . $this->route . '!');
		}
    }
}