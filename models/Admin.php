<?php

class Admin
	{
		public function getAllUsers() {
			$users_query = DB::connect();
            $query=(new Select('users'))
                ->joins([['LEFT', 'genders', 'user_gender_id', 'gender_id']])
				-> build();
			$get_users = $users_query->query($query);
            $result = $get_users->fetchAll();
			return $result;
		}
    }