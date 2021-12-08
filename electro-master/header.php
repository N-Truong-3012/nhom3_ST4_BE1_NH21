<?php
	require "config.php";
	require "models/db.php";
	require "models/product.php";
	require "models/protype.php";
	require "models/manufacture.php";
	$manufacture = new Manufacture;
	$protype = new Protype;
	$getAllProtype = $protype->getAllProtype();
	$product = new Product;
	$getAllProducts = $product->getAllProducts();
    $getTenNewProducts = $product->getTenNewProducts();
	$getNewLapTop = $product->getNewLapTop();
    $getFeatureProducts = $product->getFeatureProducts();
	$getTopSellLaptop = $product->getTopSellLaptop();
	$getTopSellLaptop2 = $product->getTopSellLaptop2();
	$getTopSellPhone = $product->getTopSellPhone();
	$getTopSellTivi = $product->getTopSellTivi();
	$getTopSellHeadPhone = $product->getTopSellHeadPhone();
	$getTopSellPhone2 = $product->getTopSellPhone2();
	$getTopSellTivi2 = $product->getTopSellTivi2();
	$getTopSellHeadPhone2 = $product->getTopSellHeadPhone2();
    //var_dump($getTenNewProducts);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>LDH HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li style="color: white"><i class="fa fa-phone"></i> 0838 970 023</li>
						<li style="color: white"><i class="fa fa-envelope-o"></i> tdc@edu.vn</li>
						<li><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+Cao+%C4%90%E1%BA%B3ng+C%C3%B4ng+ngh%E1%BB%87+Th%E1%BB%A7+%C4%90%E1%BB%A9c/@10.8514325,106.7580641,15z/data=!4m5!3m4!1s0x0:0xb3ff69197b10ec4f!8m2!3d10.8514325!4d106.7580641">
						<i class="fa fa-map-marker"></i> 53 Võ Văn Ngân, P.Linh Chiểu, TP.THủ Đức, TP.Hồ Chí Minh</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form method="get" action="result.php">
									<select class="input-select">
										<option>All Categories</option>
									</select>
									<input class="input" placeholder="Tìm sản phẩm"name="keyword">
									<button type="submit" class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<!--<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>-->
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" aria-expanded="true" href="giohang.php">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
									</a>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<?php foreach ($getAllProtype as $value){ ?>
						<li><a href="products.php?type_id=<?php echo $value['TYPE_ID']?>">
						<?php echo $value['TYPE_NAME'] ?></a></li>
						<?php } ?>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
