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
 
 
	<!-- product section start here -->
	<section class="product-section product-style2 bg-product padding-tb">
		<div class="shape-image">
			<img src="assets/images/product/shape/01.png" alt="abs-thumb" class="shape-1">
			<img src="assets/images/product/shape/02.png" alt="abs-thumb" class="shape-2">
		</div>
		<div class="container">
			<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
				<h3>Our Agricultural Products</h3>
				<p>We trade and supply high-quality agricultural goods including potatoes, onions, rice, pulses, fruits,
					and spices — ensuring freshness and timely delivery.</p>
			</div>

			<div class="section-wrapper imgg">
				<div class="row justify-content-center">
					<?php
					include("config.php");
					$s = "select * from `pro`";
					$q = mysqli_query($con, $s);
					while ($row = mysqli_fetch_array($q)) {
					?>
						<div class="col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
							<a href="single.php?slug=<?php echo $row['slug'] ;?>">
								<div class="product-item-2">
								<div class="product-inner">
									<div class="product-thumb">
										<img src="<?php echo $row['image'] ;?>" class="obj" height="300px" width="100%"
											alt="<?php echo $row['name'] ;?>">
									</div>
									<div class="product-content">
										<a href="#">
											<h5><?php echo $row['name'] ;?></h5>
										</a>

										<div class="cart-option">
											<a href="#" class="lab-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Enquire now</span></a>
										</div>
									</div>
								</div>
							</div>
							</a>
						</div>
					<?php  } ?>
				</div>
				 
			</div>
		</div>
	</section>
	 
	<?php
	include "footer.php";

	?>