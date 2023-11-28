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
    function loadOneAccount ($id) {
        $sql = "SELECT * FROM `account` WHERE `id`=".$id;
        $listUser = pdo_query($sql);
        return $listUser;
    }
    function updateRole ($id,$role){
        $sql = "UPDATE `account` SET `role` = '$role' WHERE `account`.`id` = $id";
        pdo_execute($sql);

    }
?>