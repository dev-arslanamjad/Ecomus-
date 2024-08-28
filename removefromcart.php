<?php
session_start();
include('connection.php'); // Include the connection if necessary
if (isset($_GET['id'])) {
    $product_id = mysqli_real_escape_string($conn, $_GET['id']); // Sanitize input

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $cart_item) {
            if ($cart_item['id'] == $product_id) {
                // Remove the item from the cart
                unset($_SESSION['cart'][$key]);
                // Reindex the array to avoid gaps
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                $_SESSION['response'] = 'Product removed from cart';
                break;
            }
        }
    } else {
        $_SESSION['response'] = 'Cart is empty.';
    }
}

// Redirect back to the index or cart page
header("Location: index.php");
exit();
