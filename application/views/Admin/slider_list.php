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
          <div class="box-body" style="min-height: 73vh">
          <table class="table table-bordered" id="example1">
          	<thead>
          		<tr>
          			<th>SL</th>
          			<th>Slider Title</th>
          			<th>Slider Description</th>
          			<th>Slider Photo</th>
                <th>Action</th>
          		</tr>
          	</thead>
          	<tbody>
          		<?php $i=0;
          		foreach($slider as $k){?>
          		<tr>
          			<td><?php  echo ++$i; ?></td>
          			<td><?php  echo $k->title; ?></td>
          			<td><?php  echo $k->description; ?></td>
                <td><img src="<?php echo base_url('uploads/'.$k->photo) ?>" width="100px" height="100px"></td>
          			<td><a href="<?php echo base_url() .'Admin/edit_slider/'.$k->id;?>"  class= "btn btn-primary">Edit</a>|<a href="<?php echo base_url() .'Admin/delete_slider/'.$k->id;?>" onClick=" return confirm('Are you sure ?')" class= "btn btn-danger" >Delete</a></td>
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
