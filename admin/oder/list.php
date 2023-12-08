<div class="row2">
    <div class="row2 font_title">
        <h3>DANH SÁCH ORDER</h3>
    </div>
    <div class="row2 form_content pt-4">
        <table class="table table-boder table-striped-columns table-bordered ">
            <thead class="">
                <tr class="">
                    <th scope="col">ORDER ID</th>
                    <th scope="col">CUSTOMER NAME</th>
                    <th scope="col">ORDER DATE</th>
                    <th scope="col">TOTAL AMOUNT</th>
                    <th scope="col">DELI STATUS</th>
                    <th scope="col">PAYMENT METHOD</th>
                    <th scope="col">FUNCTION</th>
                </tr>
                <?php foreach($listOrders as $list):?>
                <tr>
                  
                    <td><?=$list['order_id']?></td>
                    <td><?=$list['customer_name']?></td>
                    <td><?=$list['order_date']?></td>
                    <td><?=$list['total_amount']?> VNĐ</td>
                    <td><?=$list['deli_status']?></td>
                    <td><?=$list['payment_method']?></td>
                    <td>
                       <?php if($list['deli_status'] == "Delivered"):?>
                        <?php else:?>
                            <a class="py-2 px-3 rounded border border-secondary btn btn-outline-warning" href="index.php?act=updateStatus&id=<?=urlencode($list['order_id'])?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <?php endif;?>
                        <a class="py-2 px-3 rounded border border-secondary btn btn-outline-warning" href="index.php?act=view-order&id=<?=urlencode($list['order_id'])?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a class="py-2 px-3 rounded border border-secondary btn btn-outline-warning" href=""><i
                        class="fa-solid fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach;?>
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