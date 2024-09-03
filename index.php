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
                                        <a href="products_by_catagory.php?id=<?php echo $row['id'] ?>" class="collection-image img-style">
                                            <div style="width: 100%; height: 200px; background-image: url('admin/<?php echo $row['image'] ?>'); background-size: cover; background-position: center;"></div>
                                        </a>
                                        <div class="collection-content">
                                            <a href="products_by_catagory.php?id=<?php echo $row['id'] ?>" class="tf-btn collection-title hover-icon fs-15"><span><?php echo $row['name'] ?></span><i class="icon icon-arrow1-top-left"></i></a>
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
                    <a href="products.php"><i class="icon-arrow1-top-left"></i></a>
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
                        <div class="product-img">
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
                        <a href="product_detail.php?id=<?php echo $row['id']; ?>&<?php echo $row['slug']; ?>" class="title link"><?php echo $row['name']; ?><span> - <?php echo $row['model']; ?></span></a>
                        <span class="price"><?php echo $row['price']; ?>.00$</span>
                        <?php if ($row['available'] == 'Yes') { ?>
                            <span class="badge bg-success text-white" style="width: 70px;">Available</span>
                        <?php } else { ?>
                            <span class="badge bg-danger text-white" style="width: 70px;">Out of Stock</span>
                        <?php } ?>
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
                                            <div class="image w-50 mx-auto">
                                                <img class="w-100" src="admin/<?php echo $row['image']; ?>" alt="">
                                            </div>
                                            <div class="content">
                                                <h5><a href="product_detail.php?id=<?php echo $row['id']; ?>&<?php echo $row['slug']; ?>"><?php echo $row['name']; ?></a></h5>
                                                <span><?php echo $row['model'] ?></span>
                                                <div class="tf-product-info-price">
                                                    <div class="price"><?php echo $row['price']; ?>.00$</div>
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
                                                        <div class="image w-50 mx-auto">
                                                            <img class="w-100" src="admin/<?php echo $row['image']; ?>" alt="">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tf-product-info-wrap position-relative">
                                            <div class="tf-product-info-list">
                                                <div class="tf-product-info-title">
                                                    <h5><a class="link" href="product_detail.php?id=<?php $row['id'] ?>"> <?php echo $row['name']; ?></a></h5>
                                                    <span><?php echo $row['model'] ?></span>
                                                </div>

                                                <div class="tf-product-info-price">
                                                    <div class="price">$ <?php echo $row['price']; ?></div>
                                                </div>
                                                <div class="tf-product-description">
                                                    <p> <?php echo $row['discription']; ?></p>
                                                </div>
                                                <div>
                                                    <a href="product_detail.php?id=<?php echo $row['id']; ?>&<?php echo $row['slug']; ?>" class="tf-btn fw-6 btn-line">View full details<i class="icon icon-arrow1-top-left"></i></a>
                                                </div>
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


<!-- Lookbook -->
<section class="flat-spacing-6">
    <div class="flat-title wow fadeInUp" data-wow-delay="0s">
        <span class="title">Shop the look</span>
        <p class="sub-title">Inspired and let yourself be inspired, from one unique fashion to another.</p>
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
                                            <img class="lazyload" data-src="admin/<?php echo $product_image; ?>" src="admin/<?php echo $product_image; ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="content-wrap">
                                        <div class="product-title">
                                            <a href=""><?php echo $product_name; ?></a>
                                        </div>
                                        <div class="price"><?php echo $product_price; ?>.00$</div>
                                    </div>
                                    <a href="product_detail.php?id=<?php echo $product_id; ?>&<?php echo urlencode(strtolower(str_replace(' ', '-', $product_name))); ?>" class=""><i class="icon-arrow1-top-left"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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
<?php
include('templates/footer.php');
?>
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

<!-- /mobile menu -->






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

<?php
include('templates/cart.php');
?>
<?php include('templates/footerscripts.php') ?>
</body>