<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
//echo form_open_multipart('product');

?>
<form action="<?php  echo base_url().'product' ?>" method='post'>
<div class="container">
	<div class="row">
		<div class="col-12">
<table class="table table-border">
	<tr>
		<th>Name</th>
		<td><?php echo form_input(array('name'=>'name','value'=>set_value('name'),'class'=>'form-control')); ?>
			<?php echo form_error('name'); ?>
		</td>
	</tr>
	<tr>
		<th>Email</th>
		<td><?php echo form_input(array('name'=>'email','value'=>set_value('email'),'class'=>'form-control')); ?>
			<?php echo form_error('email'); ?>
		</td>
		</tr>
			<tr>
		<th>Phone</th>
		<td><?php echo form_input(array('name'=>'phone','value'=>set_value('phone'),'class'=>'form-control')); ?>
			<?php echo form_error('phone'); ?>
		</td>
		</tr>
		<tr>
		<th>Password</th>
		<td><?php echo form_input(array('name'=>'password','value'=>set_value('password'),'class'=>'form-control')); ?>
			<?php echo form_error('password'); ?>
		</td>
		</tr>
		<tr>
		<th>Confirm Password</th>
		<td><?php echo form_input(array('name'=>'password_re','value'=>'','class'=>'form-control')); ?>
			<?php echo form_error('password_re'); ?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_submit(array('name'=>'ok','value'=>'Save','class'=>'btn btn-primary')); ?></td>
	</tr>
</table>
</div>
</div>
</div>
</form>
<button id="b">Delete</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#b').click(function(){
			$.ajax({
				url:'http://localhost/codeIgniter/product/1',
				type:'DELETE',
				success:function(result){
					console.log(result);
				}
			})
		})
	})
</script>