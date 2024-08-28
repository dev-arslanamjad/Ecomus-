<?php
session_start();
include('connection.php');
$order_id = $_GET['id'];
$new_status = $_POST['status'];
$sql = "UPDATE `order` SET `status` = ? WHERE `id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $new_status, $order_id);
    
    if ($stmt->execute()) {
        $_SESSION['response']= 'Updated Status';
        header('Location: orders.php');
    } else {
        // Error updating status
        echo "Error updating order status: " . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
?>
