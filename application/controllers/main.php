<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
            parent::__construct();          
            $this->load->model('main_model');
	    $this->load->library('form_validation');
	}
	public function index()
	{	
		$data['news'] = $this->main_model->listUiNews();
		$data['images'] = $this->main_model->listUiImages();
		$this->load->view('home',$data);
	}
	/*public function login()
	{	
		$username = 'adminbaraka@aslelbaraka.com';
		$password = 'baraka2016';
		//if($this->session->userdata('useremail') == ''){
                	$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
                	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
                	$error['user']="";	
			if($this->form_validation->run())
                	{
                   		 $email = $this->input->post('email');
                    		 $passwordd = $this->input->post('password');
				 if($email == $username && $passwordd == $password){
					$user_data=array(
                                         	'useremail'=> $email
                                        );
				 $this->session->set_userdata($user_data);
				 redirect('main/addNews');
				 }else{
                        		$error['user']="Invalid username or password";
					$this->load->view('admin_menu');    
                        		$this->view('login',$error);
                    		}
			}
	   	/*}else{
			$this->load->view('admin_menu');
			$this->load->view('login',$error);
		}
	}*/
	public function logout()
	{
		$newdata = array(
			'useremail'=> '',
                );
            $this->session->unset_userdata($newdata);
            $this->session->sess_destroy();
            redirect('main/index');
	}
	public function addNews()
	{
		//if($this->session->userdata('useremail') == 'adminbaraka@aslelbaraka.com'){
		$this->form_validation->set_rules('details', 'details', 'trim|required|xss_clean');
		if($this->form_validation->run()){
			$data=array (
                        'details'=>$this->input->post('details'),      
                    	);  
			$this->main_model->addNews($data);
	                redirect('main/listNews');
		}else{
			$this->load->view('admin_menu');
                	$this->load->view('add_news'); 
		}
		/*}else{
			echo "You are Not admin";
		}*/
	}
	public function editNews($id="")
	{	
		//if($this->session->userdata('useremail') == 'adminbaraka@aslelbaraka.com'){
		$data['news']=$this->main_model->getNews($id);
		$this->form_validation->set_rules('details', 'details', 'trim|required|xss_clean');
		if($this->form_validation->run()){
			$data=array (
                        'details'=>$this->input->post('details'),      
                    	);           
                  $this->main_model->editNews($id,$data);
                  redirect('main/listNews');
		}else{
			$this->load->view('admin_menu');
               		$this->load->view('edit_news',$data);
		}
		/*}else{
			echo "You are Not admin";
		}*/
	}
	public function listNews()
	{	
		//if($this->session->userdata('useremail') == 'adminbaraka@aslelbaraka.com'){	
		$data['news']=$this->main_model->listNews();
            	$this->load->view('admin_menu');
            	$this->load->view('list_news',$data);
		/*}else{
			echo "You are Not admin";		
		}*/
	}
	public function deletenews($id)
	{	
		//if($this->session->userdata('useremail') == 'adminbaraka@aslelbaraka.com'){
		$this->main_model->deleteNews($id);
                redirect('main/listNews');
		/*}else{
			echo "You are Not admin";
		}*/
	}
	public function addImage()
	{	
		$error['upload']="";
		//if($this->session->userdata('useremail') == 'adminbaraka@aslelbaraka.com'){
		if(!empty($_FILES))
                {
                    $value= $_FILES['image_name'];
                    $images=array();
                        $_FILES['image_name']['name']=$value['name'];
                        $_FILES['image_name']['type']= $value['type'];
                        $_FILES['image_name']['tmp_name']= $value['tmp_name'];
                        $_FILES['image_name']['error']= $value['error'];
                        $_FILES['image_name']['size']= $value['size'];  
                        $config['upload_path'] = './uploads/';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $config['max_size']	= '1000';
                        $config['file_name']= 'image_'.substr(md5(rand()),0,7);
                        $this->upload->initialize($config);
			if (!$this->upload->do_upload('image_name'))
                        {
                          $error['upload']=$this->upload->display_errors();
            		  $this->load->view('admin_menu');
                          $this->load->view('add_image',$error);
                        }
                        $data= $this->upload->data();
                        $images['image_name'] = $data['file_name'];
                     	//echo $data['file_name'];
 
			$this->main_model->addImage($images);
	                redirect('main/listImages');
		}else{
			$this->load->view('admin_menu');
                	$this->load->view('add_image',$error); 
		}
		/*}else{
			echo "You are Not admin";
		}*/
	}
	public function listImages()
	{	
		//if($this->session->userdata('useremail') == 'adminbaraka@aslelbaraka.com'){
		$data['images']=$this->main_model->listImages();
            	$this->load->view('admin_menu');
            	$this->load->view('list_images',$data);
		/*}else{
			echo "You are Not admin";
		}*/
	}
	public function deleteImage($id)
	{
		//if($this->session->userdata('useremail') == 'adminbaraka@aslelbaraka.com'){
		$this->main_model->deleteImage($id);
                redirect('main/listImages');
		/*}else{
			echo "You are Not admin";
		}*/
	}
	
}

