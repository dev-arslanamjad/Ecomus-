<?php
include('connection.php');
include('templates/header.php');
$catagory_id = $_GET['id'];
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
                <a href="index.php" class="text">Home</a>
                <i class="icon icon-arrow-right"></i>
                <a href="#" class="text">Women</a>
            </div>

        </div>
    </div>
</div>

<section class="flat-spacing-1 pt_0">
    <div class="container">
        <?php
        $sql = "SELECT name FROM catagory WHERE id = " . mysqli_real_escape_string($conn, $catagory_id);
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="flat-title">
            <span class="title"><?php echo htmlspecialchars($row['name']); ?></span>
        </div>
        <div class="hover-sw-nav hover-sw-2">
            <div class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                <div class="swiper-wrapper">
                    <div class="grid-layout loadmore-item" data-grid="grid-4">
                        <?php

                        $sql = "SELECT * FROM products WHERE catagory_id = $catagory_id";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $product_id = $row['id'];
                            $product_name = $row['name'];
                            $product_image = $row['image'];
                            $product_model = $row['model'];
                            $product_price = $row['price'];

                        ?>
                            <form action="addtocartcode.php" method="post">
                                <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
                                <input type="hidden" name="product_name" value="<?php echo $product_name ?>">
                                <input type="hidden" name="product_image" value="<?php echo $product_image ?>">
                                <input type="hidden" name="product_model" value="<?php echo $product_model ?>">
                                <input type="hidden" name="product_price" value="<?php echo $product_price ?>">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product_detail.php?id=<?php echo $product_id; ?>" class="product-img">
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
                                                <a href="product_detail.php?id=<?php echo $product_id; ?>" class="box-icon bg_white  tf-btn-loading">
                                                    <span class="icon icon-bag"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product_detail.php?id=<?php echo $product_id; ?>" class="title link"><b><?php echo $product_name ?></b></a>
                                        <span href="product_detail.php?id=<?php echo $product_id; ?>" class="title link"><?php echo $product_model ?></span>
                                        <span class="price"><?php echo $product_price ?>$</span>
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
                    <?php 
                    $sql= "SELECT * FROM products ORDER BY RAND() LIMIT 6";
                    $query = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($query)){
                        
                    ?>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product">
                            <div class="card-product-wrapper">
                                <a href="product_detail.php?id=<?php echo $row['id']; ?>&<?php echo $row['slug']?>" class="product-img">
                                    <img style="width: 300px; height: 300px; object-fit: contain;" class="lazyload img-product" data-src="admin/<?php echo $row['image']?>" src="admin/<?php echo $row['image']?>" alt="image-product">
                                    <img style="width: 300px; height: 300px; object-fit: contain;" class="lazyload img-hover" data-src="admin/<?php echo $row['image']?>" src="admin/<?php echo $row['image']?>" alt="image-product">
                                </a>

                            </div>
                            <div class="card-product-info">
                                <a href="product_detail.php?id=<?php echo $row['id']; ?>&<?php echo $row['slug']?>" class="title link"><b><?php echo $row['name']; ?></b>- <?php echo $row['model']; ?></a>
                                <span class="price"><?php echo $row['price']; ?>.00$</span>
                            </div>
                        </div>
                    </div>
                    <?php }?>
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