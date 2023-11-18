<div class="row2">
    <div class="row2 font_title">
        <h3>DANH SÁCH LOẠI HÀNG HÓA</h3>
    </div>
    <div class="row2 form_content pt-4">
        <table class="table table-boder table-striped-columns table-bordered ">
            <thead class="table-light">
                <tr class="">
                    <th scope="col">ID</th>
                    <th scope="col">Category_name</th>
                    <th scope="col">Function</th>
                </tr>
            </thead>
            <?php
                foreach($listCategory as $category) {
                    
                
            ?>
            <tr>
                <td><?=$category['id']?></td>
                <td><?=$category['category_name']?></td>
                <td><a href=""><i class="fa-trash"></i>DELETE</a> || <a href="">EDIT</a></td>
            </tr>
            <?php }  ?>
        </table>
        <a class="btn btn-primary btn-lg p3" href="index.php?act=adddm" class="">ADD CATEGORY</a>

    </div>
</div>