


<div class="slider-area">
<div class="slider-active">
	<?php foreach ($list as $k) { ?>
<div class="single-slider slide-height d-flex align-items-center" data-background="<?php echo base_url('uploads/'.$k->photo) ?>">
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="slide-content slide-white">
<h1 data-animation="fadeInUp" data-delay=".5s"><?php echo $k->title ?></h1>
<p data-animation="fadeInUp" data-delay="1s"><?php echo $k->description ?></p>
<a class="btn btn-white" href="shop.html" data-animation="fadeInUp" data-delay="1.5s">shop now</a>
</div>
</div>
</div>
</div>
</div>
<?php } ?>

</div>
</div>


<div class="banner-area bg-color pad-60">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="single-banner banner-item2">
	<?php foreach ($block as $k) {?>
	<a class="banner-thumb" href="#">

<img src="<?php echo base_url() ?>assets/img/banner/shop-cat5.jpg" alt="" />
</a>
<div class="banner-caption">
<span class="shop-cat-subtitle"><?php echo $k->first_text_1 ?></span>
<h2><a href="#"><?php echo $k->first_text_2 ?></a></h2>
<span class="shop-cat-sale"><?php echo $k->first_text_3 ?></span>
	

</div>
<?php } ?>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="single-banner banner-item2">
	<?php foreach ($block as $k) {?>
<a class="banner-thumb" href="#">
<img src="<?php echo base_url() ?>assets/img/banner/banner1.jpg" alt="" />
</a>
<div class="banner-caption">
<span class="shop-cat-subtitle"><?php echo $k->second_text_1 ?></span>
<h2><a href="#"><?php echo $k->second_text_2 ?></a></h2>
<span class="shop-cat-sale"><?php echo $k->second_text_3 ?></span>
</div>
<?php } ?>
</div>
</div>
<div class="col-md-12 col-sm-12">
<div class="single-banner banner-item2 banner-marg">
<?php foreach ($block as $k) {?>
<a class="banner-thumb" href="#">
<img src="<?php echo base_url() ?>assets/img/banner/shop-cat7.jpg" alt="" />
</a>
<div class="banner-caption">
<span class="shop-cat-subtitle"><?php echo $k->third_text_1 ?></span>
<h2><a href="#"><?php echo $k->third_text_2 ?></a></h2>
<span class="shop-cat-sale"><?php echo $k->third_text_3 ?></span>
</div>
<?php } ?>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 hidden-sm">
<div class="single-banner banner-item1">
<?php foreach ($block as $k) {?>
<a class="banner-thumb" href="#">
<img src="<?php echo base_url() ?>assets/img/banner/shop-cat4.jpg" alt="" />
</a>
<div class="banner-caption">
<span class="shop-cat-subtitle"><?php echo $k->fourth_text_1 ?></span>
<h2><a href="#"><?php echo $k->fourth_text_2 ?></a></h2>
<span class="shop-cat-sale"><?php echo $k->fourth_text_3 ?></span>
</div>
<?php } ?>
</div>
</div>
</div>
</div>
</div>

<div class="featured-area pad-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2>New Arrival</h2>
					<img src="http://smzint.com/ecom/front_asset/img/section-title.png" alt="" />
				</div>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-12">
				<div class="product-tab">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
								
							<div class="row">
	<div class="product-curosel">
		<?php foreach ($product_list as $k) {?>
						<div class="col-md-12">
						<div class="single-product">
							<div class="product-img">
								<a href="http://smzint.com/ecom/product/pure-muslin-silk-sharee-from-manikganj/18">
									<img src="<?php echo base_url('uploads/'.$k->photo) ?>" alt="Pure Muslin Silk Sharee from Manikganj" />
									<img class="secondary-img" src="<?php echo base_url('uploads/'.$k->photo) ?>" alt="" />
																	</a>
								<span class="tag-line">new</span>
								<div class="product-action">
									<div class="button-top">
										<a href="javascript:void(0)" onclick="show(18)"><i class="fa fa-search"></i></a>
									</div>
									<div class="button-cart">
										<button onclick="add_to_cart(18)"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>
							<div class="product-content">
							<h3><a href="<?php echo base_url('Front/category_list/'.$k->categoryID); ?>"><?php echo $k->name; ?></a></h3>
							<div class="price">
								<span><?php echo $k->price; ?></span>
								<span class="old"><?php echo $k->previous_price; ?></span>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>				
		</div>
		</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</div>

<div class="category-area pad-42" style="padding-bottom: 20px">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2>what’s hot</h2>
					<img src="http://smzint.com/ecom/front_asset/img/section-title.png" alt="" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="product-curosel">
<?php foreach ($product_list as $k) {?>
				<div class="col-md-12">
					<div class="single-product">
						<div class="product-img">
							<a href="http://smzint.com/ecom/product/pure-muslin-silk-sharee-from-manikganj/18">
								<img src="<?php echo base_url('uploads/'.$k->photo) ?>" alt="Pure Muslin Silk Sharee from Manikganj" />
								<img class="secondary-img" src="<?php echo base_url('uploads/'.$k->photo) ?>" alt="" />
							</a>
							<span class="tag-line">new</span>
							<div class="product-action">
								<div class="button-top">
									<a href="javascript:void(0)" onclick="show(18)"><i class="fa fa-search"></i></a>
									<!-- <a href="#"><i class="fa fa-heart"></i></a> -->
								</div>
								<div class="button-cart">
									<button onclick="add_to_cart(18)"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3><a href="<?php echo base_url('Front/category_list/'.$k->categoryID); ?>"><?php echo $k->name; ?></a></h3>
							<div class="price">
								<span><?php echo $k->price; ?></span>
								<span class="old"><?php echo $k->previous_price; ?></span>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>


<div class="testimonial-area pad-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="testimonial-carousel">
					<?php foreach ($test as $k) {?>
					<div class="single-testimonial text-center">
						<p><span class="quotes"><i class="fa fa-quote-left"></i></span> <?php echo $k->msg; ?><span class="quotes"><i class="fa fa-quote-right"></i></span></p>
						<div class="client-info">
							<span class="name"><?php echo $k->name; ?></span>
						</div>	
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
		</div>
</div>

<div class="brand-area pad-60">
	<div class="container">
		<div class="brand-inner-container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Our brand</h2>
						<img src="http://smzint.com/ecom/front_asset/img/section-title.png" alt="" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="brand-curosel">
					<?php foreach ($brand_name as $k) { ?>
				<div class="col-md-12">
						<div class="single-brand">
							<img src="<?php echo base_url('uploads/'.$k->photo)?>" alt="Yellow"/>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

