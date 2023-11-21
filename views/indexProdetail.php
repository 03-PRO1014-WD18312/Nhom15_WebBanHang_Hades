<?php
session_start();
include "../modal/pdo.php";
include "../modal/product.php";
include "../modal/account-view.php";
include '../views/home/header.php';
if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        case 'loadOne':
           if(isset($_GET['id']) && $_GET['id'] >0 && is_numeric($_GET['id'])&&$_GET['id'] !== ""){
            $proOne = loadOneProduct($_GET['id']);
            $cateName = $_GET['name'];
            if($proOne){
                include "../views/product-detail/product-detail.php";
            }else{
                echo "<h1>ID not found</h1>";
            }
           }else{
            echo "<h1>Product Detail fail to load</h1>";
           }
           
        break;
        default: 
        include "../views/product-detail/product-detail.php";
        break;
    }
}else{
    include "../views/product-detail/product-detail.php";
}
include "../views/home/footer.php";