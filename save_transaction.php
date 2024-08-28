<?php
// save_transaction.php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

echo $orderID = $data['orderID'];
echo $payerID = $data['payerID'];
echo $paymentID = $data['paymentID'];
echo $details = json_encode($data['details']);

$response = array('success' => true);

echo json_encode($response);
