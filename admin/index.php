<?php 
    include_once("header.php");
    include_once("../modal/pdo.php");
    include_once("../modal/catecory.php");
    include_once("../modal/product.php");
    $listCategory = loadAll_Category ();
    $error = [];
    $listCategory=loadAll_Category();
    if(isset($_GET["act"])){
        $act = $_GET["act"];
        switch ($act) {
            case "category":
                include "category/list.php";
                break;
            case "add_category":
                $pattern = " /[a-z'']/ ";
                if(isset($_POST['btn-add'])&&($_POST['btn-add'])){
                    if(($_POST['category_name'] =="" )){
                        $error[] ="Không được để trống";
                        
                    }
                    if(!preg_match($pattern, $_POST['category_name'])){
                        $error[]= "Không được chứa ký tự đặc biệt";
                    }else{
                        $category_name = $_POST['category_name'];
                    insert_category($category_name);
                    $check = "Thêm mới thành công";
                    }
                }
                
                include "category/add.php";
                break;
                case "delete_category": 
                    delete_category($_GET['id']);
                    include "category/list.php";                
                    break;
                case "product":
                    $listProduct = loadAll_Product ();
                    include "product/list.php";
                    break;
                case "add_product":

                    if(isset($_POST["btn-add"]) && $_POST["btn-add"]){
                        $product_name= $_POST["product_name"];
                        $product_price= $_POST["product_price"];
                        $discout = $_POST["discout"];
                        $product_qty = $_POST["product_pty"];
                        $product_image = $_POST["product_image"];
                        $image_dt1 = $_POST["image_dt1"];
                        $image_dt2 = $_POST["image_dt2"];
                        $image_dt3 = $_POST["image_dt3"];
                        $category = $_POST["category"];
                        checkError($product_name,$product_price,$discout,$product_pty);

                    }
                    include "product/add.php";
                    break;
        }
    }






    
    include_once("footer.php");
?>