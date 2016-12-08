<?php

include_once ROOT.'/models/News.php';

/**
 *
 */
class NewsController
{

    public function actionIndex()
    {
        // echo '<br><br>Список новостей';
        $newsList = array();
        $newsList = News::getNewsList();

        echo '<pre>';
        print_r($newsList);
        echo '</pre>';
        return true;
    }

    public function actionView($category, $id) {
        if($id) {
            $newsItem = News::getNewsItemById($id);
        }
        // echo '<br><br>Просмотр одной новости';
        // echo '<br>'.$category;
        // echo '<br>'.$id;
        return true;
    }
}


 ?>
