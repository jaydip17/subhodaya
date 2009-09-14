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
		$options = $this->Video_Model->getvideocategeories();
		$videocategeories= array();
		foreach($options->result() as $item)
		{
			$videocategeories[$item->id]=$item->name;
		}
		
		$data['options']=$videocategeories;
       	$this->load->view('admin/video_view',$data);
		
	}
	function addvideo()
	{
		print_r($_POST);
		print_r($_FILES);
		$this->Video_Model->addvideo();
		redirect(base_url()."admin/videos/viewaddvideo");
		
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