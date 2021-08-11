<?php

namespace Carota\System\Libs;

class Request
{
    public $get = array();
    public $post = array();
    public $cookie = array();
    public $files = array();
    public $server = array();

    public function __construct() {
        $this->get = $this->safeConvert($_GET);
        $this->post = $this->safeConvert($_POST);
        $this->request = $this->safeConvert($_REQUEST);
        $this->cookie = $this->safeConvert($_COOKIE);
        $this->files = $this->safeConvert($_FILES);
        $this->server = $this->safeConvert($_SERVER);
    }

    //转义为html实体
    public function safeConvert($data)
    {
        if(is_array($data))
        {
            foreach ($data as $key => $value) {
				unset($data[$key]);
				$data[$this->safeConvert($key)] = $this->safeConvert($value);
			}
        }else{
            $data = htmlspecialchars($data, ENT_COMPAT, 'UTF-8');
        }
        return $data;
    }
}