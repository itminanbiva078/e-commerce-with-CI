<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library('cart');

	}
	
	public function index(){

		$data['list']=$this->Admin_model->fetchAll('slider','*');
		$data['block']=$this->Admin_model->fetchAll('home_blocks','*');
		$data['product_list']=$this->Admin_model->fetchAll('products','*');
		$data['test']=$this->Admin_model->fetchAll('testimonial','*');
		$data['brand_name']=$this->Admin_model->fetchAll('brands','*');
		$data['cat']=$this->Admin_model->fetchAll('category','*');
		$this->load->view('front/header',$data);
		$this->load->view('front/index',$data);
		$this->load->view('front/footer');
	}
	public function about(){
		
		$data['cat']=$this->Admin_model->fetchAll('category','*');
		$data['about_list']=$this->Admin_model->find('general','*');
		$data['test']=$this->Admin_model->fetchAll('testimonial','*');
		$this->load->view('front/header',$data);
		$this->load->view('front/about',$data);
		$this->load->view('front/footer');
	}
	public function contact(){
		$data['cat']=$this->Admin_model->fetchAll('category','*');
		$this->load->view('front/header',$data);
		$this->load->helper('form','url');
		$this->load->view('front/contact');
		$this->load->view('front/footer');



	}
	public function contact_insert()
	{
		$this->load->helper('form','url');
		$data=$this->input->post();
		$this->Admin_model->insert('message',$data);
	}
	public function category_list($id)
	{
		$data['cat']=$this->Admin_model->fetchAll('category','*');
		$this->load->view('front/header',$data);
		$data['cat_list']=$this->Admin_model->fetchAll('products','*',NULL,array('categoryID'=>$id));
		$data['tag']=$this->Admin_model->fetchAll('products','*',NULL,array('categoryID'=>$id));


		$this->load->view('front/category',$data);
		$this->load->view('front/footer');
		

	}
	public function sub_category_list($id)
	{
		$data['cat']=$this->Admin_model->fetchAll('category','*');
		$this->load->view('front/header',$data);
		$data['sub_cat_list']=$this->Admin_model->fetchAll('products','*',NULL,array('subCatID'=>$id));
		$this->load->view('front/sub_category',$data);

		$this->load->view('front/footer');

	}
	public function singlepage($id)
	{
		$data['cat']=$this->Admin_model->fetchAll('category','*');
		$this->load->view('front/header',$data);
		$this->load->view('front/sub_category',$data);
		$data['single_news']=$this->Admin_model->fetchAll('products','*',NULL,array('categoryID'=>$id));
		$this->load->view('front/singlepage');
		$this->load->view('front/footer');

	}
	// public function login_form()
	// {
	// 	$data['cat']=$this->Admin_model->fetchAll('category','*');
	// 	$data['brand_name']=$this->Admin_model->fetchAll('brands','*');
	// 	$this->load->helper('form','url');
	// 	$this->load->view('front/header',$data);
	// 	$this->load->view('front/login');
	// 	$this->load->view('front/footer');
	// }
	// public function login_form_insert()
	// {
	// 	$this->load->helper('form','url');
	// 	$data=$this->input->post();
	// 	$this->Admin_model->insert('coustomer',$data);
	// }


	public function details($id){
		$data['product']=$this->Admin_model->find('products','*',array('productID'=>$id));
		$data['cat']=$this->Admin_model->fetchAll('category','*');
		$this->load->view('Front/header',$data);
		$this->load->view('Front/details',$data);
		$this->load->view('Front/footer');
	}

	public function cart(){
		
		$product=$this->input->post();
		$data = array(
        'id'      => $product['productID'],
        'qty'     => $product['qty'],
        'price'   => $product['price'],
        'name'    => $product['name'],
        'options' => array('photo'=>$product['photo'])
);

		$this->cart->insert($data);
		redirect('Front/index');
	}

	public function test()
	{
		foreach ($this->cart->contents() as $items): 
echo "<pre>";
var_dump($items);
endforeach;
	}

	public function remove($id)
	{
		$this->cart->remove($id);
		redirect('Front/index');
	}

	public function checkout()
	{	
		$data['cat']=$this->Admin_model->fetchAll('category','*');
		$this->load->view('front/header',$data);
		$this->load->view('Front/checkout');
		$this->load->view('Front/footer');
	}

	public function cart_details()
	{
		$data['cat']=$this->Admin_model->fetchAll('category','*');
		$this->load->view('front/header',$data);
		$this->load->view('Front/cart_details');
		$this->load->view('Front/footer');
	}
	public function remove_cart_product($id)
	{
		$this->cart->remove($id);
		redirect('Front/cart_details');
	}


	public function coustomerSignUp()
	{
		
		$data['cat']=$this->Admin_model->fetchAll('category','*');
		$data['brand_name']=$this->Admin_model->fetchAll('brands','*');
		$this->load->helper('form','url');
		$this->load->view('front/header',$data);
		$this->load->view('front/login');
		$this->load->view('front/footer');
	}

	public function customar_data_insert()
	{
		$this->load->helper('form','url');
		 $userData = array( 
                'f_name' => strip_tags($this->input->post('f_name')), 
                'l_name' => strip_tags($this->input->post('l_name')), 
                'address' => strip_tags($this->input->post('address')), 
                'city' => strip_tags($this->input->post('town')), 
                'post_code' => strip_tags($this->input->post('post_code')), 
				'email' => strip_tags($this->input->post('email')), 
				'phone' => strip_tags($this->input->post('phone')),
                'password' => md5($this->input->post('password')), 
               
            ); 
		// echo "<pre>";
		// var_dump($userData);

		$this->Admin_model->insert('customers',$userData);

	}

	public function customarSignIn()
	{
		
		$data['cat']=$this->Admin_model->fetchAll('category','*');
		$data['brand_name']=$this->Admin_model->fetchAll('brands','*');
		$this->load->helper('form','url');
		$this->load->view('front/header',$data);
		$this->load->view('front/login');
		$this->load->view('front/footer');
	}


	public function place_order($custID=1)
	{

		 // Insert order data
		 $ordData = array(
            'customer_id' => $custID,
            'grand_total' => $this->cart->total()
        );
        $insertOrder = $this->Admin_model->insertOrder($ordData);
        
        if($insertOrder){
            // Retrieve cart data from the session
            $cartItems = $this->cart->contents();
            
            // Cart items
            $ordItemData = array();
            $i=0;
            foreach($cartItems as $item){
                $ordItemData[$i]['order_id']     = $insertOrder;
                $ordItemData[$i]['product_id']     = $item['id'];
                $ordItemData[$i]['quantity']     = $item['qty'];
                $ordItemData[$i]['sub_total']     = $item["subtotal"];
                $i++;
            }
            
            if(!empty($ordItemData)){
                // Insert order items
                $insertOrderItems = $this->Admin_model->insertOrderItems($ordItemData);
                
                if($insertOrderItems){
                    // Remove items from the cart
                    $this->cart->destroy();
                    
                    // Return order ID
					//return $insertOrder;
					redirect('Front/index');
					
				}
				
            }
        }
        return false;
	}


}