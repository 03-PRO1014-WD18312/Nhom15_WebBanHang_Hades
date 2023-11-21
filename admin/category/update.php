<div class="row2">
    <div class="row2 font_title">
        <h3>Thêm LOẠI HÀNG HÓA</h3>
    </div>

    <div class="row2 form_content pt-5 ">
        <form action="index.php?act=update_category" method="POST">
            <label class="text-uppercase" for="">Category Name</label>
            <br>
            <input class="form-control form-control-lg" name="category_name" aria-describedby="inputGroup-sizing-lg"
                type="text" value="<?=$categoryOne['category_name']?>">
            <?php
                    if(isset($check)&&$check!= ""){
                        ?>
            <p class=" text-success fst-italic "><?="".$check."";?></p>
            <?php
                    }
                    if(isset($error)){
                        for($i= 0;$i<count($error);$i++){
                            ?>
            <p class=" text-danger fst-italic "><?=$error[$i];?></p>
            <?php
                        }
                    }
            ?>

            <input type="hidden" name="id" value="<?php echo $id?>">
            <button type=" submit" value="1" class="mt-5 btn btn-primary btn-lg" name="btnUpdate">UPDATE</button>


        </form>
        <!-- <button type="" value="1" class="mt-5 btn btn-primary btn-lg" name=""><a
                href="index.php?act=category"></a>LIST
            CATEGORY</button> -->
    </div>
</div>