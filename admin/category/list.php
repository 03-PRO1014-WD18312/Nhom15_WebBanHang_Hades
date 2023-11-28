<div class="row2">
    <div class="row2 font_title">
        <h3>DANH SÁCH LOẠI HÀNG HÓA</h3>
    </div>
    <div class="row2 form_content pt-4">
        <table class="table table-boder table-striped-columns table-bordered ">
            <thead class="">
                <tr class="">
                    <th scope="col">ID</th>
                    <th scope="col">Category_name</th>
                    <th scope="col">Function</th>
                </tr>
            </thead>
            <?php

                foreach($listCategory as $category) {
                    extract($category);
                    $edit = "index.php?act=edit_category&id=".$id;
                    $delete = "index.php?act=delete_category&id=".$id;

                
            ?>
            <tr>
                <td><?=$category['id']?></td>
                <td><?=$category['category_name']?></td>
                <td class="text-center">
                    <a href="<?php echo $delete ?>" onclick="check()"
                        class="py-2 px-3 rounded border border-secondary btn btn-outline-warning"><i
                            class="fa-solid fa fa-trash"></i></a>
                    <a href="<?php echo $edit ?>"
                        class="ml-5 py-2 px-3 rounded border border-secondary btn btn-outline-warning"><i
                            class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            <?php }  ?>
        </table>
        <a class="btn btn-primary btn-lg p3" href="index.php?act=add_category" class="">ADD CATEGORY</a>

    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    <input type="hidden" id="delete_value" name="delete_value" value="">
</div>
<script>
function check() {
    confirm("Bạn có muốn xóa Danh mục");

}
</script>