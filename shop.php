<?php
include('connection.php');
include('templates/header.php');
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>
<div class="tf-page-title">
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                <div class="heading text-center">New Arrival</div>
                <p class="text-center text-2 text_black-2 mt_5">Shop through our latest selection of Fashion</p>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCTS    ------------------------------------>
<section class="flat-spacing-1">
    <div class="container">
        <div class="tf-shop-control grid-3 align-items-center">
            <div class="tf-control-filter">
                <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filter</span></a>
            </div>
            <ul class="tf-control-layout d-flex justify-content-center">
                <li class="tf-view-layout-switch sw-layout-2" data-value-grid="grid-2">
                    <div class="item"><span class="icon icon-grid-2"></span></div>
                </li>
                <li class="tf-view-layout-switch sw-layout-3" data-value-grid="grid-3">
                    <div class="item"><span class="icon icon-grid-3"></span></div>
                </li>
                <li class="tf-view-layout-switch sw-layout-4 active" data-value-grid="grid-4">
                    <div class="item"><span class="icon icon-grid-4"></span></div>
                </li>
                <li class="tf-view-layout-switch sw-layout-5" data-value-grid="grid-5">
                    <div class="item"><span class="icon icon-grid-5"></span></div>
                </li>
                <li class="tf-view-layout-switch sw-layout-6" data-value-grid="grid-6">
                    <div class="item"><span class="icon icon-grid-6"></span></div>
                </li>
            </ul>
        </div>
        <div class="grid-layout wrapper-shop" data-grid="grid-4">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <!-- card product -->
                <div class="card-product d-flex flex-column h-100">
                    <div class="card-product-wrapper flex-grow-1">
                        <a href="product_detail.php?id=<?php echo $row['id']; ?>&<?php echo $row['slug']; ?>" class="product-img d-block h-100">
                            <img class="lazyload img-product w-100 h-100 object-fit-cover" data-src="admin/<?php echo $row['image'] ?>" src="admin/<?php echo $row['image'] ?>" alt="<?php echo $row['name'] ?>">
                            <img class="lazyload img-hover w-100 h-100 object-fit-cover" data-src="admin/<?php echo $row['image'] ?>" src="admin/<?php echo $row['image'] ?>" alt="<?php echo $row['name'] ?>">
                        </a>
                        <div class="list-product-btn absolute-2">
                            <a href="#quick_add_<?php echo $row['id'] ?>" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">Quick Add</span>
                            </a>
                            <a href="#quick_view_<?php echo $row['id']; ?>" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">Quick View</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product_detail.php?id=<?php echo $row['id']; ?>&<?php echo $row['slug']; ?>" class="title link"><?php echo $row['name'] ?></a>
                        <span class="price"><?php echo $row['price'] ?>$</span>
                        <p class="description"><?php echo substr($row['discription'], 0, 100) . '...'; ?></p>
                        <p class="description"></p>
                    </div>
                </div>
                <div class=" modal fade modalDemo" id="quick_add_<?php echo $row['id']; ?>">
                    <div class="modal-dialog modal-dialog-centered" style="width:50%">
                        <div class="modal-content" style="height: 100%; overflow-y: auto;">
                            <form action="addtocartcode.php" method="post" class="">
                                <input id="product_id" type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
                                <input type="hidden" name="product_model" value="<?php echo $row['model']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                                <div class="header">
                                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                                </div>
                                <div class="wrap">
                                    <div class="tf-product-info-item">
                                        <div href="" class="product-img">
                                            <img class="" data-src="admin/<?php echo $row['image']; ?>" src="admin/<?php echo $row['image']; ?>" style="width: 200px; height: 200px; object-fit: contain;">
                                        </div>
                                        <div class="content">
                                            <a href="product_detail.php?id=<?php echo $row['id']; ?>&<?php echo $row['slug']; ?>">
                                                <h5><?php echo $row['name'] ?></h5>
                                            </a>
                                            <span><?php echo $row['model'] ?></span>
                                            <div class="tf-product-info-price">
                                                <span class=""><?php echo $row['discription'] ?></span>
                                            </div>
                                            <div class="tf-product-info-price">
                                                <div class="price"><?php echo $row['price'] ?>$</div>
                                                <input type="hidden" id="unit_price" value="<?php echo $row['price'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-quantity mb_15">
                                        <div class="quantity-title fw-6">Quantity</div>
                                        <div class="wg-quantity">
                                            <input type="hidden" id="hidden_quantity" value="1">

                                            <span class="btn-quantity minus-btn" data-id="<?php echo $row['id']; ?>">-</span>
                                            <input id="quantity_<?php echo $row['id']; ?>" type="text" name="quantity" value="1" readonly>
                                            <span class="btn-quantity plus-btn" data-id="<?php echo $row['id']; ?>">+</span>
                                        </div>

                                    </div>
                                    <div class="tf-product-info-buy-button text-center">
                                        <button type="submit" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn "><span>Add to cart </span>
                                            <span id="subtotal_<?php echo $row['id'] ?>" class="tf-qty-price"><?php echo $row['price'] ?>.00$</span>
                                        </button>

                                        <div class="dropdown col-12 mt-2">
                                            <!-- <button type="button"
                                                class="tf-btn btn-fill justify-content-center fw-6 fs-16 w-100 animate-hover-btn dropdown-toggle animate__animated animate__fadeIn"
                                                id="paymentDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                                style="background-color: #ffa500 !important; border: unset;"><span>Pay with <img
                                                        src="assets/frontend/images/payments/paypal.png" alt=""></span></button> -->
                                            <ul class="dropdown-menu w-100 animate__animated animate__fadeIn"
                                                aria-labelledby="paymentDropdown">
                                                <div id="paypal-button-container_<?php echo $row['id']; ?>"></div>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- modal quick_view -->
                <div class="modal fade modalDemo" id="quick_view_<?php echo $row['id'] ?>">
                    <div class="modal-dialog modal-dialog-centered" style="width:50%">
                        <div class=" modal-content" style="height: 100%; overflow-y: auto;">
                            <div class="header">
                                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                            </div>
                            <div class="wrap">
                                <div class="item">
                                    <img data-src="admin/<?php echo $row['image']; ?>" src="admin/<?php echo $row['image']; ?>" style="width: 300px; height: 300px; object-fit: cover; display: block; margin: 0 auto;">
                                </div>
                                <div class="tf-product-info-wrap position-relative">
                                    <div class="tf-product-info-list">
                                        <div class="tf-product-info-title">
                                            <h5><a class="link" href="product_detail.php?id=<?php echo $row['id']; ?>&<?php echo $row['slug']; ?>"><?php echo $row['name'] ?></a></h5>
                                        </div>
                                        <div class="tf-product-info-badges">
                                            <div class="badges text-uppercase">Best seller</div>
                                            <div class="product-status-content">
                                                <i class="icon-lightning"></i>
                                                <p class="fw-6">Selling fast! 48 people have this in their carts.</p>
                                            </div>
                                        </div>
                                        <div class="tf-product-info-price">
                                            <div class="price"><?php echo $row['price'] ?>$</div>
                                            <input type="hidden" id="unitprice_<?php echo $row['id'] ?>" value="<?php echo $row['price'] ?></input>
                                        </div>
                                        
                                        <div class=" tf-product-description">
                                            <p><?php echo $row['discription'] ?></p>
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
            <?php
            }
            ?>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.btn-quantity').forEach(button => {
                    button.addEventListener('click', function() {
                        // Delay the subtotal update to ensure quantity is updated
                        setTimeout(updateSubtotal, 0);
                    });
                });

                function updateSubtotal() {
                    document.querySelectorAll('[id^="quantity_"]').forEach(input => {
                        let productId = input.id.split('_')[1];
                        let quantity = parseInt(input.value) || 1;

                        // Fetch the unit price for the specific product
                        let unitPriceElement = document.getElementById('unitprice_' + productId);
                        let unitPrice = parseFloat(unitPriceElement.value);

                        if (isNaN(unitPrice)) {
                            console.error('Unit price is not a valid number.');
                            return;
                        }

                        // Calculate the subtotal
                        let subtotal = quantity * unitPrice;

                        // Update the subtotal field
                        let subtotalField = document.getElementById('subtotal_' + productId);
                        if (subtotalField) {
                            subtotalField.innerText = subtotal.toFixed(2) + '$';
                        }

                        // Update the hidden quantity field
                        let hiddenQuantityInput = document.getElementById('hidden_quantity');
                        if (hiddenQuantityInput) {
                            hiddenQuantityInput.value = quantity;
                        }
                    });
                }
            });
        </script>



        <!-- pagination -->
        <ul class="tf-pagination-wrap tf-pagination-list">
            <li class="active">
                <a href="#" class="pagination-link">1</a>
            </li>
            <li>
                <a href="#" class="pagination-link animate-hover-btn">2</a>
            </li>
            <li>
                <a href="#" class="pagination-link animate-hover-btn">3</a>
            </li>
            <li>
                <a href="#" class="pagination-link animate-hover-btn">4</a>
            </li>
            <li>
                <a href="#" class="pagination-link animate-hover-btn">
                    <span class="icon icon-arrow-right"></span>
                </a>
            </li>
        </ul>
    </div>
</section>

<?php
include('templates/footer.php');
?>
<!-- /footer -->

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
        <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
            <div class="toolbar-icon">
                <i class="icon-fill"></i>
            </div>
            <div class="toolbar-label">Filter</div>
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
<!-- toolbarShopmb -->
<div class="offcanvas offcanvas-start canvas-mb toolbar-shop-mobile" id="toolbarShopmb">
    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    <div class="mb-canvas-content">
        <div class="mb-body">
            <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                <li class="nav-mb-item">
                    <a href="shop-default.php" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="images/shop/cate/cate1.jpg" alt="">
                        </div>
                        <span>Accessories</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.php" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="images/shop/cate/cate2.jpg" alt="">
                        </div>
                        <span>Dog</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.php" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="images/shop/cate/cate3.jpg" alt="">
                        </div>
                        <span>Grocery</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.php" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="images/shop/cate/cate4.png" alt="">
                        </div>
                        <span>Handbag</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="#cate-menu-one" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-one">
                        <div class="image">
                            <img src="images/shop/cate/cate5.jpg" alt="">
                        </div>
                        <span>Fashion</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="cate-menu-one" class="collapse list-cate">
                        <ul class="sub-nav-menu" id="cate-menu-navigation">
                            <li>
                                <a href="#cate-shop-one" class="tf-category-link has-children sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-shop-one">
                                    <div class="image">
                                        <img src="images/shop/cate/cate6.jpg" alt="">
                                    </div>
                                    <span>Mens</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="cate-shop-one" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li>
                                            <a href="shop-default.php" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="images/shop/cate/cate1.jpg" alt="">
                                                </div>
                                                <span>Accessories</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-default.php" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="images/shop/cate/cate8.jpg" alt="">
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
                                        <img src="images/shop/cate/cate9.jpg" alt="">
                                    </div>
                                    <span>Womens</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="cate-shop-two" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li>
                                            <a href="shop-default.php" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="images/shop/cate/cate4.png" alt="">
                                                </div>
                                                <span>Handbag</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-default.php" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="images/shop/cate/cate7.jpg" alt="">
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
                            <img src="images/shop/cate/cate6.jpg" alt="">
                        </div>
                        <span>Men</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="cate-menu-two" class="collapse list-cate">
                        <ul class="sub-nav-menu" id="cate-menu-navigation1">
                            <li>
                                <a href="shop-default.php" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="images/shop/cate/cate1.jpg" alt="">
                                    </div>
                                    <span>Accessories</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop-default.php" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="images/shop/cate/cate8.jpg" alt="">
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
                            <img src="images/shop/cate/cate7.jpg" alt="">
                        </div>
                        <span>Tee</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.php" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="images/shop/cate/cate8.jpg" alt="">
                        </div>
                        <span>Shoes</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="#cate-menu-three" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-three">
                        <div class="image">
                            <img src="images/shop/cate/cate9.jpg" alt="">
                        </div>
                        <span>Women</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="cate-menu-three" class="collapse list-cate">
                        <ul class="sub-nav-menu" id="cate-menu-navigation2">
                            <li>
                                <a href="shop-default.php" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="images/shop/cate/cate4.png" alt="">
                                    </div>
                                    <span>Handbag</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop-default.php" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="images/shop/cate/cate7.jpg" alt="">
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

<!-- shoppingCart -->
<?php
include('templates/cart.php');
?>
<!-- /shoppingCart -->

<script src="https://www.paypal.com/sdk/js?client-id=AXHQoXDXD7wkgthihmLQ5l0q11CLmXtGHwWn3GIDeETJNuhTtGYEK9jHS5MGYRIrKoqlX22wrPx4Ek6y&currency=USD"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modals = document.querySelectorAll('.modal');

        modals.forEach(modal => {
            modal.addEventListener('shown.bs.modal', function(event) {
                const modalId = event.target.id.split('_').pop(); // Get the product ID

                // Check if the PayPal button container is present
                const containerId = `paypal-button-container_${modalId}`;
                const container = document.getElementById(containerId);

                if (container) {
                    paypal.Buttons({
                        createOrder: function(data, actions) {
                            // Replace '2' with dynamic value if needed
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        value: document.querySelector(`#subtotal_${modalId}`).textContent.replace('$', '')
                                    }
                                }]
                            });
                        },
                        onApprove: function(data, actions) {
                            return actions.order.capture().then(function(details) {
                                // Send transaction details to the server
                                fetch('http://localhost/Ecommerce/save_transaction.php', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json'
                                        },
                                        body: JSON.stringify({
                                            orderID: data.orderID,
                                            payerID: data.payerID,
                                            paymentID: data.paymentID,
                                            details: details,
                                        })
                                    })
                                    .then(response => response.json())
                                    .then(result => {
                                        if (result.success) {
                                            // Redirect on successful transaction
                                            window.location.href =
                                                `http://localhost/Ecommerce/success.php?orderID=${data.orderID}&payerID=${data.payerID}&paymentID=${data.paymentID}&details=${encodeURIComponent(JSON.stringify(details))}`;
                                        } else {
                                            alert('Failed to save transaction details.');
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Error:', error);
                                        alert('An error occurred while saving transaction details.');
                                    });
                            });
                        },
                        onError: function(err) {
                            console.error('PayPal error:', err);
                            alert('An error occurred with PayPal.');
                        }
                    }).render(`#${containerId}`);
                }
            });
        });
    });
</script>
<?php
include('templates/footerscripts.php');
?>
</body>

</html>