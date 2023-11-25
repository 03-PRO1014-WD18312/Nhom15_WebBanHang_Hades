<?php
 include "../modal/pdo.php";
 include "../modal/product.php";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  // Xoá sản phẩm
 if (isset($_POST['remove'])) {
  $id = $_POST['remove'];
  $rootQty = $_POST['rootQty'];
  $productId = $_POST['id'];
  updateCartQuantity($productId,$rootQty);
  deleteCart($id);
}
}