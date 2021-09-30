<?php

class Patient
{
    public $name;
    public $code;
    public $next;

    function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
        $this->next = null;
    }

    public function readNode()
    {
        return "name:". $this->name . "_code:" . $this->code." ";
    }
}