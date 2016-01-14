<?php class News_model extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	public function set_houseinfro()
	{
		$this->load->helper('url');
		$num_hos = $this->input->post('pk1');
		$moo = $this->input->post('moo');
		$road = $this->input->post('road');
		$soi = $this->input->post('soi');

		$data = array(
			'House_id' => $num_hos."a".$moo,
			'Id_user' => "",
			'Survey_id' => "",
			'Adress' => "บ้านเลขที่ ".$num_hos." หมู่ ".$moo." ถนน ".$road." ซอย ".$soi,
			'Genre_waste' => $this->input->post('optionsRadiosInline');
		);

		$this->db->insert('', $data);
		$id = $this->db->insert_id();
		$this->set_img($id,$file_name['name']);
	}
}
?>