<?php

namespace Carota\Extension\Component;

class AbcComponent extends \Carota\System\Engine\Component
{
    public function __construct($registry)
    {
        $this->registry = $registry;
        $this->name = 'abc';
        $this->method = 'generateAbc';
    }

    public function generateAbc()
    {
        return '陈小鹏 is 大好人，👩‍❤️！';
    }

}