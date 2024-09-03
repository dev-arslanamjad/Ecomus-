<?php
session_start();
include('connection.php');
include('common/header.php');
$sql = "SELECT * FROM `order`";
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
                    <h2> Orders </h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong> Orders </strong>
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
                                                            <span>*Search using <b class="text-danger">User ID</b> only</span>
                                                        </div>
                                                        <thead class="bg-dark text-white">
                                                            <tr>
                                                                <th>User ID</th>
                                                                <th>Transaction ID</th>
                                                                <th>Total Payment</th>
                                                                <th>Status</th>
                                                                <th class="text-right">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            while ($row = $result->fetch_assoc()) {
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $row['user_id']; ?></td>
                                                                    <td><?php echo $row['transaction_id']; ?></td>
                                                                    <td>$<?php echo number_format($row['total'], 2); ?></td>
                                                                    <?php
                                                                    if ($row['status'] == '0') { ?>
                                                                        <td><span class='badge badge-warning'>Processing</span></td>

                                                                    <?php } else if ($row['status'] == '1') { ?>
                                                                        <td><span class='badge badge-primary'>Shipped</span></td>
                                                                    <?php } else if ($row['status'] == '2') { ?>
                                                                        <td><span class='badge badge-success'>Delivered</span></td>
                                                                    <?php } else if ($row['status'] == '3') { ?>
                                                                        <td><span class='badge badge-danger'>Declined</span></td>
                                                                    <?php } ?>
                                                                    <td class='text-right'>
                                                                        <div class='btn-group'>
                                                                            <button type='button' class='btn btn-primary mx-2' data-bs-toggle='modal' data-bs-target='#editStatusModal<?php echo $row['id']; ?>'>
                                                                                Edit Status
                                                                            </button>
                                                                            <a class='btn btn-danger' href='deleteorder.php?id=<?php echo $row['id']; ?>'><i class="fa-solid fa-trash"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <div class="modal fade" id="editStatusModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="editStatusModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="editStatusModalLabel<?php echo $row['id']; ?>">Edit Status</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <!-- Add your form for editing status here -->
                                                                                <form action="editorder.php?id=<?php echo $row['id'] ?>" method="POST">
                                                                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                                                    <div class="mb-3">
                                                                                        <label for="status" class="form-label">Status</label>
                                                                                        <select class="form-select" id="status" name="status">
                                                                                            <option value="0" <?php echo $row['status'] == '0' ? 'selected' : ''; ?>>Processing</option>
                                                                                            <option value="1" <?php echo $row['status'] == '1' ? 'selected' : ''; ?>>Shipped</option>
                                                                                            <option value="2" <?php echo $row['status'] == '2' ? 'selected' : ''; ?>>Delivered</option>
                                                                                            <option value="3" <?php echo $row['status'] == '3' ? 'selected' : ''; ?>>Declined</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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