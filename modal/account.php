<?php
    function loadAllAccount () {
        $sql = "SELECT * FROM `account` ORDER BY `id` DESC";
        pdo_execute($sql);
    }
?>