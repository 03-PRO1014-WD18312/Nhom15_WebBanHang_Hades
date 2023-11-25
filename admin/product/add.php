<div class="container">
    <?php
                    if(isset($check)&&$check!= ""){
                        ?>
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <?=$check?>
    </div>
    <?php }?>
    <form action="index.php?act=add_product" method="POST" enctype="multipart/form-data">
        <label for="">Tên Sản Phẩm</label>
        <input type=" text" class="input-group form-control form-control-sm" name="productName">
        <label for="">Giá Sản Phẩm</label>
        <input type="text" class="input-group form-control form-control-sm" name="productPrice">
        <label for="">Giảm giá</label>
        <input type="text" class="input-group form-control form-control-sm" name="discount">
        <label for="">Số lượng</label>
        <input type="text" class="input-group form-control form-control-sm" name="productQty">
        <label for="">Ảnh</label>
        <input type="file" required class="mt-5 " name="productImage"><br>
        <label for="">Ảnh 1</label>
        <input type="file" required class="mt-5" name="imageDt1"> <br>
        <label for="">Ảnh 2</label>
        <input type="file" required class="mt-5" name="imageDt2"><br>
        <label for="">Ảnh 3</label>
        <input type="file" required class="mt-5" name="imageDt3"><br>
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
        <button type="submit" value="1" class="mt-5 btn btn-primary btn-lg" name="btnAdd">ADD</button>
    </form>
    <?php
                    if(isset($check)&&$check!= ""){
                        ?>
    <?php
                    }
                    if(isset($error)){
                        for($i= 0;$i<count($error);$i++){
                            ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg>
        <div>
            <?=$error[$i];?>
        </div>
    </div>
    <?php
                        }
                    }
                ?>




</div>