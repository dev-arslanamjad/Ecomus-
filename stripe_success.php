<?php
session_start(); 
include ('connection.php');
$_SESSION['response']='Thank you! Your Order Has Been Placed Successfully';
unset($_SESSION['cart']);
header('location: index.php');
?>