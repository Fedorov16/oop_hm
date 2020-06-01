<?php

Class News
{
    public function getAllNews(){

        $db = DB::connect();
        $query = (new Select('news'))
        ->where('WHERE `news_is_deleted` = 0')
        ->build();
        $getAllNews = $db->query($query);
        $result = $getAllNews->fetchAll();
        return $result;
    }

    public function AddNews(){
        $db = DB::connect();
        $query =(new InsertInto('news'))
        ->set([ 'news_name' => $_POST['news_name'],
                'news_body' => $_POST['news_body'],
                // 'news_icon' => $_POST['news_icon'],
                ])
        ->build();
        $newNews = $db->query($query);
        
        return;
    }
}