<?php
class household_controll extends CI_Controller{
	public function __construct()
	{
		parent::__construct();		
	}  

	public function add_household()
	{	
		$this->load->view('templates/header');
		$this->load->view('templates/side_bar');
		$this->load->view("pages/household");
		$this->load->view('templates/footer');
	}

	public function insert_house(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = 'เพิ่มข้อมูลครัวเรือน';
		$this->form_validation->set_rules('pk1', 'บ้านเลขที่', 'required');
		$this->form_validation->set_rules('moo', 'หมู่ที่', 'required');
		$this->form_validation->set_rules('moo', 'หมู่ที่', 'required');


		
		
		//if ($this->form_validation->run() === FALSE || !$this->upload->do_upload('userfile'))
		if ($this->form_validation->run() === FALSE)//do validation and upload 
		{	
			
			$this->load->view('templates/header', $data);
			$this->load->view('pages/create');
			$this->load->view('templates/footer');
		}
		else
		{			
			
			$this->News_model->set_news($data['upload']);
			$this->load->view('templates/header', $data);
			$this->load->view('pages/sucess');
			$this->load->view('templates/footer');
		}
	}


}
?>