<?php
    function loadAllAccount () {
        $sql = "SELECT * FROM `account` ORDER BY `id` DESC";
        $listUser = pdo_query($sql);
        return $listUser;
    }
    function deleteAccount ($id){
        $sql = "DELETE FROM `account` WHERE `account`.`id`=$id";
        pdo_execute($sql);  
    }

?>