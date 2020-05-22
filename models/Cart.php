<?php

class Cart {

    public function addNewOrder($cart, $orderInfo){
        $db = DB:connect();
        $query = 
        "INSERT INTO `orders`
                SET `order_info` = '$orderInfo';
        ";
        $result = $db->query($query);
        $orderId = $db->LastInheritId();
        $cartsInfo = "";
        foreach($cart as $product_id => $product_count){
            $cartInfo .= "($productId, $orderId, $book_count), ";
        }
        $cartsInfo = rtrim($cartsInfo, ', ');
        $query = 
        "INSERT INTO `carts` (carts_product_id, cart_order_id, cart_book_count)
            VALUES $cartsInfo;
        ";
        $db->query($query);
        return;
    }

}