<?php
 include "../modal/pdo.php";
 include "../modal/product.php";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  $items = json_decode($_POST['items'], true);
  // Xoá sản phẩm
  foreach ($items as $item) {
    // Sử dụng cả qty và cartQty để xóa
    updateCartQuantity($item['id'], $item['qty'] + $item['cartQty']);  
    deleteAll();
  }
 }