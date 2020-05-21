<?php

class Helper{

    public function SanitizeString($str){
        return filter_var(trim($str), FILTER_SANITIZE_STRING);
    }
    public function generateToken($length = 32){
        $symbols = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $symbolsLength = count($symbols);
        $token = "";
        for($i = 0; $i<$length; $i++){
            $token .= $symbols[random_int(0, $symbolsLength - 1)];
        }
        return $token;
    }
}