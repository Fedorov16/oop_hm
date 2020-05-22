<?php

class UsersController{

    public function reg(){

        if(isset($_POST['user_login'])){
            $helper = new Helper();
            //дописать хелпер и переписать туда всё
            $user_login = $helper->SanitizeString($_POST['user_login']);
            $user_name = filter_var(trim($_POST['user_name']), FILTER_SANITIZE_STRING);
            $user_surname = filter_var(trim($_POST['user_surname']), FILTER_SANITIZE_STRING);
            $user_password = filter_var(trim($_POST['user_pass']), FILTER_SANITIZE_STRING);
            $user_password2 = filter_var(trim($_POST['user_pass2']), FILTER_SANITIZE_STRING);
            $user_phone = filter_var(trim($_POST['user_phone']), FILTER_SANITIZE_STRING);
            $user_email = filter_var(trim($_POST['user_email']), FILTER_SANITIZE_STRING);
            $user_reg_date = date('y-m-d');
            $errors = [];

            // if ($user_password != $user_password2) {
            //     $errors[] = 'Пароли должны совпадать';
            // }
            $user = new User();
            $validation = new Validation();

            // if ($user->checkIfLoginExists($user_login)) {
            //     $errors[] = 'Такой логин уже существует';
            // }
            // if($validation->checkLenght($user_login,'5','50')){
            //     $errors[] = "Недопустимая длина логина";
            // } 
            // if($validation->checkLenght($user_name,'1','40')){
            //     $errors[] = "Недопустимая длина имени";
            // }
            // if($validation->checkLenght($user_surname,'1','40')){
            //     $errors[] = "Недопустимая длина Фамилии";
            // }
            // if($validation->checkLenght($user_password,'5','40')){
            //     $errors[] = "Недопустимая длина пароля";
            // }
            if (empty($errors)) {
                $userInfo = array(
                    'user_login' => $user_login,
                    'user_password' => $user_password,
                    'user_name' => $user_name,
                    'user_surname'=> $user_surname,
                    'user_phone' => $user_phone,
                    'user_email' => $user_email,
                    'user_reg_date' => $user_reg_date
                );
            $user->register($userInfo);
            // header('Location: ' . SITE_ROOT . 'product/list');
        }
        else{
            echo '<pre>';
            print_r($errors);
            echo '</pre>';
        }
    }
    include_once('./views/users/reg.php');
}
    public function auth(){
        $title = 'Авторизация';
        if(isset($_POST['user_login'])){
            $helper = new Helper();
            $user_login = $helper->SanitizeString($_POST['login']);
            $user_password = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

            $user = new User();
            $errors = [];

            if (!$user->checkIfLoginAndPasswordExists($user_login, $user_pass)) {
                $errors[] = 'Логин или пароль введен неверно';
            }
            if (empty($errors)) {
                $user->auth($user_login);
                header('Location: ' . SITE_ROOT . 'products/list');
            }
        }
        include_once('./views/users/auth.php');
    }
}