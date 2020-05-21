<?php

class User{
    // проверка существования
    public function checkIfLoginExsist($login){
        $db = DB::connect();
        $query = "SELECT count(*) AS `count` FROM `users` WHERE user_login = $login

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
    public function checkIfLoginAndPasswordExists($login, $password){
        $db = DB::connect();
        $hashedPassword = md5($password);
        $query = (new Select('users'))
            ->what(['count' => 'count(*)'])
            ->where("WHERE user_login = '$login' AND user_password = '$hashedPassword'")
            ->build();
        $result = $db->query($query);
        
    }
    private function fullAuthorizedUser($user){
        session_start();
        $helper = new Helper();
        $token = $helper->generateToken();
        $tokenTime = time() + 60*60;
        setcookie('token', $token, time() + 2*24*60*60, '/');
        setcookie('user_id', $userId, time() + 2*24*60*60, '/');
        setcookie('token_time', $tokenTime, time() + 2*24*60*60, '/');
        $db = DB::connect();
        $query = 
        "INSERT INTO `connects`
        SET `connect_token` = '$token'
            `connect_user_id` = '$userId',
            `connect_token_time` = FROM_UNIX($tokeTime);
        "


    }

    public static function checkIfUserAuthorized(){
        if(!isset($_COOKIE['token']) || !isset($_COOKIE['user_id']) || !isset($_COOKIE['token_time'])){
            return false;
        }
        $token = $_COOKIE['token'];
        $userId = $_COOKIE['user_id'];
        $tokenTime = $_COOKIE['token_time'];
        $db = DB::connect();
        $query = (new Select('connects'))
                ->what(['connect_id'])
                ->where("WHERE `connect_token` = '$token'
                AND `connect_user_id` = $user
                AND `connect_token_time` = FROM_UNIXTIME($tokenTime)")
                ->build();
            $result = $db->query($query);
            $connectInfo = $result->fetch();
    }

}

