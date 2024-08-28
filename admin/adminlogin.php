<?php
session_start();
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password']; // No need to escape the password

    // Check if email already exists
    $sql = "SELECT * FROM admin WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc(); // Fetch associative array

            // Verify the password
            if (($password == $row['password'])) {
                $_SESSION['email']= $row['email'];
                $_SESSION['password']= $row['password'];
                $_SESSION['is_admin'] = true;
                header('location: dashboard.php');
            } else {
                $_SESSION['response']= 'Invalid Password';
                header('location:index.php');
            }
        } else {
            $_SESSION['response']="Account doesn't Exist.**";
                header('location: index.php');
        }
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
