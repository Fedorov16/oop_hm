<?php

class NewsController
{
    public function index(){
        $title = 'Новости';
        $header = new Header($title);
        $newsModel = new News();
        $news = $newsModel -> getAllNews();
        include_once('./views/news/news.php');
    }

    public function add(){
        $title = 'Добавить';
        $header = new Header($title);
        
        if(isset($_POST['news_name'])){
            $helper = new Helper();
            $news_name = $helper->SanitizeString($_POST['news_name']);
            $news_body = $helper->SanitizeString($_POST['news_body']);
            $numberDate = Date('n');

            $validation = new Validation();
				$errors = [];
			if($validation->checkLenght($news_name, 2, 255)){
				$errors[] = 'Количество символов для названия не должно быть меньше 3-х'; 
			}
			if($validation->checkLenght($news_body, 2, 3000)){
				$errors[] = 'Количество символов для описания должно быть не меньше 3-х и не более 3000'; 
			}
			if(empty($errors)){
            
                // дописать

            }
        }
        include_once('./views/news/news_add.php');
        return;
    }

}
