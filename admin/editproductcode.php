<?php
session_start();
include('connection.php');

$id = $_POST['id'];
$name = $_POST['name'];
$model = $_POST['model'];
$description = $_POST['discription']; // Fixed typo in 'description'
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$available = $_POST['available'];

// Check if a new image has been uploaded
if (!empty($_FILES['image']['name'])) {
    $target_dir = "uploads/catagories";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a valid image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image = $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    } else {
        echo "File is not an image.";
        exit();
    }
} else {
    // If no new image, keep the existing one
    $image = $_POST['existing_image'];
}

// Convert 'available' value to 'yes' or 'no'
$available = ($available == 1) ? "yes" : "no";

// Prepare and execute SQL statement
$sql = "UPDATE products SET name = ?, image = ?, model = ?, discription = ?, price = ?, quantity = ?, available = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssi", $name, $image, $model, $description, $price, $quantity, $available, $id);

if ($stmt->execute()) {
    $_SESSION['response'] = "Product updated successfully";
    header('Location: products.php');
    exit();
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
