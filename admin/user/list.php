<?php 

// // Số lượng bản ghi trên mỗi trang
// $records_per_page = 10;

// // Xác định trang hiện tại
// $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// // Tính toán vị trí bắt đầu và kết thúc của bản ghi trên trang hiện tại
// $start_from = ($current_page - 1) * $records_per_page;

// // Truy vấn cơ sở dữ liệu để lấy dữ liệu cho trang hiện tại
// $sql = "SELECT * FROM table_name LIMIT $start_from, $records_per_page";
// $result = $conn->query($sql);

// // Hiển thị dữ liệu
// while ($row = $result->fetch_assoc()) {
//     // Hiển thị thông tin từ bản ghi
// }

// // Tạo liên kết phân trang
// $sql = "SELECT COUNT(*) AS total_records FROM table_name";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();
// $total_records = $row['total_records'];
// $total_pages = ceil($total_records / $records_per_page);

// // Hiển thị các liên kết phân trang
// echo "<div class='pagination'>";
// if ($current_page > 1) {
//     echo "<a href='?page=" . ($current_page - 1) . "'>&laquo; Previous</a>";
// }
// for ($i = 1; $i <= $total_pages; $i++) {
//     echo "<a href='?page=$i'>$i</a> ";
// }
// if ($current_page < $total_pages) {
//     echo "<a href='?page=" . ($current_page + 1) . "'>Next &raquo;</a>";
// }
// echo "</div>";

// ?>


<div class="row2">
    <div class="row2 font_title">
        <h3>LIST US<i class="el el-redux"></i></h3>
    </div>
    <div class="row2 form_content pt-4">
        <table class="table table-boder table-striped-columns table-bordered ">
            <thead class="">
                <tr class="">
                    <th scope="col">ID</th>
                    <th scope="col">USER NAME</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">FULLNAME</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">PHONE</th>
                    <th scope="col">ROLE</th>
                    <th scope="col">FUNCTION</th>
                </tr>
            </thead>
            <?php
            foreach($loadUser as $user) {
            extract($user);
            $delete = "index.php?act=delete_user&id=".$id;
            $edit = "index.php?act=edit_user&id=".$id;         
            ?>
            <tr>
                <td><?=$id?></td>
                <td><?=$username?></td>
                <td><?=$password?></td>
                <td><?=$ho_ten?></td>
                <td><img style="width: 50px; height:50px;" src="../upload/<?=$image?>" alt=""></td>
                <td><?=$email?></td>
                <td><?=$address?></td>
                <td><?=$tel?></td>
                <td><?=$role?></td>
                <?php if($role == 0){ ?>
                     <td class="text-center">
                    <a href="<?php echo $delete ?>"
                        class="p-1 rounded border border-secondary btn btn-outline-warning"><i
                            class="fa-solid fa fa-trash"></i></a>
                    <a href="<?php echo $edit ?>" class="p-1 rounded border border-secondary btn btn-outline-warning"><i
                            class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
                <?php }else{?>
                <?php if($username == $_SESSION['username']){?>
                <td><a href="index.php?act=profile">View profile</a></td>
                <?php }else{?>
                <td><a href="index.php?act=information&&id=<?=$id?>">View information</a></td>
                <?php } ?>
                <?php }?>
            </tr>
            <?php }  ?>
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