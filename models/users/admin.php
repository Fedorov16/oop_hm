<?php
include_once('../../components/db.php');
$cook_sess = DB::connect();
$cook_sess->cookie_session();

if(isset($_SESSION['user_login'])){
    echo $_SESSION['user_login'] . ', добро пожаловать на страницу администратора!';

$count_page_visit = DB::connect();
$count_page_visit->cookie_visit();
echo 'Страница посещена' .'  '. $_COOKIE['page_visit'];

echo '<h3><a href="../../views/products/product.php">Перейти на страницу Продуктов</a></h3>';
echo '<a href="logout.php"> Выход из аккаунта</a>';
} else{
    die('недостаточно прав для доступа к странице');
}
