<?php

	include_once('../components/db.php');
	include_once('../components/functions.php');

	class Product 
	{
		public function getAll() {
			return $books;

			$products_query = new Database();
			$products = $products_query->queryAll(
			"SELECT product_id, product_name, product_desc, product_price, product_count, category_name, 
			seller_name, product_mark, product_icon 
			FROM `products` 
			LEFT JOIN `categories` ON category_id = product_category_id
			LEFT JOIN `sellers` ON category_id = product_category_id");
			view('../views/products/product.php', array('products' => $products));
		}

	}