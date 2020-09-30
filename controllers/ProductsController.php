<?php

	class ProductsController{

		public function index(){ 
			$title = 'Продукты';
			$header = new Header();
			$productModel = new Product();
			$products = $productModel->getAll();
			if(isset($_COOKIE['user_id'])){
				$userId = $_COOKIE['user_id'];
				$wishList = $productModel-> getWishById($userId);
			}
			
			include_once('./views/products/product.php');
			return;
		}
		public function indexSale(){ 
			$title = 'Акции';
			$header = new Header();
			$productModel = new Product();
			$products = $productModel->getAllSale();
			if(isset($_COOKIE['user_id'])){
				$userId = $_COOKIE['user_id'];
				$wishList = $productModel-> getWishById($userId);
			}
			include_once('./views/products/product_sale.php');
			return;
		}
		public function addSale($parameters = []){
			$id = $parameters[0];
			if(!$id){
				echo 'Некорректный id';
				exit();
			}

            if (isset($_POST['product_price'])){

                $helper = new Helper();
                $product_old_price = $helper->SanitizeString($_POST['product_old_price']);
                $product_price = $helper->SanitizeString($_POST['product_price']);
                $validation = new Validation();
                $errors = [];
                if(!$validation->checkNumber($product_old_price, 99999, 25)){
                    $errors[] = 'Цена не менее 25 и не более 99 999';
                }
                if(!$validation->checkNumber($product_price, 99999, 25)){
                    $errors[] = 'Цена не менее 25 и не более 99 999';
                }
                if(empty($errors)){
                    $productModel = new Product();
                    $product = [
                        'product_price' => $product_price,
                        'product_old_price' => $product_old_price,
                        'product_id' => $id,
                    ];
                    $SaleProduct = $productModel->AddSaleProduct($product);
                    header('Location: ' . SITE_ROOT . 'products/sale');
                }
                else{
                    echo $errors;
                }
            }

            $productModel = new Product();
            $product = $productModel->getProductById($id);

            if(empty($product)){
                echo 'Такого продукта нет';
                exit();
            }
            $title = "Акция &laquo;" . $product['product_name'] . "&raquo;";
            $header = new Header($title);
            include_once('./views/products/product_add_sale.php');
            return;
		}
		
		public function add() {
			
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
				$product = [
					'product_name' => $product_name,
					'product_price' => $product_price,
					'product_category_id' => $product_category_id,
					'product_desc' => $product_desc,
					'product_icon' => $path_to_img_cut
				];
				$newProduct = $productModel->AddProduct($product);
				
				header('Location: ' . SITE_ROOT . 'products/list');
			}
	
		}	$title = 'Добавить продукт';
			$header = new Header();
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
				$title = $product['product_name'];
				$header = new Header($title);
				include_once('./views/products/product_view.php');
				// echo 'Вызван action с параметром id = ' . $id;
			}
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

					if(empty($errors)){
						$productModel = new Product();
						$product = [
							'product_name' => $product_name,
							'product_price' => $product_price,
							'product_category_id' => $product_category_id,
							'product_desc' => $product_desc,
							'product_id' => $id,
							'product_icon' => $path_to_img_cut
						];
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
					$header = new Header($title);
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

		public function deleteSale($parameters = []){
			$id = $parameters[0];
			if(!$id){
				return;
			}
			else{
				$productModel = new Product();
				$product = $productModel->getProductById($id);
				$productModel->deleteSaleProduct($id, $product);
				header('Location: ' . SITE_ROOT . 'products/sale');
			}	
		}
		public function found(){
			$title = 'Поиск';
			$header = new Header($title);
			
			if (isset($_POST['search'])){
				$helper = new Helper();
				$anyWords = $helper->SanitizeString($_POST['search']);
				$productModel = new Product();
				$products = $productModel->getAllfound($anyWords);
				$userId = $_COOKIE['user_id'];
				$wishList = $productModel-> getWishById($userId);
				$countProduct = count($products);
				include_once('./views/products/product_found.php');	
			}
			return;
		}
		public function wish(){
			$title = 'Избранное';
			$header = new Header($title);
			$userId = $_COOKIE['user_id'];
			$productModel = new Product();
			$products = $productModel->getAllWish($userId);
			include_once('./views/products/product_wish.php');
			
				
			return;
		}
		

		public function wishAdd($parameters=[]){
			$productId = $parameters[0];
			if(!$productId){
				echo 'Некорректный id';
			}
			$userId = $_COOKIE['user_id'];
			$productModel = new Product();
			$products = $productModel->wishaAddorDelete($userId, $productId);
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			return;
		}
			
		
	}