<?php
    function loadAllAccount () {
        $sql = "SELECT * FROM `account` ORDER BY `id` DESC";
        $listUser = pdo_query($sql);
        return $listUser;
    }
?>