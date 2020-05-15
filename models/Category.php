<?php

class Category 
	{
		public function getAll() {
			$categories_query = DB::connect();
			$get_categories = $categories_query->queryAll(
			"SELECT category_id, category_name, product_name, product_desc, product_price, product_count, product_icon
			FROM `categories` 
			LEFT JOIN `products` ON category_id = product_category_id ORDER BY category_id");
			return $get_categories;
        }
        
		public function getCategoryById($id){
			$categories_query = DB::connect();
			$query = $categories_query->queryNaO(
			"SELECT category_id, category_name, product_name, product_desc, product_price, product_count, product_icon 
			FROM `categories` 
			LEFT JOIN `products` ON category_id = product_category_id WHERE category_id = :category_id", [':category_id' => $id]);
			return $query;
		}

		// public function updateProduct($product){
		// 	$products_query = DB::connect();
		// 	$query = $products_query->execute(
		// 	"UPDATE `products`
		// 	SET product_name, product_desc, product_price, category_name 
		// 	WHERE product_id = :product_id", [':product_id' => $id]);
		// 	echo $query;
		// 	exit();
		// 	return;
		// }

	}