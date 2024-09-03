<?php
session_start();
include('connection.php');
include('common/header.php');
$sql = "SELECT * FROM `order_items`";
$result = $conn->query($sql);
?>
<style>
    .form-control {
        background-color: #343a4033;
    }
</style>

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
            <div class="row wrapper border-bottom white-bg page-heading position-relative">
                <div class="col-lg-8 col-sm-8 col-xs-8">
                    <h2> Order Details </h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong> Order Details </strong>
                        </li>
                    </ol>
                </div>
                <div class="responsemsg">
                    <?php
                    if (isset($_SESSION['response'])) {
                        $response = $_SESSION['response'];
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' id='responseAlert'>
                <strong>$response</strong>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                </button>
              </div>";
                        unset($_SESSION['response']);
                        echo "<script>
                            setTimeout(function() {
                                $('#responseAlert').fadeOut('slow');
                            }, 3000);
                        </script>";
                    }
                    ?>
                </div>

            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-content">
                                <div class="wrapper wrapper-content animated fadeInRight ecommerce">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ibox bg-gray">
                                                <div class="ibox-content">
                                                    <table id="myTable" class="table table-striped" style="width:100%; position: relative;">
                                                        <div style="position: absolute; right: 7%; top: -1%;">
                                                            <span >*Search using <b class="text-danger">User ID</b> only</span>
                                                        </div>
                                                        <thead class="bg-dark text-white">
                                                            <tr>
                                                                <th>User ID</th>
                                                                <th>Product ID</th>
                                                                <th>Product Title</th>
                                                                <th>Unit Price</th>
                                                                <th>Quantity(s)</th>
                                                                <th>Total Amount</th>
                                                                <th class="text-right">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            while ($row = $result->fetch_assoc()) {
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $row['order_id']; ?></td>
                                                                    <td><?php echo $row['product_id']; ?></td>
                                                                    <td><?php echo $row['product_name']; ?></td>
                                                                    <td><?php echo $row['price']; ?>$</td>
                                                                    <td><?php echo $row['quantity']; ?></td>
                                                                    <td><?php echo $row['total']; ?>$</td>
                                                                    <td class='text-right'>
                                                                        <div class='btn-group'>
                                                                            <button type='button' class='btn btn-primary mx-2' >Edit</button>
                                                                            <a class='btn btn-danger' href='#'><i class="fa-solid fa-trash"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            columnDefs: [{
                    targets: [0],
                    searchable: true
                },
                {
                    targets: '_all',
                    searchable: false
                }
            ]
        });
    });
</script>

</html>