<?php

final class DB
{
    private static $connection;

    private function __construct(){
        $config = require_once './config/db_config.php';
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];
        $opt = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
        $pdo = new PDO($dsn, $config['username'], $config['password'], $opt);
        self::$connection = $pdo;
    }
    public static function connect(){
        if(!self::$connection){
            new self();
        }
        return self::$connection;
    }
    private function __clone(){}
    private function __sleep(){}
    private function __wakeup(){}


    //куки//надо перенести эти блоки
    public function cookie_visit(){
        if(isset ($_COOKIE['page_visit'])){
            //не забыть про время куки
            setcookie('page_visit', ++$_COOKIE['page_visit'], time() + 5);  
        } else{
            setcookie('page_visit', 1, time() + 5);
            $_COOKIE['page_visit'] = 1;  
        }
    }
    //Сессия
    public function cookie_session(){
        session_start();
    }
}
