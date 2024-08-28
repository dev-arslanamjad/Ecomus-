<?php
session_start();
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password']; // No need to escape the password

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc(); 
            
            if (password_verify($password, $row['password'])) {
                echo 'Login successful';
                $_SESSION['userid']=$row['id'];
                $_SESSION['name']=$row['name'];
                header('location: index.php');
            } else {
                echo 'Invalid password';
            }
        } else {
            $_SESSION['message']= 'Invalid Email or Password';
            header('location: login.php');
        }
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
