<?php
include('connection.php');
include('templates/header.php');
if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
    echo "You are not Allowed here*";
    exit();
}
?>
<style>
    .response-message {
        background-color: #ffa500;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        font-size: 18px;
        margin: 20px auto;
        max-width: 600px;
        padding: 20px;
        text-align: center;
        transition: opacity 0.5s ease-out;
    }

    .response-message pre {
        white-space: pre-wrap;
        word-wrap: break-word;
    }
</style>


<div class="section">
    <div class="container">
        <?php
        if (isset($_SESSION['response'])) { ?>
            <div class="response-message">
                <pre><?php echo $_SESSION['response'];
                        unset($_SESSION['response']); ?></pre>
            </div>
        <?php } ?>
    </div>
</div>

<div class="tf-slideshow slider-effect-fade position-relative">
    <div class="swiper tf-sw-slideshow" data-preview="1" data-mobile="1" data-space="0" data-loop="true" data-auto-play="false" data-delay="0" data-speed="1000">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="wrap-slider">
                    <img src="assets/frontend/images/slider/fashion-slideshow-01.jpg" alt="fashion-slideshow">
                    <div class="box-content">
                        <div class="container">
                            <h1 class="fade-item fade-item-1">Glamorous<br>Glam</h1>
                            <p class="fade-item fade-item-2">From casual to formal, we've got you covered</p>
                            <a href="product-detail.php" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="wrap-slider">
                    <img src="assets/frontend/images/slider/fashion-slideshow-02.jpg" alt="fashion-slideshow">
                    <div class="box-content">
                        <div class="container">
                            <h1 class="fade-item fade-item-1">Simple <br class="md-hidden">Style</h1>
                            <p class="fade-item fade-item-2">From casual to formal, we've got you covered</p>
                            <a href="shop-default.php" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="wrap-slider">
                    <img src="assets/frontend/images/slider/fashion-slideshow-03.jpg" alt="fashion-slideshow">
                    <div class="box-content">
                        <div class="container">
                            <h1 class="fade-item fade-item-1">Glamorous<br>Glam</h1>
                            <p class="fade-item fade-item-2">From casual to formal, we've got you covered</p>
                            <a href="shop-default.php" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="wrap-pagination">
        <div class="container">
            <div class="sw-dots sw-pagination-slider justify-content-center"></div>
        </div>
    </div>
</div>
<!-- /Slider -->
<!-- Marquee -->
<div class="tf-marquee bg_yellow-2">
    <div class="wrap-marquee">
        <div class="marquee-item">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20">
                    <path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path>
                </svg>
            </div>
            <p class="text">Spring Clearance Event: Save Up to 70%</p>
        </div>
        <div class="marquee-item">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20">
                    <path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path>
                </svg>
            </div>
            <p class="text">Spring Clearance Event: Save Up to 70%</p>
        </div>
        <div class="marquee-item">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20">
                    <path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path>
                </svg>
            </div>
            <p class="text">Spring Clearance Event: Save Up to 70%</p>
        </div>
        <div class="marquee-item">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20">
                    <path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path>
                </svg>
            </div>
            <p class="text">Spring Clearance Event: Save Up to 70%</p>
        </div>
        <div class="marquee-item">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20">
                    <path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path>
                </svg>
            </div>
            <p class="text">Spring Clearance Event: Save Up to 70%</p>
        </div>
        <div class="marquee-item">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20">
                    <path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path>
                </svg>
            </div>
            <p class="text">Spring Clearance Event: Save Up to 70%</p>
        </div>
        <div class="marquee-item">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20">
                    <path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path>
                </svg>
            </div>
            <p class="text">Spring Clearance Event: Save Up to 70%</p>
        </div>
        <div class="marquee-item">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20">
                    <path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path>
                </svg>
            </div>
            <p class="text">Spring Clearance Event: Save Up to 70%</p>
        </div>
        <div class="marquee-item">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20">
                    <path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path>
                </svg>
            </div>
            <p class="text">Spring Clearance Event: Save Up to 70%</p>
        </div>
        <div class="marquee-item">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20">
                    <path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path>
                </svg>
            </div>
            <p class="text">Spring Clearance Event: Save Up to 70%</p>
        </div>
    </div>

</div>
<!-- /Marquee -->
<!-- Categories -->
<section class="flat-spacing-4 flat-categorie">
    <div class="container-full">
        <div class="flat-title-v2">
            <div class="box-sw-navigation">
                <div class="nav-sw nav-next-slider nav-next-collection"><span class="icon icon-arrow-left"></span></div>
                <div class="nav-sw nav-prev-slider nav-prev-collection"><span class="icon icon-arrow-right"></span></div>
            </div>
            <span class="text-3 fw-7 text-uppercase title wow fadeInUp" data-wow-delay="0s">SHOP BY CATEGORIES</span>
        </div>
        <?php
        $sql = 'SELECT * FROM catagory';
        $result = mysqli_query($conn, $sql);
        ?>
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-8">
                <div class="swiper tf-sw-collection" data-preview="3" data-tablet="2" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">


                    <div class="swiper-wrapper">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item style-left hover-img">
                                    <div class="collection-inner">
                                        <a href="shop.phps" class="collection-image img-style">
                                            <div style="width: 100%; height: 200px; background-image: url('admin/<?php echo $row['image'] ?>'); background-size: cover; background-position: center;"></div>
                                        </a>
                                        <div class="collection-content">
                                            <a href="shop.phps" class="tf-btn collection-title hover-icon fs-15"><span><?php echo $row['name'] ?></span><i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="discovery-new-item">
                    <h5>Discovery all new items</h5>
                    <a href="product-detail.php"><i class="icon-arrow1-top-left"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- /Categories -->
<!-- Seller -->
<section class="flat-spacing-5 pt_0 flat-seller">
    <div class="container">
        <div class="flat-title">
            <span class="title wow fadeInUp" data-wow-delay="0s">Best Seller</span>
            <p class="sub-title wow fadeInUp" data-wow-delay="0s">Shop the Latest Styles: Stay ahead of the curve with our newest arrivals</p>
        </div>
        <div class="grid-layout loadmore-item wow fadeInUp" data-wow-delay="0s" data-grid="grid-4">
            <?php
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <div href="" class="product-img">
                            <img class="" data-src="admin/<?php echo $row['image']; ?>" src="admin/<?php echo $row['image']; ?>" style="width: 300px; height: 300px; object-fit: contain;">
                        </div>
                        <div class="list-product-btn">
                            <a href="#quick_add_<?php echo $row['id']; ?>" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">Quick Add</span>
                            </a>

                            <a href="#quick_view<?php echo $row['id']; ?>" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">Quick View</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="" class="title link"><?php echo $row['name']; ?><span> - <?php echo $row['model']; ?></span></a>
                        <span class="price"><?php echo $row['price']; ?>$</span>
                        <?php if ($row['available'] == 'Yes') { ?>
                            <span class="badge bg-success text-white" style="width: 70px;">Available</span>
                        <?php } else { ?>
                            <span class="badge bg-danger text-white" style="width: 70px;">Out of Stock</span>
                        <?php } ?>
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
                    <div class="modal fade modalDemo" id="quick_add_<?php echo $row['id']; ?>">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable w-50">
                            <div class="modal-content">
                                <div class="header">
                                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                                </div>
                                <div class="modal-body">
                                    <div class="wrap ">
                                        <div class="tf-product-info-item">
                                            <div class="image w-25">
                                                <img class="w-100" src="admin/<?php echo $row['image']; ?>" alt="">
                                            </div>
                                            <div class="content">
                                                <a href=""><?php echo $row['name']; ?></a>
                                                <div class="tf-product-info-price">
                                                    <div class="price"><?php echo $row['price']; ?>$</div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="addtocartcode.php" method="post" id="addToCartForm_ <?php echo $row['id']; ?>">
                                            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                            <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                                            <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
                                            <input type="hidden" name="product_model" value="<?php echo $row['model']; ?>">
                                            <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                                            <div class="tf-product-info-variant-picker mb_15">
                                                <div class="d-flex">
                                                    <div>
                                                        <div class="variant-picker-item">
                                                            <div class="variant-picker-label">
                                                                Color: <span class="fw-6 variant-picker-label-value">Orange</span>
                                                            </div>
                                                            <div class="variant-picker-values">
                                                                <input id="values-orange-<?php echo $row['id']; ?>" type="radio" name="color" value="Orange" checked>
                                                                <label class="hover-tooltip radius-60" for="values-orange- <?php echo $row['id']; ?>" data-value="Orange">
                                                                    <span class="btn-checkbox bg-color-orange"></span>
                                                                    <span class="tooltip">Orange</span>
                                                                </label>
                                                                <input id="values-black- <?php echo $row['id']; ?>" type="radio" name="color" value="Black">
                                                                <label class=" hover-tooltip radius-60" for="values-black- <?php echo $row['id']; ?>" data-value="Black">
                                                                    <span class="btn-checkbox bg-color-black"></span>
                                                                    <span class="tooltip">Black</span>
                                                                </label>
                                                                <input id="values-white- <?php echo $row['id']; ?>" type="radio" name="color" value="White">
                                                                <label class="hover-tooltip radius-60" for="values-white- <?php echo $row['id']; ?>" data-value="White">
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
                                                                <input type="radio" name="size" id="values-s- <?php echo $row['id']; ?>" value="S" checked>
                                                                <label class="style-text" for="values-s- <?php echo $row['id']; ?>" data-value="S">
                                                                    <p>S</p>
                                                                </label>
                                                                <input type="radio" name="size" id="values-m- <?php echo $row['id']; ?>" value="M">
                                                                <label class="style-text" for="values-m- <?php echo $row['id']; ?>" data-value="M">
                                                                    <p>M</p>
                                                                </label>
                                                                <input type="radio" name="size" id="values-l- <?php echo $row['id']; ?>" value="L">
                                                                <label class="style-text" for="values-l- <?php echo $row['id']; ?>" data-value="L">
                                                                    <p>L</p>
                                                                </label>
                                                                <input type="radio" name="size" id="values-xl- <?php echo $row['id']; ?>" value="XL">
                                                                <label class="style-text" for="values-xl- <?php echo $row['id']; ?>" data-value="XL">
                                                                    <p>XL</p>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="tf-product-info-quantity mb_15">
                                                            <div class="quantity-title fw-6">Quantity</div>
                                                            <div class="wg-quantity">
                                                                <span class="btn-quantity minus-btn">-</span>
                                                                <input id="quantitycounter" type="text" name="quantity" value="1">
                                                                <span class="btn-quantity plus-btn">+</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tf-product-info-buy-button">

                                            </div>
                                    </div>
                                    <button type="submit" class="w-100 tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add to cart - <?php echo $row['price'] ?></span><span class="tf-qty-price">$</span></button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal fade p-2" id="quick_view<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="quickViewLabel<?php echo $row['id']; ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable w-50">
                        <div class="modal-content">

                            <div class="header d-flex justify-content-end pe-4 pt-4">
                                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                            </div>
                            <div class="modal-body">
                                <div class="wrap">
                                    <div class="tf-product-media-wrap">
                                        <div class="swiper tf-single-slide">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="item">
                                                        <img class="w-25" data-src="admin/<?php echo $row['image']; ?>" src="admin/<?php echo $row['image']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-wrap position-relative">
                                        <div class="tf-product-info-list">
                                            <div class="tf-product-info-title">
                                                <h5><a class="link" href=""> <?php echo $row['name']; ?></a></h5>
                                            </div>

                                            <div class="tf-product-info-price">
                                                <div class="price">$ <?php echo $row['price']; ?></div>
                                            </div>
                                            <div class="tf-product-description">
                                                <p> <?php echo $row['discription']; ?></p>
                                            </div>
                                            <div>
                                                <a href="product_detail.php?id=<?php echo $row['id']; ?>" class="tf-btn fw-6 btn-line">View full details<i class="icon icon-arrow1-top-left"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="tf-pagination-wrap view-more-button text-center">
            <button class="tf-btn-loading tf-loading-default style-2 btn-loadmore "><span class="text">Load more</span></button>
        </div>
    </div>
</section>



<!-- /Seller -->
<!-- Lookbook -->
<section class="flat-spacing-6">
    <div class="flat-title wow fadeInUp" data-wow-delay="0s">
        <span class="title">Shop the look</span>
        <p class="sub-title">Inspire and let yourself be inspired, from one unique fashion to another.</p>
    </div>
    <div class="swiper tf-sw-lookbook" data-preview="2" data-tablet="2" data-mobile="1" data-space-lg="0" data-space-md="0">
        <div class="swiper-wrapper">
            <div class="swiper-slide" lazy="true">
                <div class="wrap-lookbook lookbook-1">
                    <div class="image">
                        <img class="lazyload" data-src="assets/frontend/images/shop/file/lookbook-3.jpg" src="assets/frontend/images/shop/file/lookbook-3.jpg" alt="image-lookbook">
                    </div>
                    <div class="lookbook-item item-1">
                        <div class="inner">
                            <div class="btn-group dropdown dropup dropdown-center">
                                <button class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span></span>
                                </button>
                                <ul class="dropdown-menu p-0 border-0">
                                    <li>
                                        <div class="lookbook-product">
                                            <a href="" class="image">
                                                <img class="lazyload" data-src="assets/frontend/images/shop/products/img-p2.png" src="assets/frontend/images/shop/products/img-p2.png" alt="lookbook-item">
                                            </a>
                                            <div class="content-wrap">
                                                <div class="product-title">
                                                    <a href="#">Jersey thong body</a>
                                                </div>
                                                <div class="price">$112.00</div>
                                            </div>
                                            <a href="#quick_view" data-bs-toggle="modal" class=""><i class="icon-view"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="lookbook-item item-2">
                        <div class="inner">
                            <div class="btn-group dropdown dropup dropdown-center">
                                <button class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span></span>
                                </button>
                                <ul class="dropdown-menu p-0 border-0">
                                    <li>
                                        <div class="lookbook-product">
                                            <a href="" class="image">
                                                <img class="lazyload" data-src="assets/frontend/images/shop/products/img-p4.png" src="assets/frontend/images/shop/products/img-p4.png" alt="">
                                            </a>
                                            <div class="content-wrap">
                                                <div class="product-title">
                                                    <a href="#">Ribbed modal T-shirt</a>
                                                </div>
                                                <div class="price">$20.00</div>
                                            </div>
                                            <a href="#quick_view" data-bs-toggle="modal" class=""><i class="icon-view"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" lazy="true">
                <div class="wrap-lookbook lookbook-2">
                    <div class="image">
                        <img class="lazyload" data-src="assets/frontend/images/shop/file/lookbook-4.jpg" src="assets/frontend/images/shop/file/lookbook-4.jpg" alt="image-lookbook">
                    </div>
                    <div class="lookbook-item item-1">
                        <div class="inner">
                            <div class="btn-group dropdown dropup dropdown-center">
                                <button class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span></span>
                                </button>
                                <ul class="dropdown-menu p-0 border-0">
                                    <li>
                                        <div class="lookbook-product">
                                            <a href="" class="image">
                                                <img class="lazyload" data-src="assets/frontend/images/shop/products/img-p5.png" src="assets/frontend/images/shop/products/img-p5.png" alt="">
                                            </a>
                                            <div class="content-wrap">
                                                <div class="product-title">
                                                    <a href="#">Ribbed Tank Top</a>
                                                </div>
                                                <div class="price">$20.00</div>
                                            </div>
                                            <a href="#quick_view" data-bs-toggle="modal" class=""><i class="icon-view"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-pagination">
            <div class="container-full">
                <div class="sw-dots sw-pagination-lookbook justify-content-center"></div>
            </div>
        </div>
    </div>
</section>
<!-- /Lookbook -->
<!-- Testimonial -->
<section class="flat-spacing-5 pt_0 flat-testimonial">
    <div class="container">
        <div class="flat-title wow fadeInUp" data-wow-delay="0s">
            <span class="title">Happy Clients</span>
            <p class="sub-title">Hear what they say about us</p>
        </div>
        <div class="wrap-carousel">
            <div class="swiper tf-sw-testimonial" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="15">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item style-column wow fadeInUp" data-wow-delay="0s">
                            <div class="rating">
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                            </div>
                            <div class="heading">Best Online Fashion Site</div>
                            <div class="text">
                                “ I always find something stylish and affordable on this web fashion site ”
                            </div>
                            <div class="author">
                                <div class="name">Robert smith</div>
                                <div class="metas">Customer from USA</div>
                            </div>
                            <div class="product">
                                <div class="image">
                                    <a href="">
                                        <img class="lazyload" data-src="assets/frontend/images/shop/products/img-p2.png" src="assets/frontend/images/shop/products/img-p2.png" alt="">
                                    </a>
                                </div>
                                <div class="content-wrap">
                                    <div class="product-title">
                                        <a href="">Jersey thong body</a>
                                    </div>
                                    <div class="price">$105.95</div>
                                </div>
                                <a href="" class=""><i class="icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item style-column wow fadeInUp" data-wow-delay=".1s">
                            <div class="rating">
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                            </div>
                            <div class="heading">Great Selection and Quality</div>
                            <div class="text">
                                "I love the variety of styles and the high-quality clothing on this web fashion site."
                            </div>
                            <div class="author">
                                <div class="name">Allen Lyn</div>
                                <div class="metas">Customer from France</span></div>
                            </div>
                            <div class="product">
                                <div class="image">
                                    <a href="">
                                        <img class="lazyload" data-src="assets/frontend/images/shop/products/img-p3.png" src="assets/frontend/images/shop/products/img-p3.png" alt="">
                                    </a>
                                </div>
                                <div class="content-wrap">
                                    <div class="product-title">
                                        <a href="">Cotton jersey top</a>
                                    </div>
                                    <div class="price">$7.95</div>
                                </div>
                                <a href="" class=""><i class="icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item style-column wow fadeInUp" data-wow-delay=".2s">
                            <div class="rating">
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                            </div>
                            <div class="heading">Best Customer Service</div>
                            <div class="text">
                                "I finally found a web fashion site with stylish and flattering options in my size."
                            </div>
                            <div class="author">
                                <div class="name">Peter Rope</div>
                                <div class="metas">Customer from USA</div>
                            </div>
                            <div class="product">
                                <div class="image">
                                    <a href="">
                                        <img class="lazyload" data-src="assets/frontend/images/shop/products/img-p4.png" src="assets/frontend/images/shop/products/img-p4.png" alt="">
                                    </a>
                                </div>
                                <div class="content-wrap">
                                    <div class="product-title">
                                        <a href="">Ribbed modal T-shirt</a>
                                    </div>
                                    <div class="price">From $18.95</div>
                                </div>
                                <a href="" class=""><i class="icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item style-column wow fadeInUp" data-wow-delay=".3s">
                            <div class="rating">
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                            </div>
                            <div class="heading">Great Selection and Quality</div>
                            <div class="text">
                                "I love the variety of styles and the high-quality clothing on this web fashion site."
                            </div>
                            <div class="author">
                                <div class="name">Hellen Ase</div>
                                <div class="metas">Customer from Japan</span></div>
                            </div>
                            <div class="product">
                                <div class="image">
                                    <a href="">
                                        <img class="lazyload" data-src="assets/frontend/images/shop/products/img-p5.png" src="assets/frontend/images/shop/products/img-p5.png" alt="">
                                    </a>
                                </div>
                                <div class="content-wrap">
                                    <div class="product-title">
                                        <a href="">Customer from Japan</a>
                                    </div>
                                    <div class="price">$16.95</div>
                                </div>
                                <a href="" class=""><i class="icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-sw nav-next-slider nav-next-testimonial lg"><span class="icon icon-arrow-left"></span></div>
            <div class="nav-sw nav-prev-slider nav-prev-testimonial lg"><span class="icon icon-arrow-right"></span></div>
            <div class="sw-dots style-2 sw-pagination-testimonial justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Testimonial -->
<!-- brand -->
<section class="flat-spacing-5 pt_0">
    <div class="container">
        <div class="swiper tf-sw-brand" data-loop="false" data-play="false" data-preview="6" data-tablet="3" data-mobile="2" data-space-lg="0" data-space-md="0">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-item">
                        <img class="lazyload" data-src="assets/frontend/images/brand/brand-01.png" src="assets/frontend/images/brand/brand-01.png" alt="image-brand">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-item">
                        <img class="lazyload" data-src="assets/frontend/images/brand/brand-02.png" src="assets/frontend/images/brand/brand-02.png" alt="image-brand">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-item">
                        <img class="lazyload" data-src="assets/frontend/images/brand/brand-03.png" src="assets/frontend/images/brand/brand-03.png" alt="image-brand">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-item">
                        <img class="lazyload" data-src="assets/frontend/images/brand/brand-04.png" src="assets/frontend/images/brand/brand-04.png" alt="image-brand">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-item">
                        <img class="lazyload" data-src="assets/frontend/images/brand/brand-05.png" src="assets/frontend/images/brand/brand-05.png" alt="image-brand">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-item">
                        <img class="lazyload" data-src="assets/frontend/images/brand/brand-06.png" src="assets/frontend/images/brand/brand-06.png" alt="image-brand">
                    </div>
                </div>
            </div>
        </div>
        <div class="sw-dots style-2 sw-pagination-brand justify-content-center"></div>
    </div>
</section>
<!-- /brand -->
<!-- Shop Gram -->
<section class="flat-spacing-7">
    <div class="container">
        <div class="flat-title wow fadeInUp" data-wow-delay="0s">
            <span class="title">Shop Gram</span>
            <p class="sub-title">Inspire and let yourself be inspired, from one unique fashion to another.</p>
        </div>
        <div class="wrap-carousel wrap-shop-gram">
            <div class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="7" data-space-md="7">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".2s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="assets/frontend/images/shop/gallery/gallery-7.jpg" src="assets/frontend/images/shop/gallery/gallery-7.jpg" alt="image-gallery">
                            </div>
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".3s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="assets/frontend/images/shop/gallery/gallery-3.jpg" src="assets/frontend/images/shop/gallery/gallery-3.jpg" alt="image-gallery">
                            </div>
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".4s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="assets/frontend/images/shop/gallery/gallery-5.jpg" src="assets/frontend/images/shop/gallery/gallery-5.jpg" alt="image-gallery">
                            </div>
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".5s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="assets/frontend/images/shop/gallery/gallery-8.jpg" src="assets/frontend/images/shop/gallery/gallery-8.jpg" alt="image-gallery">
                            </div>
                            <a href="" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">View product</span></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".6s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="assets/frontend/images/shop/gallery/gallery-6.jpg" src="assets/frontend/images/shop/gallery/gallery-6.jpg" alt="image-gallery">
                            </div>
                            <a href="" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">View product</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-dots sw-pagination-gallery justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Shop Gram -->
<!-- Icon box -->
<section class="flat-spacing-7 flat-iconbox wow fadeInUp" data-wow-delay="0s">
    <div class="container">
        <div class="wrap-carousel wrap-mobile">
            <div class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                <div class="swiper-wrapper wrap-iconbox">
                    <div class="swiper-slide">
                        <div class="tf-icon-box style-border-line text-center">
                            <div class="icon">
                                <i class="icon-shipping"></i>
                            </div>
                            <div class="content">
                                <div class="title">Free Shipping</div>
                                <p>Free shipping over order $120</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box style-border-line text-center">
                            <div class="icon">
                                <i class="icon-payment fs-22"></i>
                            </div>
                            <div class="content">
                                <div class="title">Flexible Payment</div>
                                <p>Pay with Multiple Credit Cards</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box style-border-line text-center">
                            <div class="icon">
                                <i class="icon-return fs-22"></i>
                            </div>
                            <div class="content">
                                <div class="title">14 Day Returns</div>
                                <p>Within 30 days for an exchange</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box style-border-line text-center">
                            <div class="icon">
                                <i class="icon-suport"></i>
                            </div>
                            <div class="content">
                                <div class="title">Premium Support</div>
                                <p>Outstanding premium support</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
        </div>

    </div>
</section>
<!-- /Icon box -->
<!-- Footer -->
<footer id="footer" class="footer md-pb-70">
    <div class="footer-wrap">
        <div class="footer-body">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="footer-infor">
                            <div class="footer-logo">
                                <a href="index.php">
                                    <img src="assets/frontend/images/logo/logo.svg" alt="">
                                </a>
                            </div>
                            <ul>
                                <li>
                                    <p>Address: 1234 Fashion Street, Suite 567, <br> New York, NY 10001</p>
                                </li>
                                <li>
                                    <p>Email: <a href="#">info@fashionshop.com</a></p>
                                </li>
                                <li>
                                    <p>Phone: <a href="#">(212) 555-1234</a></p>
                                </li>
                            </ul>
                            <a href="contact-1.php" class="tf-btn btn-line">Get direction<i class="icon icon-arrow1-top-left"></i></a>
                            <ul class="tf-social-icon d-flex gap-10">
                                <li><a href="#" class="box-icon w_34 round social-facebook social-line"><i class="icon fs-14 icon-fb"></i></a></li>
                                <li><a href="#" class="box-icon w_34 round social-twiter social-line"><i class="icon fs-12 icon-Icon-x"></i></a></li>
                                <li><a href="#" class="box-icon w_34 round social-instagram social-line"><i class="icon fs-14 icon-instagram"></i></a></li>
                                <li><a href="#" class="box-icon w_34 round social-tiktok social-line"><i class="icon fs-14 icon-tiktok"></i></a></li>
                                <li><a href="#" class="box-icon w_34 round social-pinterest social-line"><i class="icon fs-14 icon-pinterest-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 footer-col-block">
                        <div class="footer-heading footer-heading-desktop">
                            <h6>Help</h6>
                        </div>
                        <div class="footer-heading footer-heading-moblie">
                            <h6>Help</h6>
                        </div>
                        <ul class="footer-menu-list tf-collapse-content">
                            <li>
                                <a href="privacy-policy.php" class="footer-menu_item">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="delivery-return.php" class="footer-menu_item"> Returns + Exchanges </a>
                            </li>
                            <li>
                                <a href="shipping-delivery.php" class="footer-menu_item">Shipping</a>
                            </li>
                            <li>
                                <a href="terms-conditions.php" class="footer-menu_item">Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a href="faq-1.php" class="footer-menu_item">FAQ’s</a>
                            </li>
                            <li>
                                <a href="compare.php" class="footer-menu_item">Compare</a>
                            </li>
                            <li>
                                <a href="wishlist.php" class="footer-menu_item">My Wishlist</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 footer-col-block">
                        <div class="footer-heading footer-heading-desktop">
                            <h6>About us</h6>
                        </div>
                        <div class="footer-heading footer-heading-moblie">
                            <h6>About us</h6>
                        </div>
                        <ul class="footer-menu-list tf-collapse-content">
                            <li>
                                <a href="about-us.php" class="footer-menu_item">Our Story</a>
                            </li>
                            <li>
                                <a href="our-store.php" class="footer-menu_item">Visit Our Store</a>
                            </li>
                            <li>
                                <a href="contact-1.php" class="footer-menu_item">Contact Us</a>
                            </li>
                            <li>
                                <a href="login.php" class="footer-menu_item">Account</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="footer-newsletter footer-col-block">
                            <div class="footer-heading footer-heading-desktop">
                                <h6>Sign Up for Email</h6>
                            </div>
                            <div class="footer-heading footer-heading-moblie">
                                <h6>Sign Up for Email</h6>
                            </div>
                            <div class="tf-collapse-content">
                                <div class="footer-menu_item">Sign up to get first dibs on new arrivals, sales, exclusive content, events and more!</div>
                                <form class="form-newsletter subscribe-form" id="" action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
                                    <div class="subscribe-content">
                                        <fieldset class="email">
                                            <input type="email" name="email-form" class="subscribe-email" placeholder="Enter your email...." tabindex="0" aria-required="true">
                                        </fieldset>
                                        <div class="button-submit">
                                            <button id="" class="subscribe-button tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn" type="button">Subscribe<i class="icon icon-arrow1-top-left"></i></button>
                                        </div>
                                    </div>
                                    <div class="subscribe-msg"></div>
                                </form>
                                <div class="tf-cur">
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
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-wrap d-flex gap-20 flex-wrap justify-content-between align-items-center">
                            <div class="footer-menu_item">© 2024 Ecomus Store. All Rights Reserved</div>
                            <div class="tf-payment">
                                <img src="assets/frontend/images/payments/visa.png" alt="">
                                <img src="assets/frontend/images/payments/img-1.png" alt="">
                                <img src="assets/frontend/images/payments/img-2.png" alt="">
                                <img src="assets/frontend/images/payments/img-3.png" alt="">
                                <img src="assets/frontend/images/payments/img-4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

</div>

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
        <a href="wishlist.php">
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

                            <li><a href="home-04.php" class="sub-nav-link">Home Fashion 04</a></li>
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
                                        <li><a href="shop-default.php" class="sub-nav-link">Default</a></li>
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
                                        <li><a href="shop-link.php" class="sub-nav-link">Pagination links</a></li>
                                        <li><a href="shop-loadmore.php" class="sub-nav-link">Pagination loadmore</a></li>
                                        <li><a href="shop-infinite-scrolling.php" class="sub-nav-link">Pagination infinite scrolling</a></li>
                                        <li><a href="shop-filter-sidebar.php" class="sub-nav-link">Filter sidebar</a></li>
                                        <li><a href="shop-filter-hidden.php" class="sub-nav-link">Filter hidden</a></li>
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
                                        <li><a href="shop.phps" class="sub-nav-link">Product style list</a></li>
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
                                        <li><a href="" class="sub-nav-link">Product default</a></li>
                                        <li><a href="product-grid-1.php" class="sub-nav-link">Product grid 1</a></li>
                                        <li><a href="product-grid-2.php" class="sub-nav-link">Product grid 2</a></li>
                                        <li><a href="product-stacked.php" class="sub-nav-link">Product stacked</a></li>
                                        <li><a href="product-right-thumbnails.php" class="sub-nav-link">Product right thumbnails</a></li>
                                        <li><a href="product-bottom-thumbnails.php" class="sub-nav-link">Product bottom thumbnails</a></li>
                                        <li><a href="product-drawer-sidebar.php" class="sub-nav-link">Product drawer sidebar</a></li>
                                        <li><a href="product-description-accordion.php" class="sub-nav-link">Product description accordion</a></li>
                                        <li><a href="product-description-list.php" class="sub-nav-link">Product description list</a></li>
                                        <li><a href="product-description-vertical.php" class="sub-nav-link">Product description vertical</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sub-product-two" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-two">
                                    <span>Product details</span>
                                    <span class="btn-open-sub"></span>
                                </a>

                            </li>
                            <li>
                                <a href="#sub-product-three" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-three">
                                    <span>Product swatchs</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-product-three" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="product-color-swatch.php" class="sub-nav-link">Product color swatch</a></li>
                                        <li><a href="product-rectangle.php" class="sub-nav-link">Product rectangle</a></li>
                                        <li><a href="product-rectangle-color.php" class="sub-nav-link">Product rectangle color</a></li>
                                        <li><a href="product-swatch-image.php" class="sub-nav-link">Product swatch image</a></li>
                                        <li><a href="product-swatch-image-rounded.php" class="sub-nav-link">Product swatch image rounded</a></li>
                                        <li><a href="product-swatch-dropdown.php" class="sub-nav-link">Product swatch dropdown</a></li>
                                        <li><a href="product-swatch-dropdown-color.php" class="sub-nav-link">Product swatch dropdown color</a></li>
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
                                        <li><a href="product-frequently-bought-together.php" class="sub-nav-link">Frequently bought together</a></li>
                                        <li><a href="product-frequently-bought-together-2.php" class="sub-nav-link">Frequently bought together 2</a></li>
                                        <li><a href="product-upsell-features.php" class="sub-nav-link">Product upsell features</a></li>
                                        <li><a href="product-pre-orders.php" class="sub-nav-link">Product pre-orders</a></li>
                                        <li><a href="product-notification.php" class="sub-nav-link">Back in stock notification</a></li>
                                        <li><a href="product-pickup.php" class="sub-nav-link">Product pickup</a></li>
                                        <li><a href="product-images-grouped.php" class="sub-nav-link">Variant images grouped</a></li>
                                        <li><a href="product-complimentary.php" class="sub-nav-link">Complimentary products</a></li>
                                        <li><a href="product-quick-order-list.php" class="sub-nav-link line-clamp">Quick order list<div class="demo-label"><span class="demo-new">New</span></div></a></li>
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
                            <li><a href="about-us.php" class="sub-nav-link">About us</a></li>
                            <li><a href="brands.php" class="sub-nav-link line-clamp">Brands<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                            <li><a href="brands-v2.php" class="sub-nav-link">Brands V2</a></li>
                            <li><a href="contact-1.php" class="sub-nav-link">Contact 1</a></li>
                            <li><a href="contact-2.php" class="sub-nav-link">Contact 2</a></li>
                            <li><a href="faq-1.php" class="sub-nav-link">FAQ 01</a></li>
                            <li><a href="faq-2.php" class="sub-nav-link">FAQ 02</a></li>
                            <li><a href="our-store.php" class="sub-nav-link">Our store</a></li>
                            <li><a href="store-locations.php" class="sub-nav-link">Store locator</a></li>
                            <li><a href="timeline.php" class="sub-nav-link line-clamp">Timeline<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                            <li><a href="view-cart.php" class="sub-nav-link line-clamp">View cart</a></li>
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
                            <li><a href="blog-grid.php" class="sub-nav-link">Grid layout</a></li>
                            <li><a href="blog-sidebar-left.php" class="sub-nav-link">Left sidebar</a></li>
                            <li><a href="blog-sidebar-right.php" class="sub-nav-link">Right sidebar</a></li>
                            <li><a href="blog-list.php" class="sub-nav-link">Blog list</a></li>
                            <li><a href="blog-detail.php" class="sub-nav-link">Single Post</a></li>
                        </ul>
                    </div>

                </li>
                <li class="nav-mb-item">
                    <a href="#" class="mb-menu-link">Buy now</a>
                </li>
            </ul>
            <div class="mb-other-content">
                <div class="d-flex group-icon">
                    <a href="wishlist.php" class="site-nav-icon"><i class="icon icon-heart"></i>Wishlist</a>
                    <a href="#" class="site-nav-icon"><i class="icon icon-search"></i>Search</a>
                </div>
                <div class="mb-notice">
                    <a href="contact-1.php" class="text-need">Need help ?</a>
                </div>
                <ul class="mb-info">
                    <li>Address: 1234 Fashion Street, Suite 567, <br> New York, NY 10001</li>
                    <li>Email: <b>info@fashionshop.com</b></li>
                    <li>Phone: <b>(212) 555-1234</b></li>
                </ul>
            </div>
        </div>
        <div class="mb-bottom">
            <a href="login.php" class="site-nav-icon"><i class="icon icon-account"></i>Login</a>
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
                                <a href="shop-default.php" class="">Fashion</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="shop-default.php" class="">Men</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="shop-default.php" class="">Women</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="shop-default.php" class="">Accessories</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tf-col-content">
                        <div class="tf-search-content-title fw-5">Need some inspiration?</div>
                        <div class="tf-search-hidden-inner">
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="">
                                        <img src="assets/frontend/images/products/white-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="">Cotton jersey top</a>
                                    <div class="tf-product-info-price">
                                        <div class="compare-at-price">$10.00</div>
                                        <div class="price-on-sale fw-6">$8.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="">
                                        <img src="assets/frontend/images/products/white-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="">Mini crossbody bag</a>
                                    <div class="tf-product-info-price">
                                        <div class="price fw-6">$18.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="">
                                        <img src="assets/frontend/images/products/white-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="">Oversized Printed T-shirt</a>
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
                    <a href="shop-default.php" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate1.jpg" alt="">
                        </div>
                        <span>Accessories</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.php" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate2.jpg" alt="">
                        </div>
                        <span>Dog</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.php" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate3.jpg" alt="">
                        </div>
                        <span>Grocery</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.php" class="tf-category-link mb-menu-link">
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
                                            <a href="shop-default.php" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="assets/frontend/images/shop/cate/cate1.jpg" alt="">
                                                </div>
                                                <span>Accessories</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-default.php" class="tf-category-link sub-nav-link">
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
                                            <a href="shop-default.php" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="assets/frontend/images/shop/cate/cate4.png" alt="">
                                                </div>
                                                <span>Handbag</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-default.php" class="tf-category-link sub-nav-link">
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
                                <a href="shop-default.php" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="assets/frontend/images/shop/cate/cate1.jpg" alt="">
                                    </div>
                                    <span>Accessories</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop-default.php" class="tf-category-link sub-nav-link">
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
                    <a href="shop-default.php" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="assets/frontend/images/shop/cate/cate7.jpg" alt="">
                        </div>
                        <span>Tee</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.php" class="tf-category-link mb-menu-link">
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
                                <a href="shop-default.php" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="assets/frontend/images/shop/cate/cate4.png" alt="">
                                    </div>
                                    <span>Handbag</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop-default.php" class="tf-category-link sub-nav-link">
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
            <a href="shop-default.php" class="tf-btn fw-5 btn-line">View all collection<i class="icon icon-arrow1-top-left"></i></a>
        </div>
    </div>
</div>
<!-- /toolbarShopmb -->

<!-- modal login -->




<!-- shoppingCart -->
<?php 
include ('templates/cart.php');
?>
<?php include('templates/footerscripts.php') ?>
</body>