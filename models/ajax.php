<?php

if(isset($_POST['category_name'])){
    $category_name = $_POST['category_name'];
    $category_add = new PDO('mysql:host=localhost;dbname=handmade', 'root', '');
    $sql = 'INSERT INTO `categories` (category_name) VALUES (:category_name)';
    $sth = $category_add->prepare($sql);
    $result = $sth-> execute([
        'category_name' => $category_name
        ]);
}