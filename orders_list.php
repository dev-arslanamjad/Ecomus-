<?php
include('connection.php');
include('templates/header.php');
$user_id = $_GET['id'];
$sql = "SELECT * FROM `order` WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);
?>
<style>
    .hover-quantity {
        opacity: 0;
        transform: translateY(100%);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .card-product:hover .hover-quantity {
        opacity: 1;
        transform: translateY(0);
    }
</style>
<div class="tf-breadcrumb">
    <div class="container">
        <div class="tf-breadcrumb-wrap d-flex justify-content-between flex-wrap align-items-center">
            <div class="tf-breadcrumb-list">
                <a href="index.php" class="text">Home</a>
                <i class="icon icon-arrow-right"></i>
                <a href="#" class="text">Orders</a>
            </div>

        </div>
    </div>
</div>
<?php if (isset($_SESSION['response'])) { ?>
    <div class="container d-flex justify-content-center">
        <div class="w-50 alert alert-info" role="alert" id="responseAlert">
            <?php echo $_SESSION['response']; ?>
        </div>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('responseAlert').style.display = 'none';
        }, 2000);
    </script>
<?php unset($_SESSION['response']);
} ?>

<?php
if (mysqli_num_rows($result) == 0) { ?>
    <div class="container-fluid">
        <div class="container text-center" style="margin-block: 100px;">
            <p>Nothing in Orders <span><a class="text-primary" href="products.php">Order Some?</a></span></p>
        </div>
    </div>
<?php } else { ?>
    <div class="container-fluid">
        <div class="container">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="background-color: #0080007d; color:white; width:20%">Order ID</th>
                        <th style="background-color: #0080007d; color:white; width:20%">Transaction ID</th>
                        <th style="background-color: #0080007d; color:white; width:20%">Total Amount</th>
                        <th style="background-color: #0080007d; color:white; width:20%">Status</th>
                        <th style="background-color: #0080007d; color:white; width:20%">Action</th>
                    </tr>
                </thead>
                <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo substr($row['transaction_id'], 0, 17); ?></td>
                            <td><?php echo $row['total'] ?>.00$</td>
                            <?php
                            if ($row['status'] == '0') { ?>
                                <td><span class='badge bg-warning text-dark'>Processing</span></td>
                            <?php } else if ($row['status'] == '1') { ?>
                                <td><span class='badge bg-primary'>Shipped</span></td>
                            <?php } else if ($row['status'] == '2') { ?>
                                <td><span class='badge bg-success'>Delivered</span></td>
                            <?php } else if ($row['status'] == '3') { ?>
                                <td><span class='badge bg-danger'>Declined</span></td>
                            <?php } ?>
                            <td>
                                <a class="btn btn-info" href="view_order.php?id=<?php echo $row['id'] ?>">View <i class="fa-solid fa-eye"></i></a>
                                <a class="btn btn-danger" href="cancel_order.php?id=<?php echo $row['id'] ?>">Cancel <i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                <?php }
                ?>
            </table>
        </div>
    </div>

<?php } ?>




<?php
include('templates/footer.php');
?>


<!-- gotop -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
    </svg>
</div>
<!-- /gotop -->

<!-- shoppingCart -->
<?php
include('templates/cart.php');
?>
<!-- /shoppingCart -->

<!-- Javascript -->
<?php
include('templates/footerscripts.php');
?>
</body>

</html>