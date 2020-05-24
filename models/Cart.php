<?php

class Cart {

    public function addNewOrder($cart, $orderInfo) {
        $db = DB::connect();
        $query = "
            INSERT INTO `orders`
                SET `order_info` = '$orderInfo';
        ";
        $result = $db->query($query);
        $orderId = $db->lastInsertId();

        $cartsInfo = ""; 
        foreach ($cart as $product_id => $product_count) {
            $cartsInfo .= "($product_id, $orderId, $product_count), ";
        }
        $cartsInfo = rtrim($cartsInfo, ', ');
        $query = 
        "INSERT INTO `carts` (cart_product_id, cart_order_id, cart_product_count)
                VALUES $cartsInfo;
        ";
        $db->query($query);
        return;
    }

}