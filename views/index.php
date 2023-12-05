<?php
session_start();
    include "../modal/pdo.php";
    include "../modal/product.php";
    include "../modal/account-view.php";
    $listPro = loadProduct();
    $listCate = loadCategories();
    // $listSale = loadOnSale();
    // $loadTopView = loadTopView();
    include('home/header.php');
    include('home/slider.php');
    // include('home/small-banner.php');
    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch ($act) {
        default: 
        include('home/product-area.php');
        include('home/product-popular.php');
        // include('home/shop-hightlight.php');
        break;
    }
}else{
    include('home/product-area.php');
    include('home/product-popular.php');
    // include('home/shop-hightlight.php');
    include('home/footer.php');
}
