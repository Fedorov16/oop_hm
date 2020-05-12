<?php

	include_once('./models/Product.php');

	class ProductsController{

		public function index() {
			//echo 'Вызван action index в ProductController';
			$title = 'Продукты';
			$productModel = new Product();
			$products = $productModel->getAll();
			include_once('./views/products/product.php');
			return;
		}

		public function add() {
			echo 'Вызван action add в ProductController';
			return;
		}



	}