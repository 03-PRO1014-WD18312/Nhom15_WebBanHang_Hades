<?php
    function insert_category ($category_name){
        $sql = "INSERT INTO `category` (`category_name`) VALUE ('$category_name')";
        pdo_execute($sql);

    }
    function loadAll_Category (){
        $sql = "SELECT * FROM `category` ORDER BY `id` DESC";
        $listCategory = pdo_query($sql);
        return $listCategory;
    }
?>