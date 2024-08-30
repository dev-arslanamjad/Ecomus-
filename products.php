<?php

include('connection.php');
include('templates/header.php');
?>
<style>
    .hover-quantity {
        opacity: 0;
        transform: translateY(100%);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .card-product:hover .hover-quantity {
        opacity: 1;
        transform: translateY(0);
    }
</style>
<div class="tf-breadcrumb">
    <div class="container">
        <div class="tf-breadcrumb-wrap d-flex justify-content-between flex-wrap align-items-center">
            <div class="tf-breadcrumb-list">
                <a href="index.html" class="text">Home</a>
                <i class="icon icon-arrow-right"></i>
                <a href="#" class="text">Women</a>
            </div>
            <div class="tf-breadcrumb-prev-next">
                <a href="#" class="tf-breadcrumb-prev hover-tooltip center">
                    <i class="icon icon-arrow-left"></i>
                </a>
                <a href="#" class="tf-breadcrumb-back hover-tooltip center">
                    <i class="icon icon-shop"></i>
                </a>
                <a href="#" class="tf-breadcrumb-next hover-tooltip center">
                    <i class="icon icon-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<section class="flat-spacing-1 pt_0">
    <div class="container">
        <div class="flat-title">
            <span class="title">Every Girl's Need</span>
        </div>
        <div class="hover-sw-nav hover-sw-2">
            <div class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                <div class="swiper-wrapper">
                    <div class="grid-layout loadmore-item" data-grid="grid-4">
                        <?php
                        $sql = "SELECT * FROM products";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $product_id = $row['id'];
                            $product_name  = $row['name'];
                            $product_image = $row['image'];
                            $product_model = $row['model'];
                            $product_discription = $row['discription'];
                            $product_price = $row['price'];
                            $product_quantity = $row['quantity'];
                            $product_status = $row['available']; ?>
                            <form action="addtocartcode.php" method="post">
                                <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
                                <input type="hidden" name="product_name" value="<?php echo $product_name ?>">
                                <input type="hidden" name="product_image" value="<?php echo $product_image ?>">
                                <input type="hidden" name="product_model" value="<?php echo $product_model ?>">
                                <input type="hidden" name="product_price" value="<?php echo $product_price ?>">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product_detail.php?id=<?php echo $product_id;?>" class="product-img">
                                            <img class="lazyload img-product" data-src="admin/<?php echo $product_image ?>" src="admin/<?php echo $product_image ?>" alt="image-product" style="width: 300px; height: 300px; object-fit: contain;">
                                            <img class="lazyload img-hover" data-src="admin/<?php echo $product_image ?>" src="admin/<?php echo $product_image ?>" alt="image-product" style="width: 300px; height: 300px; object-fit: contain;">
                                        </a>
                                        <div class="list-product-btn">
                                            <div class="tf-product-info-quantity mb_15 hover-quantity">
                                                <div class="quantity-title fw-6">Quantity</div>
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity minus-btn">-</span>
                                                    <input id="quantitycounter" type="text" name="quantity" value="1">
                                                    <span class="btn-quantity plus-btn">+</span>
                                                </div>
                                            </div>

                                            <div class="">
                                                <button type="submit" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                    <span class="icon icon-bag"></span>
                                                    <span class="tooltip">Quick Add</span>
                                                </button>
                                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="box-icon bg_white  tf-btn-loading">
                                                    <span class="icon icon-bag"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product_detail.php?id=<?php echo $product_id;?>" class="title link"><?php echo $product_name ?></a>
                                        <span href="product_detail.php?id=<?php echo $product_id;?>" class="title link"><?php echo $product_model ?></span>
                                        <span class="price"><?php echo $product_price ?>$</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Orange</span>
                                                <span class="swatch-value bg_orange-3"></span>
                                                <img class="lazyload" data-src="assets/frontend/images/products/orange-1.jpg" src="assets/frontend/images/products/orange-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="assets/frontend/images/products/black-1.jpg" src="assets/frontend/images/products/black-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="assets/frontend/images/products/white-1.jpg" src="assets/frontend/images/products/white-1.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /product -->




<!-- recent -->
<section class="flat-spacing-4 pt_0">
    <div class="container">
        <div class="flat-title">
            <span class="title">Recently Viewed</span>
        </div>
        <div class="hover-sw-nav hover-sw-2">
            <div class="swiper tf-sw-recent wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product">
                            <div class="card-product-wrapper">
                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/frontend/images/products/light-green-1.jpg" src="assets/frontend/images/products/light-green-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/frontend/images/products/light-green-2.jpg" src="assets/frontend/images/products/light-green-2.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="title link">Loose Fit Sweatshirt</a>
                                <span class="price">$10.00</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Light Green</span>
                                        <span class="swatch-value bg_light-green"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/light-green-1.jpg" src="assets/frontend/images/products/light-green-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/black-3.jpg" src="assets/frontend/images/products/black-3.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Blue</span>
                                        <span class="swatch-value bg_blue-2"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/blue.jpg" src="assets/frontend/images/products/blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Dark Blue</span>
                                        <span class="swatch-value bg_dark-blue"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/dark-blue.jpg" src="assets/frontend/images/products/dark-blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/white-6.jpg" src="assets/frontend/images/products/white-6.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Grey</span>
                                        <span class="swatch-value bg_light-grey"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/light-grey.jpg" src="assets/frontend/images/products/light-grey.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product">
                            <div class="card-product-wrapper">
                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/frontend/images/products/brown-2.jpg" src="assets/frontend/images/products/brown-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/frontend/images/products/brown-3.jpg" src="assets/frontend/images/products/brown-3.jpg" alt="image-product">
                                </a>
                                <div class="size-list">
                                    <span>S</span>
                                    <span>M</span>
                                    <span>L</span>
                                    <span>XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="title link">V-neck linen T-shirt</a>
                                <span class="price">$114.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Brown</span>
                                        <span class="swatch-value bg_brown"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/brown-2.jpg" src="assets/frontend/images/products/brown-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/white-5.jpg" src="assets/frontend/images/products/white-5.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product">
                            <div class="card-product-wrapper">
                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/frontend/images/products/white-2.jpg" src="assets/frontend/images/products/white-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/frontend/images/products/pink-1.jpg" src="assets/frontend/images/products/pink-1.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span>S</span>
                                    <span>M</span>
                                    <span>L</span>
                                    <span>XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="title">Oversized Printed T-shirt</a>
                                <span class="price">$16.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/white-2.jpg" src="assets/frontend/images/products/white-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Pink</span>
                                        <span class="swatch-value bg_purple"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/pink-1.jpg" src="assets/frontend/images/products/pink-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/black-2.jpg" src="assets/frontend/images/products/black-2.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product">
                            <div class="card-product-wrapper">
                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/frontend/images/products/white-3.jpg" src="assets/frontend/images/products/white-3.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/frontend/images/products/white-4.jpg" src="assets/frontend/images/products/white-4.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add to cart</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span>S</span>
                                    <span>M</span>
                                    <span>L</span>
                                    <span>XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="title link">Oversized Printed T-shirt</a>
                                <span class="price">$10.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product">
                            <div class="card-product-wrapper">
                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/frontend/images/products/brown.jpg" src="assets/frontend/images/products/brown.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/frontend/images/products/purple.jpg" src="assets/frontend/images/products/purple.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span>M</span>
                                    <span>L</span>
                                    <span>XL</span>
                                </div>
                                <div class="on-sale-wrap">
                                    <div class="on-sale-item">-33%</div>
                                </div>
                                <div class="countdown-box">
                                    <div class="js-countdown" data-timer="1007500" data-labels="d :,h :,m :,s"></div>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="title link">Ribbed modal T-shirt</a>
                                <span class="price">From $18.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Brown</span>
                                        <span class="swatch-value bg_brown"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/brown.jpg" src="assets/frontend/images/products/brown.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Purple</span>
                                        <span class="swatch-value bg_purple"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/purple.jpg" src="assets/frontend/images/products/purple.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Green</span>
                                        <span class="swatch-value bg_light-green"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/green.jpg" src="assets/frontend/images/products/green.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product">
                            <div class="card-product-wrapper">
                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/frontend/images/products/orange-1.jpg" src="assets/frontend/images/products/orange-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/frontend/images/products/white-1.jpg" src="assets/frontend/images/products/white-1.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span>S</span>
                                    <span>M</span>
                                    <span>L</span>
                                    <span>XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product_detail.php?id=<?php echo $product_id;?>" class="title link">Ribbed Tank Top</a>
                                <span class="price">$16.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Orange</span>
                                        <span class="swatch-value bg_orange-3"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/orange-1.jpg" src="assets/frontend/images/products/orange-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/black-1.jpg" src="assets/frontend/images/products/black-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="assets/frontend/images/products/white-1.jpg" src="assets/frontend/images/products/white-1.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-sw nav-next-slider nav-next-recent box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
            <div class="nav-sw nav-prev-slider nav-prev-recent box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
            <div class="sw-dots style-2 sw-pagination-recent justify-content-center"></div>
        </div>
    </div>
</section>

<?php
include('templates/footer.php');
?>

</div>



<!-- modal ask_question -->
<div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="ask_question">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">Ask a question</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="overflow-y-auto">
                <form class="">
                    <fieldset class="">
                        <label for="">Name *</label>
                        <input type="text" placeholder="" class="" name="text" tabindex="2" value=""
                            aria-required="true" required="">
                    </fieldset>
                    <fieldset class="">
                        <label for="">Email *</label>
                        <input type="email" placeholder="" class="" name="text" tabindex="2" value=""
                            aria-required="true" required="">
                    </fieldset>
                    <fieldset class="">
                        <label for="">Phone number</label>
                        <input type="number" placeholder="" class="" name="text" tabindex="2" value=""
                            aria-required="true" required="">
                    </fieldset>
                    <fieldset class="">
                        <label for="">Message</label>
                        <textarea name="message" rows="4" placeholder="" class="" tabindex="2" aria-required="true"
                            required=""></textarea>
                    </fieldset>
                    <button type="submit"
                        class="tf-btn w-100 btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn"><span>Send</span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /modal ask_question -->

<!-- modal delivery_return -->
<div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="delivery_return">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">Shipping & Delivery</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="overflow-y-auto">
                <div class="tf-product-popup-delivery">
                    <div class="title">Delivery</div>
                    <p class="text-paragraph">All orders shipped with UPS Express.</p>
                    <p class="text-paragraph">Always free shipping for orders over US $250.</p>
                    <p class="text-paragraph">All orders are shipped with a UPS tracking number.</p>
                </div>
                <div class="tf-product-popup-delivery">
                    <div class="title">Returns</div>
                    <p class="text-paragraph">Items returned within 14 days of their original shipment date in same
                        as new condition will be eligible for a full refund or store credit.</p>
                    <p class="text-paragraph">Refunds will be charged back to the original form of payment used for
                        purchase.</p>
                    <p class="text-paragraph">Customer is responsible for shipping charges when making returns and
                        shipping/handling fees of original purchase is non-refundable.</p>
                    <p class="text-paragraph">All sale items are final purchases.</p>
                </div>
                <div class="tf-product-popup-delivery">
                    <div class="title">Help</div>
                    <p class="text-paragraph">Give us a shout if you have any other questions and/or concerns.</p>
                    <p class="text-paragraph">Email: <a href="mailto:contact@domain.com"
                            aria-describedby="a11y-external-message"><span
                                class="__cf_email__">contact@domain.com</span></a></p>
                    <p class="text-paragraph mb-0">Phone: +1 (23) 456 789</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal delivery_return -->


<!-- modal share social -->
<!-- <div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="share_social">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">Share</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="overflow-y-auto">
                <ul class="tf-social-icon d-flex gap-10">
                    <li><a href="#" class="box-icon social-facebook bg_line"><i class="icon icon-fb"></i></a></li>
                    <li><a href="#" class="box-icon social-twiter bg_line"><i class="icon icon-Icon-x"></i></a></li>
                    <li><a href="#" class="box-icon social-instagram bg_line"><i class="icon icon-instagram"></i></a></li>
                    <li><a href="#" class="box-icon social-tiktok bg_line"><i class="icon icon-tiktok"></i></a></li>
                    <li><a href="#" class="box-icon social-pinterest bg_line"><i class="icon icon-pinterest-1"></i></a></li>
                </ul>
                <form class="form-share" method="post" accept-charset="utf-8">
                    <fieldset>
                        <input type="text" value="https://themesflat.co/html/ecomus/" tabindex="0" aria-required="true">
                    </fieldset>
                    <div class="button-submit">
                        <button class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn" type="button">Copy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
<!-- /modal share social -->
<!-- gotop -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
    </svg>
</div>
<!-- /gotop -->

<!-- shoppingCart -->
<?php
include('templates/cart.php');
?>
<!-- /shoppingCart -->

<!-- Javascript -->
<?php
include('templates/footerscripts.php');
?>
</body>

</html>