<!-- head ko include kr le -->
<?php
session_start();
include('connection.php');
include('common/header.php');
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
                            <strong> Users </strong>
                        </li>
                    </ol>
                </div>
                <div class="responsemsg">
    <?php
    if(isset($_SESSION['response'])) {
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
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th style="width: 25%">Serial No.</th>
                                                <th style="width: 25%">Name</th>
                                                <th style="width: 25%">email</th>
                                                <th style="width: 25%">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM users";
                                            $result = mysqli_query($conn, $query);
                                            $serial = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<tr>";
                                                echo "<td>" . $serial . "</td>";
                                                echo "<td>" . $row['name'] . "</td>";
                                                echo "<td>" . $row['email'] . "</td>";
                                                echo "<td><a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a> <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a></td>";
                                                echo "</tr>";
                                                $serial++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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