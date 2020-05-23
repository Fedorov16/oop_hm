<?php

	class User 
	{
		public function checkIfLoginExists($user_login) {
			$db = DB::connect();
			$query = 
			"SELECT count(*) AS `count`
			FROM `users`
			WHERE `user_login` = '$user_login';
			";
			$result = $db->query($query);
			$count = $result->fetch();
			if ($count['count'] == 1) {
				return true; 
			} else {
				return false;
			}
		}
		public function checkIfEmailExists($user_email) {
			$db = DB::connect();
			$query = 
			"SELECT count(*) AS `count`
			FROM `users`
			WHERE `user_email` = '$user_email';
			";
			$result = $db->query($query);
			$count = $result->fetch();
			if ($count['count'] == 1) {
				return true; 
			} else {
				return false;
			}
		}
		public function checkIfPhoneExists($user_phone) {
			$db = DB::connect();
			$query = 
			"SELECT count(*) AS `count`
			FROM `users`
			WHERE `user_phone` = '$user_phone';
			";
			$result = $db->query($query);
			$count = $result->fetch();
			if ($count['count'] == 1) {
				return true; 
			} else {
				return false;
			}
		}

		public function register($user) {
			$db = DB::connect();
			$hashPass = password_hash($user['user_password'], PASSWORD_BCRYPT);
			$query = "INSERT INTO `users`
					SET `user_login` = '$user[user_login]',
						`user_password` = '$hashPass',
						`user_name` = '$user[user_name]',
						`user_surname`= '$user[user_surname]',
						`user_phone` = $user[user_phone],
						`user_email` = '$user[user_email]',
						`user_reg_date` = '$user[user_reg_date]';
			";
			echo $query;
			$result = $db->query($query);
			
			$userId = $db->lastInsertId();
			$this->fullAuthorizedUser($userId);
		}


		public function checkIfLoginAndPasswordExists($user_login, $user_password) {
			$db = DB::connect();
			$hashedPassword = md5($user_password);
			$query = (new Select('users'))
						->what(['count' => 'count(*)'])
						->where("WHERE user_login = '$user_login' AND user_password = '$hashedPassword'")
						->build();
			$result = $db->query($query);
			$count = $result->fetch();
			if ($count['count'] == 1) {
				return true;
			} else {
				return false;
			}
		}

		public function auth($login) {
			$userId = $this->getUserIdByLogin($login);
			if ($userId !== 0) {
				$this->fullAuthorizedUser($userId);
			}
		}

		public function getUserIdByLogin($login) {
			$db = DB::connect();
			$query = (new Select('users'))
						->what(['user_id'])
						->where("WHERE user_login = '$login'")
						->build();
			$result = $db->query($query);
			$userInfo = $result->fetch();
			return isset($userInfo['user_id']) ? $userInfo['user_id'] : 0;
		}

		private function fullAuthorizedUser($userId) {
			session_start();
			$helper = new Helper();
			$token = $helper->generateToken();
			$tokenTime = time() + 60*60; 
			setcookie('token', $token, time() + 2*24*60*60, '/');
			setcookie('user_id', $userId, time() + 2*24*60*60, '/');
			setcookie('token_time', $tokenTime, time() + 2*24*60*60, '/');
			$db = DB::connect();
			$query = "
				INSERT INTO `connects`
					SET `connect_token` = '$token', 
						`connect_session_id` = $userId,
						`connect_token_time` = FROM_UNIXTIME($tokenTime);
			";
			$db->query($query);
		}

		public static function checkIfUserAuthorized() {
			if (!isset($_COOKIE['token']) || !isset($_COOKIE['user_id']) || !isset($_COOKIE['token_time'])) {
				return false;
			}
			$token = $_COOKIE['token']; 
			$userId = $_COOKIE['user_id'];
			$tokenTime = $_COOKIE['token_time']; 
			$db = DB::connect();
			$query = (new Select('connects'))
						->what(['connect_id'])
						->where("WHERE `connect_token` = '$token' 
								AND `connect_user_id` = $userId 
								AND `connect_token_time` = FROM_UNIXTIME($tokenTime)")
						->build();
			$result = $db->query($query);
			$connectInfo = $result->fetch();
			$connectId = $connectInfo['connect_id']; 
			if ($connectId) {
				if (time() > $tokenTime) {
					$helper = new Helper();
					$newToken = $helper->generateToken();
					$newTokenTime = time() + 60*60; 
					setcookie('token', $newToken, time() + 2*24*60*60, '/');
					setcookie('token_time', $newTokenTime, time() + 2*24*60*60, '/');
					$db = DB::connect();
					$query = "
						UPDATE `connects`
							SET `connect_token` = '$newToken', 
								`connect_token_time` = FROM_UNIXTIME($newTokenTime)
							WHERE `connect_id` = ;
					";
				}
				return true;
			}
			return false;
			

		}


	}