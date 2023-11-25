<div class="row2 ">
    <div class="row2 font_title">
        <h3>DANH SÁCH SẢN PHẨM</h3>
    </div>
    <div class="row2 form_content pt-4">
        <table class="table table-boder table-striped-columns table-bordered  ">
            <thead class="table-light">
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
                <td><?=$product['product_qty']?></td>
                <td><?=$product['discount']?></td>
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
                    <a href="<?php echo $edit ?>" class="p-1 rounded border border-secondary btn btn-outline-warning"><i
                            class="fa-solid fa fa-pen"></i></a>
                </td>
            </tr>
            <?php
            endforeach;
            ?>

        </table>
        <a class=" btn btn-primary btn-lg p3" href="index.php?act=add_product" class="">ADD PRODUCT</a>


    </div>
</div>