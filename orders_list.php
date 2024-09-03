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


<div class="container-fluid">
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead >
                <tr>
                    <th style="background-color: #0080007d; color:white;" >Order ID</th>
                    <th style="background-color: #0080007d; color:white;">Transaction ID</th>
                    <th style="background-color: #0080007d; color:white;">Total Amount</th>
                    <th style="background-color: #0080007d; color:white;">Status</th>
                    <th style="background-color: #0080007d; color:white;">Action</th>
                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['transaction_id'] ?></td>
                        <td><?php echo $row['total'] ?>$</td>
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
                        <td><a class="btn btn-info" href="view_order.php?id=<?php echo $row['id'] ?>"><b>View </b><i class="fa-solid fa-eye"></i></a></td>
                    </tr>
                </tbody>
            <?php }
            ?>
        </table>
    </div>
</div>



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