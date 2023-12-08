<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="../views/index.php">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="../views/indexAccount.php?act=listRating">Billing</a></li>
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
        <a class="nav-link" href="../views/indexAccount.php?act=listRating">Billing</a>
        <a class="nav-link" href="">Security</a>
        <a class="nav-link" href="">Notifications</a>
    </nav>
    <hr class="mt-0 mb-4">
    <!-- Billing history card-->
    <div class="card-body p-0">
        <!-- Billing history table-->
        <div style="font-size: 12px;" class="table-responsive table-billing-history">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th class="border-gray-200" style="width: 150px;" scope="col">Username</th>
                        <th class="border-gray-200" style="width: 100px;" scope="col">Product name</th>
                        <th class="border-gray-200" style="width: 120px;" scope="col">Rating points</th>
                        <th class="border-gray-200" style="width: 200px;" scope="col">Rating</th>
                        <th class="border-gray-200" style="width: 150px;" scope="col">Date</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach($listRating as $rating):?>
                    <tr>
                        <td><?=$rating['username']?></td>
                        <td><a href="../views/indexProdetail.php?id=<?=$rating['product_id']?>&act=loadOne"><?=$rating['product_name']?></a></td>
                        <td><?=$rating['user_rating']?></td>
                        <td><?=$rating['user_review']?></td>
                        <td><?=date('l jS, F Y h:i:s A', $rating['datetime'])?></td>
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