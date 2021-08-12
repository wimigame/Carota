<?php

namespace Carota\App\Abc\Controller\Account;

class A1Controller extends \Carota\System\Engine\Controller
{
    public function b1(string $name, string $key)
    {
        // $a1 = $this->load->model("abc/account/a1");
        $a1 = new \Carota\App\Abc\Model\Account\A1($this->registry);
        $result = $a1->addA1();
        $data['name'] = "陈小鹏";
        $data["result"] = $result;
        $this->response->setOutput($this->load->view("abc/account/a1",$data));
        
    }
}