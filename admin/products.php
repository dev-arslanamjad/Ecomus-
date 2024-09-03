<?php
session_start();
include('connection.php');
include('common/header.php');
$sql = "SELECT * FROM products ORDER BY id DESC";
$result = $conn->query($sql);


$query = "SELECT * FROM catagory";
$result2 = $conn->query($query);
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
            <div class="row wrapper border-bottom white-bg page-heading position-relative">
                <div class="col-lg-8 col-sm-8 col-xs-8">
                    <h2> Products </h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong> Products </strong>
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
                <div class="w-100" style="position: absolute; left: 82%;bottom: 18%;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">Add Product</button>
                </div>

                <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="addproduct.php" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Product Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Product Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="image" required accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Model</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="model" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Category</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="catagory" id="catagory">
                                                <?php 
                                                while ($row = $result2->fetch_assoc()) {
                                                    echo "<option value='".$row['id']."'>".$row['name']."</option>";                           
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Description</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="discription" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Quantity</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" name="quantity" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Price</label>
                                        <div class="col-sm-8">
                                            <input type="number" step="0.01" class="form-control" name="price" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Available (YES-NO)</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="available" required>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Information</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </form>
                            </div>

                        </div>
                    </div>
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
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                                        <thead class="bg-dark text-white">
                                                            <tr>
                                                                <th data-toggle="true">Product Name</th>
                                                                <th data-toggle="true">Image</th>
                                                                <th data-hide="phone">Model</th>
                                                                
                                                                <th data-hide="phone">Price</th>
                                                                <th data-hide="phone,tablet">Quantity</th>
                                                                <th data-hide="phone">Available</th>
                                                                <th class="text-right" data-sort-ignore="true">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo "<tr>";
                                                                echo "<td>" . $row['name'] . "</td>";
                                                                echo "<td><img src='" . $row['image'] . "' width='100' height='100'></td>";
                                                                echo "<td>" . $row['model'] . "</td>";
                                                                echo "<td>$" . $row['price'] . "</td>";
                                                                echo "<td>" . $row['quantity'] . "</td>";
                                                                echo "<td>" . $row['available'] . "</td>";
                                                                echo "<td class='text-right'>
                                                                        <div class='btn-group'>
                                                                            <a class='btn btn btn-primary mx-2' href='editproduct.php?id=" . $row['id'] . "'><i class='fa-solid fa-pen'></i></a>
                                                                            <a class='btn btn btn-danger' href='deleteproduct.php?id=" . $row['id'] . "'><i class='fa-solid fa-trash'></i></a>
                                                                        </div>
                                                                      </td>";
                                                                echo "</tr>";
                                                            }
                                                            ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="6">
                                                                    <ul class="pagination float-right"></ul>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">



</body>

</html>