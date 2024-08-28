<?php 
session_start();
include('connection.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id = $id";
    $result = $conn->query($sql);
    if($result){
        $_SESSION['response'] = "Product deleted successfully";
        header('location: products.php');
    }
    else{
        $_SESSION['response'] = "Something went wrong";
        header('location: products.php');
    }
}
else{
    header('location: products.php');
}
?>