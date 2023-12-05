<div class="row2">
    <div class="row2 font_title">
        <h3>DANH SÁCH ORDER</h3>
    </div>
    <div class="row2 form_content pt-4">
        <table class="table table-boder table-striped-columns table-bordered ">
            <thead class="">
                <tr class="">
                    <th scope="col">Detail Id</th>
                    <th scope="col">ORDER ID</th>
                    <th scope="col">ORDER DATE</th>
                    <th scope="col">PRICE </th>
                    <th scope="col">QUANTITY</th>
                    <th scope="col">TOTAL AMOUNT</th>
                    <th scope="col">DELI STATUS</th>
                    <th scope="col">PAYMENT METHOD</th>
                </tr>
                <tr>
                    <?php foreach($listDetail as $list):?>
                    <td><?=$list['detail_id']?></td>
                    <td><?=$list['order_id']?></td>
                    <td><?=$list['order_date']?></td>           
                    <td><?=$list['price']?></td>
                    <td><?=$list['quantity']?></td>
                    <td><?=$list['total_amount']?> VNĐ</td>
                    <td><?=$list['deli_status']?></td>
                    <td><?=$list['payment_method']?></td>
                    <!-- <td>
                        <a class="py-2 px-3 rounded border border-secondary btn btn-outline-warning" href="index.php?act=updateStatus&id=<?=urlencode($list['order_id'])?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a class="py-2 px-3 rounded border border-secondary btn btn-outline-warning" href="index.php?act=view-order"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a class="py-2 px-3 rounded border border-secondary btn btn-outline-warning" href=""><i
                        class="fa-solid fa fa-trash"></i></a>
                    </td> -->
                    <?php endforeach;?>
                </tr>
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