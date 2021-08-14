<?php

namespace Carota\System\Libs\Template;

class Twig
{
    protected $root;
    protected $loader;
    protected $directory;
    protected $path = array();
	protected $registry = array();

    public function __construct($registry)
    {
		$this->registry = $registry;
        $this->root = substr(DIR_ROOT, 0, -1);
        $this->loader = new \Twig\Loader\FilesystemLoader('/', $this->root);
    }

    public function addPath(string $namespace, string $directory = '')
    {
		if (!$directory) {
			$this->directory = $namespace;
		} else {
			$this->path[$namespace] = $directory;
		}
	}

    public function render(string $filename, array $data = [], string $code = ''): string 
    {
		$file = $this->directory . $filename . '.twig';

		$path = '';

		$namespace = '';

		$parts = explode('/', $filename);

		foreach ($parts as $part) {
			if (!$namespace) {
				$namespace .= $part;
			} else {
				$namespace .= '/' . $part;
			}

			if (isset($this->path[$namespace])) {
				$file = $this->path[$namespace] . substr($filename, strlen($namespace) + 1) . '.twig';
			}
		}

		// We have to remove the root web directory.
		$file = substr($file, strlen($this->root) + 1);

		if ($code) {
			// render from modified template code
			$loader = new \Twig\Loader\ArrayLoader([$file => $code]);
		} else {
			$loader = $this->loader;
		}

		try {
			// Initialize Twig environment
			$config = [
				'charset'     => 'utf-8',
				'autoescape'  => false,
				'debug'       => false,
				'auto_reload' => true,
				'cache'       => DIR_CACHE . '/template/'
			];

			$twig = new \Twig\Environment($loader, $config);
			$twig->addExtension(new \Twig\Extension\StringLoaderExtension());

			// 渲染组件
			$data['mubanvalue'] = "你好";
			$data['muban'] = "Hello {{ mubanvalue }}";
			foreach(Component as $ext)
			{
				if(class_exists($ext))
				{
					$twig->addExtension(new $ext($this->registry));
				}else{
					var_dump("此类不存在");
				}
			}
			return $twig->render($file, $data);
		} catch (Twig_Error_Syntax $e) {
			throw new \Exception('Error: Could not load template ' . $filename . '!');
		}
	}
}