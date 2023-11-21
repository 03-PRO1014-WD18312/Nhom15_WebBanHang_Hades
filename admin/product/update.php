<?php 
    if(is_array($productOne)){
        extract($productOne);

    }
?>
<div class="container">
    <form action="index.php?act=update_product" method="POST" enctype="multipart/form-data">
        <label for="">Tên Sản Phẩm</label>
        <input type=" text" class="input-group form-control form-control-sm" name="productName"
            value="<?=$product_name ?>">
        <label for="">Giá Sản Phẩm</label>
        <input type="text" class="input-group form-control form-control-sm" name="productPrice"
            value="<?=$product_price ?>">
        <label for="">Giảm giá</label>
        <input type="text" class="input-group form-control form-control-sm" name="discount" value="<?=$discount?>">
        <label for="">Số lượng</label>
        <input type="text" class="input-group form-control form-control-sm" name="productQty" value="<?=$product_qty?>">
        <label for="">Ảnh</label>
        <input type="file" class="mt-5 " name="productImage"><br>
        <label for="">Ảnh 1</label>
        <input type="file" class="mt-5" name="imageDt1"> <br>
        <label for="">Ảnh 2</label>
        <input type="file" class="mt-5" name="imageDt2"><br>
        <label for="">Ảnh 3</label>
        <input type="file" class="mt-5" name="imageDt3"><br>
        <label for="">Loại</label>
        <select name="category" id="" class="mt-5">
            <?php 
            foreach($listCategory as $category) {
            
            ?>
            <option value="<?=$category['id']?>"><?=$category['category_name']?></option>
            <?php
            }
            ?>
        </select><br>
        <label for="">Thông tin sản phẩm</label>
        <textarea class="input-group form-control form-control-sm" name="des" id="" cols="30"
            rows="10"><?=$des?></textarea>
        <button type="submit" value="1" class="mt-5 btn btn-primary btn-lg" name="btnAdd">ADD</button>
    </form>
    <p class=""><?php if(isset($check)){
        echo $check;
    } ?></p>



</div>