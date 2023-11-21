<?php
    function insert_category ($category_name){
        $sql = "INSERT INTO `category` (`category_name`) VALUE ('$category_name')";
        pdo_execute($sql);

    }
    function updateCategory ($id,$categoryName){
        $sql = "UPDATE `category` SET `category_name` = '$categoryName' WHERE `category`.`id` = $id";
        pdo_execute($sql);

    }
    function loadAll_Category (){
        $sql = "SELECT * FROM `category` ORDER BY `id` DESC";
        $listCategory = pdo_query($sql);
        return $listCategory;
    }
    function loadOne_Category ($id){
        $sql = "SELECT * FROM `category` WHERE `category`.`id`=".$id;
        $listCategory = pdo_query_one($sql);
        return $listCategory;
    }

    function delete_category ($id){
        $sql = "DELETE FROM `category` WHERE `category`.`id`=".$id;
        pdo_execute($sql);
    }
?>