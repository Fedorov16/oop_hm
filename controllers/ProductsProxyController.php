<?php

class ProductsProxyController{

    private $controller;

    public function __constract(){
        $this ->controller = new ProductsController();
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