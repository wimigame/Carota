<?php

namespace Carota\App\Controller\Account;

class AcAccount extends \Carota\System\Engine\Controller
{
    public function index()
    {
        var_dump('index');
    }

    public function b1(string $name, string $key)
    {
        $a1 = $this->load->model('account/ac');
        $result = $a1->addA1();
        $data['name'] = "陈小鹏";
        $data["result"] = $result;
        $this->response->setOutput($this->load->view("account/a1",$data));
        
    }
}