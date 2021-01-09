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
          <form action="<?php echo base_url() ?>Admin/update_user" method="post">
          	<input type="hidden" name="id" value="<?php echo $user->id; ?>">
	
	<label>Name</label>
	<input type="text" name="name" value="<?php echo $user->name; ?>" class="form-control">
	<label>Email</label>
	<input type="text" name="email" class="form-control" value="<?php echo $user->email; ?>">
	<input type="submit" class="btn btn-primary">
</form>
        </div>
        </div>
        </div>
        
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('admin/footer_c');?>
