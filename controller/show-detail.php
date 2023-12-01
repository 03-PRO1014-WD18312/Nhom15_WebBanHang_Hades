<?php
include "../modal/pdo.php";
include "../modal/product.php";
$productId =  $_POST['id'];
$pro_detail = loadPopupPro($productId);
?>
<?php foreach ($pro_detail as $pr):?>
    <div class="row no-gutters">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <!-- Product Slider -->
            <div class="product-gallery">
                <div class="quickview-slider-active">
                    <div class="single-slider">
                        <img src="../images/<?=$pr['product_image']?>" style="width:550px;height:505px" alt="#">
                    </div>
                    <div class="single-slider">
                        <img src="../images/<?=$pr['image_dt1']?>" style="width:550px;height:505px" alt="#">
                    </div>
                    <div class="single-slider">
                        <img src="../images/<?=$pr['image_dt2']?>" style="width:550px;height:505px" alt="#">
                    </div>
                    <div class="single-slider">
                        <img src="../images/<?=$pr['image_dt3']?>" style="width:550px;height:505px" alt="#">
                    </div>
                </div>
            </div>
        <!-- End Product slider -->
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="quickview-content">
            <h2><?=$pr['product_name']?></h2>
            <div class="quickview-ratting-review">
                <!-- <div class="quickview-ratting-wrap">
                    <div class="quickview-ratting">
                        <i class="yellow fa fa-star"></i>
                        <i class="yellow fa fa-star"></i>
                        <i class="yellow fa fa-star"></i>
                        <i class="yellow fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="#"> (1 customer review)</a>
                </div> -->
                <div class="quickview-stock" style="margin-left:0px; margin-bottom:15px;">
                   <?php if($pr['product_qty'] >0):?>
                    <span><i class="fa fa-check-circle-o"></i> in stock</span>
                    <?php else:?>
                        <span style="color:red;"><i class="fa fa-check-circle-o"></i> out of stock</span>
                        <?php endif;?>
                </div>
            </div>
            <?php if($pr['discount'] >0):?>
            <h4><?=number_format($pr['product_price'] - ($pr['product_price'] * $pr['discount']/100))?>VNĐ</h4>
            <del style="color:red; font-weight:bold;"><?=number_format($pr['product_price'])?>VNĐ</del>
            <?php else:?>
            <h4><?=number_format($pr['product_price'])?>VNĐ</h4>
            <?php endif;?>
            <div class="quickview-peragraph">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
            </div>
            <div class="size">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h5 class="title">Size</h5>
                        <select>
                            <option selected="selected">s</option>
                            <option>m</option>
                            <option>l</option>
                            <option>xl</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-12">
                        <h5 class="title">Color</h5>
                        <select>
                            <option selected="selected">orange</option>
                            <option>purple</option>
                            <option>black</option>
                            <option>pink</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="quantity">
                <!-- Input Order -->
                <!-- <div class="input-group">
                    <div class="button minus">
                        <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                            <i class="ti-minus"></i>
                        </button>
                    </div>
                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                    <div class="button plus">
                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                            <i class="ti-plus"></i>
                        </button>
                    </div>
                </div> -->
                <input type = "number" class="input-num" min = "1" value = "1" max="1000">
                <!--/ End Input Order -->
            </div>
            <div class="add-to-cart">
               <?php if($pr['product_qty'] == 0): ?>
                <button href="#" class="btn" disabled>Add to cart</button>
                <?php else:?>
                    <a href="#" class="btn">Add to cart</a>
                <?php endif;?>
                <!-- <a href="#" class="btn min"><i class="ti-heart"></i></a>
                <a href="#" class="btn min"><i class="fa fa-compress"></i></a> -->
            </div>
            <div class="default-social">
                <h4 class="share-now">Share:</h4>
                <ul>
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- /End Footer Area -->
	<!-- Jquery -->
    <!-- <script src="../js/jquery.min.js"></script> -->
    <script src="../js/jquery-migrate-3.0.0.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="../js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="../js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="../js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="../js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="../js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="../js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="../js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="../js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="../js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="../js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="../js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="../js/easing.js"></script>
	<!-- Active JS -->
	<script src="../js/active.js"></script>
  

