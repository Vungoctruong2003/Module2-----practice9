<?php

class Stack
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
        } else {
            return "Stack is overload";
        }
    }

    function pop()
    {
        if (count($this->stack) > 0) {
         return   array_shift($this->stack);
        } else {
            return "Stack is empty";
        }
    }
}