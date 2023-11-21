<?php 
    function loadAll_Product (){
        $sql = "SELECT * FROM `product` ORDER BY `product_id` DESC LIMIT 10";
        $listCategory = pdo_query($sql);
        return $listCategory;
    }
    function checkError ($productName,$productPrice,$discout,$productQty){
  
    }
    function insert_product($productName,$productPrice, $disCount,$productQty,$productImage,$imageDt1, $imageDt2, $imageDt3,$category,$des,$createdAt){
        $sql = "INSERT INTO `product` (`product_name`,`product_price`,`discount`,`product_qty`,`product_image`,`image_dt1`,`image_dt2`,`image_dt3`,`category`,`des`,`created_at`) 
                VALUES ('$productName','$productPrice','$disCount','$productQty','$productImage','$imageDt1','$imageDt2','$imageDt3','$category','$des','$createdAt')";
        pdo_execute($sql);
    }
    function delete_product ($id){
        $sql = "DELETE FROM `product` WHERE `product`.`product_id`=".$id;
        pdo_execute($sql);
    }
    function loadOneProduct ($id) {
        $sql = "SELECT * FROM `product` WHERE `product`.`product_id`=$id";
        $loadOneProduct = pdo_query_one($sql);
        return $loadOneProduct;
    }
?>