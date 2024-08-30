<!-- head ko include kr le -->
<?php
session_start();
include('connection.php');
include('common/header.php');
$productId = isset($_GET['id']) ? $_GET['id'] : 0;
$sql = "SELECT * FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $productId);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();
if ($product) {
    $name = $product['name'];
    $slug = $product['slug'];
    $image = $product['image'];
    $model = $product['model'];
    $discription = $product['discription'];
    $price = $product['price'];
    $quantity = $product['quantity'];
    $available = $product['available'];
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
                    <h2> Edit Product </h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#">Products</a>
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
                                <form method="POST" action="editproductcode.php" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($productId); ?>">
                                    <input type="hidden" name="existing_image" value="<?php echo htmlspecialchars($image); ?>">

                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <img id="preview" style='max-width: 100px; max-height: 100px;' src="<?php echo htmlspecialchars($image); ?>" alt="">
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                                    </div>
                                    <div class="form-group">
                                        <label for="model">Model</label>
                                        <input type="text" class="form-control" id="model" name="model" value="<?php echo htmlspecialchars($model); ?>" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="discription">Description</label>
                                        <textarea class="form-control" id="discription" name="discription" rows="3" required><?php echo htmlspecialchars($discription); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($price); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo htmlspecialchars($quantity); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="available">Available</label>
                                        <select class="form-control" id="available" name="available" required>
                                            <option value="1" <?php if ($available == 1) echo "selected"; ?>>Yes</option>
                                            <option value="0" <?php if ($available == 0) echo "selected"; ?>>No</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="products.php" class="btn btn-danger">Cancel</a>
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
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <?php
    include('common/scripts.php');
    ?>


</body>

</html>