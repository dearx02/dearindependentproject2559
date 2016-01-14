<?php
class detailmember_controll extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model');	
		$this->load->helper(array('form','url'));
	}
	public function index($page_w = 1)
	{
		
		$this->load->view('pages/detailmember');
		$this->load->view('templates/footer');
		$this->load->view('templates/header');


	}

	
			
		
	}
	
		


?>