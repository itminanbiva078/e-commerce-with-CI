<?php $this->load->view('head'); ?>
<div class="page-title-area">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="title-heading text-center">
<h1>our SHOPPING CART</h1>
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
<li><span>Shopping Cart</span></li>
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
				<?php echo form_open('Front/update_cart'); ?>
					<div class="table-content table-responsive">
						<table>
							<thead>
								<tr>
									<th class="product-thumbnail">Image</th>
									<th class="product-name">Product</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-subtotal">Total</th>
									<th class="product-remove">Remove</th>
								</tr>
							</thead>
							<tbody>
							    <?php foreach ($this->cart->contents() as $items): ?>
								<tr id="tr_<?php echo $items['rowid'] ?>">   
								<?php echo form_hidden('rowid[]', $items['rowid']); ?>
									<td class="product-thumbnail"><a href="#"><img src="<?php echo base_url().'upload/'.$this->cart->product_options($items['rowid'])['photo'] ?>" alt=""></a></td>
									<td class="product-name"><a href="javascript:void(0)"><?php echo $items['name']; ?></a></td>
									<td class="product-price"><span class="amount"><?php echo $this->cart->format_number($items['price']); ?></span></td>
									<td class="product-quantity"><input type="number" name="qty[]" value="<?php echo $items['qty']; ?>"></td>
									<td class="product-subtotal"><?php echo $this->cart->format_number($items['subtotal']); ?></td>
									<td class="product-remove"><a href="javascript:void(0)" onclick="remove_cart_tem('<?php echo $items['rowid'] ?>')"><i class="fa fa-times"></i></a></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-7 col-xs-12">
							<div class="buttons-cart">
								<input type="submit" value="Update Cart">
								<a href="<?php echo base_url() ?>">Continue Shopping</a>
							</div>
							
						</div>
						<div class="col-md-4 col-sm-5 col-xs-12">
							<div class="cart_totals">
								<h2>Cart Totals</h2>
								<table>                
									<tbody>
										<!--<tr class="cart-subtotal">-->
										<!--	<th>Subtotal</th>-->
										<!--	<td><span class="amount"><?php echo $this->cart->format_number($this->cart->total()); ?></span></td>-->
										<!--</tr>-->
										                        
										<tr class="order-total">                        
											<th>Total</th>
											<td>
												<strong><span class="amount"><?php echo $this->cart->format_number($this->cart->total()); ?></span></strong>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="wc-proceed-to-checkout">
									<a href="<?php echo base_url() ?>checkout">Proceed to Checkout</a>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>


