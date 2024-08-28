<!-- head ko include kr le -->
<?php
session_start();
include('connection.php');
include('common/header.php');
$userId = isset($_GET['id']) ? $_GET['id'] : 0; // Get user ID from URL parameter

// Fetch user data from the database
$sql = "SELECT name, email FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    $name = $user['name'];
    $email = $user['email'];
} else {
    $name = '';
    $email = '';
}
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

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8 col-sm-8 col-xs-8">
                    <h2> Users </h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#">Users</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong> Edit </strong>
                        </li>
                    </ol>
                </div>
                <div class="responsemsg">
                    <?php
                    if (isset($_SESSION['response'])) {
                        $response = $_SESSION['response'];
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>$response</strong>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                </button>
              </div>";
                        unset($_SESSION['response']);
                    }
                    ?>

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-content">
                                <form method="POST" action="editcode.php">
                                    <input type="hidden" name="id" value="<?php echo $userId; ?>">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo ($name); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo ($email); ?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="users.php" type="alert" class="btn btn-danger">Cancel</a>
                                </form>

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
    include('common/scripts.php');
    ?>


</body>

</html>