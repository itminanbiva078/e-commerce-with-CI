
<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

	<li>
							<div class="cart-img">
								<a href="#"><img alt="" src="<?php echo base_url().'upload/'.$this->cart->product_options($items['rowid'])['photo'] ?>"></a>
							</div>
							<div class="cart-info">
								<h4><a href="#"><?php echo $items['name']; ?></a></h4>
								<span><?php echo $items['price']; ?> <span>x <?php echo $items['qty']; ?></span></span>
							</div>
							<div class="del-icon">
								<i class="fa fa-times-circle" onclick="remove_cart_tem('<?php echo $items['rowid'] ?>')"></i>
							</div>
						</li>

<?php $i++; ?>

<?php endforeach; ?>
<li class="cart-border">
							<div class="subtotal-text">Subtotal: </div>
							<div class="subtotal-price"><?php echo $this->cart->format_number($this->cart->total()); ?></div>
						</li>
						<li>
							<a class="cart-button" href="<?php echo base_url() ?>cart">view cart</a>
							<a class="checkout" href="<?php echo base_url() ?>checkout">checkout</a>
						</li>