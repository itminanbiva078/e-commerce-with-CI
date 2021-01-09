
<div class="login-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="login-content">
					<h2 class="login-title">Login</h2>
					<p>Hello,Welcome to your account</p>
					<form action="" method="post">
						<label>Email Address</label>
						<input type="text" name="email" required>
						<label>Password</label>
						<input type="password" name="password" required>
						<div class="login-lost">
							<span class="log-rem">
								
							</span>
							<span class="forgot-login">
								<a href="#">Forgot your password?</a>
							</span>
						</div>
						<input class="login-sub" type="submit" value="Login">
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="login-content login-margin">
					<h2 class="login-title">create a new account</h2>
					<p>Create your own Unicase account.</p>
<!-- 					<form action="http://smzint.com/ecom/register" method="post">
 -->	
 			<?php echo form_open_multipart(base_url('Front/customar_data_insert')); ?>
					<div class="row" style="background: #fff">
							<div class="col-md-6">
								<div class="checkout-form-list">
									<label>First Name <span class="required">*</span></label>
									<input type="text" name="f_name" required placeholder="" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="checkout-form-list">
									<label>Last Name <span class="required">*</span></label>
									<input type="text" name="l_name" required placeholder="" value="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Address <span class="required">*</span></label>
									<input type="text" name="address" required placeholder="Street address" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="checkout-form-list">
									<label>Town / City <span class="required">*</span></label>
									<input type="text" name="town" required placeholder="" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="checkout-form-list">
									<label>Postcode / Zip <span class="required">*</span></label>
									<input type="text" name="post_code" required placeholder="Postcode / Zip" value="">
								</div>
							</div>
							<div class="col-md-6">                
								<div class="checkout-form-list">
									<label>Email Address <span class="required">*</span></label>
									<input type="email" name="email" required placeholder="" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="checkout-form-list">
									<label>Phone <span class="required">*</span></label>
									<input type="text" name="phone" placeholder="Phone" value="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Password <span class="required">*</span></label>
									<input type="password" name="password" placeholder="password" >
								</div>
							</div> 
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label></label>                         
									<input class="login-sub" class="btn-block" type="submit" value="sign up">  
								</div>
							</div> 

						</div>
						<?php echo form_close(); ?>
<!-- 					</form>
 -->				</div>
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

