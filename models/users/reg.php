<?php
require_once('../../components/db.php');

if (isset($_POST['login'])) {
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $pass2 = filter_var(trim($_POST['password2']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $time = date('y-m-d');
    //дополнить регулярные выражения. Сделать на js
    if ($pass != $pass2) {
        echo 'Пароли должны совпадать';
        exit();
    } else if(mb_strlen($login) < 5 || mb_strlen($login) > 50){
        echo "Недопустимая длина логина";
        exit();
    } else if(mb_strlen($name) < 2 || mb_strlen($login) > 40){
        echo "Недопустимая длина имени";
        exit();
    } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 40){
        echo "Недопустимая длина пароля";
        exit();
    }
    $pass = password_hash($pass, PASSWORD_BCRYPT);

    //проверка существования пользователя
    $check_login = new Database();
    $search_login = $check_login->query_search("SELECT EXISTS (SELECT user_login FROM users WHERE user_login = :user_login)", [':user_login' => $login]);
    if($search_login){
        die('Пользователь с таким логином уже существует');
    }
    $check_email = new Database();
    $search_email = $check_email->query_search("SELECT EXISTS (SELECT user_email FROM users WHERE user_email = :user_email)", [':user_email' => $email]);
    if($search_email){
        die('Пользователь с таким Email уже существует');
    }
    $check_phone = new Database();
    $search_phone = $check_phone->query_search("SELECT EXISTS (SELECT user_phone FROM users WHERE user_phone = :user_phone)", [':user_phone' => $phone]);
    if($search_phone){
        die('Пользователь с данным телефоном уже существует');
    }

    //добавляем пользователя
    $new_user = new Database();
    $new_user->execute("INSERT INTO `users` (user_login, user_name, user_surname, user_password, user_phone, user_email, user_reg_date) 
    VALUES (:user_login, :user_name, :user_surname, :user_password, :user_phone, :user_email, :user_reg_date)", [
        'user_login' => $login,
        'user_name' => $name,
        'user_surname'  => $surname,
        'user_password' => $pass,
        'user_phone' => $phone,
        'user_email' => $email,
        'user_reg_date' => $time
    ]);
    header('Location: ../../views/users/reg.php');
}
?>
