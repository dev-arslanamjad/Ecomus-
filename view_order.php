<?php
include('connection.php');
include('templates/header.php');
$order_id = $_GET['id'];

$sql = "SELECT products.image, order_items.product_name, order_items.price, order_items.quantity, order_items.total
        FROM products
        INNER JOIN order_items ON products.id = order_items.product_id
        WHERE order_items.id = $order_id";
        
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
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
                <a href="#" class="text">Order Details</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead class="">
                <tr>
                    <th style="background-color: #0080007d; color:white;" >Serial No.</th>
                    <th style="background-color: #0080007d; color:white;">Product Name</th>
                    <th style="background-color: #0080007d; color:white;">Product Image</th>
                    <th style="background-color: #0080007d; color:white;">Unit Price</th>
                    <th style="background-color: #0080007d; color:white;">Quantity</th>
                    <th style="background-color: #0080007d; color:white;">Total</th>
                </tr>
            </thead>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) { ?>

                <tbody>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['product_name'] ?></td>
                        <td><img src="admin/<?php echo $row['image'] ?>" alt="Product Image" width="50px"></td>
                        <td><?php echo $row['price'] ?>.00$</td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php echo $row['total'] ?>.00$</td>
                    </tr>
                </tbody>
            <?php $i++; 
            } ?>
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
