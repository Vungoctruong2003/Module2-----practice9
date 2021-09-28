<?php
include_once "Stack.php";
function convertDecimalToBinary($number){
    $stack = new Stack(100);
    while ($number/2>0){
        $mod = $number%2;
        $stack->push($mod);
        $number = floor($number/2);
    }
    $str = '';
    $count =count($stack->stack);
    for ($i=0; $i<$count; $i++){
        $str = $str.$stack->pop();
    }
    echo $str;
}
 convertDecimalToBinary(20);
