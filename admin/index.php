<?php 
    include_once("header.php");
    include_once("../modal/pdo.php");
    include_once("../modal/catecory.php");
    include_once("../modal/product.php");
    if(isset($_GET["act"])){
        $act = $_GET["act"];
        switch ($act) {
            case "dm":
                $listCategory = loadAll_Category ();
                include "danhmuc/list.php";
                break;
            case "adddm":
                
                if(isset($_POST['btn-add'])&&($_POST['btn-add'])){
                    $category_name = $_POST['category_name'];
                    insert_category($category_name);
                    $check = "Thêm mới thành công";
                    
                
                }
                echo"<pre>";
                print_r($_POST['btn-add']);
                echo '</pre>';
                include "danhmuc/add.php";
                break;
            case "sp":
                $listProduct = loadAll_Product ();
                include "sanpham/list.php";
                break;
                
        }
    }






    
    include_once("footer.php");
?>