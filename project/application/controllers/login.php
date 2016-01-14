<?php
class login extends CI_Controller{
	public function __construct()
	{
		parent::__construct();	
		///$this->load->library(array('url', 'session'))	;
	}  

	public function index($mas=1)
	{
		$data["nopass"]=$mas;
		echo $mas;
		
		$this->load->view("pages/login",$data);

	}
	public function login(){
		$this->load->model('login_model');
		$data = array(
			'Id_user' => $this->input->post('user'),
			'password' => $this->input->post('password')
		);
		$result = $this->login_model->login($data);
		if($result==false){
			$this->index(0);
			
		}else
		{
			$this->load->;
		}
	}



}
?>