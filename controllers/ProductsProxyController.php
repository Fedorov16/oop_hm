<?php

class ProductsProxyController{

    private ProductsController $controller;

    public function __construct(){
        $this->controller = new ProductsController();
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

    public function addSale($parameters = []){
        if(User::checkIfUserAuthorized()){
            $this->controller->addSale($parameters);
        } else{
            echo "У вас недостаточно прав для просмотра данной страницы";
            return;
        }
    }

    public function deleteSale($parameters = []){
        if(User::checkIfUserAuthorized()){
        $this->controller->deleteSale($parameters);
        } else{
            echo "У вас недостаточно прав для просмотра данной страницы";
            return;
        }
    }



}