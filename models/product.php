<?php

	include_once('./components/db.php');

	class Product 
	{
		public function getAll() {

			$products_query = new Database();
			$get_products = $products_query->queryAll(
			"SELECT product_id, product_name, product_desc, product_price, product_count, category_name, product_mark, product_icon 
			FROM `products` 
			LEFT JOIN `categories` ON category_id = product_category_id");
			return $get_products;
		}

	}