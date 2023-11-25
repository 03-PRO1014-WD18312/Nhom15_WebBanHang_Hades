<!-- Start Most Popular -->
<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Item</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						<?php for ($i = 0; $i < count($listCate); $i++): ?>
						<?php foreach($listPro as $pro):?>
							<?php if ($pro['category'] == $listCate[$i]['id']): ?>
							<div class="single-product">
							<div class="product-img">
								<a href="../views/indexProdetail.php?id=<?=$pro['product_id']?>&act=loadOne&name=<?=$listCate[$i]['category_name']?>">
									<img class="default-img" src="../images/<?=$pro['product_image']?>" alt="#">
									<img class="hover-img" src="../images/<?=$pro['image_dt1']?>" alt="#">
									<?php if($pro['view'] > 30):?>
										<span class="out-of-stock">Hot</span>
										<?php elseif($pro['created_at'] > '2023-11-11'):?>
											<span class="new">New</span>
									<?php endif;?>
								</a>
								<div class="button-head">
									<div class="product-action">
									<a class="view-detail" data-id="<?php echo $pro['product_id'] ?>" title="Quick View"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
									<?php if($pro['product_qty'] == 0): ?>
									<del>Add to cart</del>
									<?php else:?>
									<a title="Add to cart" href="#">Add to cart</a>
									<?php endif;?>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="../views/indexProdetail.php?id=<?=$pro['product_id']?>&act=loadOne&name=<?=$listCate[$i]['category_name']?>"><?=$pro['product_name']?></a></h3>
								<div class="product-price">
									<span class="old"><?=number_format($pro['product_price'])?>VNĐ</span>
									<span><?=number_format($pro['product_price'] - ($pro['product_price'] * $pro['discount']/100))?>VNĐ</span>
								</div>
							</div>
						</div>
						<?php endif;?>
							<?php endforeach;?>
							<?php endfor;?>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<!-- <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div> -->
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<!-- <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									<span class="new">New</span>
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div> -->
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<!-- <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div> -->
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>