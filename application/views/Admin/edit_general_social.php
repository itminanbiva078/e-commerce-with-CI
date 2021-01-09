<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New user
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>Admin/add_slider">Add New user </a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box">
          <div class="box-body" style="min-height: 73vh">
           <?php echo form_open_multipart(base_url('Admin/update_general_social')) ?>
           <table class="table table-bordered" id="example1">
             <tr>
              <td><input type="hidden" name="id" value="<?php echo @$edit->id ?>"></td>
               <th>Instagram Text</th>
               <td><input type="text" name="insta_text" value="<?php echo @$edit->insta_text ?>" class="form-control" ></td>
               <th>Facebook</th>
               <td><input type="text" name="fb" value="<?php echo @$edit->fb ?>" class="form-control" ></td>
               <th>Twitter</th>
               <td><input type="text" name="twitter" value="<?php echo @$edit->twitter ?>" class="form-control" ></td>
               <th>Instagram</th>
               <td><input type="text" name="insta" value="<?php echo @$edit->insta ?>" class="form-control" ></td>
             </tr>
             <tr>
               <td colspan="9"><input type="submit" value="Update" class="btn btn-block btn-primary"></td>
             </tr>
           </table>
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
