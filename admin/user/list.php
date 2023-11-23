<div class="row2">
    <div class="row2 font_title">
        <h3>LIST US<i class="el el-redux"></i></h3>
    </div>
    <div class="row2 form_content pt-4">
        <table class="table table-boder table-striped-columns table-bordered ">
            <thead class="table-light">
                <tr class="">
                    <th scope="col">ID</th>
                    <th scope="col">USER NAME</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">FIRST AND LAST NAMET</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">PHONE</th>
                    <th scope="col">ROLE</th>
                    <th scope="col">FUNCTION</th>
                </tr>
            </thead>
            <?php

                foreach($listComment as $cmt) {
                    extract($cmt);
                    $delete = "index.php?act=delete_comment&id=".$id;

                
            ?>
            <tr>
                <td><?=1?></td>
                <td><?=1?></td>
                <td><?=1?></td>
                <td><?=1?></td>
                <td><?=1?></td>
                <td><?=1?></td>
                <td><?=1?></td>
                <td><?=1?></td>
                <td><?=1?></td>
                <td class="text-center">
                    <a href="<?php echo $delete ?>"
                        class="py-2 px-3 rounded border border-secondary btn btn-outline-warning"><i
                            class="fa-solid fa fa-trash"></i></a>
                </td>
            </tr>
            <?php }  ?>
        </table>

    </div>
</div>