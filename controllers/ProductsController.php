<?php

	class ProductsController{

		public function index() {
			$title = 'Продукты';
			$productModel = new Product();
			$products = $productModel->getAll();
			include_once('./views/products/product.php');
			return;
		}
		
		public function add() {
			
			if (isset($_POST['product_name'])){
			$title = 'Добавить продукт';
			$helper = new Helper();
			$product_name = $helper->SanitizeString($_POST['product_name']);
			$product_price = $helper->SanitizeString($_POST['product_price']);
			$product_desc = $helper->SanitizeString($_POST['product_desc']);
			$product_category_id = $_POST['product_category_id'];
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
					'product_category_id' => $product_category_id,
					'product_desc' => $product_desc
				);
				$newProduct = $productModel->AddProduct();
				header('Location: ' . SITE_ROOT . 'products/list');
			}
			
		}	
			$categoryModel = new Category();
			$category_name = $categoryModel->getAll();
			include_once('./views/products/product_add.php');
		
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
				print_r($product);
				// $title = $product['product_name'];
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
					$product_name = $helper->SanitizeString($_POST['product_name']);
					$product_price = $helper->SanitizeString($_POST['product_price']);
					$product_desc = $helper->SanitizeString($_POST['product_desc']);
					$product_category_id = $_POST['product_category_id'];
					$validation = new Validation();
					$errors = [];
					if(!$validation->checkLenght($product_name)){
						$errors[] = 'Количество символов для названия не должно быть меньше 2-х'; 
					}
					if(!$validation->checkNumber($product_price, 99999, 25)){
						$errors[] = 'Цена не менее 25 и не более 99 999';
					}
					//TODO: make validation
					if(empty($errors)){
						$productModel = new Product();
						// TODO: use PHP function
						$product = array(
							'product_name' => $product_name,
							'product_price' => $product_price,
							'product_category_id' => $product_category_id,
							'product_desc' => $product_desc,
							'product_id' => $id
						);
						$productModel->updateProduct($product);
						header('Location: ' . SITE_ROOT . 'products/list');
					}	
				}
					$productModel = new Product();
					$product = $productModel->getProductById($id);
					$categoryModel = new Category();
					$category_name = $categoryModel->getAll();

					if(empty($product)){
						echo 'Такого продукта нет';
						exit();
					}
					$title = "Изм. &laquo;" . $product['product_name'] . "&raquo;";
					include_once('./views/products/product_edit.php');
			}
		
			return;
		}
		public function delete($parameters = []){
			$id = $parameters[0];
			if(!$id){
				echo 'Некорректный id';
				exit();
			}
			else{
				$productModel = new Product();
				$productModel->deleteProduct($product);
				header('Location: ' . SITE_ROOT . 'products/list');
					}	
				}
					
	}