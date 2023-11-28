<?php
// Load function
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
    $sql = "  SELECT p.*, c.category_name as category_name
    FROM product p
    JOIN category c ON p.category = c.id
    WHERE p.product_id = '$id'";
    $pro = pdo_query($sql);
   return $pro;
}
function loadOneProduct($id){
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
    $totalPro = pdo_query_column($sql);
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
// End load function
// Search function
function searchProduct($searchResult){
    $sql = "SELECT product.*, category.category_name FROM product LEFT JOIN category ON product.category = category.id WHERE category.category_name LIKE '%$searchResult%' 
    OR product.product_name LIKE '%$searchResult%'";
    $listSearch = pdo_query($sql);
    return $listSearch;
}
// End search function
// Login function
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
// End login function
// Cart function
function insertCart($product_name,$product_price,$product_image,$qty,$total_price,$product_id){
    $insertCart = "INSERT INTO cart (product_name, cart_price, product_image, qty,total_price,product_id) values ('$product_name','$product_price','$product_image','$qty','$total_price',$product_id)";
    pdo_execute($insertCart);
}
function updateCart($product_name,$product_price,$product_image,$new_qty,$new_total_price,$product_id){
$update_query = "UPDATE cart SET product_name = '$product_name',cart_price = '$product_price',product_image = '$product_image',qty = '$new_qty',total_price='$new_total_price',product_id='$product_id' 
WHERE product_id = '$product_id'";
pdo_execute($update_query);
}
function checkProduct($product_id){
    $check_query = "SELECT product_id,qty FROM cart WHERE product_id = '$product_id'";
    $check_exist = pdo_query_one($check_query);
    return $check_exist;
}
function loadCart(){
    $sql ="SELECT * from cart JOIN product  WHERE cart.product_id = product.product_id";
    $listCart = pdo_query($sql);
    return $listCart;
}
function updateProductQuantity($product_id,$new_total_qty){
    $sql ="UPDATE product SET product_qty = '$new_total_qty' WHERE product_id = '$product_id'";
    pdo_execute($sql);
}
function updateCartQuantity($product_id,$newTotalProduct){
    $sql ="UPDATE product SET product_qty = '$newTotalProduct' WHERE product_id = '$product_id'";
    pdo_execute($sql);
}
function countCart(){
    $sql = "SELECT COUNT(*) AS count FROM cart";
    $count = pdo_query_one($sql);
    $countCart = $count['count'];
    return $countCart;
}
function deleteCart($id){
    $sql = "DELETE FROM cart WHERE id = '$id'";
    pdo_execute($sql);
}
function deleteAll(){
    $sql = "DELETE FROM cart";
    pdo_execute($sql);
}
// End cart function