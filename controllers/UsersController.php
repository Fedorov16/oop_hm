<?php

class UsersController{

    public function reg(){

        if(isset($_POST['user_login'])){
            $helper = new Helper();
            //дописать хелпер и переписать туда всё
            $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
            $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
            $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
            $pass2 = filter_var(trim($_POST['password2']), FILTER_SANITIZE_STRING);
            $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
            $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

            $errors = [];

            if ($pass != $pass2) {
                $errors = 'Пароли должны совпадать';
            }
            
        include_once('./views/users/reg.php');
    }

}