<?php

class Patient
{
    private $name;
    private $code;
    private $list;

    function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
        $this->list = [];
    }


}