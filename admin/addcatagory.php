<?php
session_start();
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_name = $_POST['name'];
    $slug = strtolower(str_replace(' ', '-', $category_name));
    $category_description = $_POST['description'];
    $target_dir = "uploads/categories/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO catagory (name, slug, image, discription) VALUES (?, ?, ?, ?)";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $slug, $param_image, $param_description);
            $param_name = $category_name;
            $param_image = $target_file;
            $param_description = $category_description;
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['response']= "Catagory Added Successfully";
                header("Location: catagories.php");
            } else{
                echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
            }
        } else{
            echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    mysqli_close($conn);
}
?>
