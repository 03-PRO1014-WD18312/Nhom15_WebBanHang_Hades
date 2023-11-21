<?php
function loadProduct(){
    $sql = "select * from product";
    $listPro = pdo_query($sql);
    return $listPro;
}
function loadCategories(){
$sql = "select * from category";
$listCate = pdo_query($sql);
return $listCate;
}
function loadPopupPro($id){
    // load thông tin của popup
    $sql = "  SELECT p.*, c.category_name as category_name
    FROM product p
    JOIN category c ON p.category = c.id
    WHERE p.product_id = '$id'";
    $pro = pdo_query($sql);
   return $pro;
}
function loadOneProduct($id){
//    Load 1 sản phẩm
    $sql = "SELECT p.*, c.category_name as category_name
    FROM product p
    JOIN category c ON p.category = c.id
    WHERE p.product_id = '$id'";
    $pro = pdo_query_one($sql);
   return $pro;
}
function loadPagi($startIndex,$productsPerpage){
    $sql ="SELECT * FROM product LIMIT $startIndex, $productsPerpage";
    $products = pdo_query($sql);
    return $products;
}
function totalPro(){
    $sql = "select count(*) from product";
    $totalPro =pdo_query_column($sql);
    return $totalPro;
}
function loadCate($id){
  $sql = "SELECT * FROM category INNER JOIN product ON product.category = category.id WHERE category.id = '$id'";
  $listProInCate = pdo_query($sql);
  return $listProInCate;
}
function loadOnSale(){
    $sql = "SELECT * FROM product WHERE discount > 14 ORDER BY discount DESC LIMIT 3";
    $listSale =pdo_query($sql);
    return $listSale;
}
function loadTopView(){
    $sql = "SELECT * FROM product where view >30 ORDER BY view DESC LIMIT 3";
    $listView =pdo_query($sql);
    return $listView;
}
function loadPrByDate(){
    $sql = "SELECT * FROM product ORDER BY created_at DESC LIMIT 3";
    $listPrByDate = pdo_query($sql);
    return $listPrByDate;
}
function loadProLimit9(){
    $sql = "select * from product limit 9 ORDER BY created_at";
    $listLimit9 = pdo_query($sql);
    return $listLimit9;
}
function searchProduct($searchResult){
    $sql = "SELECT product.*, category.category_name FROM product LEFT JOIN category ON product.category = category.id WHERE category.category_name LIKE '%$searchResult%' 
    OR product.product_name LIKE '%$searchResult%'";
    $listSearch = pdo_query($sql);
    return $listSearch;
}
function login($username,$password){
    $sql = "SELECT * FROM account WHERE username ='$username' AND password ='$password'";
    $login = pdo_query($sql);
    return $login;
}
function register($username,$password,$fullName,$image,$email,$address,$tel,$role){
    $sql = "insert into account (username, password, ho_ten, image, email, address, tel, role) 
    values ('$username', '$password', '$fullName', '$image', '$email', '$address', '$tel', '$role')";
    pdo_execute($sql);
}
function checkUsernameExists($username){
// Thực hiện truy vấn kiểm tra
$sql = "SELECT COUNT(*) AS count FROM account WHERE username = '$username'";
$result = pdo_query($sql);
return $result && intval($result[0]['count']) > 0;
}
function checkEmailExists($email){
    // Thực hiện truy vấn kiểm tra
    $sql = "SELECT COUNT(*) AS count FROM account WHERE email = '$email'";
    $result = pdo_query($sql);
    return $result && intval($result[0]['count']) > 0;
}
   