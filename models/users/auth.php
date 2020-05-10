<?php
require_once('../../components/db.php');

$login = trim($_POST['login']);
$pass = trim($_POST['password']);

if (!empty($login) && !empty($pass)) {

    $check_login = new Database();
    $search_login = $check_login->query("SELECT user_login, user_password FROM `users` WHERE user_login = :user_login" , [':user_login' => $login]);
    
    if($search_login){
        //$search_login[0]['user_password'] - надо бы заменить на что-то более грамотное
        if(password_verify($pass, $search_login[0]['user_password'])){
            $cook_sess = new Database();
            $cook_sess->cookie_session();
            $_SESSION['user_login'] = $search_login[0]['user_login'];
            header('Location: admin.php');
        } else{
            echo 'Неверный логин или пароль';
        }
    } else{
        echo 'Даный пользователь не зарегистрирован';
    }
} else{
    echo 'заполните все поля';
}

   
?>