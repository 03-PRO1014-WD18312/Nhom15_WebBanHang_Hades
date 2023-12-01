<?php
include "../modal/pdo.php";
include "../modal/product.php";

$listCate = loadCategories();

if (isset($_POST['minPrice']) && isset($_POST['maxPrice'])) {
    $minPrice = $_POST['minPrice'];
    $maxPrice = $_POST['maxPrice'];
    // Sử dụng prepared statement để tránh SQL injection
    $sql = "SELECT * FROM product WHERE product_price BETWEEN '$minPrice' AND '$maxPrice' ORDER BY product_price ASC";
    // Assuming pdo_query returns the result set
    $result_set = pdo_query($sql);
    if (!empty($result_set)) {
        $resultHtml = '<div class="row">'; 
        foreach ($listCate as $category) {
            foreach ($result_set as $product) {
                if ($product['category'] == $category['id']) {
                    $resultHtml .= '
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="../views/indexProdetail.php?id=' . $product['product_id'] . '&act=loadOne&name=' . $category['category_name'] . '">
                                        <img class="default-img" src="../images/' . $product['product_image'] . '" alt="#">
                                        <img class="hover-img" src="../images/' . $product['image_dt1'] . '" alt="#">
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a class="view-detail" data-id="' . $product['product_id'] . '" title="Quick View"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                        </div>
                                        <div class="product-action-2">';
                    
                    if ($product['product_qty'] == 0) {
                        $resultHtml .= '<del>Add to cart</del>';
                    } else {
                        $resultHtml .= '<a title="Add to cart" data-product-id="' . $product['product_id'] . '"
                            data-product-name="' . $product['product_name'] . '"
                            data-product-image="' . $product['product_image'] . '"
                            data-product-price="' . (($product['discount'] > 0) ? $product['product_price'] - ($product['product_price'] * $product['discount']/100) : $product['product_price']) . '"
                            data-product-qty="' . $product['product_qty'] . '" class="buy-button">Add to cart</a>';
                    }     
                    $resultHtml .= '</div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="../views/indexProdetail.php?id=' . $product['product_id'] . '&act=loadOne">' . $product['product_name'] . '</a></h3>
                                    <div class="product-price">';
                    
                    if ($product['discount'] > 0) {
                        $resultHtml .= '<span>' . number_format($product['product_price'] - ($product['product_price'] * $product['discount']/100)) . 'VNĐ</span>
                        <del style="color:red;">' . number_format($product['product_price']) . 'VNĐ</del>';
                    } else {
                        $resultHtml .= '<span>' . number_format($product['product_price']) . 'VNĐ</span>';
                    }    
                    $resultHtml .= '</div>
                                </div>
                            </div>
                        </div>';
                }
            }
        }
        $resultHtml .= '</div>';     
        // Output the HTML result for AJAX
        echo $resultHtml;
    } else {
        echo '<h3 align="center">No Product Found</h3>';
    }
}
?>
<script>
    $(".buy-button").click(function(e) {
    e.preventDefault();
    var productId = $(this).data('product-id');
    var productName = $(this).data('product-name');
    var productImage = $(this).data('product-image');
    var productQty = $(this).data('product-qty');
    var numberPro = 1;
    var productPrice = $(this).data('product-price');
    console.log(productId, productName, productImage, productQty, productPrice, numberPro);
    $.ajax({
        url: '../controller/addtocart.php',
        method: 'POST',
        data: {
            productId: productId,
            productName: productName,
            productImage: productImage,
            productQty: productQty,
            numberPro: numberPro,
            productPrice: productPrice
        },
        success: function(response) {
            // Xử lý dữ liệu nhận được từ server ở đây
            alert("Product added successfully");
            location.reload();
            console.log(response);
            // Thực hiện các thao tác khác tùy thuộc vào dữ liệu nhận được
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
});
</script>