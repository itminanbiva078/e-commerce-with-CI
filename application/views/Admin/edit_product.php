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
           <?php echo form_open_multipart(base_url('Admin/update_product')) ?>
           <table class="table table-bordered table-responsive" id="example1">
             <tr>
              <td><input type="hidden" name="productID" value="<?php echo @$edit->id ?>"></td>
               <th>Product Name</th>
               <td><input type="text" name="name" value="<?php echo @$edit->name ?>" class="form-control" ></td>
               <th>Product Price</th>
               <td><input type="text" name="price" value="<?php echo @$edit->price ?>" class="form-control"></td>
               <th>Product Photo</th>
               <td>
                <img src="<?php echo base_url('uploads/'.$edit->photo) ?>" width="100px" height="100px">
                <input type="file" name="photo" class="form-control">
              </td>
             </tr>
             <tr>
               <th>Select Category</th>
               <td>
                <select name="categoryID" onchange="getSubCatVal(this.value)">
                  <option value="">Select Category</option>
                  <?php foreach ($category as $cat) { ?>
                 <option value="<?php echo $cat->categoryID ?>"><?php echo $cat->category_name ?></option>
               <?php } ?>
                 
               </select>
             </td>
                <th>Select Sub Category</th>
               <td id="subCatgory">
                <select name="subCatID">
                     <option value="">Select Sub Category</option>
                  <?php foreach ($sub_category as $scat) { ?>
                 <option value="<?php echo $scat->subCatID ?>"><?php echo $scat->sub_cat_name ?></option>
               <?php } ?> 
                 
               </select>
             </td>

              <th>Select Brand</th>
               <td>
                <select name="brandID">
                  <?php foreach ($brand as $bnd) { ?>
                 <option value="<?php echo $bnd->brandID ?>"><?php echo $bnd->brand_name ?></option>
               <?php } ?>
                 
               </select>
             </td>
             </tr>
             <tr>
               <th>Product Brief</th>
               <td><input type="text" name="brief" value="<?php echo @$edit->brief ?>" class="form-control" ></td>

                <th>Product Description</th>
               <td><input type="text" name="description" value="<?php echo @$edit->description ?>" class="form-control" ></td>
                <th>Product Tags</th>
               <td><input type="text" name="tags" value="<?php echo @$edit->tags ?>" class="form-control" ></td>
               <th>Product Size</th>
               <td><input type="text" name="sizes" value="<?php echo @$edit->sizes ?>" class="form-control" ></td>
               <th>Product Color</th>
               <td><input type="text" name="colors" value="<?php echo @$edit->colors ?>" class="form-control" ></td>
               <th>Hot Product</th>
               <td><input type="text" name="show_hot" value="<?php echo @$edit->show_hot ?>" class="form-control" ></td>
               <th>New Product</th>
               <td><input type="text" name="show_new" value="<?php echo @$edit->show_new ?>" class="form-control" ></td>
               <th>Previous Price</th>
               <td><input type="text" name="previous_price" value="<?php echo @$edit->previous_price ?>" class="form-control" ></td>
             </tr>
             <tr>
               <td colspan="7"><input type="submit" value="Update" class="btn btn-block btn-primary"></td>
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


    <script>
  function getSubCatVal(id){
    $.ajax( 
{
    url:'<?php echo base_url() ?>Admin/getSubCatVal',
    type:'post',
    dataType: 'json', // type of response data
    data: {'id':id},     // timeout milliseconds
    success: function (data) {   // success callback function
        console.log(data);
        let ht='<select name="subCatID">';
        ht+='<option>select sub category</option>'
        $.each(data, function(index, element) {
    ht+='<option value="'+element.subCatID+'">'+element.sub_cat_name+'</option>' 
});
            ht+='</select>';
            $('#subCatgory').html(ht);
    },
    error: function (jqXhr, textStatus, errorMessage) { // error callback 
        console.log(errorMessage);
    }
});
  }
</script>
