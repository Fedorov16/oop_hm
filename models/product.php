<?php

	class Product 
	{
		public function getAll() {

			$products_query = new DB();
			$get_products = $products_query->queryAll(
			"SELECT product_id, product_name, product_desc, product_price, product_count, category_name, product_mark, product_icon 
			FROM `products` 
			LEFT JOIN `categories` ON category_id = product_category_id");
			return $get_products;
		}
		public function getProductById($id){
			$products_query = new DB();
			$query = $products_query->query(
			"SELECT product_id, product_name, product_desc, product_price, product_count, category_name, product_mark, product_icon 
			FROM `products` 
			LEFT JOIN `categories` ON category_id = product_category_id WHERE product_id = :product_id", [':product_id' => $id]);
			return $query;
		}

	}