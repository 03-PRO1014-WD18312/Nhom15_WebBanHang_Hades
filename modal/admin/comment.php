<?php
function loadAllCmt() {
    $sql = "SELECT review_table.*, account.username, product.product_name 
            FROM review_table 
            JOIN account ON review_table.user_id = account.id 
            JOIN product ON review_table.product_id = product.product_id
            ORDER BY review_table.review_id DESC";
            $listComment = pdo_query($sql);
            return $listComment;
}
function deleteCmt($id){
    $sql = "DELETE FROM review_table WHERE review_id ='$id'";
    pdo_execute($sql);
}
?>
