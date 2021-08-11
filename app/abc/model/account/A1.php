<?php

namespace Carota\App\Abc\Model\Account;

class A1 extends \Carota\System\Engine\Model
{
    public function addA1(): int
    {
        $this->db->query("INSERT INTO `a1` SET `name` = '陈晓鹏'");
		$a1_last_id = $this->db->getLastId();
        return $a1_last_id;
    }
}