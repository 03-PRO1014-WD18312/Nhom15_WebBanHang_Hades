<div class="row2">
    <div class="row2 font_title">
        <h3>Thêm LOẠI HÀNG HÓA</h3>
    </div>

    <div class="row2 form_content pt-5 ">
        <form action="index.php?act=adddm" menthod="POST">
            <label class="text-uppercase" for="">Category Name</label>
            <br>
            <input class="form-control form-control-lg" name="category_name" aria-describedby="inputGroup-sizing-lg"
                type="text">
            <p><?php
                    if(isset($thongbao)&&$thongbao!= ""){
                        echo"".$thongbao."";
                    }
                ?></p>
            <button type="submit" value="1" class="btn btn-primary btn-lg" name="btn-add">ADD</button>
        </form>
    </div>
</div>