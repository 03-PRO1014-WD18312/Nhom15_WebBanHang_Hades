<?php
include "../modal/pdo.php";
include "../modal/product.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product_id = $_POST['productId'];
    $product_name = $_POST['productName'];
    $product_price = floatval($_POST['productPrice']);
    $productImage = $_POST['productImage'];
    $qty = intval($_POST['productQty']);
    $num_pro = $_POST['numberPro'];
    // // Check đầu vào
    // if(!is_numeric($product_id) || !is_numeric($product_name)){
    //   echo "Invalid quantity or price";
    //   exit();
    // }
    $total_price = $product_price * $num_pro;
    $exist_product = checkProduct($product_id);
    if($exist_product){
       if($exist_product['qty'] <$qty){
        $new_qty = $exist_product['qty'] + $num_pro;
        $new_total_price = $product_price * $new_qty;
        updateCart($product_name,$product_price,$productImage,$new_qty,$new_total_price,$product_id);
        updateProductQuantity($product_id,$qty-1);
       }else{
        $message = "Product have maximum price";
        return;
       }
    }else{
        insertCart($product_name,$product_price,$productImage,$num_pro,$total_price,$product_id);
        updateProductQuantity($product_id,$qty-1);
    }
  
}