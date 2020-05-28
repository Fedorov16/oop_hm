<?php

	class ProductsController{

		public function index() {
			$title = 'Продукты';
			$header = new Header();
			$productModel = new Product();
			$products = $productModel->getAll();
			include_once('./views/products/product.php');
			return;
		}
		
		public function add() {
			$title = 'Добавить продукт';
			
			if (isset($_POST['product_name'])){

			$helper = new Helper();
			$product_name = $helper->SanitizeString($_POST['product_name']);
			$product_price = $helper->SanitizeString($_POST['product_price']);
			$product_desc = $helper->SanitizeString($_POST['product_desc']);
			$product_category_id = $_POST['product_category_id'];
			
			// upload picture
			$dirPath = FILE_ASSETS . "img/product_icon/dir" . $product_category_id;
			if (!file_exists($dirPath)) {
				mkdir($dirPath);
			} 
			$name_img = $_FILES['product_icon']['name'];
			$tmp_name = $_FILES['product_icon']['tmp_name'];
			$path_to_img = FILE_ASSETS . "img/product_icon/dir" . $product_category_id . "/" . $name_img;
			move_uploaded_file($tmp_name, $path_to_img);
			$path_to_img_cut = $product_category_id . "/" . $name_img;

			$validation = new Validation();
				$errors = [];
			if($validation->checkLenght($product_name, 2, 40)){
				$errors[] = 'Количество символов для названия не должно быть меньше 3-х'; 
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
					'product_desc' => $product_desc,
					'product_icon' => $path_to_img_cut
				);
				$newProduct = $productModel->AddProduct($product);
				
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
				// print_r($product);
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

					// update picture
					$dirPath = FILE_ASSETS . "img/product_icon/dir" . $product_category_id;
					if (!file_exists($dirPath)) {
						mkdir($dirPath);
					} 
					$name_img = $_FILES['product_icon']['name'];
					$tmp_name = $_FILES['product_icon']['tmp_name'];
					$path_to_img = FILE_ASSETS . "img/product_icon/dir" . $product_category_id . "/" . $name_img;
					move_uploaded_file($tmp_name, $path_to_img);
					$path_to_img_cut = $product_category_id . "/" . $name_img;

					$validation = new Validation();
					$errors = [];
					if($validation->checkLenght($product_name, 2, 40)){
						$errors[] = 'Количество символов для названия не должно быть меньше 3-х'; 
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
							'product_id' => $id,
							'product_icon' => $path_to_img_cut
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
				return;
			}
			else{
				$productModel = new Product();
				$productModel->deleteProduct($id);
				header('Location: ' . SITE_ROOT . 'products/list');
			}	
		}
					
	}