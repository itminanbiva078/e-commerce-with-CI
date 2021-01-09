<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
		
	

		public function index()
	{
		$this->load->view('Admin/index');
	}

	public function dashboard(){
		$this->session->set_userdata('menu','admin');
		// $adminID=$this->session->userdata('adminID');
		// if(!isset($adminID)){
		// 	redirect(base_url().'Admin','refresh');
		// }
		$this->load->view('Admin/dashboard');
	} 

	public function login()
	{
		$data = $this->input->post();
		$user=$this->Admin_model->find('admin','*',$data);
		if($user){
			$this->session->set_userdata('adminID',$user->adminID);
			$this->session->set_userdata('name',$user->name);
			redirect(base_url().'Admin/dashboard','refresh');
		}else{
			$this->session->set_flashdata('msg','Indvalid email or password');
			redirect(base_url().'Admin','refresh');
		}
	}
	public function logout(){
		$this->session->unset_userdata('adminID');
		$this->session->unset_userdata('name');
		redirect(base_url().'Admin','refresh');
	}




	/////////////////////////////////STRAR Admin/////////////////////////////////////
	public function admin_form()
	{

		$this->session->set_userdata('menu','admin');
		$this->load->view('Admin/add_admin');
		
	}

	public function save_admin()
	{
		  $data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){
			$d=$this->upload->data();
			$data['photo']=$d['file_name'];
			$this->Admin_model->insert('admin',$data);
			redirect(base_url('Admin/admin_list'),'refresh');
		}
		//var_dump($data);
	}


	public function admin_list()
	{	$this->session->set_userdata('menu','admin');
		$data['admin']=$this->Admin_model->fetchAll('admin','*');
		$this->load->view('Admin/admin_list',$data);
	}

	public function delete_admin($id)
	{
		$this->Admin_model->delete('admin',array('adminID'=>$id));
		redirect(base_url('Admin/admin_list'),'refresh');	
	}

	public function edit_admin($id)
	{
		$this->session->set_userdata('menu','admin');
		$data['edit']=$this->Admin_model->find('admin','*',array('adminID'=>$id));
		$this->load->view('Admin/edit_admin',$data);
	}

	public function update_admin()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){
			$d=$this->upload->data();
			$data['photo']=$d['file_name'];
			$this->Admin_model->update('admin',$data,array('adminID'=>$data['adminID']));
			redirect(base_url('Admin/admin_list'),'refresh');
		}
	}

	/////////////////////////////////END Admin/////////////////////////////////////

		/////////////////////////////////STRAR slider/////////////////////////////////////
	public function slider_form()
	{

		$this->session->set_userdata('menu','slider');
		$data['category']=$this->Admin_model->fetchAll('category','*');
		$this->load->view('Admin/add_slider',$data);
		
	}

	public function save_slider()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){
			$d=$this->upload->data();
			$data['photo']=$d['file_name'];
			$this->Admin_model->insert('slider',$data);
			redirect(base_url('Admin/slider_list'),'refresh');
		}
	}


	public function slider_list()
	{	$this->session->set_userdata('menu','slider');
		$data['slider']=$this->Admin_model->fetchAll('slider','*');
		$this->load->view('Admin/slider_list',$data);
	}

	public function delete_slider($id)
	{
		$this->Admin_model->delete('slider',array('id'=>$id));
		redirect(base_url('Admin/slider_list'),'refresh');	
	}

	public function edit_slider($id)
	{
		$this->session->set_userdata('menu','slider');
		$data['edit']=$this->Admin_model->find('slider','*',array('id'=>$id));
		$data['category']=$this->Admin_model->fetchAll('category','*');
		$this->load->view('Admin/edit_slider',$data);
	}

	public function update_slider()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){
			$d=$this->upload->data();
			$data['photo']=$d['file_name'];
			$this->Admin_model->update('slider',$data,array('id'=>$data['id']));
			redirect(base_url('Admin/slider_list'),'refresh');
		}
	}

	/////////////////////////////////END slider/////////////////////////////////////


	/////////////////////////////////STRAR brand/////////////////////////////////////
	public function brand_form()
	{

		$this->session->set_userdata('menu','brand');
		$this->load->view('Admin/add_brand');
		
	}

	public function save_brand()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){
			$d=$this->upload->data();
			$data['photo']=$d['file_name'];
			$this->Admin_model->insert('brands',$data);
			redirect(base_url('Admin/brand_list'),'refresh');
		}
	}


	public function brand_list()
	{	$this->session->set_userdata('menu','brand');
		$data['brand']=$this->Admin_model->fetchAll('brands','*');
		$this->load->view('Admin/brand_list',$data);
	}

	public function delete_brand($id)
	{
		$this->Admin_model->delete('brands',array('brandID'=>$id));
		redirect(base_url('Admin/brand_list'),'refresh');	
	}

	public function edit_brand($id)
	{
		$this->session->set_userdata('menu','brand');
		$data['edit']=$this->Admin_model->find('brands','*',array('brandID'=>$id));
		$this->load->view('Admin/edit_brand',$data);
	}

	public function update_brand()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){
			$d=$this->upload->data();
			$data['photo']=$d['file_name'];
			$this->Admin_model->update('brands',$data,array('brandID'=>$data['brandID']));
			redirect(base_url('Admin/brand_list'),'refresh');
		}
	}

	/////////////////////////////////END brand/////////////////////////////////////

	/////////////////////////////////STRAR Home Blocks/////////////////////////////////////
	

	
									////start First Block////
	public function first_block()
	{	$this->session->set_userdata('menu','hblock');
		$data['first_block']=$this->Admin_model->fetchAll('home_blocks','*');
		$this->load->view('Admin/first_block',$data);
	}

	public function edit_first_block($id)
	{
		$this->session->set_userdata('menu','hblock');
		$data['edit']=$this->Admin_model->find('home_blocks','*',array('id'=>$id));
		$this->load->view('Admin/edit_first_block',$data);
	}

	public function update_first_blocks()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){
			$d=$this->upload->data();
			$data['first_photo']=$d['file_name'];
			$this->Admin_model->update('home_blocks',$data,array('id'=>$data['id']));
			redirect(base_url('Admin/first_block'),'refresh');
		}
	}

						////End First Block////


		  				////start second Block////
	public function second_block()
	{	$this->session->set_userdata('menu','hblock');
		$data['second_block']=$this->Admin_model->fetchAll('home_blocks','*');
		$this->load->view('Admin/second_block',$data);
	}

	public function edit_second_block($id)
	{
		$this->session->set_userdata('menu','hblock');
		$data['edit']=$this->Admin_model->find('home_blocks','*',array('id'=>$id));
		$this->load->view('Admin/edit_second_block',$data);
	}

	public function update_second_blocks()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){
			$d=$this->upload->data();
			$data['second_photo']=$d['file_name'];
			$this->Admin_model->update('home_blocks',$data,array('id'=>$data['id']));
			redirect(base_url('Admin/second_block'),'refresh');
		}
	}

						////End second Block////


						////start Third Block////

	public function third_block()
	{	$this->session->set_userdata('menu','hblock');
		$data['third_block']=$this->Admin_model->fetchAll('home_blocks','*');
		$this->load->view('Admin/third_block',$data);
	}

	public function edit_third_block($id)
	{
		$this->session->set_userdata('menu','hblock');
		$data['edit']=$this->Admin_model->find('home_blocks','*',array('id'=>$id));
		$this->load->view('Admin/edit_third_block',$data);
	}

	public function update_third_blocks()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){
			$d=$this->upload->data();
			$data['third_photo']=$d['file_name'];
			$this->Admin_model->update('home_blocks',$data,array('id'=>$data['id']));
			redirect(base_url('Admin/third_block'),'refresh');
		}
	}

						////End Third Block////


						////start Fourth Block////
	public function fourth_block()
	{	$this->session->set_userdata('menu','hblock');
		$data['fourth_block']=$this->Admin_model->fetchAll('home_blocks','*');
		$this->load->view('Admin/fourth_block',$data);
	}

	public function edit_fourth_block($id)
	{
		$this->session->set_userdata('menu','hblock');
		$data['edit']=$this->Admin_model->find('home_blocks','*',array('id'=>$id));
		$this->load->view('Admin/edit_fourth_block',$data);
	}

	public function update_fourth_blocks()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){
			$d=$this->upload->data();
			$data['fourth_photo']=$d['file_name'];
			$this->Admin_model->update('home_blocks',$data,array('id'=>$data['id']));
			redirect(base_url('Admin/fourth_block'),'refresh');
		}
	}

						////End Fourth Block////

	/////////////////////////////////END Home Blocks/////////////////////////////////////



	/////////////////////////////////STRAR Category/////////////////////////////////////
	public function category_form()
	{

		$this->session->set_userdata('menu','category');
		$this->load->view('Admin/add_category');
		
	}

	public function save_category()
	{
		$data=$this->input->post();
			$this->Admin_model->insert('category',$data);
			redirect(base_url('Admin/category_list'),'refresh');
		
	}


	public function category_list()
	{	$this->session->set_userdata('menu','category');
		$data['category']=$this->Admin_model->fetchAll('category','*');
		$this->load->view('Admin/category_list',$data);
	}

	public function delete_category($id)
	{
		$this->Admin_model->delete('category',array('categoryID'=>$id));
		redirect(base_url('Admin/category_list'),'refresh');	
	}

	public function edit_category($id)
	{
		$this->session->set_userdata('menu','category');
		$data['edit']=$this->Admin_model->find('category','*',array('categoryID'=>$id));
		$this->load->view('Admin/edit_category',$data);
	}

	public function update_category()
	{
		$data=$this->input->post();
		
		$this->Admin_model->update('category',$data,array('categoryID'=>$data['categoryID']));
			redirect(base_url('Admin/category_list'),'refresh');
		
	}

	/////////////////////////////////END Category/////////////////////////////////////


	/////////////////////////////////STRAR General Home /////////////////////////////////////
	


	public function general_home_list()
	{	$this->session->set_userdata('menu','general');
		$data['general']=$this->Admin_model->fetchAll('general','*');
		$this->load->view('Admin/general_home_list',$data);
	}
	public function edit_general_home($id)
	{
		$this->session->set_userdata('menu','general');
		$data['edit']=$this->Admin_model->find('general','*',array('id'=>$id));
		$this->load->view('Admin/edit_general_home',$data);
	}

	public function update_general_home()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('logo')){
			$d=$this->upload->data();
			$data['logo']=$d['file_name'];
		}
		// if($this->upload->do_upload('photo')){
		// 	$d=$this->upload->data();
		// 	$data['photo']=$d['file_name'];
		// }
		$this->Admin_model->update('general',$data,array('id'=>$data['id']));
			redirect(base_url('Admin/general_home_list'),'refresh');
	}

	/////////////////////////////////END General Home/////////////////////////////////////

	/////////////////////////////////STRAR General About /////////////////////////////////////
	


	public function general_about_list()
	{	$this->session->set_userdata('menu','general');
		$data['general']=$this->Admin_model->fetchAll('general','*');
		$this->load->view('Admin/general_about_list',$data);
	}
	public function edit_general_about($id)
	{
		$this->session->set_userdata('menu','general');
		$data['edit']=$this->Admin_model->find('general','*',array('id'=>$id));
		$this->load->view('Admin/edit_general_about',$data); 
	}

	public function update_general_about()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('about_photo')){
			$d=$this->upload->data();
			$data['about_photo']=$d['file_name'];
		}
		if($this->upload->do_upload('about_banner')){
			$d=$this->upload->data();
			$data['about_banner']=$d['file_name'];
		}
		$this->Admin_model->update('general',$data,array('id'=>$data['id']));
			redirect(base_url('Admin/general_about_list'),'refresh');
	}

	/////////////////////////////////END General About/////////////////////////////////////

	/////////////////////////////////STRAR General Contact /////////////////////////////////////
	


	public function general_contact_list()
	{	$this->session->set_userdata('menu','general');
		$data['general']=$this->Admin_model->fetchAll('general','*');
		$this->load->view('Admin/general_contact_list',$data);
	}
	public function edit_general_contact($id)
	{
		$this->session->set_userdata('menu','general');
		$data['edit']=$this->Admin_model->find('general','*',array('id'=>$id));
		$this->load->view('Admin/edit_general_contact',$data); 
	}

	public function update_general_contact()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('contact_banner')){
			$d=$this->upload->data();
			$data['contact_banner']=$d['file_name'];
		}
		// if($this->upload->do_upload('about_banner')){
		// 	$d=$this->upload->data();
		// 	$data['about_banner']=$d['file_name'];
		// }
		$this->Admin_model->update('general',$data,array('id'=>$data['id']));
			redirect(base_url('Admin/general_contact_list'),'refresh');
	}

	/////////////////////////////////END General Contact/////////////////////////////////////

	/////////////////////////////////STRAR General Social /////////////////////////////////////
	


	public function general_social_list()
	{	$this->session->set_userdata('menu','general');
		$data['general']=$this->Admin_model->fetchAll('general','*');
		$this->load->view('Admin/general_social_list',$data);
	}
	public function edit_general_social($id)
	{
		$this->session->set_userdata('menu','general');
		$data['edit']=$this->Admin_model->find('general','*',array('id'=>$id));
		$this->load->view('Admin/edit_general_social',$data); 
	}

	public function update_general_social()
	{
		$data=$this->input->post();
		
		$this->Admin_model->update('general',$data,array('id'=>$data['id']));
			redirect(base_url('Admin/general_social_list'),'refresh');
	}

	/////////////////////////////////END General Social/////////////////////////////////////


	/////////////////////////////////STRAR General Meta /////////////////////////////////////
	


	public function general_meta_list()
	{	$this->session->set_userdata('menu','general');
		$data['general']=$this->Admin_model->fetchAll('general','*');
		$this->load->view('Admin/general_meta_list',$data);
	}
	public function edit_general_meta($id)
	{
		$this->session->set_userdata('menu','general');
		$data['edit']=$this->Admin_model->find('general','*',array('id'=>$id));
		$this->load->view('Admin/edit_general_meta',$data); 
	}

	public function update_general_meta()
	{
		$data=$this->input->post();
		
		$this->Admin_model->update('general',$data,array('id'=>$data['id']));
			redirect(base_url('Admin/general_meta_list'),'refresh');
	}

	/////////////////////////////////END General Meta/////////////////////////////////////

	/////////////////////////////////STRAR Message /////////////////////////////////////
	


	public function message_list()
	{	$this->session->set_userdata('menu','msg');
		$data['message']=$this->Admin_model->fetchAll('message','*');
		$this->load->view('Admin/message_list',$data);
	}

	/////////////////////////////////END Message/////////////////////////////////////

	/////////////////////////////////STRAR Sub Category/////////////////////////////////////
	public function sub_category_form()
	{

		$this->session->set_userdata('menu','sub_category');


		$data['category']=$this->Admin_model->fetchAll('category','*');
		$this->load->view('Admin/add_sub_category',$data);
		
	}

	public function save_sub_category()
	{
		$data=$this->input->post();
		
			$this->Admin_model->insert('sub_category',$data);
			redirect(base_url('Admin/sub_category_list'),'refresh');
		
	}


	public function sub_category_list()
	{	$this->session->set_userdata('menu','sub_category');
		$data['sub_category']=$this->Admin_model->fetchAll('sub_category','sub_category.*,category.category_name as cat',array('category'=>'sub_category.categoryID=category.categoryID'));
	
		$this->load->view('Admin/sub_category_list',$data);
	}

	public function delete_sub_category($id)
	{
		$this->Admin_model->delete('sub_category',array('subCatID'=>$id));
		redirect(base_url('Admin/sub_category_list'),'refresh');	
	}

	public function edit_sub_category($id)
	{
		$this->session->set_userdata('menu','sub_category');
		$data['edit']=$this->Admin_model->find('sub_category','*',array('subCatID'=>$id));
		$data['category']=$this->Admin_model->fetchAll('sub_category','*');
		$this->load->view('Admin/edit_sub_category',$data);
	}

	public function update_sub_category()
	{
		$data=$this->input->post();
		
			$this->Admin_model->update('sub_category',$data,array('subCatID'=>$data['id']));
			redirect(base_url('Admin/sub_category_list'),'refresh');
		
	}

	/////////////////////////////////END Sub Category/////////////////////////////////////

 

	/////////////////////////////////STRAR Product/////////////////////////////////////
	public function product_form()
	{

		$this->session->set_userdata('menu','product');
		$data['category']=$this->Admin_model->fetchAll('category','*');
		$data['sub_category']=$this->Admin_model->fetchAll('sub_category','*');
		$data['brand']=$this->Admin_model->fetchAll('brands','*');
		$this->load->view('Admin/add_products',$data);
		
	}

	public function save_product()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){
			$d=$this->upload->data();
			$data['photo']=$d['file_name'];
			
		}
		$this->Admin_model->insert('products',$data);
		redirect(base_url('Admin/product_list'),'refresh');
	}


	public function product_list()
	{	$this->session->set_userdata('menu','product');
		$data['product']=$this->Admin_model->fetchAll('products','products.*,category.category_name as cat,sub_category.sub_cat_name as sub_cat,brands.brand_name as brand',array('category'=>'products.categoryID=category.categoryID','sub_category'=>'products.subCatID=sub_category.subCatID','brands'=>'products.brandID=brands.brandID'));
		

		$this->load->view('Admin/product_list',$data);
	}

	public function delete_product($id)
	{
		$this->Admin_model->delete('products',array('productID'=>$id));
		redirect(base_url('Admin/product_list'),'refresh');	
	}

	public function edit_product($id)
	{
		$this->session->set_userdata('menu','product');
		$data['brand']=$this->Admin_model->fetchAll('brands','*');
		$data['edit']=$this->Admin_model->find('products','*',array('productID'=>$id));
		$data['category']=$this->Admin_model->fetchAll('category','*');
		$data['sub_category']=$this->Admin_model->fetchAll('sub_category','*');
		$this->load->view('Admin/edit_product',$data);
	}

	public function update_product()
	{
		$data=$this->input->post();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){
			$d=$this->upload->data();
			$data['photo']=$d['file_name'];
			$this->Admin_model->update('products',$data,array('productID'=>$data['productID']));
			redirect(base_url('Admin/product_list'),'refresh');
		}
	}

	/////////////////////////////////END Products/////////////////////////////////////


	/////////////////////////////////STRAR Testimonials/////////////////////////////////////
	public function testimonial_form()
	{

		$this->session->set_userdata('menu','testimonial');
		$this->load->view('Admin/add_testimonial');
		
	}

	public function save_testimonial()
	{
		$data=$this->input->post();
		
			$this->Admin_model->insert('testimonial',$data);
			redirect(base_url('Admin/testimonial_list'),'refresh');
		
	} 


	public function testimonial_list()
	{	$this->session->set_userdata('menu','testimonial');
		$data['slider']=$this->Admin_model->fetchAll('testimonial','*');
		$this->load->view('Admin/testimonial_list',$data);
	}

	public function delete_testimonial($id)
	{
		$this->Admin_model->delete('testimonial',array('id'=>$id));
		redirect(base_url('Admin/testimonial_list'),'refresh');	
	}

	public function edit_testimonial($id)
	{
		$this->session->set_userdata('menu','testimonial');
		$data['edit']=$this->Admin_model->find('testimonial','*',array('id'=>$id));
		$this->load->view('Admin/edit_testimonial',$data);
	}

	public function update_testimonial()
	{
		$data=$this->input->post();
		
			$this->Admin_model->update('testimonial',$data,array('id'=>$data['id']));
			redirect(base_url('Admin/testimonial_list'),'refresh');
		
	}

	/////////////////////////////////END Testimonials/////////////////////////////////////
		/////////////////////////////////STRAR Order /////////////////////////////////////
	


		public function order_list()
		{	$this->session->set_userdata('menu','order');
			$data['order']=$this->Admin_model->fetchAll('orders','*');
			$this->load->view('Admin/order_list',$data);
		}

		public function delete_order($id)
	{
		$this->Admin_model->delete('orders',array('id'=>$id));
		redirect(base_url('Admin/order_list'),'refresh');	
	}
	
		/////////////////////////////////END Order/////////////////////////////////////

	public function getSubCat()
	{
		$data=$this->input->post();
		$subCat=$this->Admin_model->fetchAll('sub_category','*',NULL,array('categoryID'=>$data['id']));

		echo json_encode($subCat);
	}

public function getSubCatVal()
	{
		$data=$this->input->post();
		$subCat=$this->Admin_model->fetchAll('sub_category','*',NULL,array('categoryID'=>$data['id']));

		echo json_encode($subCat);
	}


	 




}