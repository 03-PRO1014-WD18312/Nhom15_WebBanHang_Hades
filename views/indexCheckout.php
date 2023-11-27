<?php
session_start();
include "../modal/pdo.php";
include "../modal/product.php";
include "../modal/account-view.php";
include "../views/home/header.php";
if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        case 'order':
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order'])){
                $fullName = $_POST['name'];
                $email = $_POST['email'];
                $phoneNumber = $_POST['phone'];
                $address = $_POST['address'];
                order($fullName,$email,$phoneNumber,$address);              
        }
        deleteAll();
        include '../views/checkput/checkout.php';
        break;
        default: 
        include '../views/checkput/checkout.php';
        break;
    }
}else{
    include '../views/checkput/checkout.php';
}
include "../views/home/footer.php";