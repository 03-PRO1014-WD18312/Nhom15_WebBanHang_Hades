<?php 
     include_once("../modal/pdo.php");
    include_once("../modal/catecory.php");
    include_once("../modal/admin/account.php");
    include_once("../modal/admin/comment.php");
    include_once("../modal/admin/product.php");
    include_once("../modal/admin/comment.php");
    include_once("../modal/admin/global.php");
    
    $error = [];
    
    $listCategory = loadAll_Category ();
    $listProduct=loadAll_Product();
    $pattern = "/[0-9]/ ";
    include_once("header.php");
  
    
    if(isset($_GET["act"])){
        $act = $_GET["act"];
        switch ($act) {
            case "category":
                include "category/list.php";
                break;
            case "add_category":
                if(isset($_POST['btn-add'])&&($_POST['btn-add'])){
                    $categoryName = $_POST['category_name'];

                    if(($categoryName =="")){
                    
                        $error[] ="Không được để trống";                      
                    }
                    if (validate_alpha($categoryName)) {
                        $error[] = "Tên chỉ chứa ký tự chữ.";
                    }
                    else{
                    insert_category($categoryName);
                    $check = "ADDED SUCCESSFULLY";
                    }
                }
                
                include "category/add.php";
                break;
            case "delete_category": 
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    deleteCategory_from_product ($id);
                    deleteCategory($id);

                }
                
                $listCategory = loadAll_Category ();
                include "category/list.php";                
                break;  
            case "edit_category":
                if(isset($_GET['id'])&&($_GET['id']>0)){           
                    $id = $_GET['id'];
                    $categoryOne = loadOne_Category($id);
                }
                include "category/update.php";                
                break;
            case "update_category": 
                if(isset($_POST['btnUpdate']) && ($_POST['btnUpdate'])){
                    $id = $_POST['id'];
                    $categoryName = $_POST['category_name'];
                    if(($categoryName =="")){
                    
                        $error[] ="Không được để trống";                      
                    }
                    if (validate_alpha($categoryName)) {
                        $error[] = "Tên chỉ chứa ký tự chữ.";
                    }
                    else{
                    updateCategory ($id,$categoryName);
                    $check = "UPDATE SUCCESS";
                }
                $categoryOne = loadOne_Category($id);
                
                }
                include "category/update.php";                
                break;              
            case "product":
                // if(isset($_POST['btnUpdate']) && ($_POST['btnUpdate'])){
                // }
                $categoryFilter =1;
                $listProduct = loadAll_Product ();
                include "product/list.php";
                break;
            case "delete_product": 
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    
                    delete_product($_GET['id']);
                }
                $listProduct = loadAll_Product ();
                include "product/list.php";                
                break;    
            case "add_product":
                if(isset($_POST["btnAdd"]) && ($_POST["btnAdd"])){
                    $productName= $_POST["productName"];
                    $productPrice= $_POST["productPrice"];
                    $disCount = $_POST["discount"];
                    $productQty = $_POST["productQty"];
                    // upload file
                    $fileName = $_FILES["productImage"]["name"];
                    $targetDir = "../images/";
                    $targetFile = $targetDir . basename($_FILES['productImage']['name']);
                    $productImage = $fileName;
                    move_uploaded_file($_FILES['productImage']['tmp_name'], $targetFile);
                    // upload file imageDt1
                    $fileNameDt1 = $_FILES['imageDt1']['name'];
                    $targetDir = "../images/";
                    $targetFile = $targetDir . basename($_FILES['imageDt1']['name']);
                    $imageDt1 = $fileNameDt1;
                    move_uploaded_file($_FILES['imageDt1']['tmp_name'], $targetFile);
                    // upload file imageDt2
                    $fileNameDt2 = $_FILES['imageDt2']['name'];
                    $targetDir = "../images/";
                    $targetFile = $targetDir . basename($_FILES['imageDt2']['name']);
                    $imageDt2 = $fileNameDt2;
                    move_uploaded_file($_FILES['imageDt2']['tmp_name'], $targetFile);
                    // upload file imageDt3
                    $fileNameDt3 = $_FILES['imageDt3']['name'];
                    $targetDir = "../images/";
                    $targetFile = $targetDir . basename($_FILES['imageDt3']['name']);
                    $imageDt3 = $fileNameDt3;
                    move_uploaded_file($_FILES['imageDt3']['tmp_name'], $targetFile);
                    $category = $_POST["category"];
                    $des = $_POST["des"];
                    $createdAt = date("d-m-Y");
                    if(empty($productName)){
                        $error['productName'] = "Yêu cầu nhập vào tên sản phẩm";
                    }
                    if(empty($productPrice)){
                        $error['productPrice'] = "Yêu cầu nhập vào giá sản phẩm";
                    } else if(!validate_numeric_length($productPrice)){
                        $error['productPrice'] = "Giá hợp lệ chỉ chứa ký tự số và có độ dài lớn hơn 4 ký tự";
                    }
                    // if(empty($disCount)){
                    //     $error['discount'] = "Yêu cầu nhập vào giá sản phẩm";
                    // }
                    if(empty($productQty)){
                        $error['productQty'] = "Yêu cầu nhập vào số lượng sản phẩm";
                    }
                    // checkError($productName,$productPrice,$disCount,$productQty);
                    // echo "<pre>";
                    // print_r($error);
                    //  echo "</pre>";
                    if(empty($error)){

                        insert_product($productName,$productPrice, $disCount,$productQty,$productImage,$imageDt1, $imageDt2, $imageDt3,$category,$des,$createdAt);
                        $check = "ADDED SUCCESSFULLY";
                    } else{
                        echo "Fail";
                    }


                    
                }
                include "product/add.php";
                break;
            case "edit_product":
                if(isset($_GET['id'])&&($_GET['id']>0)){  
                    $id = $_GET['id'];
                    $productOne = loadOneProduct ($id);
                }
                // var_dump($productOne);

                $listCategory = loadAll_Category();
                include "product/update.php";                
                break;    
            case "update_product":
                if(isset($_POST['btnUpdate'])&&($_POST['btnUpdate']>0)){ 
                    $id = $_POST['id'];
                    $productName= $_POST["productName"];
                    $productPrice= $_POST["productPrice"];
                    $disCount = $_POST["discount"];
                    $productQty = $_POST["productQty"];
                    // upload file
                    $fileName = $_FILES["productImage"]["name"];
                    $targetDir = "../images/";
                    $targetFile = $targetDir . basename($_FILES['productImage']['name']);
                    $productImage = $fileName;
                    move_uploaded_file($_FILES['productImage']['tmp_name'], $targetFile);
                    // upload file imageDt1
                    $fileNameDt1 = $_FILES['imageDt1']['name'];
                    $targetDir = "../images/";
                    $targetFile = $targetDir . basename($_FILES['imageDt1']['name']);
                    $imageDt1 = $fileNameDt1;
                    move_uploaded_file($_FILES['imageDt1']['tmp_name'], $targetFile);
                    // upload file imageDt2
                    $fileNameDt2 = $_FILES['imageDt2']['name'];
                    $targetDir = "../images/";
                    $targetFile = $targetDir . basename($_FILES['imageDt2']['name']);
                    $imageDt2 = $fileNameDt2;
                    move_uploaded_file($_FILES['imageDt2']['tmp_name'], $targetFile);
                    // upload file imageDt3
                    $fileNameDt3 = $_FILES['imageDt3']['name'];
                    $targetDir = "../images/";
                    $targetFile = $targetDir . basename($_FILES['imageDt3']['name']);
                    $imageDt3 = $fileNameDt3;
                    move_uploaded_file($_FILES['imageDt3']['tmp_name'], $targetFile);
                    $category = $_POST["category"];
                    $des = $_POST["des"];
                    $createdAt = date("d-m-Y");
                    // checkError($productName,$productPrice,$discout,$productQty);
                    if(empty($productName)){
                        $error['productName'] = "Yêu cầu nhập vào tên sản phẩm";
                    }
                    if(empty($productPrice)){
                        $error['productPrice'] = "Yêu cầu nhập vào giá sản phẩm";
                    } else if(!validate_numeric_length($productPrice)){
                        $error['productPrice'] = "Giá hợp lệ chỉ chứa ký tự số và có độ dài lớn hơn 4 ký tự";
                    }
                    if(($disCount>100)){
                        $error['discount'] = "Giảm giá dưới 100%    ";
                    }
                    if(empty($productQty)){
                        $error['productQty'] = "Yêu cầu nhập vào số lượng sản phẩm";
                    }
                    // echo "<pre>";
                    // print_r($error);
                    //  echo "</pre>";
                    if(empty($error)){

                        updateProduct ($id,$productName,$productPrice, $disCount,$productQty,$productImage,$imageDt1, $imageDt2, $imageDt3,$category,$des,$createdAt);
                        $check = "UPDATE SUCCESS";
                    } else{
                        echo "Fail";
                    }
                    
                    $productOne = loadOneProduct($id);
                    
                }
                include "product/update.php";                
                break;    
            case "comment":
                $loadAllCmt = loadAllCmt (); 
                include "comment/list.php";
                break;
            case "user":
                $loadUser = loadAllAccount ();
                include "user/list.php";
                break; 
            case "delete_user":
                if(isset($_GET['id']) && ($_GET['id'])){
                    $id = $_GET['id'];
                    deleteAccount($id);
                }
                $loadUser = loadAllAccount ();
                include "user/list.php";
                break;  
            case "edit_user":
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $loadUser = loadOneAccount ($id);

                }
                include "user/role.php";
                break;
            case "role":
                if(isset($_POST['btnRole'])){
                    $id = $_POST['id'];
                    $role1 = $_POST['role'];
                    if($role1!=""){
                        $check = "UPDATE SUCCESS";
                    }
                }
                updateRole ($id,$role1);
                $loadUser = loadOneAccount ($id);
                include "user/role.php";    
                break;
            case "category_filter":
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $categoryFilter=0;
                    // echo "<pre>";
                    // print_r($listPro);
                    // echo "</pre>";
                }
                $listProduct = loadAllProForCate ($id);
                include "product/list.php";
                break;                  
        }
    }






    
    include_once("footer.php");
?>