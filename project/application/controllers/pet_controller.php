<?php
class pet_controller extends CI_Controller{
	public function __construct()
	{
		parent::__construct();		
	}  

	public function index()
	{	
		$this->load->view('templates/header');
		$this->load->view('templates/side_bar');
		$this->load->view('pages/pet');
		$this->load->view('templates/footer');
		
	}

	
	


}
?>