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
				if (isset($_POST['product_name'])){
					$helper = new Helper();
					$product_name = $helper->escape($_POST['product_name']);
					$product_price = $helper->escape($_POST['product_price']);
					//скорее всего не нужно экранировать, т.к. это будет селект
					$category_name = $helper->escape($_POST['category_name']);
					$product_desc = $helper->escape($_POST['product_desc']);
					//TODO: make validation
					$validation = new Validation();
					$errors = [];

					if(!$validation->checkLenght($product_name)){
						$errors[] = 'Количество символов для названия не должно быть меньше 2-х'; 
					}
					if(!$validation->checkNumber($product_price, 99999, 25)){
						$errors[] = 'Цена не менее 25 и не более 99 999';
					}
					if(empty($errors)){
						$productModel = new Product();
						// TODO: use PHP function
						$product = array(
							'product_name' => $product_name,
							'product_price' => $product_price,
							'category_name' => $category_name,
							'product_desc' => $product_desc
						);
						$productModel->updateProduct($product);
						
						// header('Location: ' . SITE_ROOT . 'product/list');
					}
					else{
						$productModel = new Product();
						$product = $productModel->getProductById($id);
					}
					
				}
				
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