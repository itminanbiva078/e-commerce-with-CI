
<div class="shop-area">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-5 col-sm-5 col-xs-12">
						<div class="single-pro-tab-content">

							<div class="tab-content">
								
								<div role="tabpanel" class="tab-pane active" id="photo">
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
								<span><?php echo number_format($product->price,2) ?></span>

								<span class="old"><?php echo number_format($product->previous_price,2) ?></span>
							</div> 
							<p><?php echo $product->brief ?></p>
							<?php
									$sz=explode(',',$product->sizes);
							 if(count($sz)>1){ ?>
							<div class="pro-size">      
								<label>size <span>*</span></label>
								<select id="size_<?php  echo $product->productID?>"> 
									<?php foreach ($sz as $s) {?> 
									<option value="<?php echo $s ?>"><?php echo $s ?></option>
									<?php } ?>
								</select> 
							</div> 
							<?php } ?>
							<?php
									$sc=explode(',',$product->colors);
							 if(count($sc)>1){ ?>
							<div class="pro-size">
								<label>color <span>*</span></label>
								<select id="color_<?php  echo $product->productID?>">
									<?php foreach ($sc as $s) {?>
									<option value="<?php echo $s ?>"><?php echo $s ?> </option>
									<?php } ?>
								</select>
							</div>
							<?php } ?>
							<div class="product-action">
								<div class="cart-plus">
									<form action="<?php echo base_url('Front/cart') ?>" method="post">
										<div class="cart-plus-minus"><input type="text" name="qty" value="1" id="qty_<?php  echo $product->productID?>"/></div>
									
								</div>

								<div class="button-cart">

								
										
										<input type="hidden" name="productID" value="<?php echo $product->productID?>">
										<input type="hidden" name="name" value="<?php echo $product->name?>">
										<input type="hidden" name="price" value="<?php echo $product->price?>">
										<input type="hidden" name="photo" value="<?php echo $product->photo?>">

										<button onclick="add_to_cart(<?php echo $product->productID ?>)"><i class="fa fa-shopping-cart"></i> add to cart</button>

									</form>
									
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

			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

				<aside class="widget widget-categories">
					<h3 class="sidebar-title">Categories</h3>
					<ul class="sidebar-menu">
						<?php foreach ($cat as $c) {?>
						<li><a href="<?php echo base_url().'category/'.$c->categoryID ?>"><?php echo $c->category_name ?></a> 
							<span class="count">..</span>
						</li>
						<?php } ?>
					</ul>
				</aside>


				


				

			</div>

		</div>
	</div>
</div>
<script src="<?php echo base_url() ?>front_asset/js/jquery.elevateZoom-3.0.8.min.js"></script>
<script>
$(".zoom").elevateZoom();
</script>