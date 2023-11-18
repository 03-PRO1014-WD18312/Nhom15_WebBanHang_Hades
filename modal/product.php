<?php 
    function loadAll_Product (){
        $sql = "SELECT * FROM `product` ORDER BY `product_id` DESC";
        $listCategory = pdo_query($sql);
        return $listCategory;
    }
?>