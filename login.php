<?php
include('connection.php');
include('templates/header.php')
?>

<?php
if (isset($_SESSION['message'])) {
    echo '<div class="alert alert-info alert-dismissible fade show alert-sm text-center mx-auto" style="max-width: 300px;" role="alert" id="message-alert">
        <h6>' . $_SESSION['message'] . '</h6>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    echo '<script>
        setTimeout(function() {
            var alert = document.getElementById("message-alert");
            alert.style.transition = "opacity 0.5s";
            alert.style.opacity = "0";
            setTimeout(function() {
                alert.style.display = "none";
            }, 500);
        }, 2000);
        </script>';
    unset($_SESSION['message']);
}
?>

</div>
<!-- page-title -->
<div class="container-fluid">
    <div class="container ">
        <h3 class="heading text-center">Log in</h3>
    </div>
</div>
<!-- /page-title -->

<section class="flat-spacing-10">
    <div class="container">
        <div class="tf-grid-layout lg-col-2 tf-login-wrap">
            <div class="tf-login-form">
                <div id="recover">
                    <h5 class="mb_24">Reset your password</h5>
                    <p class="mb_30">We will send you an email to reset your password</p>
                    <div>
                        <form class="" id="login-form" action="#" method="post" accept-charset="utf-8"
                            data-mailchimp="true">
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder="" type="email" id="property3"
                                    name="email">
                                <label class="tf-field-label fw-4 text_black-2" for="property3">Email *</label>
                            </div>
                            <div class="mb_20">
                                <a href="#login" class="tf-btn btn-line">Cancel</a>
                            </div>
                            <div class="">
                                <button type="submit"
                                    class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Reset
                                    password</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="p-3" id="login" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                    <div>
                        <form action="logincode.php" method="post">
                            <h5 class="text-center">Login</h5>
                            <div class="tf-field style-1">
                                <input id="email" class="tf-field-input tf-input" placeholder=" " type="email"
                                    name="email">
                                <label for="name" class="tf-field-label" required>Email *</label>
                            </div>
                            <div class="tf-field style-1">
                                <input class="tf-field-input tf-input" placeholder=" " type="password" name="password">
                                <label class="tf-field-label" for="password" required>Password *</label>
                            </div>
                            <div>
                                <a href="#forgotPassword" data-bs-toggle="modal" class="btn-link link">Forgot your
                                    password?</a>
                            </div>
                            <div class="bottom">
                                <div class="mb_20">
                                    <button id="btn-login" type="submit"
                                        class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Login</button>
                                </div>
                                <div class="w-100">
                                    <a href="register.php" data-bs-toggle="" class="btn-link fw-6 w-100 link">
                                        New customer? Create your account
                                        <i class="icon icon-arrow1-top-left"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="tf-login-content p-3" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                <h5 class="mb_36 text-center">I'm new here</h5>
                <h6 class="mb_20">Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt
                    out, click unsubscribe in our emails.</h6>
                <a class="mt-4" href="register.php" class="tf-btn btn-line">Register<i class="icon icon-arrow1-top-left"></i></a>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<?php
include('templates/footer.php')
?>
<!-- /Footer -->

</div>

<!-- gotop -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
        </path>
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
                            <a href="login.php"
                                class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Log
                                    in</span></a>
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
                        <p>Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt out,
                            click unsubscribe in our emails</p>
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
                            <button type="submit"
                                class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Reset
                                    password</span></button>
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
                            <a href="register.php"
                                class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Register</span></a>
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
                        Spend <span class="price fw-6">$75.00</span> to enjoy <span class="fw-6">Free Shipping</span>
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
                                                    <a href="javascript:void(0);" onclick="removeFromCart(<?php echo $product['id']; ?>)" class="tf-mini-cart-remove bg-none">Remove</a>
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
            </div>
        </div>
    </div>
</div>
<!-- /shoppingCart -->
<!-- Javascript -->
<?php
include('templates/footerscripts.php')
?>
</body>

</html>