<?php
session_start();
include('connection.php');

$user_id = $_SESSION['userid'];
$subtotal = $_GET['total'];
$session_id = $_GET['session_id'];
$sql = "INSERT INTO `order` (user_id, transaction_id, total)
            VALUES ('$user_id','$session_id', '$subtotal')";
$result = mysqli_query($conn, $sql);

$_SESSION['response'] = 'Thank you! Your Order Has Been Placed Successfully';
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
header('location: index.php');
