<?php
session_start();
include('connection.php');
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_image = mysqli_real_escape_string($conn, $_POST['product_image']);
    $product_model = mysqli_real_escape_string($conn, $_POST['product_model']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    $product_quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

    $product = array(
        'id' => $product_id,
        'name' => $product_name,
        'image' => $product_image,
        'model' => $product_model,
        'price' => $product_price,
        'quantity' => $product_quantity,
    );

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $product_exists = false;
    foreach ($_SESSION['cart'] as &$cart_item) {
        if ($cart_item['id'] == $product_id) {
            $product_exists = true;
            $cart_item['quantity'] += $product_quantity;
            break;
        }
    }
    if (!$product_exists) {
        $_SESSION['cart'][] = $product;
    }
    $_SESSION['response']= 'Product added to cart';
    header("Location: index.php");
    exit();

