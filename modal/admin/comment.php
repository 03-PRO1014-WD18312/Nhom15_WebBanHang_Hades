<?php
    function loadAllCmt () {
        $sql = "SELECT * FROM `review_table` ORDER BY `review_id` DESC";
        $listComment = pdo_query($sql);
        return $listComment;
    }
?>