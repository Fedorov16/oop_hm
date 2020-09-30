<?php

class Admin
	{
		public function getAllUsers() {
			$users_query = DB::connect();
            $query=(new Select('users'))
                ->joins([['LEFT', 'genders', 'user_gender_id', 'gender_id']])
				-> build();
			$get_users = $users_query->query($query);
            return $get_users->fetchAll();
		}
        public function updateUser($user){
            $user_query = DB::connect();
            $query = (new Update('users'))
                ->set([	'user_name' => $user['user_name'],
                    'user_surname' => $user['user_surname'],
                ])
                ->where("user_id = $user[user_id]")
                ->build();
//            echo $query;
            $updateUser = $user_query->query($query);
            return;
        }
        public function getUser($user_id){
            $user_query = DB::connect();
            $query=(new Select('users'))
                ->where ("WHERE user_id = '$user_id'")
                ->build();
            $getUserById = $user_query->query($query);
            return $getUserById->fetch();
        }
        public function getAllOrder(){
            $orders_query = DB::connect();
            $query=("SELECT GROUP_CONCAT(orders.order_count) as count, orders.order_date, orders.order_info,
                           users.user_login, users.user_email, users.user_name, users.user_surname,
                           users.user_phone, GROUP_CONCAT(products.product_id) as ids, GROUP_CONCAT(products.product_name) as names, GROUP_CONCAT(products.product_price) as prices, SUM(product_price) as sum,
                           city_value, address_value
                    FROM orders
                        LEFT JOIN users on orders.order_user_id = users.user_id
                        INNER JOIN products on orders.order_product_id = products.product_id
                        LEFT JOIN user_addresses u_a on users.user_id = u_a.user_address_user
                        LEFT JOIN addresses on u_a.user_address_address = addresses.address_id
                        LEFT JOIN city on addresses.address_city_id = city.city_id
                    GROUP BY user_id, order_info");
            $get_orders = $orders_query->query($query);
            return $get_orders->fetchAll();
        }
    }