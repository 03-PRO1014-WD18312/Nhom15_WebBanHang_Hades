<?php 
function validate_numeric_length($string) {
    if (ctype_digit($string) && strlen($string) > 4) {
        return true;
    } else {
        return false;
    }
}
function validate_positive_numeric($string) {
        if (is_numeric($string) && $string > 0) {
            return true;
        } else {
        return false;
    }
}
function validate_alpha($string) {
    if (ctype_alpha($string)) {
        return false;
    } else {
        return true;
    }
}
function showOrders() {
    $sql = "SELECT orders.*, customer.customer_name FROM orders INNER JOIN customer ON orders.customer_id = customer.customer_id";
    $listOrders = pdo_query($sql);
    return $listOrders;
}
function updateDeliStatus ($id,$deli_stat){
    $sql = "UPDATE `orders` SET `deli_status` = '$deli_stat' WHERE `orders`.`order_id` = '$id'";
    pdo_execute($sql);
}
function loadOneOrder($order_id){
    $sql = "SELECT * FROM orders WHERE order_id ='$order_id'";
    $loadOne = pdo_query($sql);
    return $loadOne;
}
?>