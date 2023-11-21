<?php 
    // date_default_timezone_set('time_zone');
    date_default_timezone_set('Asia/Ho_Chi_Minh'); // timezone Việt Nam
    // Danh sách time_zone
    $timezone = DateTimeZone::listIdentifiers() ;
    // foreach ($timezone as $item){s
    // echo $item . '<br/>';}

    
    include_once("header.php");
    include_once("../modal/pdo.php");
    include_once("../modal/catecory.php");
    include_once("../modal/admin/product.php");
    $listCategory = loadAll_Category ();
    $error = [];
    $listProduct=loadAll_Product();
    $pattern = " /[a-z'']/ ";
        
    if(isset($_GET["act"])){
        $act = $_GET["act"];
        switch ($act) {
            case "category":
                include "category/list.php";
                break;
            case "add_category":

                if(isset($_POST['btn-add'])&&($_POST['btn-add'])){
                    if(($_POST['category_name'] =="" && !preg_match($pattern, $_POST['category_name']))){
                        $error[] ="Không được để trống";
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
                if(isset($_GET['id'])&&($_GET['id']>0)){

                    delete_category($_GET['id']);

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

                    if(($_POST['category_name'] =="" && !preg_match($pattern, $_POST['category_name']))){

                        $error[] ="Không được để trống";                      
                        $error[]= "Không được chứa ký tự đặc biệt";
                    }
                    else{
                    updateCategory ($id,$categoryName);
                    $check = "Update thành công";
                    // echo $categoryOne['id'];
                    // echo $categoryOne['category_name'];
                    }
                    $categoryOne = loadOne_Category($id);
                
                }
                include "category/update.php";                
                break;              
            case "product":
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

                    
                    // $targetFile = $targetDir . basename($_FILES["productImage"]["name"]); // Đường dẫn file đích
                    // $productImage = $fileName;
                    // // Kiểm tra nếu file đã tồn tại
                    // if (file_exists($targetFile)) {
                    //     echo "File đã tồn tại.";
                    // } else {
                    //     // Di chuyển file đã upload vào thư mục đích
                    //     if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile)) {
                    //         echo "Upload file thành công.";
                    //     } else {
                    //         echo "Có lỗi xảy ra khi upload file.";
                    //     }
                    
                    // upload file
                    $fileName = $_FILES["productImage"]["name"];
                    $targetDir = "../uploads/";
                    $targetFile = $targetDir . basename($_FILES['productImage']['name']);
                    $productImage = $fileName;
                    move_uploaded_file($_FILES['productImage']['tmp_name'], $targetFile);
                    // upload file imageDt1
                    $fileNameDt1 = $_FILES['imageDt1']['name'];
                    $targetDir = "../uploads/";
                    $targetFile = $targetDir . basename($_FILES['imageDt1']['name']);
                    $imageDt1 = $fileNameDt1;
                    move_uploaded_file($_FILES['imageDt1']['tmp_name'], $targetFile);
                    // upload file imageDt2
                    $fileNameDt2 = $_FILES['imageDt2']['name'];
                    $targetDir = "../uploads/";
                    $targetFile = $targetDir . basename($_FILES['imageDt2']['name']);
                    $imageDt2 = $fileNameDt2;
                    move_uploaded_file($_FILES['imageDt2']['tmp_name'], $targetFile);
                    // upload file imageDt3
                    $fileNameDt3 = $_FILES['imageDt3']['name'];
                    $targetDir = "../uploads/";
                    $targetFile = $targetDir . basename($_FILES['imageDt3']['name']);
                    $imageDt3 = $fileNameDt3;
                    move_uploaded_file($_FILES['imageDt3']['tmp_name'], $targetFile);
                    $category = $_POST["category"];
                    $des = $_POST["des"];
                    $createdAt = date("d-m-Y");
                    // checkError($productName,$productPrice,$discout,$productQty);
                    insert_product($productName,$productPrice, $disCount,$productQty,$productImage,$imageDt1, $imageDt2, $imageDt3,$category,$des,$createdAt);
                    $check = "Thêm mới thành công";

                    
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
            case "comment":
                
                include "home.php";
                break;
        }
    }






    
    include_once("footer.php");
?>