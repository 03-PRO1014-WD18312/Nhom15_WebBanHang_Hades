<?php
session_start();
include "../modal/pdo.php";
include "../modal/product.php";
include "../modal/account-view.php";
$listCart = loadCart();
include '../views/home/header.php';
if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        default: 
        include '../views/cart/shopping-cart.php';
        break;
    }
}else{
    include '../views/cart/shopping-cart.php';
}
include('../views/home/footer.php');