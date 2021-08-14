<?php

namespace Carota\App\Model\Account;

class Ac extends \Carota\System\Engine\Model
{
    public function addA1(): int
    {
        $this->db->query("INSERT INTO `a1` SET `name` = '陈晓鹏'");
		$a1_last_id = $this->db->getLastId();
        return $a1_last_id;
    }
}