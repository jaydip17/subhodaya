<?php
class Mahila extends Controller {
	var $layout='admin';
	function Mahila(){
		parent::Controller();
		$this->load->model("admin/Mahila_Model");
	}
	function index(){
		$message = $this->session->flashdata('message');
		$details=$this->Mahila_Model->get_mahilatype();
		foreach ($details as $res )
				{
					$options[$res->id] = $res->cat_name;
				}
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'description',
						   'skin'	  => 'full');
		$textarea[]= array('textarea' => 'summary',
						   'skin'	  => 'small');
		$textarea[]= array('textarea' => 'heading',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$data=array(
							'jslinks'   => $links,
							'message'	=> $message,
							'options'   => $options
		);
		$this->load->view('admin/mahila_view',$data);
	}
	function insert(){
		if($this->input->post('home_news')){
			$home_news=$this->input->post('home_news');
		}else{
			$home_news=0;
		}
		$cat_id=$this->input->post('cat_id');
		$heading=$this->input->post('heading');
		$summery=$this->input->post('summary');
		$description=$this->input->post('description');
		$data=array('cat_id'    => $cat_id,
					'heading' => $heading,
					'summary' => $summery,
				'description' => $description,
				'homepage'=> $home_news
		);
		if(!empty($data))
		{
		$result=$this->db->insert('mahila',$data);
		$id=$this->db->insert_id();
		}
		if($result==1){
		$config['upload_path'] ='assets/mahila/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('image'))
		{
			$this->db->where('id',$id);
			$this->db->delete('mahila');
			$error[]= array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->Mahila_Model->rename($data,$id);
			$message='mahila news Added Successfully';
			$this->session->set_flashdata('message',$message);
		}
			$filename = 'mahila_img'.$id.'.jpg';
			$image_path='assets/mahila/';
	    	$config['image_library'] = 'gd2';
	        $config['source_image'] = $image_path.$filename;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 120;
			$config['height'] = 123;
	    	$this->load->library('image_lib');      
	    	$this->image_lib->initialize($config);
	    	if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());	
	    	}
	    	$this->image_lib->clear();
			redirect(base_url().'admin/mahila',$message);
		}
	}
}
?>