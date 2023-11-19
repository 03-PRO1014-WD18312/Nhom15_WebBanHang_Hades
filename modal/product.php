<?php 
    function loadAll_Product (){
        $sql = "SELECT * FROM `product` ORDER BY `product_id` DESC LIMIT 10";
        $listCategory = pdo_query($sql);
        return $listCategory;
    }
?>