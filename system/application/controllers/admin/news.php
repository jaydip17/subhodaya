<?php
class News extends Controller {
	var $layout = 'admin'; 
	function News(){
		parent::Controller();
		$this->load->helper(array('form','url','file'));
		$this->load->model('admin/News_Model');
	}
	function index(){
		$message = $this->session->flashdata('message');
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'description',
						   'skin'	  => 'full');
		$textarea[]= array('textarea' => 'summary',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$data=array(
							'jslinks'   => $links,
							'message'	=> $message,
		);
		$this->load->view('admin/news_view',$data);
	}
	function insert(){
		if(!isset($_POST['breaking_news'])){
			$breaking_news=0;
		}else{
			$breaking_news=$_POST['breaking_news'];
		}
		$data=array('heading'=>$_POST['heading'],
					'summery'=>$_POST['summary'],
				'description'=>$_POST['description'],
				'breking_news'=>$breaking_news);
		if(!empty($data))
		{
		$result=$this->db->insert('news',$data);
		$id=$this->db->insert_id();
		}
		if($result==1){
		$config['upload_path'] ='assets/news/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('image'))
		{
			$this->db->where('id',$id);
			$this->db->delete('news');
			$error[]= array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->News_Model->rename($data,$id);
			$message='News Added Successfully';
			$this->session->set_flashdata('message',$message);
		}
			$filename = 'news_img'.$id.'.jpg';
			$image_path='assets/news/';
	    	
	    	$config['image_library'] = 'gd2';
	        $config['source_image'] = $image_path.$filename;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 143;
			$config['height'] = 148;
	    	$this->load->library('image_lib');      
	    	$this->image_lib->initialize($config);
	    	if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());	
	    	}
	    	$this->image_lib->clear();
			redirect(base_url().'admin/news',$message);
		}
	}
	function getnews(){
		$this->load->model('admin/News_Model');
		$details=$this->News_Model->getnews_details();
		$data=array('details'=>$details);
		$this->load->view('admin/news_edit',$data);
	}
}
?>