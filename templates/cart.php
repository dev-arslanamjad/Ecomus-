<div class="modal fullRight fade modal-shopping-cart" id="shoppingCart">
    <div class="modal-dialog">
        <div class="modal-content" style="height:100%; overflow-y: auto">
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
                        Spend <span class="price fw-6">$75.00</span> more to enjoy <span class="fw-6">Free
                            Shipping</span>
                    </div>
                </div>
                <?php $userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : ''; ?>

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
                                            <a href="product_detail.php?id=<?php echo $product['id'] ?>">
                                                <img src="admin/<?php echo $product['image']; ?>"
                                                    alt="<?php echo $product['name']; ?>">
                                            </a>
                                        </div>
                                        <div class="tf-mini-cart-info">
                                            <a class="title link" href="product_detail.php?id=<?php echo $product['id'] ?>"><?php echo $product['name']; ?></a>
                                            <div class="meta-variant"><?php echo $product['model']; ?></div>
                                            <div class="price fw-6"><?php echo $product['price']; ?>$</div>
                                            <div class="tf-mini-cart-btns">
                                                <div class="wg-quantity small">
                                                    <label for="">Quantity :</label>
                                                    <input id="quantity-<?php echo $product['id']; ?>" type="text" name="number"
                                                        value="<?php echo $quantity; ?>" readonly>
                                                </div>
                                                <a href="removefromcart.php?id=<?php echo $product['id']; ?>"
                                                    class="tf-mini-cart-remove bg-none">Remove</a>
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
                                        <input class="" type="checkbox" id="CartDrawer-Form_agree" name="agree_checkbox"
                                            required>
                                        <div>
                                            <i class="icon-check"></i>
                                        </div>
                                    </div>
                                    <label for="CartDrawer-Form_agree">I agree with the <a href="#"
                                            title="Terms of Service">terms and conditions</a></label>
                                </div>
                            </div>

                            <?php if (!empty($_SESSION['userid'])): ?>
                                <div class="dropdown col-12 mt-2">
                                    <button type="button"
                                        class="tf-btn btn-fill justify-content-center fw-6 fs-16 w-100 animate-hover-btn dropdown-toggle animate__animated animate__fadeIn"
                                        id="paymentDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                        style="background-color: #ffa500 !important; border: unset;"><span>Pay with <img
                                                src="assets/frontend/images/payments/paypal.png" alt=""></span></button>
                                    <ul class="dropdown-menu w-100 animate__animated animate__fadeIn"
                                        aria-labelledby="paymentDropdown">
                                        <div id="paypal-button-container"></div>
                                    </ul>
                                </div>
                                <a href="stripe_form.php" class="dropdown-item"><button class="w-100 tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn dropdown-toggle mt-1" type="button" style="background-color: #000000 !important; border: unset;">
                                        <span>Pay with <img width="55px" src="assets/frontend/images/payments/stripe.png" alt=""></span>
                                    </button></a>

                            <?php else: ?>
                                <div class="dropdown col-12">
                                    <button type="button"
                                        class="tf-btn btn-fill justify-content-center fw-6 fs-16 w-100 animate-hover-btn dropdown-toggle animate__animated animate__fadeIn"
                                        id="paymentDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        Payment Method
                                    </button>
                                    <ul class="dropdown-menu w-100 animate__animated animate__fadeIn"
                                        aria-labelledby="paymentDropdown">
                                        <li class="mb-1 animate__animated animate__fadeInUp">
                                            <a href="login.php"
                                                class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"
                                                style="background-color: #000000 !important; border: unset;"><span>Pay with <img
                                                        width="55px" src="assets/frontend/images/payments/stripe.png"
                                                        alt=""></span></a>
                                        </li>

                                        <li class="animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                                            <a href="login.php"
                                                class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"
                                                style="background-color: #ffa500 !important; border: unset;"><span>Pay with <img
                                                        src="assets/frontend/images/payments/paypal.png" alt=""></span></a>
                                        </li>
                                    </ul>
                                </div>
                            <?php
                                $_SESSION['message'] = 'Login first to continue';
                            endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="emptycart">
                        <div class="emptycart-icon d-flex justify-content-center align-items-center flex-column">
                            <img width="300px"
                                src="assets/frontend/vecteezy_young-man-shopping-push-empty-shopping-trolley_4964514.svg"
                                alt="">
                            <h5 class="emptycart-icon-text">Your cart is empty</h5>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=AXHQoXDXD7wkgthihmLQ5l0q11CLmXtGHwWn3GIDeETJNuhTtGYEK9jHS5MGYRIrKoqlX22wrPx4Ek6y&currency=USD"></script>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: <?php echo $subtotal; ?>
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

                            window.location.href =
                                `http://localhost/Ecommerce/success.php?orderID=${data.orderID}&payerID=${data.payerID}&paymentID=${data.paymentID}&details=${encodeURIComponent(JSON.stringify(details))}`;
                        } else {
                            alert('Failed to save transaction details.');
                        }
                    });
            });
        },
        onError: function(err) {

        }
    }).render('#paypal-button-container');
</script>
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