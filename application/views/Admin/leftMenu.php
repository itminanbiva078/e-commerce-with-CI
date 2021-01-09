<div class="wrapper">
    <header class="main-header">
        <a href="" class="logo">
            <span class="logo-mini"><b>STK</b></span>
            <span class="logo-lg"><b>CONTROL PANEL</b></span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <li><a href="" target="_blank"><i class="fa fa-globe"></i></a></li>
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../admin_file/admin/dist/img/avatar5.png" class="user-image"
                        alt="User Image">
                        <span class="hidden-xs">
                            <?php
                            // echo $this->session->userdata('admin_name');
                            ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="../admin_file/admin/dist/img/avatar5.png" class="img-circle"
                            alt="User Image">
                            <p>
                                <?php
                                
                                ?>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                </div>
                                <div class="col-xs-4 text-center">
                                </div>
                                <div class="col-xs-4 text-center">
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">                               
                            </div>
                            <div class="pull-right">

                                    <label><?php echo $this->session->userdata('name'); ?></label>
                                    <a href="<?php echo base_url() ?>Admin/logout"
                                    class="btn btn-default btn-flat" name="logout" >Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<aside class="main-sidebar">
    <section class="sidebar">

        <ul class="sidebar-menu">
            <li class="active"><a href=""><i class="fa fa-circle-o"></i>
                Dashboard </a></li>

                                    <!-- admin -->
                <li class="treeview <?php  if($_SESSION['menu']=='admin'){ echo "active";} ?>">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Admin </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url('Admin/admin_form') ?>"><i class="fa fa-user"></i>
                       Add New Admin  </a></li>
                    <li class="active"><a href="<?php echo base_url('Admin/admin_list') ?>"><i class="fa fa-user"></i>
                        Admin List </a></li>
                    </ul>
                </li>

                
                                        <!-- Order -->
                                        <li class="treeview <?php  if($_SESSION['menu']=='order'){ echo "active";} ?>">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Order</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url('Admin/order_list') ?>"><i class="fa fa-user"></i>
                        Order  </a></li>
                         
                    </ul>
                </li>  

                                         <!-- brand -->
                <li class="treeview <?php  if($_SESSION['menu']=='brand'){ echo "active";} ?>">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Brand</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url('Admin/brand_form') ?>"><i class="fa fa-user"></i>
                       Add New Brand  </a></li>
                    <li class="active"><a href="<?php echo base_url('Admin/brand_list') ?>"><i class="fa fa-user"></i>
                        Brand List </a></li>
                    </ul>
                </li> 


                                         <!-- Category -->
                <li class="treeview <?php  if($_SESSION['menu']=='category'){ echo "active";} ?>">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Category</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url('Admin/category_form') ?>"><i class="fa fa-user"></i>
                       Add New Category  </a></li>
                    <li class="active"><a href="<?php echo base_url('Admin/category_list') ?>"><i class="fa fa-user"></i>
                        Category List </a></li>
                    </ul>
                </li> 


                                            <!-- General -->
                <li class="treeview <?php  if($_SESSION['menu']=='general'){ echo "active";} ?>">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>General</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url('Admin/general_home_list') ?>"><i class="fa fa-user"></i>
                        Home</a></li>
                        <li class="active"><a href="<?php echo base_url('Admin/general_about_list') ?>"><i class="fa fa-user"></i>
                        About</a></li>
                        <li class="active"><a href="<?php echo base_url('Admin/general_contact_list') ?>"><i class="fa fa-user"></i>
                        Contact</a></li>
                        <li class="active"><a href="<?php echo base_url('Admin/general_social_list') ?>"><i class="fa fa-user"></i>
                        Social</a></li>
                        <li class="active"><a href="<?php echo base_url('Admin/general_meta_list') ?>"><i class="fa fa-user"></i>
                        Meta</a></li>
                        
                    </ul>
                </li>   

                                            <!-- Home Block -->
                <li class="treeview <?php  if($_SESSION['menu']=='hblock'){ echo "active";} ?>">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Home Blocks</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url('Admin/first_block') ?>"><i class="fa fa-user"></i>
                        First Block </a></li>
                         <li class="active"><a href="<?php echo base_url('Admin/second_block') ?>"><i class="fa fa-user"></i>
                        Second Block </a></li>
                         <li class="active"><a href="<?php echo base_url('Admin/third_block') ?>"><i class="fa fa-user"></i>
                        Third Block </a></li>
                         <li class="active"><a href="<?php echo base_url('Admin/fourth_block') ?>"><i class="fa fa-user"></i>
                        Fourth Block </a></li>
                    </ul>
                </li>  

                                        <!-- Message -->
                <li class="treeview <?php  if($_SESSION['menu']=='msg'){ echo "active";} ?>">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Message</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url('Admin/message_list') ?>"><i class="fa fa-user"></i>
                        Message  </a></li>
                         
                    </ul>
                </li>  



                                         <!-- Product -->
                <li class="treeview <?php  if($_SESSION['menu']=='product'){ echo "active";} ?>">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Product</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url('Admin/product_form') ?>"><i class="fa fa-user"></i>
                       Add New Product  </a></li>
                    <li class="active"><a href="<?php echo base_url('Admin/product_list') ?>"><i class="fa fa-user"></i>
                        Product List </a></li>
                    </ul>
                </li> 

                                            <!-- Slider -->

                 <li class="treeview <?php  if($_SESSION['menu']=='slider'){ echo "active";} ?>">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Slider </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url('Admin/slider_form') ?>"><i class="fa fa-user"></i>
                       Add New Slider  </a></li>
                    <li class="active"><a href="<?php echo base_url('Admin/slider_list') ?>"><i class="fa fa-user"></i>
                        Slider List </a></li>
                    </ul>
                </li>

                             <!-- Sub Category -->
                <li class="treeview <?php  if($_SESSION['menu']=='sub_category'){ echo "active";} ?>">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Sub Category</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url('Admin/sub_category_form') ?>"><i class="fa fa-user"></i>
                       Add New Sub Category  </a></li>
                    <li class="active"><a href="<?php echo base_url('Admin/sub_category_list') ?>"><i class="fa fa-user"></i>
                        Sub Category List </a></li>
                    </ul>
                </li> 


                                        <!-- Testimonials -->
                <li class="treeview <?php  if($_SESSION['menu']=='testimonial'){ echo "active";} ?>">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Testimonials</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url('Admin/testimonial_form') ?>"><i class="fa fa-user"></i>
                      Add Testimonial </a></li>
                      <li class="active"><a href="<?php echo base_url('Admin/testimonial_list') ?>"><i class="fa fa-user"></i>
                      Manage Testimonials </a></li>
                         
                    </ul>
                </li>  

                



               

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
