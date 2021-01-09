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
              
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
               
              </tr>
            </thead>
            <tbody>
              <?php $i=0;
              foreach($message as $k){?>
              <tr>
                
                <td><?php  echo $k->name; ?></td>
                <td><?php  echo $k->email; ?></td>
                <td><?php  echo $k->msg; ?></td>
                <td><?php  echo $k->date; ?></td>
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
