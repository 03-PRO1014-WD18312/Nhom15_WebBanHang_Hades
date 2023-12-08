<?php
session_start();
 include "../../modal/pdo.php";
 include "../../modal/product.php";
if(!empty($_GET))
{
    $_SESSION['status'] = "Paid"; 
	$_SESSION['payer_id'] = $_GET['PayerID']; 
	date_default_timezone_set('Asia/Kolkata');	
    $listCart = loadCart();
    $totalAmount = 0;
    $totalQty =0;
	foreach($listCart as $cart){
        $sql="insert into payments (payer_id,item_name,total_price,amount,status,created_at) values ('".$_SESSION['payer_id']."','".$cart['product_name']."','".$cart['qty'] * $cart['cart_price']."','".$cart['qty']."','". $_SESSION['status']."','".date('y-m-d h:i:s')."')";
        $listPay = pdo_query($sql);
        $totalAmount+=$cart['qty'] * $cart['cart_price'];
        $totalQty+=$cart['qty'];
        deleteAll();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Success</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
<div class="alert alert-success">
  <strong>Success!</strong> Payment has been successful
</div>
          
<table class="table table-bordered">
    <tbody>
      <tr>
        <td>Transaction Id</td>
        <td><?php echo $_SESSION['payer_id']?></td>
      </tr>
      <tr>
      <td>Product Name</td>
      <td><?php echo implode(', ', array_column($_SESSION['productName'], 'product_name')); ?></td>
      </tr>
      <tr>
        <td>Amount</td>
        <td><?php echo $totalQty;?></td>
      </tr>
      <tr>
        <td>Total</td>
        <td><?php echo number_format($totalAmount);?>VNĐ</td>
      </tr>
	    <tr>
        <td>Payment Status</td>
        <td><?php echo $_SESSION['status'];?></td>
      </tr>
	  
    </tbody>
  </table>
  <a href="../index.php">Continue to shopping</a>
</div>
</body>
</html>
