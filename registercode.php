<?php
session_start();
include('connection.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
function send_email($name, $email, $token)
{
    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'arslanamjad4444@gmail.com';                     //SMTP username
    $mail->Password   = 'rnndkqqkwrqeapta';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('arslanamjad4444@gmail.com', 'DEV-ARSLAN');
    $mail->addAddress($email, $name);     //Add a recipient
    $mail->addReplyTo('info@example.com', 'Information');

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Successfully Registered An Account ';
    $mail->Body    = "
        <b>Dear $name you can use the link below to verify your account</b>
        <a class='btn btn-primary' href='http://localhost/ecommerce/verify.php?token=$token'>Verify</a>;
        ";

    $mail->send();
    echo 'Message has been sent';
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $token = bin2hex(random_bytes(16));


    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSSION['message'] = "Email already exists";
        header("location: register.php");
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, email, password, token) VALUES ('$name', '$email', '$hashed_password', '$token')";
        if ($conn->query($sql) === TRUE) {
            $user_id = $conn->insert_id;
            send_email("$name", "$email", "$token");
            $_SESSION['userid'] = $user_id;
            $_SESSION['name'] = explode(' ', $name)[0];
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $email;
            header('Location: index.php');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
