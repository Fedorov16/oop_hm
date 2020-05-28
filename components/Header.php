<?php

class Header{
//TODO Переподключить везде header
    public function __construct($title = 'HandMade'){
        $CategoryModel = new Category();
        $categories = $CategoryModel->getAll();

        $title = $title;
        include_once('./views/templates/head.php');
        include_once('./views/templates/header.php');
    }
}