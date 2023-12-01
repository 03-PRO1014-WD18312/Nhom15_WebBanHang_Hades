<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Shopping Cart -->
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading">
                            <th>PRODUCT</th>
                            <th>NAME</th>
                            <th class="text-center">UNIT PRICE</th>
                            <th class="text-center">QUANTITY</th>
                            <th class="text-center">TOTAL</th>
                            <th class="text-center"><i style="cursor:pointer;"
                                class="ti-trash remove-icon remove-all"></i></th>
                    </thead>
                    <tbody>
                        <?php if(empty($listCart)):?>
                        <h2 stye="text-align:center;">Cart is empty now</h2>
                        <?php else:?>
                        <?php foreach ($listCart as $cart):?>
                        <tr>
                            <input type="hidden" name="product_id" class="product_id" value="<?=$cart['product_id']?>"
                                id="">
                            <td class="image" data-title="No"><img src="../images/<?=$cart['product_image']?>" alt="#">
                            </td>
                            <td class="product-des" data-title="Description">
                                <p class="product-name"><a href="#"><?=$cart['product_name']?></a></p>
                                <!-- <p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p> -->
                            </td>
                            <?php if($cart['discount'] == 0):?>
                            <td class="price" data-title="Price">
                                <span><?=number_format($cart['product_price'])?>VNĐ</span>
                            </td>
                            <?php else:?>
                            <td class="price" data-title="Price"><span><?=number_format($cart['product_price'] - ($cart['product_price'] 
								* $cart['discount']/100))?>VNĐ</span></td>
                            <?php endif;?>
                            <td class="qty" data-title="Qty">
                                <!-- Input Order -->
                                <input type="hidden" name="product_name" class="product_name"
                                    value="<?= $cart['product_name'] ?>" id="">
                                <input type="hidden" name="product_image" class="product_image"
                                    value="<?= $cart['product_image'] ?>" id="">
                                <input type="text" name="productQty" class="productQty"
                                    value="<?=$cart['product_qty']?>" id="">
                                <input type="text" name="input-qty" value="<?=$cart['qty']?>">
                                <input style="margin-left:80px;" type="number" class="input-num" min="1"
                                    value="<?=$cart['qty']?>">
                                <!--/ End Input Order -->
                            </td>
                            <?php if($cart['discount'] ==0):?>
                            <td class="total-amount" data-title="Total">
                                <span><?=number_format($cart['product_price'] * $cart['qty'])?>VNĐ</span>
                            </td>
                            <?php else:?>
                            <td class="total-amount" data-title="Total">
                                <span>
                                    <?= number_format(($cart['product_price'] - ($cart['product_price'] * $cart['discount']/100)) * $cart['qty']) ?>VNĐ
                                </span>
                            </td>
                            <?php endif;?>
                            <td class="action" data-title="Remove"><a style="cursor:pointer;" class="remove-btn"
                                    data-id="<?=$cart['id']?>" data-productquantity="<?=$cart['product_qty']?>"
                                    data-productid="<?=$cart['product_id']?>" data-cartqty="<?=$cart['qty']?>"><i
                                        class="ti-trash remove-icon"></i></a></td>
                        </tr>
                        <?php endforeach;?>
                        <?php endif;?>
                        <!-- <tr>
								<td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">Women Dress</a></p>
									<p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
								</td>
								<td class="price" data-title="Price"><span>$110.00 </span></td>
								<td class="qty" data-title="Qty">
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[2]" class="input-number"  data-min="1" data-max="100" value="2">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[2]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
								</td>
								<td class="total-amount" data-title="Total"><span>$220.88</span></td>
								<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
							<tr>
								<td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">Women Dress</a></p>
									<p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
								</td>
								<td class="price" data-title="Price"><span>$110.00 </span></td>
								<td class="qty" data-title="Qty">
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[3]" class="input-number"  data-min="1" data-max="100" value="3">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[3]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
								</td>
								<td class="total-amount" data-title="Total"><span>$220.88</span></td>
								<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
							</tr> -->
                    </tbody>
                </table>
                <!--/ End Shopping Summery -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Total Amount -->
                <?php if(empty($listCart)):?>
                <a style="color:white;" href="../views/index.php" class="btn">Continue shopping</a>
                <?php else:?>
                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-5 col-12">
                            <div class="left">
                                <button class="btn update-button">Update</button>
                                <!-- <div class="coupon">
										<form action="#" target="_blank">
											<input name="Coupon" placeholder="Enter Your Coupon">
											
										</form>
									</div>
									<div class="checkbox">
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
									</div> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7 col-12">
                            <div class="right">
                                <ul>
                                    <?php
										$totalAmount =0;
										foreach ($listCart as $cart) {
											if($cart['discount'] ==0){
												$totalAmount += $cart['product_price'] * $cart['qty'];	
											}else{
												$totalAmount += ($cart['product_price'] - ($cart['product_price'] * $cart['discount']/100)) * $cart['qty'];
											}
										}
										?>
                                    <li>Cart Subtotal<span><?=number_format($totalAmount)?>VNĐ</span></li>
                                    <li>Shipping<span>Free</span></li>
                                    <!-- <li>You Save<span>$20.00</span></li> -->
                                    <li class="last">You Pay<span><?=number_format($totalAmount)?>VNĐ</span></li>
                                </ul>
                                <div class="button5">
                                    <a href="../views/indexCheckout.php" class="btn">Checkout</a>
                                    <a href="#" class="btn">Continue shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <!--/ End Total Amount -->
            </div>
        </div>
    </div>
</div>
<!--/ End Shopping Cart -->