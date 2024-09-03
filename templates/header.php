<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<?php
include('templates/headlinks.php')
?>
<style>
    .status-message {
        font-size: 22px;
        position: absolute;
        right: 53%;
        top: -11%;
    }

    .message {
        font-size: 22px;
        position: absolute;
        right: 47%;
        top: -9%;
    }

    .hover {
        position: relative;
        text-decoration: none;
    }

    .hover::before {
        content: '';
        position: absolute;
        width: 0;
        height: 1px;
        top: 24px;
        background-color: currentColor;
        transition: width 0.3s ease-in-out;
    }

    .hover:hover::before {
        width: 100%;
    }

    .hover_logout {
        position: relative;
        text-decoration: none;
    }

    .hover_logout::before {
        content: '';
        position: absolute;
        width: 0;
        height: 1px;
        top: 45px;
        background-color: currentColor;
        transition: width 0.3s ease-in-out;
    }

    .hover_logout:hover::before {
        width: 100%;
    }
</style>

<body class="preload-wrapper">
    <?php include('templates/preloader.php') ?>
    <div id="wrapper">
        <header id="header" class="header-default">
            <div class="px_15 lg-px_40">
                <div class="row wrapper-header align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="index.php" class="logo-header">
                            <img src="assets/frontend/images/logo/logo.svg" alt="logo" class="logo">
                        </a>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-4 tf-md-hidden">
                        <nav class="box-navigation text-center">
                            <ul class="box-nav-ul d-flex align-items-center justify-content-center gap-40">
                                <li class="menu-item">
                                    <a href="index.php" class="item-link">Home</a>
                                </li>
                                <li class="menu-item">
                                    <a href="shop.php" class="item-link">Shop</a>
                                </li>
                                <li class="menu-item">
                                    <a href="products.php" class="item-link">Products</a>
                                </li>

                                <li class="menu-item"><a href="products.php" class="item-link">Buy now</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <ul class="row nav-icon" style="position: relative;">
                            <li class="col-6 nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-bag"></i><span class="count-box"></span></a></li>
                            <li class="col-6">
                                <?php
                                if (isset($_SESSION['name'])) {
                                    $name = $_SESSION['name'];
                                ?>
                                    <div class="col-xl-2 status-message">
                                        <div class="drop" style=" position:relative;">
                                            <div class="d-flex gap-10"><i class="fa-solid fa-user"></i>
                                                <a><?php echo $name; ?></a>
                                            </div>
                                            <div class="row drop_menu" aria-labelledby="dropdownMenu2">
                                                <div class="col d-flex align-items-center pt-2">
                                                <i class="fa-solid fa-truck-fast"></i>
                                                    <a class="dropitem hover" href="orders_list?id=<?php echo $_SESSION['userid']?>">Orders</a>
                                                </div>
                                                <div class="col d-flex align-items-center pt-2">
                                                    <i class="fa-solid fa-sign-out-alt me-2"></i>
                                                    <a class="dropitem hover" href="logout.php">Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else {
                                ?>
                                    <div class="col-xl-2 message">
                                        <div class="drop">
                                            <i class="fa-solid fa-user "></i>
                                            <div class="drop_menu row" aria-labelledby="dropdownMenu2" style="position: absolute; right: -30px;">
                                                <div class="row">
                                                    <a class=" dropitem pt-3 hover_logout" href="login.php"> Login </a>
                                                </div>


                                                <div class="w-100 row">
                                                    <a class="dropitem pt-3 hover_logout" href="register.php"> Register</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var dropMenus = document.querySelectorAll('.drop_menu');
                var drops = document.querySelectorAll('.drop');

                dropMenus.forEach(function(menu) {
                    menu.style.display = 'none';
                });

                drops.forEach(function(drop) {
                    drop.addEventListener('mouseover', function() {
                        var menu = this.querySelector('.drop_menu');
                        if (menu) {
                            menu.style.display = 'block';
                            menu.style.transition = 'all 0.2s';
                        }
                    });

                    drop.addEventListener('mouseout', function() {
                        var menu = this.querySelector('.drop_menu');
                        if (menu) {
                            menu.style.display = 'none';
                        }
                    });
                });
            });
        </script>