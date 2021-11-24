<?php include "header.php"; ?>

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<?php
								foreach($getAllProtype as $value){
								if ($_GET['type_id'] == $value['TYPE_ID']) {								
							?>
								<li class="active"><?php echo $value['TYPE_NAME'];?></li>
							<?php } ?>
							<?php } ?>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Top selling</h3>
							<?php 
								$getTopSell = $product->getTopSell();
								foreach($getTopSell as $value) {
							?>
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="detail.php?type_id=<?php echo $value['TYPE_ID']?>&id=<?php echo $value['ID']?>"><?php echo $value['NAME'] ?></a></h3>
									<h4 class="product-price"><?php echo number_format($value['PRICE']) ?>VND</h4>
								</div>
							</div>
							<?php } ?>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store products -->
						<div class="row">
							<?php
							if(isset($_GET['type_id'])){
								$type_id = $_GET['type_id'];
								$getProductByType = $product->getProductByType($type_id);
								// Hiển thị 3 sản phẩm trên 1 trang
								$perPage = 3; 				
								// Lấy số trang trên thanh địa chỉ
								if(isset($_GET['page'])){
									$page = $_GET['page']; 
								}
								else{$page = 1;}
								// Tính tổng số dòng, ví dụ kết quả là 18
								$total = count($getProductByType); 					
								// lấy đường dẫn đến file hiện hành
								$url = $_SERVER['PHP_SELF']."?type_id=".$type_id;
								$get3ProductByType = $product->get3ProductByType($type_id, $page, $perPage);
								foreach($get3ProductByType as $value) {
							?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
										<div class="product-label">
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
							</div>
							<!-- /product -->
							<?php } ?>
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing products</span>
							<ul class="store-pagination">
								<?php echo $product->paginate($url, $total, $perPage, $page); ?>								
							</ul>
						</div>
						<!-- /store bottom filter -->
						<?php } ?>
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

<?php include "footer.php"; ?>
