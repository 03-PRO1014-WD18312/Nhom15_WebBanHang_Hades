<?php
session_start();
include "../modal/pdo.php";
include "../modal/product.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $itemsToUpdate = json_decode($_POST["cartItems"], true);
    foreach ($itemsToUpdate as $item) {
        $productId = $item['productId'];
        $productQuantity = $item['productQuantity'];
        $productName = $item['productName'];
        $productImage = $item['productImage'];
        $productPrice = $item['productPrice'];
        $productTotalPrice = $item['productTotalPrice'];
        $newTotalProduct = $item['newTotalProduct'];
        // Update all attributes for the product in the database
        updateCart($productName,$productPrice,$productImage, $productQuantity, $productTotalPrice,$productId);
        updateCartQuantity($productId,$newTotalProduct);
    }
}