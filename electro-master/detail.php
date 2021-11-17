<?php include "header.php"; ?>
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li><a href="#">Detail</a></li>
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
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Laptops
										<small>(120)</small>
									</label>
								</div>

							</div>
						</div>
						<!-- /aside Widget -->
						
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Brand</h3>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-2">
									<label for="brand-2">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-3">
									<label for="brand-3">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-4">
									<label for="brand-4">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-5">
									<label for="brand-5">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-6">
									<label for="brand-6">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Related Products</h3>
							<?php
								if(isset($_GET['type_id'])){
									$getRelatedProducts = $product->getRelatedProducts($_GET['type_id']);
									foreach($getRelatedProducts as $value){
							?>
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/<?php echo $value['IMAGE'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?php echo $value['TYPE_NAME'] ?></p>
									<h3 class="product-name"><a href="detail.php?type_id=<?php echo $value['TYPE_ID']?>&id=<?php echo $value['ID']?>"><?php echo $value['NAME'] ?></a></h3>
									<h4 class="product-price"><?php echo number_format($value['PRICE']) ?></del> VND</h4>
								</div>
							</div>
							<?php } ?>
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
								if(isset($_GET['id'])){
									foreach($getAllProducts as $value){
										if ($value['ID'] == $_GET['id']) {
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
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="detail.php"><?php echo $value['NAME'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['PRICE']) ?>VND</h4>
										</div>
									</div>
									
								</div>
								<div class="col-md-8 col-xs-6" style="font-size: large">
									<?php echo $value['DESCRIPTION'] ?></a>
								</div>							
							</div>		
							<div class="add-to-cart" style="left:70%;position: relative;">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>					
							<!-- /product -->
							<?php } ?>
							<?php } ?>
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing detail products</span>
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