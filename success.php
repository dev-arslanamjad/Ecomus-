<?php
// success.php
$orderID = $_GET['orderID'] ?? '';
$payerID = $_GET['payerID'] ?? '';
$paymentID = $_GET['paymentID'] ?? '';
$details = $_GET['details'] ?? '';

if ($orderID) {
    // You would typically fetch transaction details from your database here using $orderID.
    // For now, we'll just display the information.

    echo "<h1>Thank you for your purchase!</h1>";
    echo "<p>Order ID: " . htmlspecialchars($orderID) . "</p><br>";
    echo "<p>Payer ID: " . htmlspecialchars($payerID) . "</p><br>";
    echo "<p>Payment ID: " . htmlspecialchars($paymentID) . "</p><br>";
    
    // If you need to decode and display transaction details
    // Note: Details are usually a JSON string, so you might want to decode and format it if needed
    $detailsDecoded = json_decode($details, true);
    if (json_last_error() === JSON_ERROR_NONE) {
        echo "<p>Details: " . htmlspecialchars(print_r($detailsDecoded, true)) . "</p><br>";
    } else {
        echo "<p>Details: " . htmlspecialchars($details) . "</p><br>";
    }

    // Display more transaction details if available
} else {
    echo "<h1>Transaction failed.</h1>";
}
?>
