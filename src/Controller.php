<?php

namespace Armored\Source;

class Controller
{
    public $a = 'aaa';
    public function __construct()
    {
        return 'constructed';
    }

    /**
     * @return string
     */
    public function getA()
    {
        return $this->a;
    }
}
