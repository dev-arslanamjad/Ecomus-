<!-- head ko include kr le -->
<?php
session_start();
include('connection.php');
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
                    <?php if (isset($_SESSION['email'])) { ?>
                        <h1>Welcome <?php echo htmlspecialchars($_SESSION['email']); ?></h1>
                    <?php } else { ?>
                        <h1>Please<a href="login.php"><?php echo " Login"; ?></a></h1>
                    <?php } ?>
                </div>
            </div>
            <?php
            if (isset($_SESSION['response'])) { ?>
                <div class="alert alert-success">
                    <?php echo $_SESSION['response']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            <?php
                unset($_SESSION['response']);
            }
            ?>
            <div class="wrapper wrapper-content animated fadeIn">
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM users ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Total</span>
                                <h5>Users</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $row['id'] ?>+</h1>
                                <div class="stat-percent font-bold text-primary"><a href="#"><span class="label label-primary">View</span></a></div>
                                <small>Users</small>
                            </div>
                        </div>
                    </div>


                    <?php
                    $sql = "SELECT * FROM catagory ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Total</span>
                                <h5>Categories</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $row['id'] ?>+</h1>
                                <div class="stat-percent font-bold text-primary"><a href="#"><span class="label label-primary">View</span></a></div>
                                <small>Categories</small>
                            </div>
                        </div>
                    </div>




                    <?php
                    $sql = "SELECT * FROM products ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Total</span>
                                <h5>Products</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $row['id'] ?>+</h1>
                                <div class="stat-percent font-bold text-primary"><a href="#"><span class="label label-primary">View</span></a></div>
                                <small>Products</small>
                            </div>
                        </div>
                    </div>

                    <?php
                    $sql = "SELECT * FROM order_items ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Total</span>
                                <h5>Orders</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $row['id'] ?>+</h1>
                                <div class="stat-percent font-bold text-primary"><a href="#"><span class="label label-primary">View</span></a></div>
                                <small>Orders</small>
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