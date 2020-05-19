<?php

class CategoriesController{

    public function index() {
        $title = 'Категории';
        $categoryModel = new Category();
        $categories = $categoryModel->getAll();
        include_once('./views/categories/category.php');
        return;
    }

    public function add() {
        $title = 'Категории';
        $categoryModel = new Category();
        include_once('./views/categories/category.php');
        $add = $categoryModel->addCategory();
        return;
    }

//Переделать. Оставить только название категории, количество товаров. Кнопку редактировать и удалить. и вернуться 
    public function view($parameters=[]){
        $id = $parameters[0];
        if(!$id){
            echo 'Некорректный id';
        }
        else{
            $categoryModel = new Category();
            $category = $categoryModel->getCategoryById($id);
            print_r($category);
            $title = $category['category_name'];
            include_once('./views/categories/category_view.php');
        }
        return;
    }
}