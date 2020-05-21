<?php

class Category 
	{
		public function getAll() {
			$categories_query = DB::connect();
			$get_categories = $categories_query->query(
			"SELECT category_id, category_name FROM `categories` ORDER BY category_id");
			return $get_categories;
        }
        
		public function addCategory(){

			// if(isset($_POST['category_name'])){
			// 	$category_name = $_POST['category_name'];
			// 	$category_add = DB::connect();
			// 	$category_add->execute('INSERT INTO `categories` (category_name) VALUES (:category_name)', [
			// 		'category_name' => $category_name
			// 		]);
			// 	echo $category_add;
			// 	print_r ($category_add);
			// 	return $category_add;
			// }
		}
	}
?>
	