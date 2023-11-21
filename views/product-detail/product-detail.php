<div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "../images/<?=$cateName?>/<?=$proOne['product_image']?>" alt = "shoe image">
              <img src = "../images/<?=$cateName?>/<?=$proOne['image_dt1']?>" alt = "shoe image">
              <img src = "../images/<?=$cateName?>/<?=$proOne['image_dt2']?>" alt = "shoe image">
              <img src = "../images/<?=$cateName?>/<?=$proOne['image_dt3']?>" alt = "shoe image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "../images/<?=$cateName?>/<?=$proOne['product_image']?>" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "../images/<?=$cateName?>/<?=$proOne['image_dt1']?>" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "../images/<?=$cateName?>/<?=$proOne['image_dt2']?>" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "../images/<?=$cateName?>/<?=$proOne['image_dt3']?>" alt = "shoe image">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 style="margin-bottom:30px;" class = "product-title"><?=$proOne['product_name']?></h2>
          <a style="display:inline;" href = "#" class = "btn-grad"><?=$cateName?></a>
          <div style="margin-top:30px;" class = "product-rating">
          <i class="yellow fa fa-star"></i>
          <i class="yellow fa fa-star"></i>
          <i class="yellow fa fa-star"></i>
          <i class="yellow fa fa-star"></i>
          <i class="fa fa-star"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">Old Price: <span><?=number_format($proOne['product_price'])?>VNĐ</span></p>
            <p class = "new-price">New Price: <span><?=number_format($proOne['product_price'] - ($proOne['product_price'] * $proOne['discount']/100))?>VNĐ(<?=$proOne['discount']?>%)</span></p>
          </div>

          <div class = "product-detail">
            <h2>about this item: </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
          </div>

          <div class = "purchase-info">
            <input type = "number" min = "1" value = "1">
            <button type = "button" class = "btn">
              Add to Cart <i class="fa fa-cart-arrow-down"></i>
            </button>
            <button type = "button" class = "btn">Compare</button>
          </div>

          <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php include 'product-detail/rating-system.php';?>