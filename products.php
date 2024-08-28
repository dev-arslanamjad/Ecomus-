<?php

include('connection.php');
include('templates/header.php');
?>
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
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" data-src="admin/<?php echo $product_image ?>" src="admin/<?php echo $product_image ?>" alt="image-product">
                                        <img class="lazyload img-hover" data-src="admin/<?php echo $product_image ?>" src="admin/<?php echo $product_image ?>" alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="#quick_add_<?php echo $product_id ?>" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
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
                                    <a href="product-detail.html" class="title link"><?php echo $product_name ?></a>
                                    <span href="product-detail.html" class="title link"><?php echo $product_model ?></span>
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
                            <div class="modal fade modalDemo" id="quick_add_<?php echo $product_id ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="header">
                                            <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                                        </div>
                                        <div class="wrap">
                                            <div class="tf-product-info-item">
                                                <div class="image">
                                                    <img src="assets/frontend/images/products/orange-1.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                    <a href="product-detail.html">Ribbed Tank Top</a>
                                                    <div class="tf-product-info-price">
                                                        <div class="price">$18.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tf-product-info-variant-picker mb_15">
                                                <div class="variant-picker-item">
                                                    <div class="variant-picker-label">
                                                        Color: <span class="fw-6 variant-picker-label-value">Orange</span>
                                                    </div>
                                                    <div class="variant-picker-values">
                                                        <input id="values-orange" type="radio" name="color" checked>
                                                        <label class="hover-tooltip radius-60" for="values-orange" data-value="Orange">
                                                            <span class="btn-checkbox bg-color-orange"></span>
                                                            <span class="tooltip">Orange</span>
                                                        </label>
                                                        <input id="values-black" type="radio" name="color">
                                                        <label class=" hover-tooltip radius-60" for="values-black" data-value="Black">
                                                            <span class="btn-checkbox bg-color-black"></span>
                                                            <span class="tooltip">Black</span>
                                                        </label>
                                                        <input id="values-white" type="radio" name="color">
                                                        <label class="hover-tooltip radius-60" for="values-white" data-value="White">
                                                            <span class="btn-checkbox bg-color-white"></span>
                                                            <span class="tooltip">White</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="variant-picker-item">
                                                    <div class="variant-picker-label">
                                                        Size: <span class="fw-6 variant-picker-label-value">S</span>
                                                    </div>
                                                    <div class="variant-picker-values">
                                                        <input type="radio" name="size" id="values-s" checked>
                                                        <label class="style-text" for="values-s" data-value="S">
                                                            <p>S</p>
                                                        </label>
                                                        <input type="radio" name="size" id="values-m">
                                                        <label class="style-text" for="values-m" data-value="M">
                                                            <p>M</p>
                                                        </label>
                                                        <input type="radio" name="size" id="values-l">
                                                        <label class="style-text" for="values-l" data-value="L">
                                                            <p>L</p>
                                                        </label>
                                                        <input type="radio" name="size" id="values-xl">
                                                        <label class="style-text" for="values-xl" data-value="XL">
                                                            <p>XL</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tf-product-info-quantity mb_15">
                                                <div class="quantity-title fw-6">Quantity</div>
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity minus-btn">-</span>
                                                    <input type="text" name="number" value="1">
                                                    <span class="btn-quantity plus-btn">+</span>
                                                </div>
                                            </div>
                                            <div class="tf-product-info-buy-button">
                                                <form class="">
                                                    <a href="#" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn "><span>Add to cart -&nbsp;</span><span class="tf-qty-price">$18.00</span></a>
                                                    <div class="tf-product-btn-wishlist btn-icon-action">
                                                        <i class="icon-heart"></i>
                                                        <i class="icon-delete"></i>
                                                    </div>
                                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist box-icon bg_white compare btn-icon-action">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="icon icon-check"></span>
                                                    </a>
                                                    <div class="w-100">
                                                        <a href="#" class="btns-full">Buy with <img src="assets/frontend/images/payments/paypal.png" alt=""></a>
                                                        <a href="#" class="payment-more-option">More payment options</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <a href="product-detail.html" class="product-img">
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
                                <a href="product-detail.html" class="title link">Loose Fit Sweatshirt</a>
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
                                <a href="product-detail.html" class="product-img">
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
                                <a href="product-detail.html" class="title link">V-neck linen T-shirt</a>
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
                                <a href="product-detail.html" class="product-img">
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
                                <a href="product-detail.html" class="title">Oversized Printed T-shirt</a>
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
                                <a href="product-detail.html" class="product-img">
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
                                <a href="product-detail.html" class="title link">Oversized Printed T-shirt</a>
                                <span class="price">$10.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
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
                                <a href="product-detail.html" class="title link">Ribbed modal T-shirt</a>
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
                                <a href="product-detail.html" class="product-img">
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
                                <a href="product-detail.html" class="title link">Ribbed Tank Top</a>
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
<div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="share_social">
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
</div>
<!-- /modal share social -->
<!-- gotop -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
    </svg>
</div>
<!-- /gotop -->

<!-- toolbar-bottom -->
<div class="tf-toolbar-bottom type-1150">
    <div class="toolbar-item active">
        <a href="#toolbarShopmb" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
            <div class="toolbar-icon">
                <i class="icon-shop"></i>
            </div>
            <div class="toolbar-label">Shop</div>
        </a>
    </div>

    <div class="toolbar-item">
        <a href="#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
            <div class="toolbar-icon">
                <i class="icon-search"></i>
            </div>
            <div class="toolbar-label">Search</div>
        </a>
    </div>
    <div class="toolbar-item">
        <a href="#login" data-bs-toggle="modal">
            <div class="toolbar-icon">
                <i class="icon-account"></i>
            </div>
            <div class="toolbar-label">Account</div>
        </a>
    </div>
    <div class="toolbar-item">
        <a href="wishlist.html">
            <div class="toolbar-icon">
                <i class="icon-heart"></i>
                <div class="toolbar-count">0</div>
            </div>
            <div class="toolbar-label">Wishlist</div>
        </a>
    </div>
    <div class="toolbar-item">
        <a href="#shoppingCart" data-bs-toggle="modal">
            <div class="toolbar-icon">
                <i class="icon-bag"></i>
                <div class="toolbar-count">1</div>
            </div>
            <div class="toolbar-label">Cart</div>
        </a>
    </div>
</div>
<!-- /toolbar-bottom -->

<!-- mobile menu -->
<div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    <div class="mb-canvas-content">
        <div class="mb-body">
            <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-one" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-one">
                        <span>Home</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-one" class="collapse">
                        <ul class="sub-nav-menu">
                            <li><a href="index.html" class="sub-nav-link">Home Fashion 01</a></li>
                            <li><a href="home-02.html" class="sub-nav-link">Home Fashion 02</a></li>
                            <li><a href="home-03.html" class="sub-nav-link">Home Fashion 03</a></li>
                            <li><a href="home-04.html" class="sub-nav-link">Home Fashion 04</a></li>
                            <li><a href="home-05.html" class="sub-nav-link">Home Fashion 05</a></li>
                            <li><a href="home-06.html" class="sub-nav-link">Home Fashion 06</a></li>
                            <li><a href="home-07.html" class="sub-nav-link">Home Fashion 07</a></li>
                            <li><a href="home-08.html" class="sub-nav-link">Home Fashion 08</a></li>
                            <li><a href="home-giftcard.html" class="sub-nav-link">Home Gift Card</a></li>
                            <li><a href="home-headphone.html" class="sub-nav-link">Home Headphone</a></li>
                            <li><a href="home-multi-brand.html" class="sub-nav-link">Home Multi Brand</a></li>
                            <li><a href="home-skincare.html" class="sub-nav-link">Home skincare</a></li>
                        </ul>
                    </div>

                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-two" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-two">
                        <span>Shop</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-two" class="collapse">
                        <ul class="sub-nav-menu" id="sub-menu-navigation">
                            <li><a href="#sub-shop-one" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-one">
                                    <span>Shop layouts</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-shop-one" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="shop-default.html" class="sub-nav-link">Default</a></li>
                                        <li><a href="shop-left-sidebar.html" class="sub-nav-link">Left sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html" class="sub-nav-link">Right sidebar</a></li>
                                        <li><a href="shop-fullwidth.html" class="sub-nav-link">Fullwidth</a></li>
                                        <li><a href="shop-collection-sub.html" class="sub-nav-link">Sub collection</a></li>
                                        <li><a href="shop-collection-list.html" class="sub-nav-link">Collections list</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sub-shop-two" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-two">
                                    <span>Features</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-shop-two" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="shop-link.html" class="sub-nav-link">Pagination links</a></li>
                                        <li><a href="shop-loadmore.html" class="sub-nav-link">Pagination loadmore</a></li>
                                        <li><a href="shop-infinite-scrolling.html" class="sub-nav-link">Pagination infinite scrolling</a></li>
                                        <li><a href="shop-filter-sidebar.html" class="sub-nav-link">Filter sidebar</a></li>
                                        <li><a href="shop-filter-hidden.html" class="sub-nav-link">Filter hidden</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sub-shop-three" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-three">
                                    <span>Product styles</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-shop-three" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="product-style-list.html" class="sub-nav-link">Product style list</a></li>
                                        <li><a href="product-style-01.html" class="sub-nav-link">Product style 01</a></li>
                                        <li><a href="product-style-02.html" class="sub-nav-link">Product style 02</a></li>
                                        <li><a href="product-style-03.html" class="sub-nav-link">Product style 03</a></li>
                                        <li><a href="product-style-04.html" class="sub-nav-link">Product style 04</a></li>
                                        <li><a href="product-style-05.html" class="sub-nav-link">Product style 05</a></li>
                                        <li><a href="product-style-06.html" class="sub-nav-link">Product style 06</a></li>
                                        <li><a href="product-style-07.html" class="sub-nav-link">Product style 07</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-three" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-three">
                        <span>Products</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-three" class="collapse">
                        <ul class="sub-nav-menu" id="sub-menu-navigation">
                            <li>
                                <a href="#sub-product-one" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-one">
                                    <span>Product layouts</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-product-one" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="product-detail.html" class="sub-nav-link">Product default</a></li>
                                        <li><a href="product-grid-1.html" class="sub-nav-link">Product grid 1</a></li>
                                        <li><a href="product-grid-2.html" class="sub-nav-link">Product grid 2</a></li>
                                        <li><a href="product-stacked.html" class="sub-nav-link">Product stacked</a></li>
                                        <li><a href="product-right-thumbnails.html" class="sub-nav-link">Product right thumbnails</a></li>
                                        <li><a href="product-bottom-thumbnails.html" class="sub-nav-link">Product bottom thumbnails</a></li>
                                        <li><a href="product-drawer-sidebar.html" class="sub-nav-link">Product drawer sidebar</a></li>
                                        <li><a href="product-description-accordion.html" class="sub-nav-link">Product description accordion</a></li>
                                        <li><a href="product-description-list.html" class="sub-nav-link">Product description list</a></li>
                                        <li><a href="product-description-vertical.html" class="sub-nav-link">Product description vertical</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sub-product-two" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-two">
                                    <span>Product details</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-product-two" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="product-inner-zoom.html" class="sub-nav-link">Product inner zoom</a></li>
                                        <li><a href="product-zoom-magnifier.html" class="sub-nav-link">Product zoom magnifier</a></li>
                                        <li><a href="product-no-zoom.html" class="sub-nav-link">Product no zoom</a></li>
                                        <li><a href="product-photoswipe-popup.html" class="sub-nav-link">Product photoswipe popup</a></li>
                                        <li><a href="product-zoom-popup.html" class="sub-nav-link">Product external zoom and photoswipe popup</a></li>
                                        <li><a href="product-video.html" class="sub-nav-link">Product video</a></li>
                                        <li><a href="product-3d.html" class="sub-nav-link">Product 3D, AR models</a></li>
                                        <li><a href="product-options-customizer.html" class="sub-nav-link">Product options & customizer</a></li>
                                        <li><a href="product-advanced-types.html" class="sub-nav-link">Advanced product types</a></li>
                                        <li><a href="product-giftcard.html" class="sub-nav-link">Recipient information form for gift card products</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sub-product-three" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-three">
                                    <span>Product swatchs</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-product-three" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="product-color-swatch.html" class="sub-nav-link">Product color swatch</a></li>
                                        <li><a href="product-rectangle.html" class="sub-nav-link">Product rectangle</a></li>
                                        <li><a href="product-rectangle-color.html" class="sub-nav-link">Product rectangle color</a></li>
                                        <li><a href="product-swatch-image.html" class="sub-nav-link">Product swatch image</a></li>
                                        <li><a href="product-swatch-image-rounded.html" class="sub-nav-link">Product swatch image rounded</a></li>
                                        <li><a href="product-swatch-dropdown.html" class="sub-nav-link">Product swatch dropdown</a></li>
                                        <li><a href="product-swatch-dropdown-color.html" class="sub-nav-link">Product swatch dropdown color</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sub-product-four" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-four">
                                    <span>Product features</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-product-four" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="product-frequently-bought-together.html" class="sub-nav-link">Frequently bought together</a></li>
                                        <li><a href="product-frequently-bought-together-2.html" class="sub-nav-link">Frequently bought together 2</a></li>
                                        <li><a href="product-upsell-features.html" class="sub-nav-link">Product upsell features</a></li>
                                        <li><a href="product-pre-orders.html" class="sub-nav-link">Product pre-orders</a></li>
                                        <li><a href="product-notification.html" class="sub-nav-link">Back in stock notification</a></li>
                                        <li><a href="product-pickup.html" class="sub-nav-link">Product pickup</a></li>
                                        <li><a href="product-images-grouped.html" class="sub-nav-link">Variant images grouped</a></li>
                                        <li><a href="product-complimentary.html" class="sub-nav-link">Complimentary products</a></li>
                                        <li><a href="product-quick-order-list.html" class="sub-nav-link line-clamp">Quick order list<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-four" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-four">
                        <span>Pages</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-four" class="collapse">
                        <ul class="sub-nav-menu" id="sub-menu-navigation">
                            <li><a href="about-us.html" class="sub-nav-link">About us</a></li>
                            <li><a href="brands.html" class="sub-nav-link line-clamp">Brands<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                            <li><a href="brands-v2.html" class="sub-nav-link">Brands V2</a></li>
                            <li><a href="contact-1.html" class="sub-nav-link">Contact 1</a></li>
                            <li><a href="contact-2.html" class="sub-nav-link">Contact 2</a></li>
                            <li><a href="faq-1.html" class="sub-nav-link">FAQ 01</a></li>
                            <li><a href="faq-2.html" class="sub-nav-link">FAQ 02</a></li>
                            <li><a href="our-store.html" class="sub-nav-link">Our store</a></li>
                            <li><a href="store-locations.html" class="sub-nav-link">Store locator</a></li>
                            <li><a href="timeline.html" class="sub-nav-link line-clamp">Timeline<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                            <li><a href="view-cart.html" class="sub-nav-link line-clamp">View cart</a></li>
                        </ul>
                    </div>

                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-five" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-five">
                        <span>Blog</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-five" class="collapse">
                        <ul class="sub-nav-menu">
                            <li><a href="blog-grid.html" class="sub-nav-link">Grid layout</a></li>
                            <li><a href="blog-sidebar-left.html" class="sub-nav-link">Left sidebar</a></li>
                            <li><a href="blog-sidebar-right.html" class="sub-nav-link">Right sidebar</a></li>
                            <li><a href="blog-list.html" class="sub-nav-link">Blog list</a></li>
                            <li><a href="blog-detail.html" class="sub-nav-link">Single Post</a></li>
                        </ul>
                    </div>

                </li>
                <li class="nav-mb-item">
                    <a href="#" class="mb-menu-link">Buy now</a>
                </li>
            </ul>
            <div class="mb-other-content">
                <div class="d-flex group-icon">
                    <a href="wishlist.html" class="site-nav-icon"><i class="icon icon-heart"></i>Wishlist</a>
                    <a href="#" class="site-nav-icon"><i class="icon icon-search"></i>Search</a>
                </div>
                <div class="mb-notice">
                    <a href="contact-1.html" class="text-need">Need help ?</a>
                </div>
                <ul class="mb-info">
                    <li>Address: 1234 Fashion Street, Suite 567, <br> New York, NY 10001</li>
                    <li>Email: <b>info@fashionshop.com</b></li>
                    <li>Phone: <b>(212) 555-1234</b></li>
                </ul>
            </div>
        </div>
        <div class="mb-bottom">
            <a href="login.html" class="site-nav-icon"><i class="icon icon-account"></i>Login</a>
            <div class="bottom-bar-language">
                <div class="tf-currencies">
                    <select class="image-select center style-default type-currencies">
                        <option data-thumbnail="assets/frontend/images/country/fr.svg">EUR <span>€ | France</span></option>
                        <option data-thumbnail="assets/frontend/images/country/de.svg">EUR <span>€ | Germany</span></option>
                        <option selected data-thumbnail="assets/frontend/images/country/us.svg">USD <span>$ | United States</span></option>
                        <option data-thumbnail="assets/frontend/images/country/vn.svg">VND <span>₫ | Vietnam</span></option>
                    </select>
                </div>
                <div class="tf-languages">
                    <select class="image-select center style-default type-languages">
                        <option>English</option>
                        <option>العربية</option>
                        <option>简体中文</option>
                        <option>اردو</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /mobile menu -->



<!-- canvasSearch -->
<div class="offcanvas offcanvas-end canvas-search" id="canvasSearch">
    <div class="canvas-wrapper">
        <header class="tf-search-head">
            <div class="title fw-5">
                Search our site
                <div class="close">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                </div>
            </div>
            <div class="tf-search-sticky">
                <form class="tf-mini-search-frm">
                    <fieldset class="text">
                        <input type="text" placeholder="Search" class="" name="text" tabindex="0" value="" aria-required="true" required="">
                    </fieldset>
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </form>
            </div>
        </header>
        <div class="canvas-body p-0">
            <div class="tf-search-content">
                <div class="tf-cart-hide-has-results">
                    <div class="tf-col-quicklink">
                        <div class="tf-search-content-title fw-5">Quick link</div>
                        <ul class="tf-quicklink-list">
                            <li class="tf-quicklink-item">
                                <a href="shop-default.html" class="">Fashion</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="shop-default.html" class="">Men</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="shop-default.html" class="">Women</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="shop-default.html" class="">Accessories</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tf-col-content">
                        <div class="tf-search-content-title fw-5">Need some inspiration?</div>
                        <div class="tf-search-hidden-inner">
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="product-detail.html">
                                        <img src="assets/frontend/images/products/white-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="product-detail.html">Cotton jersey top</a>
                                    <div class="tf-product-info-price">
                                        <div class="compare-at-price">$10.00</div>
                                        <div class="price-on-sale fw-6">$8.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="product-detail.html">
                                        <img src="assets/frontend/images/products/white-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="product-detail.html">Mini crossbody bag</a>
                                    <div class="tf-product-info-price">
                                        <div class="price fw-6">$18.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="product-detail.html">
                                        <img src="assets/frontend/images/products/white-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="product-detail.html">Oversized Printed T-shirt</a>
                                    <div class="tf-product-info-price">
                                        <div class="price fw-6">$18.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /canvasSearch -->

<!-- toolbarShopmb -->
<div class="offcanvas offcanvas-start canvas-mb toolbar-shop-mobile" id="toolbarShopmb">
    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    <div class="mb-canvas-content">
        <div class="mb-body">
            <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                <li class="nav-mb-item">
                    <a href="shop-default.html" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate1.jpg" alt="">
                        </div>
                        <span>Accessories</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.html" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate2.jpg" alt="">
                        </div>
                        <span>Dog</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.html" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate3.jpg" alt="">
                        </div>
                        <span>Grocery</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.html" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate4.png" alt="">
                        </div>
                        <span>Handbag</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="#cate-menu-one" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-one">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate5.jpg" alt="">
                        </div>
                        <span>Fashion</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="cate-menu-one" class="collapse list-cate">
                        <ul class="sub-nav-menu" id="cate-menu-navigation">
                            <li>
                                <a href="#cate-shop-one" class="tf-category-link has-children sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-shop-one">
                                    <div class="image">
                                        <img src="assets/frontend/images/shop/cate/cate6.jpg" alt="">
                                    </div>
                                    <span>Mens</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="cate-shop-one" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li>
                                            <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="assets/frontend/images/shop/cate/cate1.jpg" alt="">
                                                </div>
                                                <span>Accessories</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="assets/frontend/images/shop/cate/cate8.jpg" alt="">
                                                </div>
                                                <span>Shoes</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#cate-shop-two" class="tf-category-link has-children sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-shop-two">
                                    <div class="image">
                                        <img src="assets/frontend/images/shop/cate/cate9.jpg" alt="">
                                    </div>
                                    <span>Womens</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="cate-shop-two" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li>
                                            <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="assets/frontend/images/shop/cate/cate4.png" alt="">
                                                </div>
                                                <span>Handbag</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="assets/frontend/images/shop/cate/cate7.jpg" alt="">
                                                </div>
                                                <span>Tee</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-mb-item">
                    <a href="#cate-menu-two" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-two">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate6.jpg" alt="">
                        </div>
                        <span>Men</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="cate-menu-two" class="collapse list-cate">
                        <ul class="sub-nav-menu" id="cate-menu-navigation1">
                            <li>
                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="assets/frontend/images/shop/cate/cate1.jpg" alt="">
                                    </div>
                                    <span>Accessories</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="assets/frontend/images/shop/cate/cate8.jpg" alt="">
                                    </div>
                                    <span>Shoes</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.html" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate7.jpg" alt="">
                        </div>
                        <span>Tee</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.html" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate8.jpg" alt="">
                        </div>
                        <span>Shoes</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="#cate-menu-three" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-three">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate9.jpg" alt="">
                        </div>
                        <span>Women</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="cate-menu-three" class="collapse list-cate">
                        <ul class="sub-nav-menu" id="cate-menu-navigation2">
                            <li>
                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="assets/frontend/images/shop/cate/cate4.png" alt="">
                                    </div>
                                    <span>Handbag</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="assets/frontend/images/shop/cate/cate7.jpg" alt="">
                                    </div>
                                    <span>Tee</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="mb-bottom">
            <a href="shop-default.html" class="tf-btn fw-5 btn-line">View all collection<i class="icon icon-arrow1-top-left"></i></a>
        </div>
    </div>
</div>
<!-- /toolbarShopmb -->

<!-- modal login -->
<div class="modal modalCentered fade form-sign-in modal-part-content" id="login">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">Log in</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="tf-login-form">
                <form class="">
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="email" name="">
                        <label class="tf-field-label" for="">Email *</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="password" name="">
                        <label class="tf-field-label" for="">Password *</label>
                    </div>
                    <div>
                        <a href="#forgotPassword" data-bs-toggle="modal" class="btn-link link">Forgot your password?</a>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <a href="login.html" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Log in</span></a>
                        </div>
                        <div class="w-100">
                            <a href="#register" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                New customer? Create your account
                                <i class="icon icon-arrow1-top-left"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal modalCentered fade form-sign-in modal-part-content" id="forgotPassword">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">Reset your password</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="tf-login-form">
                <form class="">
                    <div>
                        <p>Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt out, click unsubscribe in our emails</p>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="email" name="">
                        <label class="tf-field-label" for="">Email *</label>
                    </div>
                    <div>
                        <a href="#login" data-bs-toggle="modal" class="btn-link link">Cancel</a>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Reset password</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal modalCentered fade form-sign-in modal-part-content" id="register">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">Register</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="tf-login-form">
                <form class="">
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="text" name="">
                        <label class="tf-field-label" for="">First name</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="text" name="">
                        <label class="tf-field-label" for="">Last name</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="email" name="">
                        <label class="tf-field-label" for="">Email *</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="password" name="">
                        <label class="tf-field-label" for="">Password *</label>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <a href="register.html" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Register</span></a>
                        </div>
                        <div class="w-100">
                            <a href="#login" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                Already have an account? Log in here
                                <i class="icon icon-arrow1-top-left"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /modal login -->

<!-- shoppingCart -->
<div class="modal fullRight fade modal-shopping-cart" id="shoppingCart">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="header">
                <div class="title fw-5">Shopping cart</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="wrap">
                <div class="tf-mini-cart-threshold">
                    <div class="tf-progress-bar">
                        <span style="width: 50%;"></span>
                    </div>
                    <div class="tf-progress-msg">
                        Spend <span class="price fw-6">$75.00</span> more to enjoy <span class="fw-6">Free Shipping</span>
                    </div>
                </div>
                <?php $userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : ''; ?>
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="tf-mini-cart-wrap">
                    <?php if (!empty($_SESSION['cart'])): ?>
                        <div class="tf-mini-cart-main">
                            <div class="tf-mini-cart-sroll">
                                <div class="tf-mini-cart-items">
                                    <?php
                                    $subtotal = 0;
                                    foreach ($_SESSION['cart'] as $product):
                                        $quantity = isset($product['quantity']) ? $product['quantity'] : 1;
                                        $subtotal += $product['price'] * $quantity;
                                    ?>
                                        <div class="tf-mini-cart-item" id="cart-item-<?php echo $product['id']; ?>">
                                            <div class="tf-mini-cart-image">
                                                <a href="">
                                                    <img src="admin/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                                                </a>
                                            </div>
                                            <div class="tf-mini-cart-info">
                                                <a class="title link" href=""><?php echo $product['name']; ?></a>
                                                <div class="meta-variant"><?php echo $product['model']; ?></div>
                                                <div class="price fw-6"><?php echo $product['price']; ?>$</div>
                                                <div class="tf-mini-cart-btns">
                                                    <div class="wg-quantity small">
                                                        <label for="">Quantity :</label>
                                                        <input id="quantity-<?php echo $product['id']; ?>" type="text" name="number" value="<?php echo $quantity; ?>" readonly>
                                                    </div>
                                                    <a href="removefromcart.php?id=<?php echo $product['id']; ?>" class="tf-mini-cart-remove bg-none">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tf-mini-cart-bottom">
                            <div class="tf-mini-cart-bottom-wrap">
                                <div class="tf-cart-totals-discounts">
                                    <div class="tf-cart-total">Subtotal</div>
                                    <div class="tf-totals-total-value fw-6"><?php echo $subtotal; ?>$</div>
                                </div>
                                <div>
                                    <div class="tf-cart-tax">Taxes and <a href="#">shipping</a> calculated at checkout</div>
                                    <div class="tf-mini-cart-line"></div>
                                    <div class="tf-cart-checkbox">
                                        <div class="tf-checkbox-wrapp">
                                            <input class="" type="checkbox" id="CartDrawer-Form_agree" name="agree_checkbox" required>
                                            <div>
                                                <i class="icon-check"></i>
                                            </div>
                                        </div>
                                        <label for="CartDrawer-Form_agree">I agree with the <a href="#" title="Terms of Service">terms and conditions</a></label>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-view-checkout">
                                </div>
                                <?php if (!empty($_SESSION['userid'])): ?>
                                    <div class="dropdown col-12">
                                        <button type="button" class="tf-btn btn-fill justify-content-center fw-6 fs-16 w-100 animate-hover-btn dropdown-toggle animate__animated animate__fadeIn" id="paymentDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            Payment Method
                                        </button>
                                        <ul class="dropdown-menu w-100 animate__animated animate__fadeIn" aria-labelledby="paymentDropdown">
                                            <li class="mb-1 animate__animated animate__fadeInUp">
                                                <a href="stripe_form.php" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center" style="background-color: #000000 !important; border: unset;"><span>Pay with <img width="55px" src="assets/frontend/images/payments/stripe.png" alt=""></span></a>
                                            </li>

                                            <li class="animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                                                <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center" style="background-color: #ffa500 !important; border: unset;"><span>Pay with <img src="assets/frontend/images/payments/paypal.png" alt=""></span></button>
                                            </li>
                                        </ul>
                                    </div>
                                <?php else: ?>
                                    <div class="dropdown col-12">
                                        <button type="button" class="tf-btn btn-fill justify-content-center fw-6 fs-16 w-100 animate-hover-btn dropdown-toggle animate__animated animate__fadeIn" id="paymentDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            Payment Method
                                        </button>
                                        <ul class="dropdown-menu w-100 animate__animated animate__fadeIn" aria-labelledby="paymentDropdown">
                                            <li class="mb-1 animate__animated animate__fadeInUp">
                                                <a href="login.php" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center" style="background-color: #000000 !important; border: unset;"><span>Pay with <img width="55px" src="assets/frontend/images/payments/stripe.png" alt=""></span></a>
                                            </li>

                                            <li class="animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                                                <a href="login.php" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center" style="background-color: #ffa500 !important; border: unset;"><span>Pay with <img src="assets/frontend/images/payments/paypal.png" alt=""></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                <?php
                                    $_SESSION['message'] = 'Login first to continue';
                                endif; ?>
                            </div>
                        </div>
                        <input type="hidden" name="business" value="sb-tsjfw32273766@business.example.com">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="amount" value="<?php echo $subtotal; ?>">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="return" value="http://localhost/Ecommerce/payment_success.php?userid=<?php echo htmlspecialchars($userid); ?>">
                    <?php else: ?>
                        <div class="emptycart">
                            <div class="emptycart-icon d-flex justify-content-center align-items-center flex-column">
                                <img width="300px" src="assets/frontend/vecteezy_young-man-shopping-push-empty-shopping-trolley_4964514.svg" alt="">
                                <h5 class="emptycart-icon-text">Your cart is empty</h5>
                            </div>
                        </div>
                    <?php endif; ?>
                </form>
                <?php include('templates/footerscripts.php') ?>
                </body>
                <script>
                    setTimeout(function() {
                        var message = document.querySelector('.response-message');
                        message.style.opacity = '0';
                        setTimeout(function() {
                            message.style.display = 'none';
                        }, 500);
                    }, 2000);
                </script>
                <script>
                    function removeFromCart(productId) {
                        fetch('removefromcart.php', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                },
                                body: 'product_id=' + productId
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    let cartItem = document.getElementById('cart-item-' + productId);
                                    if (cartItem) {
                                        cartItem.remove();
                                    }
                                    updateSubtotal();
                                } else {
                                    console.error('Failed to remove item from cart');
                                }
                            })
                            .catch((error) => {
                                console.error('Error:', error);
                            });
                    }

                    function updateQuantity(productId, change) {
                        let quantityInput = document.getElementById('quantity-' + productId);
                        let newQuantity = parseInt(quantityInput.value) + change;
                        if (newQuantity < 1) newQuantity = 1;

                        fetch('updatequantity.php', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                },
                                body: 'product_id=' + productId + '&quantity=' + newQuantity
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    quantityInput.value = newQuantity;
                                    updateSubtotal();
                                } else {
                                    console.error('Failed to update quantity');
                                }
                            })
                            .catch((error) => {
                                console.error('Error:', error);
                            });
                    }

                    function updateSubtotal() {
                        fetch('getsubtotal.php')
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    document.querySelector('.tf-totals-total-value').textContent = data.subtotal + '$';
                                } else {
                                    console.error('Failed to get updated subtotal');
                                }
                            })
                            .catch((error) => {
                                console.error('Error:', error);
                            });
                    }
                </script>
                <!-- /shoppingCart -->

                <!-- modal compare -->
                <div class="offcanvas offcanvas-bottom canvas-compare" id="compare">
                    <div class="canvas-wrapper">
                        <header class="canvas-header">
                            <div class="close-popup">
                                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                            </div>
                        </header>
                        <div class="canvas-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tf-compare-list">
                                            <div class="tf-compare-head">
                                                <div class="title">Compare Products</div>
                                            </div>
                                            <div class="tf-compare-offcanvas">
                                                <div class="tf-compare-item">
                                                    <div class="position-relative">
                                                        <div class="icon">
                                                            <i class="icon-close"></i>
                                                        </div>
                                                        <a href="product-detail.html">
                                                            <img class="radius-3" src="assets/frontend/images/products/orange-1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tf-compare-item">
                                                    <div class="position-relative">
                                                        <div class="icon">
                                                            <i class="icon-close"></i>
                                                        </div>
                                                        <a href="product-detail.html">
                                                            <img class="radius-3" src="assets/frontend/images/products/pink-1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tf-compare-buttons">
                                                <div class="tf-compare-buttons-wrap">
                                                    <a href="compare.html" class="tf-btn radius-3 btn-fill justify-content-center fw-6 fs-14 flex-grow-1 animate-hover-btn ">Compare</a>
                                                    <div class="tf-compapre-button-clear-all link">
                                                        Clear All
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /modal compare -->

                <!-- modal quick_add -->

                <!-- /modal quick_add -->

                <!-- modal quick_view -->
                <div class="modal fade modalDemo" id="quick_view">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="header">
                                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                            </div>
                            <div class="wrap">
                                <div class="tf-product-media-wrap">
                                    <div class="swiper tf-single-slide">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <img src="assets/frontend/images/products/orange-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <img src="assets/frontend/images/products/pink-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-button-next button-style-arrow single-slide-prev"></div>
                                        <div class="swiper-button-prev button-style-arrow single-slide-next"></div>
                                    </div>
                                </div>
                                <div class="tf-product-info-wrap position-relative">
                                    <div class="tf-product-info-list">
                                        <div class="tf-product-info-title">
                                            <h5><a class="link" href="product-detail.html">Ribbed Tank Top</a></h5>
                                        </div>
                                        <div class="tf-product-info-badges">
                                            <div class="badges text-uppercase">Best seller</div>
                                            <div class="product-status-content">
                                                <i class="icon-lightning"></i>
                                                <p class="fw-6">Selling fast! 48 people have this in their carts.</p>
                                            </div>
                                        </div>
                                        <div class="tf-product-info-price">
                                            <div class="price">$18.00</div>
                                        </div>
                                        <div class="tf-product-description">
                                            <p>Nunc arcu faucibus a et lorem eu a mauris adipiscing conubia ac aptent ligula facilisis a auctor habitant parturient a a.Interdum fermentum.</p>
                                        </div>
                                        <div class="tf-product-info-variant-picker">
                                            <div class="variant-picker-item">
                                                <div class="variant-picker-label">
                                                    Color: <span class="fw-6 variant-picker-label-value">Orange</span>
                                                </div>
                                                <div class="variant-picker-values">
                                                    <input id="values-orange-1" type="radio" name="color-1" checked>
                                                    <label class="hover-tooltip radius-60" for="values-orange-1" data-value="Orange">
                                                        <span class="btn-checkbox bg-color-orange"></span>
                                                        <span class="tooltip">Orange</span>
                                                    </label>
                                                    <input id="values-black-1" type="radio" name="color-1">
                                                    <label class=" hover-tooltip radius-60" for="values-black-1" data-value="Black">
                                                        <span class="btn-checkbox bg-color-black"></span>
                                                        <span class="tooltip">Black</span>
                                                    </label>
                                                    <input id="values-white-1" type="radio" name="color-1">
                                                    <label class="hover-tooltip radius-60" for="values-white-1" data-value="White">
                                                        <span class="btn-checkbox bg-color-white"></span>
                                                        <span class="tooltip">White</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="variant-picker-item">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="variant-picker-label">
                                                        Size: <span class="fw-6 variant-picker-label-value">S</span>
                                                    </div>
                                                    <div class="find-size btn-choose-size fw-6">Find your size</div>
                                                </div>
                                                <div class="variant-picker-values">
                                                    <input type="radio" name="size-1" id="values-s-1" checked>
                                                    <label class="style-text" for="values-s-1" data-value="S">
                                                        <p>S</p>
                                                    </label>
                                                    <input type="radio" name="size-1" id="values-m-1">
                                                    <label class="style-text" for="values-m-1" data-value="M">
                                                        <p>M</p>
                                                    </label>
                                                    <input type="radio" name="size-1" id="values-l-1">
                                                    <label class="style-text" for="values-l-1" data-value="L">
                                                        <p>L</p>
                                                    </label>
                                                    <input type="radio" name="size-1" id="values-xl-1">
                                                    <label class="style-text" for="values-xl-1" data-value="XL">
                                                        <p>XL</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tf-product-info-quantity">
                                            <div class="quantity-title fw-6">Quantity</div>
                                            <div class="wg-quantity">
                                                <span class="btn-quantity minus-btn">-</span>
                                                <input type="text" name="number" value="1">
                                                <span class="btn-quantity plus-btn">+</span>
                                            </div>
                                        </div>
                                        <div class="tf-product-info-buy-button">
                                            <form class="">
                                                <a href="#" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn "><span>Add to cart -&nbsp;</span><span class="tf-qty-price">$8.00</span></a>
                                                <a href="javascript:void(0);" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                    <span class="icon icon-delete"></span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white compare btn-icon-action">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                    <span class="icon icon-check"></span>
                                                </a>
                                                <div class="w-100">
                                                    <a href="#" class="btns-full">Buy with <img src="assets/frontend/images/payments/paypal.png" alt=""></a>
                                                    <a href="#" class="payment-more-option">More payment options</a>
                                                </div>
                                            </form>
                                        </div>
                                        <div>
                                            <a href="product-detail.html" class="tf-btn fw-6 btn-line">View full details<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /modal quick_view -->

                <!-- modal find_size -->
                <div class="modal fade modalDemo tf-product-modal" id="find_size">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="header">
                                <div class="demo-title">Size chart</div>
                                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                            </div>
                            <div class="tf-rte">
                                <div class="tf-table-res-df">
                                    <h6>Size guide</h6>
                                    <table class="tf-sizeguide-table">
                                        <thead>
                                            <tr>
                                                <th>Size</th>
                                                <th>US</th>
                                                <th>Bust</th>
                                                <th>Waist</th>
                                                <th>Low Hip</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>XS</td>
                                                <td>2</td>
                                                <td>32</td>
                                                <td>24 - 25</td>
                                                <td>33 - 34</td>
                                            </tr>
                                            <tr>
                                                <td>S</td>
                                                <td>4</td>
                                                <td>34 - 35</td>
                                                <td>26 - 27</td>
                                                <td>35 - 26</td>
                                            </tr>
                                            <tr>
                                                <td>M</td>
                                                <td>6</td>
                                                <td>36 - 37</td>
                                                <td>28 - 29</td>
                                                <td>38 - 40</td>
                                            </tr>
                                            <tr>
                                                <td>L</td>
                                                <td>8</td>
                                                <td>38 - 29</td>
                                                <td>30 - 31</td>
                                                <td>42 - 44</td>
                                            </tr>
                                            <tr>
                                                <td>XL</td>
                                                <td>10</td>
                                                <td>40 - 41</td>
                                                <td>32 - 33</td>
                                                <td>45 - 47</td>
                                            </tr>
                                            <tr>
                                                <td>XXL</td>
                                                <td>12</td>
                                                <td>42 - 43</td>
                                                <td>34 - 35</td>
                                                <td>48 - 50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tf-page-size-chart-content">
                                    <div>
                                        <h6>Measuring Tips</h6>
                                        <div class="title">Bust</div>
                                        <p>Measure around the fullest part of your bust.</p>
                                        <div class="title">Waist</div>
                                        <p>Measure around the narrowest part of your torso.</p>
                                        <div class="title">Low Hip</div>
                                        <p class="mb-0">With your feet together measure around the fullest part of your hips/rear.
                                        </p>
                                    </div>
                                    <div>
                                        <img class="sizechart lazyload" data-src="assets/frontend/images/shop/products/size_chart2.jpg" src="assets/frontend/images/shop/products/size_chart2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /modal find_size -->

                <!-- Javascript -->
                <?php
                include('templates/footerscripts.php');
                ?>

                </body>


                <!-- Mirrored from themesflat.co/html/ecomus/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 09:29:12 GMT -->

                </html>