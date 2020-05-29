<?php

class Header{

    public function __construct($title = 'HandMade'){
        
        $CategoryModel = new Category();
        $categories = $CategoryModel->getAll();

        include_once('./views/templates/head.php');
        include_once('./views/templates/header.php');
    }
}