<?php

class Validation{

    //ПРОВЕРИТЬ ПРОБЛЕМУ ФУНКЦИИ
    public function checkLenght($str, $lengthMin = 1, $lengthMax = 50){
        return ((strlen($str) > $lengthMin) || (strlen($str) < $lengthMax));
    }

    public function checkRegExp($str, $reg){
        return preg_match();
    }

    public function checkNumber($number, $maxNumber, $minNumber){
        return ($minNumber <= $number) && ($number <= $maxNumber);
    } 
}