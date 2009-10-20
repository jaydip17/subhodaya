<?php
class Videos extends Controller {
	var $layout='admin';
	function Videos(){
		parent::Controller();
		$this->load->model('admin/Video_Model');
	}
	function index(){
		
	    $catid =$this->uri->segment(5);
		$id=$this->uri->segment(4);
		$this->load->library('flash_video');
		$config['id'] = 'n0';
		$config['autostart'] = 'true';
		$config['height'] = '280';
		$config['width']  = '400';
		$config['file'] = 'http://localhost/subhodaya/assets/videos/video'.$id.'.flv';//file full path
		$config['skin'] = 'swift'; 
		$config['previewimage']	='http://localhost/subhodaya/assets/videos/image_preview/image'.$id.'.jpg';
		$this->flash_video->initialize($config);
		$jslinks = $this->flash_video->getcode();
		$data = array('videoplayer' => $jslinks, 'catid'=>$catid );
		$this->load->view('admin/addvideocategeory.php',$data);       
			 
		
	}
	function addcategeory()
	 {
		if (isset($_POST['submit']))
		{
		$this->Video_Model->addcategeory();       
		}
	    $this->load->view('admin/addvideocategeory');
	}
	
	function viewaddvideo()
	{
		$message = $this->session->flashdata('message');
		print_r($message);
		$options = $this->Video_Model->getvideocategeories();
		$videocategeories= array();
		foreach($options->result() as $item)
		{
			$videocategeories[$item->id]=$item->name;
		}
		$data=array('options'=>$videocategeories,
					'message'=>$message);
       	$this->load->view('admin/video_view',$data);
		
	}
	function addvideo()
	{
		print_r($_FILES);
		exit;
		//$message=$this->Video_Model->addvideo();
	    $name=$this->input->post('name');
		$time=$this->input->post('time');
		$no_of_views=$this->input->post('no_of_views');
		$video_cat_id=$this->input->post('video_cat_id');
		$rating=$this->input->post('rating');
		$date=$this->input->post('insert_date');
		
		$data=array('name'			=>	$name,
					'time'			=>	$time,
					'no_of_views'	=>	$no_of_views,
					'video_cat_id'  =>	$video_cat_id,
					'rating'		=>  $rating,
					'insert_date'	=>	$date);
		if(!empty($data))
		{
			$result=$this->db->insert('videos',$data);
			$i=$this->db->insert_id();
		}
		//exit;
		if($result==1)
		{
		$dir =  './assets/videos';   
	    $config['upload_path'] =$dir;
		$config['allowed_types'] = 'flv';
		$config['max_size']	= '90000000';		
		//$this->upload->initialize($config);
		$this->load->library('upload',$config);
		if (!$this->upload->do_upload('video'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->db->where('id',$i);
			$this->db->delete('videos');
			$this->session->set_flashdata('message',$error);
			redirect(base_url().'admin/videos/viewaddvideo',$error);
		}	
		else
		{
		   $data = array('upload_data' => $this->upload->data());
	       $filepath = $data['upload_data']['file_name'];
	       rename($dir.'/'.$filepath , $dir.'/video'.$i.'.flv');
	       $this->db->where('id',$i);
	       $this->db->update('videos',array('video_uploaded'=>'1'));
	       $message='Video Added Successfully';
		   $this->session->set_flashdata('message',$message);	
		
			$dir1 =  './assets/videos/image_preview';   
		    $config1['upload_path'] = $dir1;
			$config1['allowed_types'] = 'gif|jpg|png';
			$config1['max_size']	= '100';
			$config1['max_width']  = '1024';
			$config1['max_height']  = '768';
  
		    $this->load->library('image_lib');      
	    	$this->image_lib->initialize($config);
	
			if (!$this->upload->do_upload('image'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message',$error);
				redirect(base_url().'admin/videos/viewaddvideo',$error);
				//print_r($error);
			}	
			else
			{
			   $data = array('upload_data' => $this->upload->data());
		       $filepath = $data['upload_data']['file_name'];
		       rename($dir1.'/'.$filepath , $dir1.'/image'.$i.'.jpg');	
		      
 	    	   	$filename = 'image'.$i.'.jpg';
	    	
		    	$config4['image_library'] = 'gd2';
		        $config4['source_image'] = $dir1.'/'.$filename;
		        $config4['new_image'] = 'home_image'.$i.'.jpg';
		      	$config4['create_thumb'] = TRUE;
				$config4['maintain_ratio'] = TRUE;     
				$config4['width'] = 122;
				$config4['height'] = 89;
	    	
	    	   $this->load->library('image_lib');
	    	   $this->image_lib->initialize($config4);
	    	
	    	if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());
	    		$this->session->set_flashdata('message',$error);
	    		redirect(base_url().'admin/videos/viewaddvideo',$error);
				//print_r($error);
	    	}
	    	$this->image_lib->clear();
    	
    	
		//generating image to display in top list
		
    	$filename = 'image'.$i.'.jpg';
    	
    	$config3['image_library'] = 'gd2';
        $config3['source_image'] = $dir1.'/'.$filename;
      	$config3['create_thumb'] = TRUE;
		$config3['maintain_ratio'] = TRUE;
		$config3['width'] = 87;
		$config3['height'] =67;
    	
    	$this->load->library('image_lib'); 
    	$this->image_lib->initialize($config3);
    	
    	if(!$this->image_lib->resize())
    	{
    		$error = array('error' => $this->image_lib->display_errors());
    		$this->session->set_flashdata('message',$error);
    		redirect(base_url().'admin/videos/viewaddvideo',$error);
			//print_r($error);
    	}
		}
	 }
	}
		redirect(base_url()."admin/videos/viewaddvideo",$message);
		//print_r($message);
		
		
	}
	
  function categeories()
	  {
		$data['query'] = $this->Video_Model->getvideocategeories();
		
	$this->load->view('admin/viewcategeories',$data);
	 // print_r($data);
	    
	  }

	
   function getvideos()
	 {
		$id = $this->uri->segment(4);
		$data['query'] = $this->Video_Model->getvideos($id,'videos');
		$data['catid']=$id;
	    $this->load->view('admin/viewvideos',$data);
	 }
 
   function deletevideo()
	  {
		
		$id=$this->uri->segment(4);
		$catid= $this->uri->segment(5);
		$this->Video_Model->deletevideo($id);
		redirect(base_url().'admin/videos/getvideos/'.$catid);
	} 
	 
	 
    function editvideo()
	    {
		if(isset($_POST['edit']))
		{
			$id=$_POST['id'];
			$this->Video_Model->editvideo($id);
			$catid= $_POST['video_cat_id'];
		    redirect(base_url().'admin/videos/getvideos/'.$catid);
		}
		else {
			
			$id=$this->uri->segment(4);
			$data['videos']=$this->Video_Model->getvideodetails($id);
			
			$this->load->view('admin/editvideos',$data);
			
		}
			
	}
	
     function deletecategeory()
	    {
		$id=$this->uri->segment(4);
		$this->Video_Model->deletecategeory($id);
		redirect(base_url().'admin/videos/categeories');
	}
	
     function editcategeory()
	 {
		if (isset($_POST['edit']))
		{
			
			$this->Video_Model->editcategeory();
			$this->categeories();
		}
		else{
			
		
		$id=$this->uri->segment(4);
		$data['details'] = $this->Video_Model->getcategeorydetails($id);
		$this->load->view('admin/editvideocategeory',$data);
		}
	}
	
}
?>