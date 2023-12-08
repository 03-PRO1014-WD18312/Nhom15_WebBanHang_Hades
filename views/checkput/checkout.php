<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<section class="shop checkout section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="checkout-form">
                    <h2>Make Your Checkout Here</h2>
                    <p>Please register in order to checkout more quickly</p>
                    <!-- Form -->
                    <?php if(isset($_SESSION['loggedin'])):?>
                    <form class="form" method="post" action="../views/indexCheckout.php?act=order">
                        <div class="row">
                            <input type="hidden" name="total-amount" value="<?=$totalAmount;?>">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Username<span>*</span></label>
                                    <input type="text" name="name" placeholder="" value="<?=$_SESSION['username']?>"
                                        required="required" readonly>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Last Name<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div> -->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email Address<span>*</span></label>
                                    <input type="email" name="email" placeholder="" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Phone Number<span>*</span></label>
                                    <input type="tel" name="phone" placeholder="" required="required"
                                        pattern="(\+84|0)(3[2-9]|5[689]|7[06-9]|8[1-9]|9[0-5])\d{7}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Address<span>*</span></label>
                                    <input type="text" name="address" placeholder="" required="required">
                                </div>
                            </div>
                            <!-- <div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<label>Notes<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div> -->
                            <?php if(empty($listCart)):?>
                            <h3>Nothing to order</h3>
                            <?php else:?>
                            <button style="margin-left:14px;" type="submit" name="order" class="btn order">Order
                                now</button>
                            <?php endif;?>
                            <!-- <div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address Line 1<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address Line 2<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Postal Code<span>*</span></label>
											<input type="text" name="post" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Company<span>*</span></label>
											<select name="company_name" id="company">
												<option value="company" selected="selected">Microsoft</option>
												<option>Apple</option>
												<option>Xaiomi</option>
												<option>Huawer</option>
												<option>Wpthemesgrid</option>
												<option>Samsung</option>
												<option>Motorola</option>
											</select>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group create-account">
											<input id="cbox" type="checkbox">
											<label>Create an account?</label>
										</div>
									</div> -->
                        </div>
                    </form>
                    <?php else:?>
                    <form class="form" method="post" action="../views/indexCheckout.php?act=order">
                        <div class="row">
                            <input type="hidden" name="total-amount" value="<?=$totalAmount;?>">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Full Name<span>*</span></label>
                                    <input type="text" name="name" placeholder="" required="required">
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Last Name<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div> -->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email Address<span>*</span></label>
                                    <input type="email" name="email" placeholder="" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Phone Number<span>*</span></label>
                                    <input type="tel" name="phone" placeholder="" required="required"
                                        pattern="(\+84|0)(3[2-9]|5[689]|7[06-9]|8[1-9]|9[0-5])\d{7}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Address<span>*</span></label>
                                    <input type="text" name="address" placeholder="" required="required">
                                </div>
                            </div>
                            <!-- <div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<label>Notes<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div> -->
                            <?php if(empty($listCart)):?>
                            <h3>Nothing to order</h3>
                            <?php else:?>
                            <button style="margin-left:14px;" type="submit" name="order" class="btn order">Order
                                now</button>
                            <?php endif;?>
                            <!-- <div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address Line 1<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address Line 2<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Postal Code<span>*</span></label>
											<input type="text" name="post" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Company<span>*</span></label>
											<select name="company_name" id="company">
												<option value="company" selected="selected">Microsoft</option>
												<option>Apple</option>
												<option>Xaiomi</option>
												<option>Huawer</option>
												<option>Wpthemesgrid</option>
												<option>Samsung</option>
												<option>Motorola</option>
											</select>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group create-account">
											<input id="cbox" type="checkbox">
											<label>Create an account?</label>
										</div>
									</div> -->
                        </div>
                    </form>
                    <?php endif;?>
                    <?php echo "<script>if ( window.history.replaceState ) {
								window.history.replaceState( null, null, window.location.href );
								}</script>"?>
                    <!--/ End Form -->
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="order-details">
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <h2>CART TOTALS</h2>
                        <div class="content">
                            <ul style="max-height: 250px; overflow-y: auto;">
                                <?php
									$totalAmount = 0;
                                    $_SESSION['productName'] = array();
                                  
									foreach ($listCart as $cart):
                                        $_SESSION['productName'][] = array(
                                            'product_name' => $cart['product_name'],
                                        );                               
									// Tính giá trị cho từng sản phẩm trong giỏ hàng
									if($cart['discount'] ==0){
									$cartAmount = $cart['qty'] * $cart['product_price'];
									$totalAmount += $cartAmount;
									}else{
                                        $cartAmountDis = ($cart['product_price'] - ($cart['product_price'] * $cart['discount']/100)) * $cart['qty'];
										$totalAmount += $cartAmountDis;
									}
									?>
                                <li style="display: flex; align-items: center; margin-bottom: 35px;">
                                    <a href="../views/indexCart.php" title="Update"><i class="fa fa-pencil-square"
                                            aria-hidden="true"></i></a>
                                    <a style="width: 40px; height: 40px; margin-left: 15px; margin-right: 10px;"
                                        class="cart-img" href="#"><img src="../images/<?=$cart['product_image']?>"
                                            alt="#"></a>
                                    <h4><a style="font-size: 15px;" href="#"><?=$cart['product_name']?></a></h4>
                                    <p style="margin-left: 10px;" class="quantity"><?=$cart['qty']?>x-
                                        <span style="font-size: 12px;" class="amount">
                                            <?=($cart['discount'] == 0) ? $cart['product_price'] : $cart['product_price'] - ($cart['product_price'] * $cart['discount']/100)?>VNĐ
                                        </span>
                                </li>
                                <?php endforeach; ?>
                                <!-- Hiển thị tổng số tiền -->
                                <li class="last">Total<span><?=number_format($totalAmount)?>VNĐ</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ End Order Widget -->
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <h2>Payments</h2>
                        <div class="content">
                        <form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                            <input type="hidden" name="business" value="sb-x7bsa28352189@business.example.com">
                            <input type="hidden" name="amount" value="<?php echo $totalAmount /23000;?>">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="no_shipping" value="1">
                            <!-- <input type="hidden" name="no_shipping" value="5"> -->
                            <input type="hidden" name="return" value="http://localhost/New folder/Nhom15_WebBanHang_Hades/views/checkput/success.php">
                           <?php if(empty($listCart)):?>
                            <h2>Noting to Pay</h2>
                            <?php else:?>
                                <button class="btn" type="submit">Paypal</button>
                            <?php endif;?>
                        </form>
                        </div>
                    </div>
                    <!--/ End Order Widget -->
                    <!-- Payment Method Widget -->
                    <!-- <div class="single-widget payement">
                        <div class="content">
                            <img src="images/payment-method.png" alt="#">
                        </div>
                    </div> -->
                    <!--/ End Payment Method Widget -->
                    <!-- Button Widget -->
                    <!-- <div class="single-widget get-button">
								<div class="content">
									<div class="button">
										<a href="#" class="btn">proceed to checkout</a>
									</div>
								</div>
							</div> -->
                    <!--/ End Button Widget -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Checkout -->

<!-- Start Shop Services Area  -->

<!-- End Shop Services -->