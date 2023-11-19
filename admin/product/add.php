<div class="container">
    <form action="">
        <label for="">Tên Sản Phẩm</label>
        <input type="text" class="input-group form-control form-control-sm" name="productName">
        <label for="">Giá Sản Phẩm</label>
        <input type="text" class="input-group form-control form-control-sm" name="productPrice">
        <label for="">Giảm giá</label>
        <input type="text" class="input-group form-control form-control-sm" name="discout">
        <label for="">Số lượng</label>
        <input type="text" class="input-group form-control form-control-sm" name="productQty">
        <label for="">Ảnh</label>
        <input type="FILE" class="mt-5 " name="productImage" required><br>
        <label for="">Ảnh 1</label>
        <input type="FILE" class="mt-5" name="imageDt1" required><br>
        <label for="">Ảnh 2</label>
        <input type="FILE" class="mt-5" name="imageDt2" required><br>
        <label for="">Ảnh 3</label>
        <input type="FILE" class="mt-5" name="imageDt3" required><br>
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
        <textarea class="input-group form-control form-control-sm" name="des" id="" cols="30" rows="10"></textarea>
        <button type=" submit" value="1" class="mt-5 btn btn-primary btn-lg" name="btn-add">ADD</button>
    </form>



</div>