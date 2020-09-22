<?php

class AdminController{

  
    public function viewAllUsers(){
        if(!User::checkIfUserAuthorized()){
            echo "У вас недостаточно прав для просмотра данной страницы";
        } else{
            echo "тут";
            return;
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