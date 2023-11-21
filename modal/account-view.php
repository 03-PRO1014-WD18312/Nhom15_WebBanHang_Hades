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