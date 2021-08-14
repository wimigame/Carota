<?php

namespace Carota\System\Engine;

class Action
{
    private $route;
    private $pathInfo = array();
    private $class;
    private $method;

    private $args = array();

    public function __construct(string $route)
    {
        $this->route = preg_replace('/[^a-zA-Z0-9_|\/]/', '', $route);
        $this->pathInfo = explode('/',$this->route);
        $this->class  = 'Controller' . str_replace(['_', '/'], ['', '\\'], ucwords('/'.$this->pathInfo[1].'/'.$this->pathInfo[2], '_/'));
        if(count($this->pathInfo)<4)
        {
            $this->method = 'index';
        }else
        {
            $this->method = $this->pathInfo[3];
        }
        $this->args = array_slice($this->pathInfo,4);
    }

    public function getRoute(): string {
		return $this->route;
	}

    public function execute(\Carota\System\Engine\Registry $registry)
    {
        if (substr($this->method, 0, 2) == '__') {
            return new \Exception('Error: Calls to magic methods are not allowed!');
        }

        $class = 'Carota\\App\\' . $this->class;

        if (class_exists($class)) {
			$controller = new $class($registry);
		} else {
			throw new \Exception('Error: 未能加载路由 ' . $this->route . '!');
		}

        if (is_callable([$controller, $this->method])) {
			return call_user_func_array([$controller, $this->method], $this->args);
		} else {
			throw new \Exception('Error: Could not call route ' . $this->route . '!');
		}
    }
}