

<div class="page-title-area">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="title-heading text-center">
<h1>ABOUT OUR COMPANY</h1>
<p>We are a featured brand that calls itself fashion</p>
</div>
</div>
</div>
</div>
</div>


<div class="about-area pad-60">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title marg-50  text-center">
<h2>We are Richman </h2>
<img src="<?php echo base_url() ?>assets/img/section-title.png" alt="" />
</div>
</div>
</div>
<div class="row">
<div class="col-md-5">
<div class="about-img">
<img src="<?php echo base_url('uploads/'.$about_list->about_photo)?>" alt="" />
</div>
</div>
<div class="col-md-7">
<div class="about-text">
<p><?php echo $about_list->about_text; ?></p>
<p class="text-left">- Team Richman</p>
</div>
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



