<?php

class CategoriesController{

    public function index() {
        $title = 'Категории';
        $header = new Header($title);
        $categoryModel = new Category();
        $categories = $categoryModel->getAll();
        include_once('./views/categories/category.php');
        return;
    }

    public function add() {
        // $categoryModel = new Category();
        if(isset($_GET['category_name'])){
            $category_name = $_GET['category_name'];
            $db = DB::connect();
            $query = 'INSERT INTO `categories` (category_name) VALUES (:category_name)';
            $sth = $db->prepare($query);
            $result = $sth-> execute([
                'category_name' => $category_name
                ]);
            }
        // $add = $categoryModel->addCategory();
        
    }

    public function view($parameters=[]){
        $id = $parameters[0];
        if(!$id){
            echo 'Некорректный id';
        }
        else{
            //Получили категорию. Подключили и передали имя для хэдера.
            $categoryModel = new Category();
            $category = $categoryModel->getCategoryById($id);
            $title = $category['category_name'];
            $header = new Header($title);
            $productModel = new Product();
            $products = $productModel->getProductByCategory($id);
        
			if(isset($_COOKIE['user_id'])){
				$userId = $_COOKIE['user_id'];
				$wishList = $productModel-> getWishById($userId);
			}
            include_once('./views/categories/category_view.php');
        }
        return;
    }
}