<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="admin_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin_assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="admin_assets/css/animate.css" rel="stylesheet">
    <link href="admin_assets/css/style.css" rel="stylesheet">
    <style>
        .hello {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset !important;
            padding: 10px !important;
            background-color: #ffffff !important;
            border-radius: 5px !important;
        }
    </style>
</head>

<body class="gray-bg w-100">
    <div class="middle-box text-center loginscreen animated fadeInDown w-100">
        <div class="hello">
            <div style="width: 100%; padding: 80px;">
                <img width="100%" src="admin_assets/img/logo.svg" alt="">
            </div>
            <h3>Log In</h3>
            <div class="mb-3 text center">
                <h3 class="text-danger"><?php if (isset($_SESSION['response'])) {
                                            echo htmlspecialchars($_SESSION['response']);
                                            unset($_SESSION['response']);
                                        } else {
                                        }
                                        ?></h3>
            </div>
            <form class="m-t" role="form" method="post" action="adminlogin.php">

                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.php">Create an account</a>
            </form>
            <p class="m-t"> <small>Ecomus we app framework base on Bootstrap 3 © 2014</small> </p>
        </div>
    </div>



    <script src="admin_assets/js/jquery-3.1.1.min.js"></script>
    <script src="admin_assets/js/popper.min.js"></script>
    <script src="admin_assets/js/bootstrap.js"></script>

</body>


</html>