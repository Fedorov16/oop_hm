<?php

	class Product 
	{
		public function getAll() {

			$products_query = DB::connect();
			$get_products = $products_query->queryAll(
			"SELECT product_id, product_name, product_desc, product_price, product_count, category_name, product_mark, product_icon 
			FROM `products` 
			LEFT JOIN `categories` ON category_id = product_category_id");
			return $get_products;
		}
		public function getProductById($id){
			$products_query = DB::connect();
			$query = $products_query->query(
			"SELECT product_id, product_name, product_desc, product_price, product_count, product_category_id, category_name, product_mark, product_icon 
			FROM `products` 
			LEFT JOIN `categories` ON category_id = product_category_id WHERE product_id = :product_id", [':product_id' => $id]);
			return $query;
		}

		public function updateProduct($product){

			$products_query = DB::connect();
			$query = $products_query->query(
			"UPDATE `products`
				SET product_name=:product_name, product_desc=:product_desc, product_price=:product_price, product_category_id=:product_category_id
				WHERE product_id = $product[product_id]",
				[':product_name' => $_POST['product_name'],
				':product_desc' => $_POST['product_desc'],
				':product_price' => $_POST['product_price'],
				':product_category_id' => $_POST['product_category_id']
				]);
			return;
		}

	}