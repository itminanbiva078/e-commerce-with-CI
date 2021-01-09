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
           <?php echo form_open_multipart(base_url('Admin/update_second_blocks')) ?>
           <table class="table table-bordered" id="example1">
             <tr>
              <td><input type="hidden" name="id" value="<?php echo @$edit->id ?>"></td>
               <th>First Block Text One</th>
               <td><input type="text" name="second_text_1" value="<?php echo @$edit->second_text_1 ?>" class="form-control" ></td>
               <th>First Block Text Two</th>
               <td><input type="text" name="second_text_2" value="<?php echo @$edit->second_text_2 ?>" class="form-control" ></td>
               <th>First Block Text Three</th>
               <td><input type="text" name="second_text_3" value="<?php echo @$edit->second_text_3 ?>" class="form-control" ></td>
               <th>First Block Photo</th>
               <td>
                <img src="<?php echo base_url('uploads/'.$edit->second_photo) ?>" width="100px" height="100px">
                <input type="file" name="photo" class="form-control">
              </td>
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
