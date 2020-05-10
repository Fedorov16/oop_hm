<?php

class Database{
    private $link;

    public function __construct(){
        $this->connect();
    }
    private function connect(){
        //require_once дает ошибку, когда более 2-х запросов к БД
        $config = require '../../config/db_config.php';
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];
        $this->link = new PDO($dsn, $config['username'], $config['password']);
        return $this;
    }
    //Внесение данных в таблицу
    public function execute($sql, $params){
        $sth = $this->link->prepare($sql);
        return $sth->execute($params);
    }
    //Запросы с параметром where
    public function query ($sql, $params){
        $sth = $this->link->prepare($sql);
        $sth->execute($params);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if($result === false){
            return[];
        }
        return $result;
    }
    //Запросы без параметров
    public function queryAll ($sql){
        $sth = $this->link->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if($result === false){
            return[];
        }
        return $result;
    }
    //проверка существования
    public function query_search($sql, $params){
        $sth = $this->link->prepare($sql);
        $sth->execute($params);
        $result = $sth->fetchColumn();
        return $result;
    }
    //куки
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
