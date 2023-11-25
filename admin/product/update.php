<?php 
    if(is_array($productOne)){
        extract($productOne);
        $imgPart = "../images/".$productOne['product_image'];
        $imgDt1Part = "../images/".$productOne['image_dt1'];
        $imgDt2Part = "../images/".$productOne['image_dt2'];
        $imgDt3Part = " ../images/".$productOne['image_dt3'];
    };
    
                    if(isset($check)&&$check!= ""){
                        ?>
<div class="alert alert-success d-flex align-items-center" role="alert">
    <?=$check?>
</div>
<?php }
?>
<div class="container">
    <?php if(isset($check)){
                    ?>
    <?php    
        } 
        ?>

    <form action="index.php?act=update_product" method="POST" enctype="multipart/form-data">
        <label for="">Tên Sản Phẩm</label>
        <input type=" text" class="input-group form-control form-control-sm" name="productName"
            value="<?=$product_name ?>">
        <p class="font-italic text-danger">
            <?=(isset($error['productName'])) ? $error["productName"]:" ";?>
        </p>
        <label for="">Giá Sản Phẩm</label>
        <input type="text" class="input-group form-control form-control-sm" name="productPrice"
            value="<?=$product_price ?>">
        <p class="font-italic text-danger">
            <?=(isset($error['productPrice'])) ? $error["productPrice"]:false;?>
        </p>
        <label for="">Giảm giá</label>
        <input type="text" class="input-group form-control form-control-sm" name="discount" value="<?=$discount?>">
        <label for="">Số lượng</label>
        <input type="text" class="input-group form-control form-control-sm" name="productQty" value="<?=$product_qty?>">
        <p class="font-italic text-danger">
            <?=(isset($error['productQty'])) ? $error["productQty"]:false;?>
        </p>
        <label for="">Ảnh</label>
        <input type="file" class="mt-5 " name="productImage" value="<?=$imgPart?>"><img src="<?=$imgPart?>" alt=""
            width="80px" height="100px"><br>
        <label for="">Ảnh 1</label>
        <input type="file" class="mt-5" name="imageDt1"><img src="<?=$imgDt1Part?>" alt="" width="80px"
            height="100px"><br>
        <label for="">Ảnh 2</label>
        <input type="file" class="mt-5" name="imageDt2"><img src="<?=$imgDt2Part?>" alt="" width="80px"
            height="100px"><br>
        <label for="">Ảnh 3</label>
        <input type="file" class="mt-5" name="imageDt3"><img src="<?=$imgDt3Part?>" alt="" width="80px"
            height="100px"><br>
        <label for="">Loại</label>
        <select name="category" id="" class="mt-5">
            <?php 
            foreach($listCategory as $category) {
                
                if($category['id'] == $productOne['category']){
            ?>
            <option value="<?=$category['id']?>" selected><?=$category['category_name']?></option>
            <?php
                }else{                  
            ?>
            <option value="<?=$category['id']?>"><?=$category['category_name']?></option>
            <?php
            }
            }
            ?>
        </select><br>
        <label for="">Thông tin sản phẩm</label>
        <textarea class="input-group form-control form-control-sm" name="des" id="" cols="30"
            rows="10"><?=$des?></textarea>
        <input type="hidden" name="id" value="<?=$id?>">
        <button type="submit" value="1" class="mt-5 btn btn-primary btn-lg" name="btnUpdate">UPDATE</button>
    </form>
    <p class=""></p>



</div>