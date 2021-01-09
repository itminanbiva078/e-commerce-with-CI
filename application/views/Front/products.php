<ul>
	<?php
foreach ($product as $k) {?>
<li>
	<img src="<?php echo base_url('uploads/'.$k->photo) ?>" alt="" width="150">
	<h4><?php echo $k->name ?></h4>
<a href="javascript:void(0)" onclick="add_to_cart(<?php echo $k->id ?>)">Add to Cart</a>
<strong><?php echo $k->price ?></strong>
</li>

<?php } ?>
</ul>
<a href="<?php echo base_url('Shop/cart_details') ?>">Cart Details</a>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
	function add_to_cart(id){
		var base='<?php echo base_url() ?>';
	$.ajax({
		type: "POST",
		dataType: "json",
		url: base+"Shop/add_to_cart",
		data: {'productID':id},
		success: function(data) {
			console.log(data)
		},
		error: function(xhr, textStatus) {
			alert(textStatus);
		}
	});
}
</script>