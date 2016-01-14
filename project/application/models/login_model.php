<?php
class login_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function login($data) {

	$condition = "Id_user =" . "'" . $data['Id_user'] . "' AND " . "Pa_user =" . "'" . $data['password'] . "'";
	//echo $condition;
	$this->db->select('*');
	$this->db->from('members');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) {

		return $query->result_array();
		
		} else {
			return false;
		}
	}
}

?>