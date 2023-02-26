<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<title>ValiantGames</title>

	<!-- Bootstrap core CSS -->
	<link href="../../Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">


	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="../../Public/cyborgTheme/css/fontawesome.css">
	<link rel="stylesheet" href="../../Public/cyborgTheme/css/templatemo-cyborg-gaming.css">
	<link rel="stylesheet" href="../../Public/cyborgTheme/css/owl.css">
	<link rel="stylesheet" href="../../Public/cyborgTheme/css/animate.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

	<link rel="stylesheet" href="../../Public/css/style.css">

</head>

<body>

	<!-- ***** Preloader Start ***** -->
	<div id="js-preloader" class="js-preloader">
		<div class="preloader-inner">
			<span class="dot"></span>
			<div class="dots">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- ***** Preloader End ***** -->

	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="/" class="logo">
							<!-- <img src="Images/logo.png" alt=""> -->
							<h2>ValiantGames</h2>
						</a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Search End ***** -->
						<div class="search-input">
							<form id="search" action="#">
								<input type="text" placeholder="Search..." id='searchText' name="searchKeyword" onkeypress="handle" />
								<i class="fa fa-search"></i>
							</form>
						</div>
						<!-- ***** Search End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="/" class="active">Home</a></li>
								<?php
									if (!isset($_SESSION['sessionId'])) {
										echo '<li><a href="showLogin">LogIn</a></li>';
									} else {
										if ($_SESSION['role'] == 'ADMIN') {
											echo '<li><a href="showTableGames">Games</a></li>';
											echo '<li><a href="showTableCompanies">Companies</a></li>';
											echo '<li><a href="showTableCategories">Categories</a></li>';
											echo '<li><a href="showTableBundles">Bundles</a></li>';
										} else {
											echo '<li><a href="browse.html">Browse</a></li>';
										}
										echo '<li><a href="profile?'.$_SESSION['userId'].'">Profile <img src="'.$_SESSION['avatar'].'" class="userAvatar" alt=""></a></li>';
									}
								?>
						</ul>
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-content">
				<?php
					if (isset($pageContent)) {
						echo $pageContent;
					}
				?>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p>Kreivald Dmitrii | Arseni Chistyakov | JPTV20 | 2023</p>
				</div>
			</div>
		</div>
	</footer>


	<!-- Scripts -->
	<!-- Bootstrap core JavaScript -->
	<script src="../../Public/jquery/jquery.min.js"></script>
	<script src="../../Public/bootstrap/js/bootstrap.min.js"></script>

	<script src="../../Public/cyborgTheme/js/isotope.min.js"></script>
	<script src="../../Public/cyborgTheme/js/owl-carousel.js"></script>
	<script src="../../Public/cyborgTheme/js/tabs.js"></script>
	<script src="../../Public/cyborgTheme/js/popup.js"></script>
	<script src="../../Public/cyborgTheme/js/custom.js"></script>

	<script src="../../Public/js/script.js"></script>

</body>

</html>