<?php
// success.php
session_start();
include 'connection.php'; 

$orderID = $_GET['orderID'] ?? '';
$payerID = $_GET['payerID'] ?? '';
$paymentID = $_GET['paymentID'] ?? '';
$details = $_GET['details'] ?? '';

if ($orderID) {
    $order_id = $orderID;
    echo "<h1>Thank you for your purchase!</h1>";
    $details_json = $_GET['details'];
    $details = json_decode($details_json, true);
    if (json_last_error() === JSON_ERROR_NONE) {
        if (isset($details['purchase_units'][0]['amount'])) {
            $amount = $details['purchase_units'][0]['amount']; 
            $user_id =  $_SESSION['userid'];
           
            $value = $amount['value'];

            $sql = "INSERT INTO `order` (user_id, transaction_id, total)
            VALUES ('$user_id','$paymentID', '$value')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $last_id = mysqli_insert_id($conn);
                /*----------------------------------- echo 'added to orders'; ------------------------------------------*/
            } else {
                die("Error: " . mysqli_error($conn));
            }
        } else {
            echo "Amount details not found.";
        }
    } else {
        echo "Error decoding JSON: " . json_last_error_msg();
    }
    // Insert order items
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $user_id =  $_SESSION['userid'];
            $total_price = $item['price'] * $item['quantity'];

            $sql = "INSERT INTO order_items (order_id, product_id, product_name, price, quantity, total) 
                    VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iisdid", $user_id, $item['id'], $item['name'], $item['price'], $item['quantity'], $total_price);
            $stmt->execute();
        }
    }

    // Clear the cart
    unset($_SESSION['cart']);
    $_SESSION['response'] = 'Your Order has been Placed Successfully';
    header('location:index.php');
    /*------------------------------- echo "<p>Your order has been processed successfully!</p>"; ---------------------*/
} else {
    echo "<h1>Transaction failed.</h1>";
}

// Close the database connection
$conn->close();
