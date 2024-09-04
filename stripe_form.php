<?php
include('templates/header.php')
?>
<!-- /header -->
<!-- page-title -->
<div class="container-full" style="margin-bottom: 19px;">
    <h4 class="heading text-center"><b>Pay with Stripe</b></h4>
</div>
<!-- /page-title -->
<div class="container" style="margin-bottom: 50px;">
    <form action="stripe_checkout.php" method="post">
        <div class="tf-mini-cart-main">
            <div class="tf-mini-cart-sroll">
                <div class="tf-mini-cart-items" style="display: flex; ">
                    <?php
                    $subtotal = 0;
                    foreach ($_SESSION['cart'] as $key => $product):
                        $quantity = isset($product['quantity']) ? $product['quantity'] : 1;
                        $subtotal += $product['price'] * $quantity;
                    ?>
                        <div class="tf-mini-cart-item p-4" id="cart-item-<?php echo $product['id']; ?>" style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset; width: 16%; margin-bottom: 10px; margin-right: 5px;">
                            <div class="card-product-wrapper">
                                <a href="#" class="product-img">
                                    <img class="lazyload img-hover" data-src="admin/<?php echo $product['image']; ?>"
                                        src="admin/<?php echo $product['image']; ?>" alt="image-product">
                                </a>
                            </div>
                            <div class="tf-mini-cart-info">
                                <a class="title link" href="product_detail.php?id=<?php echo $product['id'] ?>">
                                    <p><b><?php echo $product['name']; ?></b></p>
                                </a>
                                <p class="meta-variant"><?php echo $product['model']; ?></p>
                                <div class="price fw-6"><?php echo $product['price']; ?>$</div>
                                <div class="tf-mini-cart-btns">
                                    <div class`="wg-quantity small">
                                        <label for="">Quantity : x<?php echo $quantity; ?></label>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="product[<?php echo $key; ?>][id]" value="<?php echo $product['id']; ?>">
                        <input type="hidden" name="product[<?php echo $key; ?>][name]" value="<?php echo $product['name']; ?>">
                        <input type="hidden" name="product[<?php echo $key; ?>][model]" value="<?php echo $product['model']; ?>">
                        <input type="hidden" name="product[<?php echo $key; ?>][price]" value="<?php echo $product['price']; ?>">
                        <input type="hidden" name="product[<?php echo $key; ?>][quantity]" value="<?php echo $quantity; ?>">
                    <?php endforeach; ?>
                </div>
                <div class="tf-cart-totals-discounts bg-black text-white d-flex justify-content-around">
                    <div class="tf-cart-total">Subtotal</div>
                    <div class="tf-totals-total-value fw-6"><?php echo $subtotal; ?>$</div>
                </div>
                <button type="submit" class="w-100 tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn dropdown-toggle mt-1" style="background-color: #000000 !important; border: unset;">
                    <span>Pay with <img width="55px" src="assets/frontend/images/payments/stripe.png" alt=""></span>
                </button>
            </div>
        </div>
        <input type="hidden" value="<?php echo $subtotal; ?>" name="price">
    </form>
</div>
<!-- Footer -->
<?php
include('templates/footer.php')
?>
<!-- /Footer -->
<!-- gotop -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
    </svg>
</div>
<!-- /gotop -->
<?php
include('templates/footerscripts.php')
?>
</body>
</html>