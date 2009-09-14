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
	if(!isset($_POST['homepage'])){
			
			$homepage=0;
		}else{
			$homepage=$_POST['homepage'];
		}
		if(!isset($_POST['active'])){
			
			$active=0;
		}else{
			$active=$_POST['active'];
		}
		$cat_id=$this->input->post('cat_id');
		$heading=$this->input->post('heading');
		$summary=$this->input->post('summary');
		$description=$this->input->post('description');
		$data=array('cat_id'    => $cat_id,
					'heading' => $heading,
					'summary' => $summary,
				'description' => $description,
				'homepage'=> $homepage,
				'active'      =>$active
		);
		$message="";
		if(!empty($data))
		{
		$result=$this->db->insert('mahila',$data);
		$id=$this->db->insert_id();
		
		}
		if($result==1){
		
		$config['upload_path'] ='assets/mahila/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload',$config);
	
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
			$oldname='assets/mahila/'.$data['upload_data']['file_name'];
			//print_r($data['upload_data']);
		    rename($oldname,'assets/mahila/news_img_main'.$id.'.jpg');	
		    $message='News Added Successfully';
			$this->session->set_flashdata('message',$message);
		}
		  if($data['upload_data']['image_width'] >300 && $data['upload_data']['image_height'] > 300)
		  {
		  	$filename = 'news_img_main'.$id.'.jpg';
			$image_path='assets/mahila/';
			$config['new_image'] = 'news_img_temp'.$id.'.jpg';
	    	$config['image_library'] = 'gd2';
	        $config['source_image'] = $image_path.$filename;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 300;
			$config['height'] =300;
			$this->load->library('image_lib');      
	    	$this->image_lib->initialize($config);
			if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());	
	    	}
	    	
			
			rename('assets/mahila/news_img_temp'.$id.'_thumb.jpg','assets/mahila/news_img'.$id.'.jpg');
			$this->image_lib->clear();
				
		 }
		  else 
		  rename('assets/mahila/news_img_main'.$id.'.jpg','assets/mahila/news_img'.$id.'.jpg');	
		
			$filename = 'news_img'.$id.'.jpg';
			$image_path='assets/mahila/';
	    	$config1['image_library'] = 'gd2';
	        $config1['source_image'] = $image_path.$filename;
			$config1['create_thumb'] = TRUE;
			$config1['maintain_ratio'] = TRUE;
			$config1['width'] = 100;
			$config1['height'] = 88;
			$this->load->library('image_lib');      
	    	$this->image_lib->initialize($config1);
			if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());	
	    	}
			
	    	$this->image_lib->clear();
	    	unlink('assets/mahila/news_img_main'.$id.'.jpg');
		}
			redirect(base_url().'admin/mahila',$message);
	
	}
	 function getmahilatype(){
   		
		$details=$this->Mahila_Model-> get_mahilatype();
		$data=array('details'=>$details);
		//print_r($deatails);
		$this->load->view('admin/mahilatypes',$data);
	}
    function getmahila(){
   		
		$details=$this->Mahila_Model->getdetails($this->uri->segment(4),'no','');
		$data=array('details'=>$details,
		              'cat_id' =>$this->uri->segment(4));
		//print_r($deatails);
		$this->load->view('admin/mahila_edit',$data);
	}
	
	function delete(){
	$this->load->model('admin/Mahila_Model');
	$id=$this->uri->segment(4,0);
	$cat_id=$this->uri->segment(5);
	$result=$this->Mahila_Model->delete($id);
	redirect(base_url()."admin/mahila/getmahila/".$cat_id);
	}
	
	function edit(){
	 $id =$this->uri->segment(4,0);
	 $edit = $this->Mahila_Model->edit($id);
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
		                    'edit'      =>  $edit
		);
    $this->load->view('admin/editmahila',$data);
	}
	
  function edit1()
   {
   	if(!isset($_POST['homepage']))
   	{
		$homepage=0;
   	}else{
   		$homepage=$_POST['homepage'];
   	}
	  $cat_id =$_POST['cat_id'];
	  $id =$_POST['id'];
   	 $this->Mahila_Model->edit1($id,$homepage);
   	redirect(base_url().'admin/mahila/getmahila/'.$cat_id);
   }
	
}
?>