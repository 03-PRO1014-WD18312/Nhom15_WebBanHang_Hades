<div class="row2">
    <div class="row2 font_title">
        <h3>DANH SÁCH LOẠI HÀNG HÓA</h3>
    </div>
    <div class="row2 form_content pt-4">
        <table class="table table-boder table-striped-columns table-bordered ">
            <thead class="">
                <tr class="">
                    <th scope="col">ID</th>
                    <th scope="col">USER NAME</th>
                    <th scope="col">USER RATE</th>
                    <th scope="col">COMMNET</th>
                    <th scope="col">ID PRODUCT</th>
                    <th scope="col">CREATE AT</th>
                    <th scope="col">FUNCTION</th>
                </tr>
                <?php
                foreach($loadAllCmt as $cmt) {
                    extract($cmt);
                    $delete = "index.php?act=delete_comment&id=".$review_id;    
                  ?>
                <tr>
                    <td><?=$review_id?></td>
                    <td><?=$username?></td>
                    <td><?=$user_rating?></td>
                    <td><?=$user_review?></td>
                    <td><?=$product_name?></td>
                    <td><?= date('l jS, F Y h:i:s A', $datetime)?></td>
                    <td class="text-center">
                        <a onclick="return confirm('Are you sure you want to delete?')"  href="<?php echo $delete ?>"
                            class="py-2 px-3 rounded border border-secondary btn btn-outline-warning"><i
                                class="fa-solid fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php }  ?>
            </thead>
        </table>

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
</div>