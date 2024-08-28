<!-- head ko include kr le -->
<?php
session_start();
include('connection.php');
include('common/header.php');
$catagoryId = isset($_GET['id']) ? $_GET['id'] : 0;
$sql = "SELECT * FROM catagory WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $catagoryId);
$stmt->execute();
$result = $stmt->get_result();
$catagory = $result->fetch_assoc();
if ($catagory) {
    $name = $catagory['name'];
    $image = $catagory['image'];
    $discription = $catagory['discription'];
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
                            <a href="#">Catagories</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong> Edit Catagory </strong>
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
                                <form method="POST" action="editcatagorycode.php" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $catagoryId; ?>">
                                    <div class="form-group">
                                        <label for="name">Catagory Title</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo ($name); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <img id="preview" style='max-width: 100px; max-height: 100px;' src="<?php echo $image?>" alt="">
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="discription">Description</label>
                                        <textarea class="form-control" id="discription" name="discription" rows="3" required><?php echo ($discription); ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="catagories.php" type="alert" class="btn btn-danger">Cancel</a>
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

    <script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
    </script>

</body>

</html>