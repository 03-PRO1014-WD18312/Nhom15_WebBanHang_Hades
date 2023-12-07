<?php 
    $check = ""
?>

<div class="row2 ">
    <div class="row2 font_title">
        <h3>DANH SÁCH SẢN PHẨM</h3>

        <div class="dropdown">
            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                Category
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="http://localhost/Nhom15_WebBanHang_Hades/admin/index.php?act=product"
                    value="0" selected>All</a>

                <?php 
            foreach($listCategory as $category) {
                extract($category);
                $filter = "index.php?act=category_filter&id=".$id;
            ?>
                <a class="dropdown-item" href="<?=$filter?>" value="<?=$id?>"><?=$category_name?></a>
                <?php
            }
            ?>
            </div>
        </div>
        <div class="row2 form_content pt-4">
            <table class="table table-boder table-striped-columns table-bordered  ">
                <thead class="">
                    <tr class="">
                        <th scope="col">Product Id</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Product price</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Product pty</th>
                        <th scope="col">Product image</th>
                        <th scope="col">Image dt1</th>
                        <th scope="col">Image dt2</th>
                        <th scope="col">Image dt3</th>
                        <th scope="col">Category</th>
                        <th scope="col">Des</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Function</th>
                        <img src="" alt="">
                    </tr>
                </thead>
                <?php
                                                $sql = "SELECT COUNT(*) AS `total` FROM `product`";
                                                $row = pdo_query($sql);
                                                // echo $row;
                                                // echo "<pre>";
                                                // print_r($row['0']['total']);
                                                //  echo "</pre>";
                                                $totalItems = $row['0']['total']; // Tổng số mục
                                                // echo $totalItems;
                                                $itemsPerPage = 10; // Số lượng mục trên mỗi trang
                                                $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại
                                                $limit = 10;
                                                $totalPage = ceil($totalItems / $limit);
                                                // Giới hạn current_page trong khoảng 1 đến total_page
                                                if ($currentPage > $totalPage){
                                                    $currentPage = $totalPage;
                                                }
                                                else if ($currentPage < 1){
                                                    $currentPage = 1;
                                                }
                                                // Tìm Start
                                                $start = ($currentPage - 1) * $limit;
                                                // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
                                                if(isset($categoryFilter)&&($categoryFilter == 1)){

                                                    $sql1 = "SELECT * FROM `product` LIMIT $start, $limit";
                                                    $listProduct = pdo_query($sql1);
                                                }




            foreach($listProduct as $product):
                $edit = "index.php?act=edit_product&id=". $product['product_id'];
                $delete = "index.php?act=delete_product&id=". $product['product_id'];
                $imgPart = "../images/".$product['product_image'];
                $imgDt1Part = "../images/".$product['image_dt1'];
                $imgDt2Part = "../images/".$product['image_dt2'];
                $imgDt3Part = " ../images/".$product['image_dt3'];
                
            ?>
                <tr>
                    <td><?=$product['product_id']?></td>
                    <td><?=$product['product_name']?></td>
                    <td><?=$product['product_price']?></td>
                    <td><?=$product['discount']?>%</td>
                    <td><?=$product['product_qty']?></td>
                    <td><img src="<?=$imgPart?>" alt="" width="30px" height="50px"></td>
                    <td><img src="<?=$imgDt1Part?>" alt="" width="30px" height="50px"></td>
                    <td><img src="<?=$imgDt2Part?>" alt="" width="30px" height="50px"></td>
                    <td><img src="<?=$imgDt3Part?>" alt="" width="30px" height="50px"></td>
                    <td><?=$product['category']?></td>
                    <td><?=$product['des']?></td>
                    <td><?=$product['created_at']?></td>

                    <td class="text-center">
                        <a href="<?php echo $delete ?>"
                            class="p-1 rounded border border-secondary btn btn-outline-warning"><i
                                class="fa-solid fa fa-trash"></i></a>
                        <a href="<?php echo $edit ?>"
                            class="p-1 rounded border border-secondary btn btn-outline-warning"><i class="fa fa-pencil"
                                aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <?php
            endforeach;
            ?>

            </table>
            <a class=" btn btn-primary btn-lg p3" href="index.php?act=add_product" class="">ADD PRODUCT</a>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php

                    if(isset($categoryFilter)&&($categoryFilter == 1)){
                    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                    if ($currentPage > 1 && $totalPage > 1){
                        // echo '<a href="index.php?page='.($current_page-1).'">Prev</a> | ';
                        echo '<li class="page-item disabled">
                            <a href="index.php?page='.($currentPage-1).'" class="page-link">Previous</a>
                            </li>';
                    }

                    // Lặp khoảng giữa
                    for ($i = 1; $i <= $totalPage; $i++){
                        // Nếu là trang hiện tại thì hiển thị thẻ span
                        // ngược lại hiển thị thẻ a
                        if ($i == $currentPage){
                            // echo '<span>'.$i.'</span>  ';
                            echo '<li class="page-item"><a class="page-link" href="#">'.$i.'</a></li>';
                        }
                        else{
                            // echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
                            echo '<li class="page-item"><a class="page-link" href="index.php?act=product&&page='.$i.'">'.$i.'</a></li>';
                        }
                    }

                    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                    if ($currentPage < $totalPage && $totalPage > 1){
                        // echo '<a href="index.php?page='.($currentPage+1).'">Next</a> | ';    
                        echo '<li class="page-item">
                            <a class="page-link" href="index.php?act=product&page='.($currentPage+1).'">Next</a>
                            </li>';
                    }}
                ?>
            </ul>
        </nav>
    </div>

</div>