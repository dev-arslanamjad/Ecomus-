<?php
header('Content-Type: application/json');

// Fetch the POST data
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Check if JSON decoding failed
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['success' => false, 'message' => 'JSON decoding error: ' . json_last_error_msg()]);
    exit;
}

// Check if the required data is available
if (isset($data['orderID'], $data['payerID'], $data['details'])) {
    // Process the data (e.g., save to the database)

    // Simulate success for testing purposes
    $response = ['success' => true];
} else {
    // If data is missing, return an error
    $response = ['success' => false, 'message' => 'Missing required data'];
}

// Output the JSON response
echo json_encode($response);
?>
