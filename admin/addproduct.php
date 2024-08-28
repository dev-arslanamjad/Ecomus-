<?php
session_start(); 
include('connection.php');
$name = $_POST['name'];

$slug = strtolower(str_replace(' ', '-', $name));

$model = $_POST['model'];
$catagoryId = $_POST['catagory'];
$discription = $_POST['discription'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$available = $_POST['available'];

$image = 'uploads/categories/'.$_FILES['image']['name'];
$target = "uploads/categories/".basename($image);
move_uploaded_file($_FILES['image']['tmp_name'], $target);

// Insert data into the product table
$sql = "INSERT INTO products (catagory_id, name, slug, image, model, discription, quantity, price, available) 
        VALUES ('$catagoryId', '$name','$slug', '$image', '$model', '$discription', $quantity, $price, '$available')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['response'] = "Product added successfully!";
    header("Location: products.php");   
} else {
    $_SESSION['response'] = "Error While Adding!";
    header("Location: products.php");
}

// Close connection
$conn->close();
?>