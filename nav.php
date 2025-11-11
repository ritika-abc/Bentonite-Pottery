<!-- preloader start here -->
<div class="preloader">
	<div class="preloader-inner">
		<div class="preloader-icon">
			<span></span>
			<span></span>
		</div>
	</div>
</div>
<!-- preloader ending here -->


<!-- Header section start here -->
<header class="header-section">
	<div class="header-top bg-black d-none d-lg-block">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-7 col-12">
					<div class="ht-left">
						<ul class="agri-ul d-flex flex-wrap">
							<li><i class="icofont-envelope"></i><span>internationalmaruti67@gmail.com</span></li>
							<li><i class="icofont-phone"></i><span>+91 79836 38411, +91 95209 50370</span></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-5 col-12">
					<div class="ht-right">
						<div class="scocial-media">
							<a href="#" class="facebook"><i class="icofont-facebook"></i></a>
							<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
							<a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
							<a href="#" class="instagram"><i class="icofont-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-area">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<div class="primary-menu">
					<div class="logo">
						<h4>Maruti International</h4>
						<!-- <a href="index#"><img src="assets/images/logo/01.png" alt="Maruti International Logo"></a> -->
					</div>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<i class="icofont-navigation-menu"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<div class="main-area">
							<div class="main-menu">
								<ul class="agri-ul">
									<li><a href="/">Home</a></li>
									<li><a href="about.php">About Us</a></li>

									<li class=" "><a href="#">Our Products</a>
										<ul class="agri-ul">
											<?php
											include("config.php");
											$s = "select * from `pro`";
											$q = mysqli_query($con, $s);
											while ($row = mysqli_fetch_array($q)) {
											?>
												<li><a target="_blank" href="single.php?slug=<?php echo $row['slug']; ?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
											 
											<li class="bg-white "><a class="text-success" target="_blank" href="products.php">All Products</a></li>

										</ul>
									</li>
									<li><a href="services.php">Services</a></li>
 									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
							<div class="header-btn">
								<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="lab-btn"><span>Get in Touch</span></a>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
</header>
<!-- Header section ending here -->