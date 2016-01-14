 <?php
class data_form extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('News_model');
		$this->load->helper(array('form','url'));
	}
	public function index($page_w = 1)
	{
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/code/index.php/pages/index';
		$config['total_rows'] = $this->News_model->count_row();
		$config['per_page'] = 3; 
		$config['uri_segment'] = 3;
		$config['num_links'] = $this->News_model->count_row() / $config['per_page'];
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = "<div class='text-center'><nav> <ul  class='pagination'>";
		$config['first_tag_close'] = '</ul> </nav> </div>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='#''>";
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
 		$this->pagination->initialize($config); 

 		$data['page_link'] = $this->pagination->create_links();
 		//echo $data['page_link'];

		$data['news'] = $this->News_model->get_news(FALSE,$page_w,$config['per_page']);
		$data['title'] = 'News archive';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}
	public function View($slug)
	{
		$data['news'] = $this->News_model->get_news($slug,1,1);

		$data['img'] = $this->News_model->get_img($data['news']['id']);
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/View', $data);
		$this->load->view('templates/footer');
	}

	private function do_upload($path, $files)
	{
			//upload config
		//--------------------------------------------------------
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']= '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$config['overwrite']     = FALSE;

		//---------------------------------------------------
		$file_name = array();
		$cpt = count($_FILES['userfile']['name']);

		$this->load->library('upload', $config);

		for($i=0; $i<$cpt; $i++)
		 {      
		        $_FILES['userfile[]']['name']= $files['userfile']['name'][$i];
		        $_FILES['userfile[]']['type']= $files['userfile']['type'][$i];
		        $_FILES['userfile[]']['tmp_name']= $files['userfile']['tmp_name'][$i];
		        $_FILES['userfile[]']['error']= $files['userfile']['error'][$i];
		        $_FILES['userfile[]']['size']= $files['userfile']['size'][$i];    

		        
		        if(!$this->upload->do_upload('userfile[]'))
		        {
		        		$file_name['error'][$i] = $this->upload->display_errors();
		        }
		        else
		        {
		        		$data = array('upload_data' => $this->upload->data());		        
		        		$file_name['name'][$i] = $data['upload_data']['file_name'];
		        	}
		}
		return $file_name;
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = 'Create a news item';
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');

		
		
		//if ($this->form_validation->run() === FALSE || !$this->upload->do_upload('userfile'))
		if ($this->form_validation->run() === FALSE)//do validation and upload 
		{	
			
			$this->load->view('templates/header', $data);
			$this->load->view('pages/create');
			$this->load->view('templates/footer');
		}
		else
		{			
			
			$data['upload'] = $this->do_upload("./upload", $_FILES);
			
			$this->News_model->set_news($data['upload']);
			$this->load->view('templates/header', $data);
			$this->load->view('pages/sucess');
			$this->load->view('templates/footer');
		}
	}

	public function edit($slug)
	{		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');

		if($this->form_validation->run() === FALSE)
		{
			$data['news'] = $this->News_model->get_news($slug);

			$this->load->view('templates/header', $data);
			$this->load->view('pages/edit',$data);
			$this->load->view('templates/footer');	
		}
		else
		{
			$this->News_model->update_news();

			$this->View($slug);
		}

	}

	public function add_form()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/side_bar');
		$this->load->view('pages/add_form');
		$this->load->view('templates/footer');
	}
	/*function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']= '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('templates/header', $data);
			$this->load->view('pages/create',$error);
			$this->load->view('templates/footer');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload_success', $data);
		}
	}*/
}
?>