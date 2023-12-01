<?php
function showAccount($id){
    $sql = "select * from account where id = '$id'";
    $showAccount = pdo_query($sql);
    return $showAccount;
}
function updateAccount($fullName,$image,$email,$address,$tel,$id){
$sql = "update account set ho_ten = '$fullName',image='$image',email='$email',address='$address',tel='$tel' where id = '$id'";
pdo_execute($sql);
}
function showHistoryOrders($username){
    $sql = "SELECT orders.*, customer.customer_name
            FROM orders
            JOIN customer ON orders.customer_id = customer.customer_id
            WHERE customer.customer_name = '$username'";
            $listOrders = pdo_query($sql);
            return $listOrders;
}
function showOrderDetails($orderId) {
    $sql = "SELECT * FROM order_detail 
            JOIN orders ON order_detail.order_id = orders.order_id
            WHERE order_detail.order_id = '$orderId'";
    $listDetails = pdo_query($sql);  
    return $listDetails;
}


