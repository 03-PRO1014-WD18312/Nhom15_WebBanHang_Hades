<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Shop Grid</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Product Style -->
<section class="product-area shop-sidebar shop section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="shop-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget category">
                        <h3 class="title">Categories</h3>
                        <ul class="categor-list">
                            <?php foreach($listCate as $cate):?>
                            <li><a
                                    href="../views/indexProduct.php?id=<?=$cate['id']?>&act=loadCate"><?=$cate['category_name']?></a>
                                <?php endforeach;?>
                                <!-- <li><a href="#">T-shirts</a></li>
									<li><a href="#">jacket</a></li>
									<li><a href="#">jeans</a></li>
									<li><a href="#">sweatshirts</a></li>
									<li><a href="#">trousers</a></li>
									<li><a href="#">kitwears</a></li>
									<li><a href="#">accessories</a></li> -->
                        </ul>
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Shop By Price -->
                    <div class="single-widget range">
                        <h3 class="title">Shop by Price</h3>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <span>Range:</span><input type="text" id="amount" name="price"
                                            placeholder="Add Your Price" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="check-box-list">
                            <li>
                                <label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 -
                                    $50<span class="count">(3)</span></label>
                            </li>
                            <li>
                                <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 -
                                    $100<span class="count">(5)</span></label>
                            </li>
                            <li>
                                <label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 -
                                    $250<span class="count">(8)</span></label>
                            </li>
                        </ul>
                    </div>
                    <!--/ End Shop By Price -->
                    <!-- Single Widget -->
                    <div class="single-widget recent-post">
                        <h3 class="title">Recent post</h3>
                        <!-- Single Post -->
                        <div class="single-post first">
                            <?php for ($i = 0; $i < count($listCate); $i++): ?>
                            <!-- Single Post -->
                            <?php foreach($listRecent as $list):?>
                            <?php if ($list['category'] == $listCate[$i]['id']): ?>
                            <div class="single-post first">
                                <div class="image">
                                    <img src="../images/<?=$list['product_image']?>" alt="#">
                                </div>
                                <div class="content">
                                    <h5><a
                                            href="./indexProdetail.php?id=<?=$list['product_id']?>&act=loadOne&name=<?=$listCate[$i]['category_name']?>"><?=$list['product_name']?></a>
                                    </h5>
                                    <p class="price"><?=number_format($list['product_price'])?>VNĐ</p>
                                    <ul class="reviews">
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endif;?>
                            <?php endforeach;?>
                            <?php endfor;?>
                        </div>
                        <!-- End Single Post -->
                        <!-- Single Post -->
                        <!-- <div class="single-post first">
										<div class="image">
											<img src="https://via.placeholder.com/75x75" alt="#">
										</div>
										<div class="content">
											<h5><a href="#">Women Clothings</a></h5>
											<p class="price">$99.50</p>
											<ul class="reviews">
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li><i class="ti-star"></i></li>
											</ul>
										</div>
									</div> -->
                        <!-- End Single Post -->
                        <!-- Single Post -->
                        <!-- <div class="single-post first">
										<div class="image">
											<img src="https://via.placeholder.com/75x75" alt="#">
										</div>
										<div class="content">
											<h5><a href="#">Man Tshirt</a></h5>
											<p class="price">$99.50</p>
											<ul class="reviews">
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
											</ul>
										</div>
									</div> -->
                        <!-- End Single Post -->
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <!-- <div class="single-widget category">
									<h3 class="title">Manufacturers</h3>
									<ul class="categor-list">
										<li><a href="#">Forever</a></li>
										<li><a href="#">giordano</a></li>
										<li><a href="#">abercrombie</a></li>
										<li><a href="#">ecko united</a></li>
										<li><a href="#">zara</a></li>
									</ul>
								</div> -->
                    <!--/ End Single Widget -->
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <!-- Shop Top -->
                        <div class="shop-top">
                            <div class="shop-shorter">
                                <div class="single-shorter">
                                    <label>Show :</label>
                                    <select>
                                        <option selected="selected">09</option>
                                        <option>15</option>
                                        <option>25</option>
                                        <option>30</option>
                                    </select>
                                </div>
                                <div class="single-shorter">
                                    <label>Sort By :</label>
                                    <select>
                                        <option selected="selected">Name</option>
                                        <option>Price</option>
                                        <option>Size</option>
                                    </select>
                                </div>
                            </div>
                            <ul class="view-mode">
                                <div class="pagination">
                                    <a id="prevLink" href="?page=<?= $page - 1 ?>" class="prev-arrow"><i
                                            class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                    <?php if ($i === 1 || $i === $totalPages || ($i >= $page - 2 && $i <= $page + 2)) : ?>
                                    <a href="?page=<?= $i ?>" class="<?= $page === $i ? 'active' : '' ?>"><?= $i ?></a>
                                    <?php elseif ($i === $page - 3 || $i === $page + 3) : ?>
                                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                    <?php if($i === $page + 3):?>
                                    <a href="?page=<?= $totalPages ?>"
                                        class="<?= $page === $i ? 'active' : '' ?>"><?= $totalPages ?></a>
                                    <?php endif;?>
                                    <?php endif; ?>
                                    <?php endfor; ?>
                                    <a href="?page=<?= $page + 1 ?>" class="next-arrow"><i
                                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </ul>
                        </div>
                        <!--/ End Shop Top -->
                    </div>
                </div>
                <div id="searchResult">
               <div class="row">
                    <?php for ($i = 0; $i < count($listCate); $i++): ?>
                    <?php foreach ($loadProInCate as $pro): ?>
                    <?php if ($pro['category'] == $listCate[$i]['id']): ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a
                                    href="../views/indexProdetail.php?id=<?=$pro['product_id']?>&act=loadOne&name=<?=$listCate[$i]['category_name']?>">
                                    <img class="default-img" src="../images/<?=$pro['product_image']?>" alt="#">
                                    <img class="hover-img" src="../images/<?=$pro['image_dt1']?>" alt="#">
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a class="view-detail" data-id="<?php echo $pro['product_id'] ?>"
                                            title="Quick View"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
                                                Wishlist</span></a>
                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
                                                Compare</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <?php if($pro['product_qty'] == 0): ?>
                                        <del>Add to cart</del>
                                        <?php else:?>
                                        <a title="Add to cart" data-product-id="<?= $pro['product_id'] ?>"
                                            data-product-name="<?= $pro['product_name'] ?>"
                                            data-product-image="<?= $pro['product_image'] ?>"
                                            data-product-price="<?= ($pro['discount'] > 0) ? $pro['product_price'] - ($pro['product_price'] * $pro['discount']/100) : $pro['product_price'] ?>"
                                            data-product-qty="<?= $pro['product_qty'] ?>" class="buy-button">Add to
                                            cart</a>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a
                                        href="../views/indexProdetail.php?id=<?=$pro['product_id']?>&act=loadOne&name=<?=$listCate[$i]['category_name']?>">
                                        <?=$pro['product_name']?></a>
                                </h3>
                                <div class="product-price">
                                    <?php if($pro['discount'] >0):?>
                                    <span><?=number_format($pro['product_price'] - ($pro['product_price'] * $pro['discount']/100))?>VNĐ</span>
                                    <del style="color:red;"><?=number_format($pro['product_price'])?>VNĐ</del>
                                    <?php else:?>
                                    <span><?=number_format($pro['product_price'])?>VNĐ</span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                    <?php endforeach;?>
                    <?php endfor;?>
                </div>
               </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Product Style 1  -->