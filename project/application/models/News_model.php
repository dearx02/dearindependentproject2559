<?php
class News_model extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	public function get_news($id = FALSE,$page=1,$per_page=1)
	{	
		
		if ($id === FALSE)
		{	
			$start = 0;

			if( $page > 1)
			{
				$start = $per_page*($page-1);
			}

			$query = $this->db->get('news',$per_page,$start);
			return $query->result_array();
		}

		$query = $this->db->get_where('news', array('id' => $id));
		//print_r($query->row_array());
		return $query->row_array();
	}

	public function get_img($id)
	{
	
		$query = $this->db->get_where('img',array('news_id' => $id));
		return $query->result_array();
	}

	public function set_news($file_name)
	{
		$this->load->helper('url');
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);
		$this->db->insert('news', $data);
		$id = $this->db->insert_id();
		$this->set_img($id,$file_name['name']);
	}

	private function set_img($news, $img_name)
	{	
		foreach ($img_name as $name) {
			$data = array(
				'img_name' => $name,
				'news_id' => $news
			);
			$this->db->insert('img',$data);
		}
		
	}
	public function update_news()
	{
		$this->load->helper('url');
		$data = array(
			'title' => $this->input->post('title'),
			'text' => $this->input->post('text')
			);
		$this->db->where('slug',$this->input->post('slug'));
		return $this->db->update('news',$data);
	}

	public function count_row()
	{
		return $this->db->count_all('news');
	}
}
?>