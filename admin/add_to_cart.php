<?php
session_start();
include ('connection.php');

// Check if form is submitted
if (isset($_POST['add_to_cart'])) {
    // Get product ID from the form
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    
    // Check if the product ID is valid
    if ($product_id > 0) {
        // Get product details
        $stmt = $mysqli->prepare("SELECT name, price FROM products WHERE id = ?");
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($product = $result->fetch_assoc()) {
            // Initialize cart if not already done
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            
            // Add product to cart
            if (isset($_SESSION['cart'][$product_id])) {
                $_SESSION['cart'][$product_id]['quantity']++;
            } else {
                $_SESSION['cart'][$product_id] = $product;
                $_SESSION['cart'][$product_id]['quantity'] = 1;
            }
            
            // Redirect to a cart page or display a success message
            header("Location: cart.php"); // Redirect to cart page
            exit;
        } else {
            echo "Product not found.";
        }
        
        $stmt->close();
    }
}

$mysqli->close();
?>
