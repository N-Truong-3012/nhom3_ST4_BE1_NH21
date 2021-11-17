<?php include "header.php" ?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-6 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/LaptopAcerNitro5.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="products.php?type_id=2" class="cta-btn">
								Shop now <i class="fa fa-arrow-circle-right"></i></a>								
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-6 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/ip13promaxngang.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Smart Phone<br>Collection</h3>
								<a href="products.php?type_id=1" class="cta-btn">
								Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					
					<!-- shop -->
					<div class="col-md-6 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/LG A1 48 inch 4K Smart OLED TV.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>TiVi<br>Collection</h3>
								<a href="products.php?type_id=3" class="cta-btn">
								Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-6 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/Tai nghe không dây JBL Tune 700BT.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>HeadPhone<br>Collection</h3>
								<a href="products.php?type_id=4" class="cta-btn">
								Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<?php foreach($getAllProducts as $value): ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
												<div class="product-label">
													<!--<span class="sale">-30%</span>-->
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $value['NAME'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['PRICE']) ?>VND</h4>
												<div class="product-btns">
													<button class="quick-view"><a href="detail.php?type_id=<?php echo $value['TYPE_ID']?>&id=<?php echo $value['ID']?>" method="get"><i class="fa fa-eye"></i></a><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<?php endforeach ?>
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Feature Products</h3>
							<!--<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
								</ul>
							</div>-->
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
									<?php foreach($getFeatureProducts as $value): ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
												<div class="product-label">
													<!--<span class="sale">-30%</span>-->
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $value['NAME'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['PRICE']) ?></h4>												
												<div class="product-btns">
													<button class="quick-view"><a href="detail.php?type_id=<?php echo $value['TYPE_ID']?>&id=<?php echo $value['ID']?>" method="get"><i class="fa fa-eye"></i></a><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<?php endforeach ?>
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-6 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling Laptop</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">						
							<div>
							<?php foreach($getTopSellLaptop as $value): ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Laptop</p>
										<h3 class="product-name"><a href="#"><?php echo $value['NAME'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['PRICE']) ?></h4>
									</div>
								</div>
								<!-- /product widget -->
								<?php endforeach ?>
							</div>						

							<div>
							<?php foreach($getTopSellLaptop2 as $value): ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Laptop</p>
										<h3 class="product-name"><a href="#"><?php echo $value['NAME'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['PRICE']) ?></h4>
									</div>
								</div>
								<!-- /product widget -->
								<?php endforeach ?>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling Smartphone</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
							<?php foreach($getTopSellPhone as $value): ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Smart Phone</p>
										<h3 class="product-name"><a href="#"><?php echo $value['NAME'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['PRICE']) ?></h4>
									</div>
								</div>
								<!-- /product widget -->
								<?php endforeach ?>
							</div>

							<div>
							<?php foreach($getTopSellPhone2 as $value): ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Smart Phone</p>
										<h3 class="product-name"><a href="#"><?php echo $value['NAME'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['PRICE']) ?></h4>
									</div>
								</div>
								<!-- /product widget -->
								<?php endforeach ?>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-6 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling Tivi</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
							<?php foreach($getTopSellTivi as $value): ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Tivi</p>
										<h3 class="product-name"><a href="#"><?php echo $value['NAME'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['PRICE']) ?></h4>
									</div>
								</div>
								<!-- /product widget -->
								<?php endforeach ?>
							</div>

							<div>
							<?php foreach($getTopSellTivi2 as $value): ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Tivi</p>
										<h3 class="product-name"><a href="#"><?php echo $value['NAME'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['PRICE']) ?></h4>
									</div>
								</div>
								<!-- /product widget -->
								<?php endforeach ?>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling Headphone</h4>
							<div class="section-nav">
								<div id="slick-nav-6" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-6">
							<div>
							<?php foreach($getTopSellHeadPhone as $value): ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Headphone</p>
										<h3 class="product-name"><a href="#"><?php echo $value['NAME'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['PRICE']) ?></h4>
									</div>
								</div>
								<!-- /product widget -->
								<?php endforeach ?>
							</div>

							<div>
							<?php foreach($getTopSellHeadPhone2 as $value): ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Headphone</p>
										<h3 class="product-name"><a href="#"><?php echo $value['NAME'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['PRICE']) ?></h4>
									</div>
								</div>
								<!-- /product widget -->
								<?php endforeach ?>
							</div>
						</div>
					</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

<?php include "footer.php" ?>
