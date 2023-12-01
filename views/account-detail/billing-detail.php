<!-- Breadcrumbs -->
<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="../views/index.php">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="../views/indexAccount.php?act=billDetail&orderId=<?=urlencode($order['order_id'])?>">Billing detail</a></li>
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
            <a class="nav-link" href="" >Notifications</a>
        </nav>
            <hr class="mt-0 mb-4">
        <div class="row">
           
        </div>
            <div class="col-xl-12" style="margin-bottom:120px;">
                <!-- Account details card-->
                <div class="table-responsive table-billing-history">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th class="border-gray-200" scope="col">Transaction ID</th>
                            <th class="border-gray-200" scope="col">Product name</th>
                            <th class="border-gray-200" scope="col">Product price</th>
                            <th class="border-gray-200" scope="col">Product quantity</th>
                            <th class="border-gray-200" scope="col"> Order Date</th>
                            <th class="border-gray-200" scope="col">Amount</th>
                            <th class="border-gray-200" scope="col">Order processing</th>
                            <th class="border-gray-200" scope="col">Status</th>
                            <th class="border-gray-200" scope="col">Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listDetails as $order):?>
                            <tr>
                            <td><?=$order['order_id']?></td>
                            <td><?=$order['product_name']?></td>
                            <td><?=$order['quantity']?></td>
                            <td><?=number_format($order['price'])?>VNĐ</td>
                            <td><?=$order['order_date']?></td>
                            <td><?=number_format($order['price'] * $order['quantity'])?>VNĐ</td>
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
                            <td><span class="badge bg-light text-dark">Pending<span></td>
                            <?php } ?>
                            <td><?=$order['payment_method']?></td>
                            </tr>
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