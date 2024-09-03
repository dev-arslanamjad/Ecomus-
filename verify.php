<?php
session_start();
include('connection.php');
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $query = "SELECT * FROM users WHERE token = '$token' LIMIT 1";
    $query_run = mysqli_query($conn, $query);
    if (mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_array($query_run);
        if ($row['is_verified'] == 0) {
            $clickedtoken = $row['token'];
            $updatequery = "UPDATE users SET is_verified = '1' WHERE token = '$clickedtoken'";
            $updatequery_run = mysqli_query($conn, $updatequery);
            if ($updatequery_run) {
                $_SESSION['response'] = "Your Account has been Verified And you can access it";
                header("location: index.php");
                exit();
            } else {
                $_SESSSION['message'] = "Verification Failed";
                header("location: register.php");
                exit();
            }
        } else {
            $_SESSION['message'] = 'Already have an Account';
                header('location: login.php');
        }
    } else {
        $_SESSION['message'] = 'Invalid Token';
        header('location: register.php');
    }
} else {
    $_SESSION['message'] = 'Verification Error';
    header('location: register.php');
}
