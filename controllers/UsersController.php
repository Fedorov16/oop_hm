<?php

class UsersController{

    public function reg(){
        $title = 'Регистрация';
        if(isset($_POST['user_login'])){
            $helper = new Helper();
            $user_login = $helper->SanitizeString($_POST['user_login']);
            $user_name = $helper->SanitizeString($_POST['user_name']);
            $user_surname = $helper->SanitizeString($_POST['user_surname']);
            $user_password = $helper->SanitizeString($_POST['user_pass']);
            $user_password2 = $helper->SanitizeString($_POST['user_pass2']);
            $user_phone = $helper->SanitizeString($_POST['user_phone']);
            $user_email = $helper->SanitizeString($_POST['user_email']);
            $user_reg_date = date('y-m-d');

            $errors = [];
            
            $user = new User();
            $validation = new Validation();

            if ($user_password != $user_password2) {
                $errors[] = 'Пароли должны совпадать';
            }
            if ($user->checkIfLoginExists($user_login)) {
                $errors[] = 'Такой логин уже существует';
            }
            if ($user->checkIfEmailExists($user_email)) {
                $errors[] = 'Такой email уже зарегистрирован';
            }
            if ($user->checkIfPhoneExists($user_phone)) {
                $errors[] = 'Такой телефон уже зарегистрирован';
            }
            if($validation->checkLenght($user_login, 5, 50)){
                $errors[] = "Недопустимая длина логина";
            } 
            if($validation->checkLenght($user_name)){
                $errors[] = "Недопустимая длина имени";
            }
            if($validation->checkLenght($user_surname)){
                $errors[] = "Недопустимая длина Фамилии";
            }
            if($validation->checkLenght($user_password, 5, 40)){
                $errors[] = "Недопустимая длина пароля";
            }
            if (empty($errors)) {
                $userInfo = array(
                    'user_login' => $user_login,
                    'user_password' => $user_password,
                    'user_name' => $user_name,
                    'user_surname'=> $user_surname,
                    'user_phone' => $user_phone,
                    'user_email' => $user_email,
                    'user_reg_date' => "$user_reg_date"
                );
            $user->register($userInfo);
            header('Location: ' . SITE_ROOT . 'products/list');
            }
            // else{
            //     echo '<pre>';
            //     print_r($errors);
            //     echo '</pre>';
            //     exit();
            // }
        }
        include_once('./views/users/reg.php');
    }
    public function auth(){
        $title = 'Авторизация';
        if(isset($_POST['user_login'])){
            $helper = new Helper();
            $user_login = $helper->SanitizeString($_POST['user_login']);
            $user_password = $helper->SanitizeString ($_POST['user_pass']);

            $user = new User();
            $errors = [];

            if (!$user->checkIfUserExists($user_login, $user_password)) {
                $errors[] = 'Логин или пароль введен неверно';
            }
            if (empty($errors)) {
                $user->auth($user_login);
                header('Location: ' . SITE_ROOT . 'products/list');
            }
            // else{
            //     echo '<pre>';
            //     print_r($errors);
            //     echo '</pre>';
            //     exit();
            // }


        }
        include_once('./views/users/auth.php');
    }

    public function out(){
        if(isset($_COOKIE['token']) || isset($_COOKIE['user_id']) || isset($_COOKIE['token_time'])){
            setcookie('token', $newToken, time() - 2*24*60*60, '/');
            setcookie('token_time', $newTokenTime, time() - 2*24*60*60, '/');
            setcookie('user_id', $userId, time() - 2*24*60*60, '/');
            setcookie('cart', '', 1, '/');
        }
        session_destroy();
        header('Location: ' . SITE_ROOT . 'products/list');
    }
}