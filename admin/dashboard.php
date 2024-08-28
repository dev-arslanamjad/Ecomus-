<!-- head ko include kr le -->
<?php
session_start();
include('common/header.php');
// if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
//     header("Location: /index.php"); // Redirect to eCommerce index or login page
//     exit();
// }
?>

<body>
    <div id="wrapper">
        <?php
        include('common/sidenav.php');
        ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <?php
                include('common/topnav.php');
                ?>
            </div>
            <div class="container">
                <div class="row border-bottom">
                    <?php if (isset($_SESSION['email'])) { ?><h1>Welcome <?php echo htmlspecialchars($_SESSION['email']); ?></h1><?php

                                                                                                                                } else {
                                                                                                                                    ?><h1>Please<a href="login.php"><?php echo " Login"; ?></a></h1><?php
                                                                                                                                                                                                }
                                                                                                                                                                                                    ?>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeIn">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Total</span>
                                <h5>Companies</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">16</h1>
                                <div class="stat-percent font-bold text-primary"><a href="#"><span class="label label-primary">View</span></a></div>
                                <small>Companies</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Total</span>
                                <h5>Categories</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">50+</h1>
                                <div class="stat-percent font-bold text-primary"><a href="#"><span class="label label-primary">View</span></a></div>
                                <small>Categories</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Total</span>
                                <h5>Products</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">1200+</h1>
                                <div class="stat-percent font-bold text-primary"><a href="#"><span class="label label-primary">View</span></a></div>
                                <small>Products</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Total</span>
                                <h5>Varients</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">2400+</h1>
                                <div class="stat-percent font-bold text-primary"><a href="#"><span class="label label-primary">View</span></a></div>
                                <small>Varients</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include('common/footer.php');
            ?>
        </div>
    </div>

    <?php
    include('common/scripts.php')
    ?>


</body>

<!-- include scripts.php -->


</html>