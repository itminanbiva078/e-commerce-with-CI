<?php $ci=&get_instance();
$ci->load->model('Admin_model');
 ?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from richman.keepgoods.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Sep 2020 11:43:26 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Home One || Richman</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="<?php echo base_url() ?>assets/cdn-cgi/apps/head/VOTpVwma55eOauTrYZhS1mPXv0A.js"></script><link rel="shortcut icon" type="<?php echo base_url() ?>assets/image/x-icon" href="<?php echo base_url() ?>assets/img/favicon.ico">



<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.min.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/meanmenu.min.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slick.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">

<script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


<header>
<div class="header-top-area">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="top-info">
<p>Call us free 24/7 : (+86) 6 888 888</p>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="top-nav">
<div class="account">
<a class="login" href="<?php echo base_url('Front/customarSignIn') ?>">Sign in</a>
<span>Or</span>
<a class="register" href="<?php echo base_url('Front/coustomerSignUp') ?>">Register</a>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="sticker" class="header-bottom-area">
<div class="container">
<div class="inner-container">
<div class="row">
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="logo">
<a href="<?php echo base_url('Front/index'); ?>"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="" /></a>
</div>
</div>
<div class="col-md-8 hidden-xs hidden-sm">
<div class="main-menu">
<nav>
<ul>
<li><a href="<?php echo base_url('Front/index'); ?>">home</a>
<li><a href="<?php echo base_url('Front/about'); ?>">about</a></li>
<?php foreach ($cat as $k) {
$data=$ci->Admin_model->fetchAll('sub_category','*',NULL,array('categoryID'=>$k->categoryID));
 ?>
	

<li><a href="<?php echo base_url('Front/category_list/'.$k->categoryID); ?>"><?php echo $k->category_name ;?> </a>
<ul>
	<?php foreach ($data as $key) { ?>
		
	
<li><a href="<?php echo base_url('Front/sub_category_list/'.$key->subCatID); ?>"><?php echo $key->sub_cat_name ?></a></li>
<?php } ?>
</ul>

</li>
<?php } ?>

<li><a href="<?php echo base_url('Front/contact'); ?>">contact</a></li>
</ul>
</nav>
</div>
</div>
<div class="col-md-2 col-sm-8 col-xs-6 header-right">
<div class="my-cart">
<div class="total-cart">
<a href="cart.html">
<img src="<?php echo base_url() ?>assets/img/cart/cart.png" alt="" />
<span><?php echo $this->cart->total_items() ?></span>
</a>
</div>
<ul>


<?php foreach ($this->cart->contents() as $items): ?>
<li>
<div class="cart-img">
<a href="#"><img alt="" src="<?php echo base_url().'uploads/'.$this->cart->product_options($items['rowid'])['photo'] ?>"></a>
</div>
<div class="cart-info">
<h4><a href="#"><?php echo $items['name']; ?></a></h4>
<span><?php echo $items['price']; ?> <span>x  <?php echo $items['qty']; ?></span></span>
</div>
<div class="del-icon">
<a href="<?php echo base_url('Front/remove/'.$items['rowid']) ?>"><i class="fa fa-times-circle"></i></a>
</div>
</li>
<?php endforeach; ?>




<li class="cart-border">
<div class="subtotal-text">Subtotal: </div>
<div class="subtotal-price"><?php echo $this->cart->format_number($this->cart->total()); ?></div>
</li>
<li>
<a class="cart-button" href="<?php echo base_url('Front/cart_details') ?>">view cart</a>
<a class="checkout" href="<?php echo base_url('Front/checkout') ?>">checkout</a>
</li>
</ul>
</div>
<div class="header-search">

<div class="dropdown">
<a href="javascript:void(0);" class="search-open">
<img src="<?php echo base_url() ?>assets/img/search.png" alt="" />
</a>
<div class="search-inside animated bounceInUp"> <i class="icon-close search-close fa fa-times"></i>
<div class="search-overlay"></div>
<div class="position-center-center">
<div class="search">
<form>
<input type="search" placeholder="Search Shop">
<button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</header>