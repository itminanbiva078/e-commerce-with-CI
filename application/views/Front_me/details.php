<?php $this->load->view('head'); ?>

<div class="shop-area">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-5 col-sm-5 col-xs-12">
						<div class="single-pro-tab-content">

							<div class="tab-content">
								
								<div role="tabpanel" class="tab-pane <?php if($i==1){ echo 'active';} ?>" id="photo<?php echo $i ?>">
									<a href="#">
										<img class="zoom" src="<?php echo base_url().'uploads/'.$product->photo?>" data-zoom-image="<?php echo base_url().'uploads/'.$product->photo?>" alt="<?php echo $product->name ?>" />
									</a>
								</div>
								
							</div>

							<ul class="single-product-tab" role="tablist">
								
								<li role="presentation" class="active">
									<a href="#photo" aria-controls="photo" role="tab" data-toggle="tab">
										<img src="<?php echo base_url().'uploads/'.$product->photo?>" alt="" />
									</a>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12 shop-list shop-details">
						<div class="product-content">
							<h3><a href="javascript:void(0)"><?php echo $product->name ?></a></h3>
							<div class="price">
								<span><?php echo number_format($product->price,2) ?>/<?php echo $product->unit ?></span>
								<span class="old"><?php echo number_format($product->previous_price,2) ?>/<?php echo $product->unit ?></span>
							</div> 
							<p><?php echo $product->brief ?></p>
							<?php if(count($product->sizes)>1){ ?>
							<div class="pro-size">      
								<label>size <span>*</span></label>
								<select id="size_<?php  echo $product->productID?>"> 
									<?php foreach ($product->sizes as $s) {?> 
									<option value="<?php echo $s ?>"><?php echo $s ?></option>
									<?php } ?>
								</select> 
							</div> 
							<?php } ?>
							<?php if(count($product->colors)>1){ ?>
							<div class="pro-size">
								<label>color <span>*</span></label>
								<select id="color_<?php  echo $product->productID?>">
									<?php foreach ($product->colors as $s) {?>
									<option value="<?php echo $s ?>"><?php echo $s ?> </option>
									<?php } ?>
								</select>
							</div>
							<?php } ?>
							<div class="product-action">
								<div class="cart-plus">
									<form action="#">
										<div class="cart-plus-minus"><input type="text" value="1" id="qty_<?php  echo $product->productID?>"/></div>
									</form>
								</div>

								<div class="button-cart">
									<button onclick="add_to_cart(<?php echo $product->productID ?>)"><i class="fa fa-shopping-cart"></i> add to cart</button>
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
											<?php echo $product->description ?>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Related Product </h2>
							<img src="<?php echo base_url()?>front_asset/img/section-title.png" alt="" />
						</div>
					</div>
					<div class="related-curosel">
						<?php foreach ($related as $h) {$p=explode(',',$h->photo);?>
						<div class="col-md-12">
							<div class="single-product">
								<div class="product-img">
									<a href="<?php echo base_url().'product/'.strtolower(str_replace(' ', '-', $h->name)).'/'.$h->productID ?>">
										<img src="<?php echo base_url().'upload/'.$p[0] ?>" alt="<?php echo $h->name ?>" />
										<img class="secondary-img" src="<?php echo base_url().'upload/'.$p[0] ?>" alt="" />
									</a>
									<span class="tag-line">new</span>
									<div class="product-action">
										<div class="button-top">
											<a href="javascript:void(0)" onclick="show(<?php echo $h->productID ?>)"><i class="fa fa-search"></i></a>
										</div>
										<div class="button-cart">
											<button onclick="add_to_cart(<?php echo $h->productID ?>)"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="<?php echo base_url().'product/'.strtolower(str_replace(' ', '-', $h->name)).'/'.$h->productID ?>"><?php echo $h->name ?></a></h3>
									<div class="price">
										<span><?php echo number_format($h->price,2); ?>/<?php echo $h->unit ?></span>
										<span class="old"><?php echo number_format($h->previous_price,2); ?>/<?php echo $h->unit ?></span>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

				<aside class="widget widget-categories">
					<h3 class="sidebar-title">Categories</h3>
					<ul class="sidebar-menu">
						<?php foreach ($category as $c) {?>
						<li><a href="<?php echo base_url().'category/'.$c->categoryID ?>"><?php echo $c->category_name ?></a> 
							<span class="count">..</span>
						</li>
						<?php } ?>
					</ul>
				</aside>


				<aside class="widget widget-categories">
					<h3 class="sidebar-title">Recent Product</h3>
					<div class="recent-product">
						<?php foreach ($recent as $h) {$p=explode(',',$h->photo);?>
						<div class="single-product">
							<div class="product-img">
								<a href="<?php echo base_url().'product/'.strtolower(str_replace(' ', '-', $h->name)).'/'.$h->productID ?>">
									<img src="<?php echo base_url().'upload/'.$p[0] ?>" alt="<?php echo $h->name ?>" />
									<img class="secondary-img" src="<?php echo base_url().'upload/'.$p[0] ?>" alt="" />
								</a>
							</div>
							<div class="product-content">
								<h3><a href="<?php echo base_url().'product/'.strtolower(str_replace(' ', '-', $h->name)).'/'.$h->productID ?>"><?php echo $h->name ?></a></h3>
								<div class="price">
									<span><?php echo number_format($h->price,2); ?>/<?php echo $h->unit ?></span>
									<span class="old"><?php echo number_format($h->previous_price,2); ?>/<?php echo $h->unit ?></span>
								</div>
							</div>
						</div>                                     
						<?php } ?>
					</div>
				</aside>


				<aside class="widget product-tag">
					<h3 class="sidebar-title">Popular Tags</h3>
					<ul>
						<?php
						$tags=explode(',',$this->session->userdata('general')->tags);
						foreach ($tags as $k) {?>
						<li><a href="<?php echo base_url().'tags/'.urlencode(trim($k)) ?>"><?php echo $k ?></a></li>
						<?php } ?>
					</ul>
				</aside>

			</div>

		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>
<script src="<?php echo base_url() ?>front_asset/js/jquery.elevateZoom-3.0.8.min.js"></script>
<script>
$(".zoom").elevateZoom();
</script>