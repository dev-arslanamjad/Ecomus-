<?php
include('connection.php');
include('templates/header.php');
$sql = "SELECT * FROM catagory";
$result = $conn->query($sql);
?>
<!-- page-title -->
<div class="tf-page-title">
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                <div class="heading text-center">Categories</div>
                <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li>
                        Categories
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /page-title -->

<!-- blog-grid-main -->
<div class="blog-grid-main">
    <div class="container">
        <div class="row">
            <?php while($row = $result->fetch_assoc()) { ?>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="blog-article-item">
                    <div class="article-thumb">
                        <a href="products_by_catagory.php?id=<?php echo $row['id']?>&<?php echo $row['slug']?>">
                            <img style="width: 300px; height: 300px; object-fit: contain;" class="lazyload" data-src="admin/<?php echo $row['image']?>" src="admin/<?php echo $row['image']?>" alt="img-blog">
                        </a>
                    </div>
                    <div class="article-content">
                        <div class="article-title">
                            <a href="products_by_catagory.php?id=<?php echo $row['id']?>&<?php echo $row['slug']?>" class=""><b><?php echo $row['name']?></b></a>
                        </div>
                        <div class="article-description">
                            <span><?php echo substr($row['discription'], 0, 100) . '...'; ?></span>
                        </div>
                        <div class="article-btn">
                            <a href="products_by_catagory.php?id=<?php echo $row['id']?>&<?php echo $row['slug']?>" class="tf-btn btn-line fw-6">Explore<i class="icon icon-arrow1-top-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- /blog-grid-main -->

<!-- footer -->
<?php
include 'templates/footer.php';
?>
<!-- /footer -->

</div>

<!-- gotop -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
    </svg>
</div>
<!-- /gotop -->






<!-- shoppingCart -->
<?php include 'templates/cart.php'; ?>
<!-- /shoppingCart -->

<!-- Javascript -->
<?php include 'templates/footerscripts.php'; ?>
</body>


<!-- Mirrored from themesflat.co/html/ecomus/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 07:21:39 GMT -->

</html>