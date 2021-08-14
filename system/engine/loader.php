<?php

namespace Carota\System\Engine;

class Loader
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

    public function model($modelPath) {
        $modelPath  = preg_replace('/[^a-zA-Z0-9_\/]/', '', $modelPath);
		$class = 'Carota\App\Model\\' .str_replace(['_', '/'], ['', '\\'], ucwords($modelPath, '_/'));
        if (class_exists($class)) {
            return new $class($this->registry);
        } else {
            throw new \Exception('Error: Could not load model ' . $class . '!');
        }
	}

    public function view(string $viewPath, array $data = []): string {
        $viewPath  = preg_replace('/[^a-zA-Z0-9_\/]/', '', $viewPath);

		// Keep the original trigger
		// $trigger = $route;

		$code = '';

		// Trigger the pre events
		// $this->event->trigger('view/' . $trigger . '/before', [&$route, &$data, &$code]);

		// Make sure its only the last event that returns an output if required.
		$output = $this->template->render($viewPath, $data, $code);

		// Trigger the post events
		// $this->event->trigger('view/' . $trigger . '/after', [&$route, &$data, &$output]);

		return $output;
	}

}