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
        $title = 'Категории';
        $header = new Header($title);
        $categoryModel = new Category();
        include_once('./views/categories/category.php');
        $add = $categoryModel->addCategory();
        return;
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
            include_once('./views/categories/category_view.php');
        }
        return;
    }
}