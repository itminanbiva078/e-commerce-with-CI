
	<div class="shop-area">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-12">
							<div class="single-pro-tab-content">

								<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="photo1">
										<a href="#">
											<img class="zoom" src="<?php echo base_url('uploads/'.$single_news->photo)?>" data-zoom-image="<?php echo base_url('uploads/'.$single_news->photo)?>" alt="Mustard Oil" />
										</a>
									</div>
									</div>
					<ul class="single-product-tab" role="tablist">
					<li role="presentation" class="active">
					<a href="#photo1" aria-controls="photo1" role="tab" data-toggle="tab">
					<img src="<?php echo base_url('uploads/'.$single_news->photo)?>" alt="" />
					</a>
					</li>
					</ul>
					</div>
						</div>
						<div class="col-md-7 col-sm-7 col-xs-12 shop-list shop-details">
							<div class="product-content">
								<h3><a href="javascript:void(0)"><?php echo $single_news->name ?></a></h3>
								<div class="price">
									<span><?php echo $single_news->price ?></span>
									<span class="old"><?php echo $single_news->previous_price ?></span>
								</div> 
								<p><?php echo $single_news->brief ?></p>
										<div class="cart-plus">
										<form action="#">
											<div class="cart-plus-minus"><input type="text" value="1" id="qty_5"/></div>
										</form>
									</div>

									<div class="button-cart">
										<button onclick="add_to_cart(5)"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="product-tabs">
								<div>

									<ul class="pro-details-tab" role="tablist">
										<li role="presentation" class="active"><a href="#tab-desc" aria-controls="tab-desc" role="tab" data-toggle="tab">Description</a></li>
									</ul>

									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="tab-desc">
											<div class="product-tab-desc">
												<p><?php echo $single_news->description ?></p>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

					<aside class="widget widget-categories">
						<h3 class="sidebar-title">Categories</h3>
						<?php foreach ($cat as $k) {?>
						<ul class="sidebar-menu">
<li><a href="<?php echo base_url('Front/category_list/'.$k->categoryID); ?>"><?php echo $k->category_name ;?> </a>
					</ul>
					<?php } ?>
					</aside>
					<!-- <aside class="widget widget-categories">
						<h3 class="sidebar-title">Recent Product</h3>
						<div class="recent-product">
													<div class="single-product">
								<div class="product-img">
									<a href="http://smzint.com/ecom/product/pure-muslin-silk-sharee-from-manikganj/18">
										<img src="http://smzint.com/ecom/upload/bb93cbe8f00f67dd5ce53fc9376f20c1.jpg" alt="Pure Muslin Silk Sharee from Manikganj" />
										<img class="secondary-img" src="http://smzint.com/ecom/upload/bb93cbe8f00f67dd5ce53fc9376f20c1.jpg" alt="" />
									</a>
								</div>
								<div class="product-content">
									<h3><a href="http://smzint.com/ecom/product/pure-muslin-silk-sharee-from-manikganj/18">Pure Muslin Silk Sharee from Manikganj</a></h3>
									<div class="price">
										<span>1,245.00/PCs</span>
										<span class="old">0.00/PCs</span>
									</div>
								</div>
							</div>                                     
													<div class="single-product">
								<div class="product-img">
									<a href="http://smzint.com/ecom/product/black-girls-high-low-kids-dress/17">
										<img src="http://smzint.com/ecom/upload/25b3d09abfc57da9f226804db02e68a5.jpg" alt="Black Girls High Low Kids Dress" />
										<img class="secondary-img" src="http://smzint.com/ecom/upload/25b3d09abfc57da9f226804db02e68a5.jpg" alt="" />
									</a>
								</div>
								<div class="product-content">
									<h3><a href="http://smzint.com/ecom/product/black-girls-high-low-kids-dress/17">Black Girls High Low Kids Dress</a></h3>
									<div class="price">
										<span>1,245.00/PCs</span>
										<span class="old">0.00/PCs</span>
									</div>
								</div>
							</div>                                     
													<div class="single-product">
								<div class="product-img">
									<a href="http://smzint.com/ecom/product/-daraz-white-cotton-lungi-for-men/16">
										<img src="http://smzint.com/ecom/upload/3c08dc6111587b797ad6bc17581aaac9.jpg" alt=" Daraz White Cotton Lungi For Men" />
										<img class="secondary-img" src="http://smzint.com/ecom/upload/3c08dc6111587b797ad6bc17581aaac9.jpg" alt="" />
									</a>
								</div>
								<div class="product-content">
									<h3><a href="http://smzint.com/ecom/product/-daraz-white-cotton-lungi-for-men/16"> Daraz White Cotton Lungi For Men</a></h3>
									<div class="price">
										<span>1,245.00/PCs</span>
										<span class="old">0.00/PCs</span>
									</div>
								</div>
							</div>                                     
												</div>
					</aside> -->


					<aside class="widget product-tag">
						<h3 class="sidebar-title">Popular Tags</h3>
						<ul>
													<li><a href="http://smzint.com/ecom/tags/shirt">shirt</a></li>
													<li><a href="http://smzint.com/ecom/tags/man"> man</a></li>
													<li><a href="http://smzint.com/ecom/tags/kids+shirt"> kids shirt</a></li>
												</ul>
					</aside>

				</div>

			</div>
		</div>
	</div