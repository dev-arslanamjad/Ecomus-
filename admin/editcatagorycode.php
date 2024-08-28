<?php
session_start();
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['discription'];
    
    // Check if a new image was uploaded
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
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

    // Update the category in the database
    $sql = "UPDATE catagory SET name = ?, image = ?, discription = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $image, $description, $id);

    if ($stmt->execute()) {
        $_SESSION['response']= "Category updated successfully";
        header("Location: catagories.php");
    } else {
        echo "Error updating category: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
