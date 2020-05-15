<?php

class Validation{

    public function checkLenght($str, $length = 2){
        return strlen($str) >= $length;
    }

    public function checkRegExp($str, $reg){
        return preg_match();
    }

    public function checkNumber($number, $maxNumber, $minNumber){
        return ($minNumber <= $number) && ($number <= $maxNumber);
    } 
}