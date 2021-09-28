<?php
include_once "Stack.php";
$stack = new Stack(6);
$stack->push(1);
$stack->push(5);
$stack->push(7);
$stack->push(8);
$stack->push(9);
$stack->pop();
$stack->pop();
$stack->pop();
$stack->push(3);
$stack->push(2);
echo $stack->isEmpty();
echo $stack->top();

