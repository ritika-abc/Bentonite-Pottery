<!DOCTYPE html>
<html lang="en">


<head>
    <title>Maruti International</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/agricul.png">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php
    include "nav.php";

    ?>

    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Welcome to <q>Maruti International</q> <br> explore our products</h4>

            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Blog Section Start Here -->
    <div class="blog-section blog-single padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                        <?php
                        include("config.php");
                        $slug = $_GET['slug'];
                        $s = "select * from `pro` where `slug`='$slug'";
                        $q = mysqli_query($con, $s);
                        while ($row = mysqli_fetch_array($q)) {
                        ?>
                            <article>
                                <div class="post-item-2">
                                    <div class="post-inner">
                                        <div class="post- ">
                                            <img src="<?php echo $row['image']; ?>" style="height: 400px !important;" width="100%" class="obj rounded" alt="blog">
                                        </div>
                                        <div class="post-content">
                                            <?php echo $row['content']; ?>
                                        </div>
                                    </div>
                                </div>

                            </article>
                        <?php } ?>
                    </div>
                    <div class="col-lg-3 col-md-7 col-12">
                        <aside>
                            <div class="widget widget-author">
                                <div class="widget-wrapper">

                                    <div class="admin-content">

                                        <div class="scocial-media">
                                            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                                            <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget widget-category">
                                <div class="widget-header">
                                    <h5>Our Product</h5>
                                </div>
                                <ul class="agri-ul widget-wrapper">
                                    <?php
                                    include("config.php");
                                    $s = "select * from `pro`";
                                    $q = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($q)) {
                                    ?>
                                        <li>
                                            <a href="single.php?slug=<?php echo $row['slug'] ;?>" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i><?php echo $row['name'] ;?></span> </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section ENding Here -->

    <!-- newsletters section start here -->
    <div class="newsletter-section">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="newsletter-title">
                        <h4>Subscribe Our Newsletter</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="newsletter-form">
                        <form action="https://labartisan.net/" class="d-flex flex-wrap">
                            <input type="text" placeholder="Enter Your Email" class="input-email">
                            <input type="submit" value="Subscribe" class="subscribe-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletters section ending here -->

    <?php
    include "footer.php";

    ?>