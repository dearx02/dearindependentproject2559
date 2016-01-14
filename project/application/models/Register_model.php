<?php
class Register_model extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	public function add_register()
	{




		$this->load->helper('url');
		$Id_user = $this->input->post("Id_user");
		$Pa_user = $this->input->post("Pa_user");
		$Fname_user = $this->input->post("Fname_user");
		$Lname_user = $this->input->post("Lname_user");
		$Gender = $this->input->post("gender");
		$datebird = $this->input->post("datebird");
		$datejoin = $this->input->post("datejoin");
		$moo = $this->input->post("moo");
		$numberaddress = $this->input->post("numberaddress");
		$road = $this->input->post("road");
		$soi = $this->input->post("soi");
		$lv1 = $this->input->post("lv1");
		$lv2 = $this->input->post("lv2");
		$etc = $this->input->post("etc");
		$phone = $this->input->post("phone");
		
		$d = substr($datebird,0,2);
		$m = substr($datebird,3,2);
		$y = substr($datebird,6,4);

		$datebird = (String)((int)$y-543)."-".$m."-".$d;

		echo $datebird;
		
				$data = array(
			'Id_user'=>$Id_user,
			'Pa_user'=>$Pa_user,
			'F_name'=>$Fname_user,
			'L_name'=>$Lname_user,
			'Gender'=>$Gender,
			'Birthday'=>$datebird,
			'Phone'=>$phone,
			'Join_date'=>$datejoin,
			'Address'=>$moo.'m'.''.$numberaddress.''.$road.''.$soi,
			'Village_level'=>$lv1,
			'Parish_level'=>$lv2,
			'Etc'=>$etc,
			'Check'=>'0',
		);

		$this->db->insert('members', $data);
	}
}

	
?>