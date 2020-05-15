<?php

class User{
    // проверка существования
    public function checkIfLoginExsist($login){
        $db = DB::connect();
        $query = "

        "
    } //создание пользователя
    public function register($user){
        $new_user = DB::connect();
        $new_user->execute("INSERT INTO `users` (user_login, user_name, user_surname, user_password, user_phone, user_email, user_reg_date) 
        VALUES (:user_login, :user_name, :user_surname, :user_password, :user_phone, :user_email, :user_reg_date)", 
        [
        'user_login' => $login,
        'user_name' => $name,
        'user_surname'  => $surname,
        'user_password' => $pass,
        'user_phone' => $phone,
        'user_email' => $email,
        'user_reg_date' => $time
        ]
    );
    }
}