<?php
session_start();
include "../modal/pdo.php";
include "../modal/product.php";
include "../modal/account-view.php";
include '../views/home/header.php';
if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        case 'update':
            if(isset($_POST['update'])){
                $fullName = $_POST['fullName'];
                $tel = $_POST['phone'];
                $email =$_POST['email'];
                $address = $_POST['address'];
                $id = $_POST['idUser'];
                $oldImage = $_POST['oldImage'];
                $image = $_FILES['image']['name'];
                if($image !==''){
                 $tempImage = $_FILES['image']['tmp_name'];
                 move_uploaded_file($tempImage, '../upload/' .$image);
                }else{
                    $image = $oldImage;
                }
                updateAccount($fullName, $image, $email, $address,$tel,$id);
                $_SESSION['avatar'] = $image;
                $_SESSION['noticeUpdate'] = "Account updated successfully";
            }
            include '../views/account-detail/account-info.php';
        break;
        case 'billing':
        $listOrders = showHistoryOrders($_SESSION['username']);
        include "../views/account-detail/account-billing.php";
        break;
        case 'billDetail':
        $listDetails = showOrderDetails(urldecode($_GET['orderId']) );
        include "../views/account-detail/billing-detail.php";
        break;
        case 'listRating':
        $listRating = loadRating($_SESSION['user_id']);
        include "../views/account-detail/account-rating.php";
        break;
        default: 
        include '../views/account-detail/account-info.php';
        break;
    }
}else{
    include '../views/account-detail/account-info.php';
}
include('../views/home/footer.php');