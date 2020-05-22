<?php

class CartsController{

    public function index(){
        $title = 'Корзина';
        $cartString = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : "";
        if($cartString !== ""){
            $cart = json_decode($cartString, true);
            if(isset($_POST['user_name'])){
                $helper = new Helper();
                $user_name = $helper->escape($_POST['user_name']);
                $user_phone = $helper->escape($_POST['user_phone']);
                $user_email = $helper->escape($_POST['user_email']);
                $orderInfo = "Имя: $user_name, телефон: $user_phone, email: $user_email";
                $cartModel = new Cart();
                $cartModel->addNewOrder($cart, $orderInfo);
                setcookie('cart', '', 1, '/');
                // header("Location")
            }
            
            $ProductIdList = array_keys($cart);
            print_r($bookList);
            $ProductModel = new Product();
            $bookList = $bookModel->getProductListForOrder($ProductIdList);
        }
        
        include_once('./views/carts/index.php');
    }
}