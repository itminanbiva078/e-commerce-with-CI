<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="dashboard.php">Dashboard </a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box">
          <div class="box-body table-responsive" style="min-height: 73vh">
          <table class="table table-bordered" id="example1">
          	<thead>
          		<tr>
          			<th>SL</th>
          			<th>Product Name</th>
          			<th>Product Price</th>
          			<th>Product Photo</th>
                <th>Product Category</th>
                <th>Product SubCategory</th>
                <th>Product Brand</th>
                <th>Product Brief</th>
                <th>Product Description</th>
                <th>Product Tags</th>
                <th>Product Size</th>
                <th>Product Color</th>
                <th>Hot Product</th> 
                <th>New Product</th>
                <th>Product Previous Price</th>
                <th>Action</th>
          		</tr>
          	</thead>
          	<tbody>
          		<?php $i=0;
          		foreach($product as $k){?>
          		<tr>
          			<td><?php  echo ++$i; ?></td>
          			<td><?php  echo $k->name; ?></td>
          			<td><?php  echo $k->price; ?></td>
                <td><img src="<?php echo base_url('uploads/'.$k->photo) ?>" width="100px" height="100px"></td>
                <td><?php  echo $k->cat; ?></td>
                <td><?php  echo $k->sub_cat; ?></td>
                <td><?php  echo $k->brand; ?></td>
                <td><?php  echo $k->brief; ?></td>
                <td><?php  echo $k->description; ?></td>
                <td><?php  echo $k->tags; ?></td>
                <td><?php  echo $k->sizes; ?></td>
                <td><?php  echo $k->colors; ?></td>
                <td><?php  echo $k->show_hot; ?></td>
                <td><?php  echo $k->show_new; ?></td>
                <td><?php  echo $k->previous_price; ?></td>

          			<td><a href="<?php echo base_url() .'Admin/edit_product/'.$k->productID;?>"  class= "btn btn-primary">Edit</a>|<a href="<?php echo base_url() .'Admin/delete_product/'.$k->productID;?>" onClick=" return confirm('Are you sure ?')" class= "btn btn-danger" >Delete</a></td>
          		</tr>
          		<?php } ?>
          	</tbody>
          </table>
        </div>
        </div>
        </div>
        
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('admin/footer_c');?>
