<?php
session_start();
include('connection.php');
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $order_id = $_GET['id'];
    
    // Prepare SQL statement to delete the order
    $sql = "DELETE FROM `order` WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $order_id);
    
    // Execute the statement
    if($stmt->execute()) {
        $_SESSION['response'] = 'Order Removed';
        header("Location: orders.php?");
        exit();
    } else {
        header("Location: orders.php?error=Failed to delete order");
        exit();
    }
} else {
    header("Location: orders.php?error=No order ID provided");
    exit();
}
?>
