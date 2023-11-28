<?php
session_start();
include "../modal/pdo.php";
include "../modal/product.php";
include "../modal/account-view.php";
include "../views/home/header.php";
$listPro = loadProduct();
$listCate = loadCategories();
$listRecent = loadPrByDate();
if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        case 'loadCate':
        $cateId = $_GET['id'];
        $loadProInCate = loadCate($cateId);
        include '../views/product/proInCate.php';
        break;
        case 'search':
       if(isset($_POST['search'])){
        $search = $_POST['search'];
        $searchResults = searchProduct($search);
       }
        include '../views/product/search.php';
        break;
        default: 
        include '../views/product/shop-grid.php';
        break;
    }
}else{
    include '../views/product/shop-grid.php';
}
include "../views/home/footer.php";