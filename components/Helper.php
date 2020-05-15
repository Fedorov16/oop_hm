<?php

class Helper{

    public function escape($str){
        return htmlentities($str);
    }
}