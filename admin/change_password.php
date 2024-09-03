<?php
session_start();
include 'connection.php';
$oldpswrd = $_POST['pswrd'];
$newpswrd = $_POST['newpswrd'];
$cpswrd = $_POST['cpswrd'];
$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if ($oldpswrd == $row['password']) {
    if ($newpswrd == $cpswrd) {
        $sql = "UPDATE admin SET password = '$newpswrd' WHERE id = 1";
        mysqli_query($conn, $sql);
        $_SESSION['response'] = 'Successfully Changed the Password';
        header('location:dashboard.php');
    } else {
        $_SESSION['response'] = 'Password Not Matched...';
        header('location:dashboard.php');
    }
} else {
    $_SESSION['response'] = 'Wrong Old Password';
    header('location:dashboard.php');
}
