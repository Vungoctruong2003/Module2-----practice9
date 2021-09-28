<?php

class Stack
{
private $stack;
private $limit;
function __construct($limit){
    $this->limit = $limit;
    $this->stack = [];
}
function isEmpty(){
    if(empty($this->stack)){
        return "Your Stack is empty";
    } else{
        return "Your Stack have item";
    }
}
function push($item){
    if(count($this->stack)<$this->limit){
        array_unshift($this->stack,$item);
    }
}
function pop(){
    if(count($this->stack)>0){
        array_shift($this->stack);
    }
}
function top(){
    return $this->stack[0];
}
}