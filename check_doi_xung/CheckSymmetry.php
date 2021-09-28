<?php

class CheckSymmetry
{
    public $str;

    function __construct($str)
    {
        $this->str = $str;
    }

    function stack()
    {
       return str_split($this->str);
    }

    function squeue()
    {
        return array_reverse($this->stack());

    }

    function checkSymmetry1()
    {
        $count = count($this->squeue());
        for ($i = 0; $i < $count ; $i++) {
            if ($this->stack()[$i] == $this->squeue()[$i]) {
                return "Your String is Symmetry";
            } else {
                return "Your String not Symmetry";
            }
        }
    }
}

