<div class="page-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-heading text-center">
					<h1>Checkout your orders</h1>
					<p>We are a featured brand that calls itself fashion</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-list">
					<ul>
						<li><a href="<?php echo base_url() ?>">HOME</a></li>
						<li><a href="<?php echo base_url() ?>">Shop</a></li>
						<li><a href="<?php echo base_url().'cart' ?>">Shopping Cart</a></li>
						<li><span>Checkout</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="cart-main-area">       
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="checkout-area">
					<div class="container">
						<div class="row">   
							<div class="col-lg-6 col-md-6">
							    <?php if(!isset($_SESSION['token'])){ ?>    
								<div id="checkout-login" class="coupon-content" style="display: block;">
									<div class="coupon-info">
										<h3>Login</h3> 
										<form action="<?php echo base_url().'signin' ?>" method="post">
											<p class="form-row-first">
												<label>Email <span class="required">*</span></label>
												<input type="text" name="email" required>
											</p>
											<p class="form-row-last">
												<label>Password <span class="required">*</span></label>
												<input type="text" name="password" required>
											</p>
											<p class="form-row">
												<input type="submit" value="Login">
											</p>
											<p class="lost-password">
												<a href="<?php echo base_url().'forgot_password' ?>">Lost your password? </a>
											</p>
										</form>
									</div>
								</div>
								<?php } ?>
								<form action="<?php echo base_url().'Front/place_order' ?>" method="post">
									<div class="checkbox-form">
										<h3>Billing and shipping Details</h3>
										<div class="row">

											<div class="col-md-6">
												<div class="checkout-form-list">
													<label>First Name <span class="required">*</span></label>
													<input type="text" name="f_name" required placeholder="" value="<?php echo @$customer->f_name ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="checkout-form-list">
													<label>Last Name <span class="required">*</span></label>
													<input type="text" name="l_name" required placeholder="" value="<?php echo @$customer->l_name ?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="checkout-form-list">
													<label>Address <span class="required">*</span></label>
													<input type="text" name="address" required placeholder="Street address" value="<?php echo @$customer->address ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="checkout-form-list">
													<label>Town / City <span class="required">*</span></label>
													<input type="text" name="city" required placeholder="" value="<?php echo @$customer->city ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="checkout-form-list">
													<label>Postcode / Zip <span class="required">*</span></label>
													<input type="text" name="post_code" required placeholder="Postcode / Zip" value="<?php echo @$customer->post_code ?>">
												</div>
											</div>
											<div class="col-md-6">                
												<div class="checkout-form-list">
													<label>Email Address <span class="required">*</span></label>
													<input type="email" name="email" required placeholder="" value="<?php echo @$customer->email ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="checkout-form-list">
													<label>Phone <span class="required">*</span></label>
													<input type="text" name="phone" placeholder="Phone" value="<?php echo @$customer->phone ?>">
												</div>
											</div>
											<?php if(!isset($_SESSION['token'])){ ?>  
											<div class="col-md-12">
												<div class="checkout-form-list create-acc">
													<input id="cbox" type="checkbox" value="true" >
													<label>Create an account?</label>
												</div>
												<div id="cbox_info" class="checkout-form-list create-account">
													<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
													<label>Account password <span class="required">*</span></label>
													<input type="password" name="password" placeholder="password" >
												</div>
											</div>
											<?php } ?>
										</div>

									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="your-order">
										<h3>Your order</h3>
										<div class="your-order-table table-responsive">
											<table>
												<thead>
													<tr>
														<th class="product-name">Product</th>
														<th class="product-total">Total</th>
													</tr>
												</thead>
												<tbody>
												<?php foreach ($this->cart->contents() as $items): ?>
													<tr class="cart_item">
														<td class="product-name">
    														<?php echo $items['name']; ?><strong class="product-quantity"> × <?php echo $items['qty']; ?></strong>
														</td>
														<td class="product-total">
															<span class="amount"><?php echo $this->cart->format_number($items['subtotal']); ?></span>
														</td>
													</tr>
													<?php endforeach; ?>
												</tbody>
												<tfoot>
													<!--<tr class="cart-subtotal">-->
													<!--	<th>Cart Subtotal</th>-->
													<!--	<td><span class="amount"><?php echo $this->cart->format_number($this->cart->total()); ?></span></td>-->
													<!--</tr>-->
													                              
													<tr class="order-total">
														<th>Order Total</th>
														<td><strong><span class="amount"><?php echo $this->cart->format_number($this->cart->total()); ?></span></strong>
														</td>
													</tr>
												</tfoot>
											</table>
										</div>   
										<div class="payment-method">
											<div class="order-button-payment">
												<input type="submit" value="Place order">
											</div>
										</div>
									</div>
								</div>                                                   
							</form>
						</div>
					</div>
				</div>
				
			</form>
		</div>
	</div>
</div>
</div>




