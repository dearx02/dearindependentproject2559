<?php
class register extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model');	
		$this->load->helper(array('form','url'));
	}
	public function index($page_w = 1)
	{
		
		$this->load->view('pages/register');
		$this->load->view('templates/footer');


	}

	public function add_register(){

		//echo $this->input->post('datebird');

		$data['title'] = 'register';


		$this->Register_model->add_register();

		//$this->load->view('templates/header', $data);
		//$this->load->view('pages/login');
			
		
	}
	
		

}
?>