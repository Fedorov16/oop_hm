<?php

class NewsProxyController{

    private $controller;

    public function __construct(){
        $this->controller = new NewsController();
    }

    public function add(){
        if(User::checkIfUserAuthorized()){
            $this->controller->add();
        } else{
            echo "У вас недостаточно прав для просмотра данной страницы";
            return;
        }
    }
    public function edit($parameters = []){
        if(User::checkIfUserAuthorized()){
            $this->controller->edit($parameters);
        } else{
            echo "У вас недостаточно прав для просмотра данной страницы";
            return;
        }
    }

    public function delete($parameters = []){
        if(User::checkIfUserAuthorized()){
        $this->controller->delete($parameters);
        } else{
            echo "У вас недостаточно прав для просмотра данной страницы";
            return;
        }
    }



}