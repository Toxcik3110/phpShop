<?php
    return array(
        // 'news/([0-9]+)' => 'news/view',
        // 'news/([0-9]+)' => 'news/view/$1',
        // 'news' => 'news/index',
        // 'news' => 'news/index',
        // 'products' => 'product/list',
        'shop' => 'site/index',
        'product/([0-9]+)' => 'product/view/$1',
        'catalog/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
        'catalog/([0-9]+)' => 'catalog/category/$1',
        'catalog' => 'catalog/index',
        'user/register' => 'user/register',
        'user/login' => 'user/login',
        'user/logout' => 'user/logout',
        'cabinet' => 'cabinet/index',
        '' => 'site/index'
    );
 ?>
