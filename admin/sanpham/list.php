<div class="row2">
    <div class="row2 font_title">
        <h3>DANH SÁCH SẢN PHẨM</h3>
    </div>
    <div class="row2 form_content ">
        <table class="table table-boder table-striped-columns table-bordered ">
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
                </tr>
            </thead>
            <?php
            foreach($listProduct as $product):
            ?>
            <tr>
                <td><?=$product['product_id']?></td>
                <td><?=$product['product_name']?></td>
                <td><?=$product['product_price']?></td>
                <td><?=$product['discount']?></td>
                <td><?=$product['product_image']?></td>
                <td><?=$product['product_id']?></td>
                <td><?=$product['image_dt1']?></td>
                <td><?=$product['image_dt2']?></td>
                <td><?=$product['image_dt3']?></td>
                <td><?=$product['category']?></td>
                <td><?=$product['des']?></td>
            </tr>
            <?php
            endforeach;
            ?>

        </table>
    </div>
</div>