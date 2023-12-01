<!-- Breadcrumbs -->
<!-- <div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="../views/index.php">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="../views/indexAccount.php">Account information</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->

    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <!-- <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="index.php?act=profile">Profile</a>
            <a class="nav-link" href="../views/indexAccount.php?act=billing">Billing</a>
            <a class="nav-link" href="">Security</a>
            <a class="nav-link" href="" >Notifications</a>
        </nav> -->
        <h3>Information</h3>
        <?php foreach($showAccountInfo as $acc):?>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div style="border: 1px solid rgba(0,0,0,.125); border-radius:5px;" class="mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img style="height: 170px; width:170px;" class="img-account-profile rounded-circle mb-2" src="../upload/<?=$acc['image']?>" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div style="border: 1px solid rgba(0,0,0,.125); border-radius:5px;" class="mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form action="../admin/index.php?act=update" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="idUser" value="<?=$_SESSION['user_id']?>" readonly>
                            <input type="hidden" name="oldImage" value="<?=$_SESSION['avatar']?>" readonly>
                            <!-- Form Row-->
                            <div class="mb-3">
                                <!-- Form Group (first name)-->
                                    <label class="small mb-1" for="inputFullName">Full name</label>
                                    <input name="fullName" class="form-control" id="inputFullName" type="text" placeholder="Enter your first name" value="<?=$acc['ho_ten']?>" readonly>
                                <!-- Form Group (last name)-->
                                <!-- <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                                </div> -->
                            </div>
                            <!-- Form Row -->
                            <div class="mb-3">
                                <!-- Form Group (organization name)-->
                                <!-- <div class="col-md-6"> -->
                                    <label class="small mb-1" for="address">Location</label>
                                    <input name="address" class="form-control" id="address" type="text" placeholder="Enter your address" value="<?=$acc['address']?>" readonly>
                                <!-- </div> -->
                                <!-- Form Group (location)-->
                                <!-- <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Location</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                                </div> -->
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input name="email" class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="<?=$acc['email']?>" readonly>
                            </div>
                            <!-- Form Row-->
                            <div class="mb-3">
                                <!-- Form Group (phone number)-->
                                <!-- <div class="col-md-6"> -->
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input name="phone" class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="<?=$acc['tel']?>" readonly>
                                <!-- </div> -->
                            </div>
                            <!-- Save changes button-->
                            <!-- <button class="btn btn-primary" type="submit" name="update">Save changes</button>
                            <a href="../controller/logout.php">Log out</a> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>