<?php
class rerer extends CI_Controller{
	public function __construct()
	{
		parent::__construct();	
		///$this->load->library(array('url', 'session'))	;
	}  

	public function index()
	{

		$this->load->view("pages/login");

	}
	public function login(){
		$this->load->model('login_model');
		$data = array(
			'Id_user' => $this->input->post('user'),
			'password' => $this->input->post('password')
		);
		$result = $this->login_model->login($data);
		if($result==false){
			echo "FFFFFF";
		}else
		{
			print_r($result);
		}
	}



}
?>