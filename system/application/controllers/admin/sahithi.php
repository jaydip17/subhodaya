<?php
class Sahithi extends Controller {
	var $layout='admin';
	function Sahithi(){
		parent::Controller();
		$this->load->model('admin/Sahithi_Model');
	}
	function index(){
			$message = $this->session->flashdata('message');
	$details=$this->Sahithi_Model->get_sahithitype();
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
		
		$this->load->view('admin/sahithi_view',$data);
	}
    function insert(){
    	//echo "hello";
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
		$type=$this->input->post('type');
		$heading=$this->input->post('heading');
		$summary=$this->input->post('summary');
		$description=$this->input->post('description');
		$data=array('cat_id'    => $type,
					'heading' => $heading,
					'summary' => $summary,
				'description' => $description,
				'homepage'=> $homepage,
				'active'      =>$active
		);
		if(!empty($data))
		{
		$result=$this->db->insert('sahithi',$data);
		$id=$this->db->insert_id();
		}
		if($result==1){
		$config['upload_path'] ='assets/sahithi/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	    $this->load->library('image_lib');
		if (! $this->upload->do_upload('image'))
		{
			$this->db->where('id',$id);
			$this->db->delete('sahithi');
			$error[]= array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$oldname='assets/sahithi/'.$data['upload_data']['file_name'];
		    rename($oldname,'assets/sahithi/news_img'.$id.'.jpg');	
		    $message='News Added Successfully';
			$this->session->set_flashdata('message',$message);
			
		}
		     
			$filename = 'news_img'.$id.'.jpg';
			$image_path='assets/sahithi/';
	    	$config_resize['image_library'] = 'gd2';
	    	//$config_resize['new_image']= "new_img_".$id."size1.jpg";
	        $config_resize['source_image'] = $image_path.$filename;
			
			$config_resize['maintain_ratio'] = TRUE;
			$config_resize['width'] = 320;
			$config_resize['height'] = 240;
			    
	    	$this->image_lib->initialize($config_resize);
			if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());
	    		print_r($error);
	    	}
	    	$this->image_lib->clear();
	    	$filename= 'news_img'.$id.'.jpg';
	    	$config1['image_library'] = 'gd2';
	        $config1['source_image'] = $image_path.$filename;
			$config1['create_thumb'] = TRUE;
			$config1['maintain_ratio'] = TRUE;
			$config1['width'] = 80;
			$config1['height'] = 60;
	    	
	    	$this->image_lib->initialize($config1);
	    	if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());
	    		print_r($error);	
	    	}
	    	$this->image_lib->clear();
			redirect(base_url().'admin/sahithi',$message);
		}
	}
   function getsahithitype(){
   		
		$details=$this->Sahithi_Model-> get_sahithitype();
		$data=array('details'=>$details);
		//print_r($deatails);
		$this->load->view('admin/sahithitypes',$data);
	}
   function getsahithi(){
   		
		$details=$this->Sahithi_Model->getdetails($this->uri->segment(4),'no');
		$data=array('details'=>$details,
		              'cat_id' =>$this->uri->segment(4));
		//print_r($deatails);
		$this->load->view('admin/sahithi_edit',$data);
	}
	
	function delete(){
	$this->load->model('admin/Sahithi_Model');
	$id=$this->uri->segment(4,0);
	$cat_id=$this->uri->segment(5);
	$result=$this->Sahithi_Model->delete($id);
	redirect(base_url()."admin/sahithi/getsahithi/".$cat_id);
	}
	
	function edit(){
	 $id =$this->uri->segment(4,0);
	  $edit = $this->Sahithi_Model->get_sahithi_details($id);
        
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
		$this->load->view('admin/editsahithi',$data);
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
	 $id=$_POST['id'];
   	 $this->Sahithi_Model->edit1($id,$homepage);
   	redirect(base_url().'admin/sahithi/getsahithi/'.$cat_id);
   }
	
}
?>