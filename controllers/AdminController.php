<?php

class AdminController{

  
    public function viewAllUsers(){
        if(!User::checkIfUserAuthorized()){
            echo "У вас недостаточно прав для просмотра данной страницы";
        } else{
            $title = 'Корзина';
            $header = new Header($title);
            $allUsersModel = new Admin();
            $allUsers = $allUsersModel -> getAllUsers();
            include_once('./views/admin/admin_users.php');
        }
    }

    public function viewAllProduct(){
        if(!User::checkIfUserAuthorized()){
            echo "У вас недостаточно прав для просмотра данной страницы";
        } else{
            echo "тут";
            return;
        }
    }
    



}