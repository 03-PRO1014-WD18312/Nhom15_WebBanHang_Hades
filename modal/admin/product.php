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
    function updateProduct ($id,$productName,$productPrice, $disCount,$productQty,$productImage,$imageDt1, $imageDt2, $imageDt3,$category,$des,$createdAt){
        // $images = [$productImage,$imageDt1,$imageDt2,$imageDt3];
        // foreach($images as $img){
        //     if($img!=""){
        //         $sql = "UPDATE `product` SET `product_name`='$productName',`product_price`='$productPrice',`discount`='$disCount',`product_qty`='$productQty',
        //         `product_image`='$productImage',`image_dt1`='$imageDt1',`image_dt2`='$imageDt2',`image_dt3`='$imageDt3',`category`='$category',`des`='$des',`created_at`='$createdAt' WHERE `product_id` = '$id'";
        //     }
            
        // }
        $sql = "UPDATE `product` SET `product_name`='$productName',`product_price`='$productPrice',`discount`='$disCount',`product_qty`='$productQty',";

        if($productImage!=""){
                    $sql .= " `product_image`='$productImage',";
        }if($imageDt1!=""){
                    $sql .= " `image_dt1`='$imageDt1',";
        }if($imageDt2!=""){
                    $sql .= " `image_dt2`='$imageDt2',";
        }if($imageDt3!=""){
                    $sql .= " `image_dt3`='$imageDt3',";
        }
        $sql .= " `category`='$category',`des`='$des',`created_at`='$createdAt' WHERE `product_id` = '$id'";

        pdo_execute($sql);
    }
?>