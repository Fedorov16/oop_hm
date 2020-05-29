<?php

class CartsController{

    public function index() {
        $title = 'Корзина';
        $header = new Header($title);
        $cartString = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : ""; 
        if ($cartString !== "") {
            $cart = json_decode($cartString, true);

            if (isset($_POST['user_name'])) {
                $helper = new Helper();
                $user_name = $helper->SanitizeString($_POST['user_name']); 
                $user_phone = $helper->SanitizeString($_POST['user_phone']); 
                $user_email = $helper->SanitizeString($_POST['user_email']);
                // TODO: check validation for user field()
                $orderInfo = "имя: $user_name, телефон: $user_phone, email: $user_email";
                $cartModel = new Cart();
                $cartModel->addNewOrderNoReg($cart, $orderInfo); 
                setcookie('cart', '', 1, '/');
                header('Location: ' . SITE_ROOT . 'products/list');

            }
            if (isset($_POST['products_to_orders'])){
                $cartModel = new Cart();
                $cartModel->addNewOrderReg($cart);
                setcookie('cart', '', 1, '/');
                header('Location: ' . SITE_ROOT . 'products/list');
            }
            
            $prodoctIdList = array_keys($cart);
            $productModel = new Product();
            $productList = $productModel->getProductListForOrder($prodoctIdList);
            $price_all = 0;

            foreach($productList as $product){
                $price_all += $product['product_price'] * $cart[$product['product_id']];
            }
            
        }
        
        include_once('./views/carts/index.php');
    }
}