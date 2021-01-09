
<div class="shop-area">
	<div class="container">
		<div class="row">

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">


	<aside class="widget widget-categories">
						<h3 class="sidebar-title">Categories</h3>
						<?php foreach ($cat as $k) {?>
						<ul class="sidebar-menu">
<li><a href="<?php echo base_url('Front/category_list/'.$k->categoryID); ?>"><?php echo $k->category_name ;?> </a>
					</ul>
					<?php } ?>
					</aside>
				<aside class="widget product-tag">
					<h3 class="sidebar-title">Popular Tags</h3>
					<ul>
												<li><a href="http://smzint.com/ecom/tags/shirt">shirt</a></li>
												<li><a href="http://smzint.com/ecom/tags/man"> man</a></li>
												<li><a href="http://smzint.com/ecom/tags/kids+shirt"> kids shirt</a></li>
											</ul>
				</aside>

			</div>

			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="shop-content">

					<ul class="shop-tab" role="tablist">
						<li><span class="sorting-name"> View as: </span></li>
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th" aria-hidden="true"></i></a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
					</ul>



					<div class="clear"></div>          

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<div class="row">
								<?php foreach ($sub_cat_list as $key ) 
								
								{?>
								<div class="col-md-4 col-sm-4">                    
									<div class="single-product">
							<div class="product-img">              
								<a href="<?php echo base_url('Front/category_list/'.$k->categoryID); ?>">
									<img src="<?php echo base_url('uploads/'.$key->photo) ?>" alt="Pure Muslin Silk Sharee from Manikganj" />
										<img class="secondary-img" src="<?php echo base_url('uploads/'.$key->photo) ?>" alt="" />
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
							<h3><a href="<?php echo base_url('Front/category_list/'.$k->categoryID); ?>"><?php echo $key->name; ?></a></h3>
							<div class="price">
								<span><?php echo $key->price; ?></span>
								<span class="old"><?php echo $key->previous_price; ?></span>
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