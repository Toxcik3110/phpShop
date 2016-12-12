<?php

class Product {

    const SHOW_BY_DEFAULT = 3;

    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT) {
        $count = intval($count);

        $db = Db::getConnection();

        $productsList = array();
        $result = $db->query('SELECT id, name, price, image, is_new FROM product WHERE status = "1" ORDER BY id DESC LIMIT '.$count);
        $i = 0;
        while($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $productsList;
    }

    public static function getProductsListByCategory($categoryId) {
        // if($categoryId) {

            $db = Db::getConnection();
            // print_r($categoryId);
            $doffset = 0;
            // echo $categoryId[1];
            // print_r($categoryId);
            $doffset = ($categoryId[1] - 1) * self::SHOW_BY_DEFAULT;
            $products = array();
            // print_r($categoryId);
            $result = $db->query("SELECT id, name, price, image, is_new FROM product "
            . "WHERE status = '1' AND category_id = '$categoryId[0]' "
            . "ORDER BY id DESC "
            . "LIMIT ".self::SHOW_BY_DEFAULT
            . " OFFSET ".$doffset);
            $i = 0;
            while($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }

            return $products;
            // }
    }

    public static function getTotalProductsInCategory($categoryId) {
        if($categoryId) {

            $db = Db::getConnection();
            // print_r($categoryId);
            $result = $db->query("SELECT count(id) FROM product "
            . "WHERE status = '1' AND category_id = '$categoryId[0]'");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $row = $result->fetch();
            // print_r($row);
            return $row['count(id)'];
        }
    }

    public static function getProductById($id) {

        $id = intval($id);

        if($id) {

            $db = Db::getConnection();
            // echo $id;
            $result = $db->query("SELECT * FROM product WHERE id = ".$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }
}


 ?>
