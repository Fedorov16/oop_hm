<?php

class Cart {

    public function addNewOrderNoReg($cart, $orderInfo) {
        $order_date = Date('Y-m-d');
        $db = DB::connect();
        foreach ($cart as $product_id => $product_count) {
            $query = 
            "INSERT INTO `orders`
            SET `order_count`= '$product_count',
                `order_product_id` = $product_id,
                `order_date` = '$order_date',
                `order_info` = '$orderInfo'
            ";
            $db->query($query);
        }
        return;
    }

    public function addNewOrderReg($cart) {
        $order_date = Date('Y-m-d');
        $userId = $_COOKIE['user_id'];
        $db = DB::connect();

        foreach ($cart as $product_id => $product_count) {
        $query = 
        "INSERT INTO `orders`
        SET `order_count`= '$product_count',
            `order_product_id` = $product_id,
            `order_date` = '$order_date',
            `order_user_id` = $userId
        ";
        $db->query($query);
        }
        return;
    }
}