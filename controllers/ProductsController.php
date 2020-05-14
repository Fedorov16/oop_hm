<?php

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

		public function view($parameters=[]){
			$id = $parameters[0];
			if(!$id){
				echo 'Некорректный id';
			}
			else{
				$productModel = new Product();
				$product = $productModel->getProductById($id);
				// print_r($product);
				$title = $product['product_name'];
				include_once('./views/products/product_view.php');
				// echo 'Вызван action с параметром id = ' . $id;
			}
			// print_r($parameters);
			return;
		}
		public function edit($parameters = []){
			$id = $parameters[0];
			if(!$id){
				echo 'Некорректный id';
				exit();
			}
			else{
				$productModel = new Product();
				$product = $productModel->getProductById($id);
				if(empty($product)){
					echo 'Такого продукта нет';
					exit();
				}
				$title = "Изм. &laquo;" . $product['product_name'] . "&raquo;";
				include_once('./views/products/product_edit.php');
				// echo 'Вызван action с параметром id = ' . $id;
			}
			// print_r($parameters);
			return;
		}



	}