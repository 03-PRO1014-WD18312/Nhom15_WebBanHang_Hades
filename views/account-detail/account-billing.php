<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="../views/index.php">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="../views/indexAccount.php?act=billing">Billing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="../views/indexAccount.php">Profile</a>
        <a class="nav-link" href="../views/indexAccount.php?act=billing">Billing</a>
        <a class="nav-link" href="">Security</a>
        <a class="nav-link" href="">Notifications</a>
    </nav>
    <hr class="mt-0 mb-4">
    <!-- Billing history card-->
    <div class="card mb-4">
        <div class="card-header">
            <img src="../upload/<?=$_SESSION['avatar']?>" alt="">
        </div>
        <div class="card-body p-0">
            <!-- Billing history table-->
            <div style="font-size: 12px;" class="table-responsive table-billing-history">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th class="border-gray-200" scope="col">Transaction ID</th>
                            <th class="border-gray-200" scope="col">Order Date</th>
                            <th class="border-gray-200" scope="col">Amount</th>
                            <th class="border-gray-200" scope="col">Deli status</th>
                            <th class="border-gray-200" scope="col">Status</th>
                            <th class="border-gray-200" scope="col">Payment</th>
                            <th class="border-gray-200" scope="col">View details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listOrders as $order):?>
                        <?php if($order['customer_name'] == $_SESSION['username']):?>
                        <tr>
                            <td><?=$order['order_id']?></td>
                            <td><?=$order['order_date']?></td>
                            <td><?=number_format($order['total_amount'])?>VNĐ</td>
                            <?php if($order['deli_status'] == "Processing"){?>
                            <td style="color:yellow;"><?=$order['deli_status']?></td>
                            <?php }else if($order['deli_status'] == "Delivering"){?>
                            <td style="color:yellow;"><?=$order['deli_status']?></td>
                            <?php } else { ?>
                                <td style="color:green;"><?=$order['deli_status']?></td>
                            <?php } ?>
                            <?php if($order['deli_status'] == "Delivered"){?>
                            <td><span class="badge bg-success">Paid</span></td>
                            <?php } else{ ?>
                            <td><span class="badge bg-light text-dark">Pending</span></td>
                            <?php } ?>
                            <td><?=$order['payment_method']?></td>
                            <td><a
                                    href="../views/indexAccount.php?act=billDetail&orderId=<?=urlencode($order['order_id'])?>">View
                                    details</a></td>
                        </tr>
                        <?php else:?>
                        <h2>Nothing to display</h2>
                        <?php endif;?>
                        <?php endforeach;?>
                        <!-- <tr>
                            <td>#38594</td>
                            <td>05/15/2021</td>
                            <td>$29.99</td>
                            <td><span class="badge bg-success">Paid</span></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>