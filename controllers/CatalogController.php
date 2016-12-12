<?php


include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';
include_once ROOT.'/components/Pagination.php';

/**
 *
 */
class CatalogController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(12);

        require_once(ROOT.'/views/catalog/index.php');

        return true;
    }

    // public function actionCategory($categoryId)
    // {
    //     $categories = array();
    //     $categories = Category::getCategoriesList();
    //
    //     $categoryProducts = array();
    //     $categoryProducts = Product::getProductsListByCategory($categoryId);
    //
    //     require_once(ROOT.'/views/catalog/category.php');
    //
    //     return true;
    // }

    public function actionCategory($categoryId)
    {
        // echo 'Category: '.$categoryId[0];
        // echo '<br>Page: '.$categoryId[1].' ';
        // print_r($page);
        // $categoryId[1] = 1;
        if(!isset($categoryId[1])) {
            $categoryId[1] = 1;
        }

        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId);

        $total = Product::getTotalProductsInCategory($categoryId);

        $pagination = new Pagination($total, $categoryId[1], Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT.'/views/catalog/category.php');

        return true;
        # code...
    }
}


 ?>
