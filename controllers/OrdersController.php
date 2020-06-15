<?php

class OrdersController{

    public function orderDelivery(){ 
        $title = 'Доставка';
        $header = new Header();
        include_once('./views/orders/delivery.php');
    }

}