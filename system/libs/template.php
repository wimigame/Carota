<?php

namespace Carota\System\Libs;

class Template
{
    private $adaptor;
    private $registry;

    public function __construct($adaptor,$registry)
    {
        $class = 'Carota\System\Libs\Template\\' . $adaptor;
        if (class_exists($class)) {
          $this->registry = $registry;
          $this->adaptor = new $class($registry);
        } else {
          throw new \Exception('Error: Could not load template adaptor ' . $adaptor . '!');
        }
    }

    public function addPath($namespace, $directory = '') 
    {
		  $this->adaptor->addPath($namespace, $directory);
	  }

    public function render($filename, $data = [], $code = ''): string 
    {
		  return $this->adaptor->render($filename, $data, $code);
	  }
}