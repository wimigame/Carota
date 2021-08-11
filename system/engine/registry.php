<?php

namespace Carota\System\Engine;

class Registry
{
    private $objects = array();

    public function __get(string $key): object {
		return $this->get($key);
	}

    public function __set(string $key, object $value): void {
		$this->set($key, $value);
	}

    public function get(string $key): object {
		if (!$this->objects[$key]) {
			exit('Missing ' . $key);
		}

		return isset($this->objects[$key]) ? $this->objects[$key] : '';
	}

    public function set(string $key, object $value): void {
		$this->objects[$key] = $value;
	}

    public function has(string $key): bool {
		return isset($this->objects[$key]);
	}

    public function unset(string $key): void {
		if (isset($this->objects[$key])) {
			unset($this->objects[$key]);
		}
	}
}