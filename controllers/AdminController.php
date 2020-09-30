<?php

class AdminController{

  
    public function viewAllUsers(){
        if(!User::checkIfUserIsAdmin()){
            echo "У вас недостаточно прав для просмотра данной страницы";
        } else{
            $title = 'USERS';
            $header = new Header($title);
            $allUsersModel = new Admin();
            $allUsers = $allUsersModel -> getAllUsers();
            include_once('./views/admin/admin_users.php');
        }
    }

    public function ajaxViewUserById(){
        if(isset($_GET['user_id'])){
            $user_id = $_GET['user_id'];
            $adminModel = new Admin();
            $userInfo = $adminModel->getUser($user_id);

            $id = $_GET['user_id'];
            if(!$id){
                echo 'Некорректный id';
                exit();
            }
            if (isset($_POST['user_name'])){
                $helper = new Helper();
                $user_name = $helper->SanitizeString($_POST['user_name']);
                $user_surname = $helper->SanitizeString($_POST['user_surname']);
                    $adminModel = new Admin();
                    $user = [
                        'user_name' => $user_name,
                        'user_surname' => $user_surname,
                        'user_id' => (string)$id,
                    ];
                    var_dump($user);
                    $adminModel->updateUser($user);
            }
            include_once('./views/admin/admin_user_info.php');

        }
    }
    public function viewAllOrders(){
        if(!User::checkIfUserIsAdmin()){
            echo "У вас недостаточно прав для просмотра данной страницы";
        } else{
            $title = 'ORDERS';
            $header = new Header($title);
            $orderModel = new Admin();
            $allOrders = $orderModel -> getAllOrder();
            include_once('./views/admin/admin_orders.php');
        }
    }



}