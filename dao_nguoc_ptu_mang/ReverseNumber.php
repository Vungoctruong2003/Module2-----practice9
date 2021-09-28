<?php

class ReverseNumber
{
    public $stack;
    public $limit;

    function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        }
    }

    function pop()
    {
        if (count($this->stack) > 0) {
            return array_shift($this->stack);
        }
    }

    function show()
    {
        $count = count($this->stack);
        for ($i = 0; $i < $count; $i++) {
            echo $this->pop() . ",";
        }

    }
}