<?php
    require_once 'db.php';
    function view($template, $arr = [])
    {
        extract($arr);
        if (file_exists($template)) {
            include_once($template);
        }
    }
    function generateToken($size = 32)
	{
		$symbols = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd'];
		$lenght = count($symbols) - 1;
		$token = '';
		for ($i = 0; $i < $size; $i++) {
			$token .= $symbols[random_int(0, $lenght)];
			
		}
		return $token;
	}
	
	function isAuthorized()
	{
		$isAuthorized = false;
		if (isset($_COOKIE['user_id']) and isset($_COOKIE['token'])){
			$customer_id = $_COOKIE['customer_id'];
            $token = $_COOKIE['token'];
            $cookie_query = new Database();
            $connect_cookie = $cookie_query->query("SELECT `connect_id`, UNIX_TIMESTAMP(`connect_token_time`) 
            AS `token_time` FROM `connects` WHERE (connect_customer_id = :customer_id, :connect_token = :token)" , [':connect_customer_id' => $customer_id, `:connect_token` => $token]);
		
			if ($connect_cookie) {
                $isAuthorized = true;
                //возможно cookie[0]['token_time]
				if (time() > $connect_cookie['token_time']) {
					$new_token = generateToken();
					$new_token_time = time() + 15*60;
                    $connect_id = $connect_cookie['connect_id'];
                    
					$query = "
						UPDATE `connects`
						SET `connect_token` = '$new_token',
							`connect_token_time` = FROM_UNIXTIME($new_token_time)
						WHERE `connect_id` = $connect_id;
					";
					echo $query;
					mysqli_query($db, $query);
					setcookie('token', $new_token, time() + 2*24*3600, '/');
				}
			}
		}
		return $isAuthorized;
	}


?>