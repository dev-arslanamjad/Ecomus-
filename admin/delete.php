<?php
session_start();
require_once 'connection.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {

        $_SESSION['response'] = "Deleted successfully";
        
        // Redirect to users.php
        header("Location: users.php");
        exit();

    } else {
        $_SESSION['response'] = "Error Deleting Record";
        header("Location: users.php");
    }
    
    // Close the statement
    $stmt->close();
} else {
    $_SESSION['response'] = "Invalid selection";
        header("Location: users.php");
}

// Close the database connection
$conn->close();
?>
