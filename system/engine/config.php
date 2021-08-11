<?php

namespace Carota\System\Engine;

class Config
{
    protected $directory;
    private $path = [];
    private $data = [];

    public function addPath(string $namespace, string $directory = ''): void
    {
        if(!$directory)
        {
            $this->directory = $namespace;
        }else
        {
            $this->path[$namespace] = $directory;
        }
    }

    public function get($key)
    {
        return isset($this->data[$key])?$this->data[$key]:'';
    }

    public function load(string $filename): array 
    {
		$file = $this->directory . $filename . '.php';
		$namespace = '';

		$parts = explode('/', $filename);

		foreach ($parts as $part) {
			if (!$namespace) {
				$namespace .= $part;
			} else {
				$namespace .= '/' . $part;
			}

			if (isset($this->path[$namespace])) {
				$file = $this->path[$namespace] . substr($filename, strlen($namespace)) . '.php';
			}
		}

		if (is_file($file)) {
			$_ = [];

			require($file);

			$this->data = array_merge($this->data, $_);

			return $this->data;
		} else {
			return [];
		}
	}
}