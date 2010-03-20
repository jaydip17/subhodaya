 <?php
class Videos extends Controller 
{
	var $layout='admin';
	function Videos()
	{
		parent::Controller();
		//$this->load->model('Videos_Model');
		$this->load->model('Videos_Model');
		$this->Login_Model->login_validate();
	}
	
	
function index()
	{
		
	    $catid =$this->uri->segment(5);
		$id=$this->uri->segment(4);
		$this->load->library('youtube');
		$config['id'] = 'n0';
		$config['autostart'] = 'true';
		$config['height'] = '360';
		$config['width']  = '500';
		$config['file'] = 'http://localhost/subhodaya/assets/videos/video'.$id.'.flv';//file full path
		$config['skin'] = 'swift'; 
		$config['previewimage']	='http://localhost/subhodaya/assets/videos/image_preview/image'.$id.'.jpg';
		$this->youtube->initialize($config);
		//$jslinks = $this->youtube->getYoutubeData();
		//$data = array('videoplayer' => $jslinks, 'catid'=>$catid ); 
		$this->load->view('admin/addvideocategeory.php');       
			 	
	}
	
	
function addcategeory()
	 {
		if (isset($_POST['submit']))
		{
		$this->Videos_Model->addcategeory();       
		}
	    $this->load->view('admin/addvideocategeory');
	}
	
function viewaddvideo()
	 {
		$message = $this->session->flashdata('message');
		print_r($message);
		$options = $this->Videos_Model->getvideocategeories();
		$videocategeories= array();
		foreach($options as $item)
		{
			$videocategeories[$item->id]=$item->name;
		}
		$data=array('options'=>$videocategeories,
					'message'=>$message);
       	$this->load->view('admin/video_view',$data);
		
	}
      
 function add_url()
    {
    	$url=$this->input->post('youtube_url');
    	if($url!='')
    	{
			$id = explode('?v=',$url);
			
			if(!empty($id) && isset($id[1]))
			$id = explode('&',$id[1]);
			else
			{
				
    			header('Location: '.site_url().'/videos');
			}
			$y_id = $id[0];
			$this->load->library('Youtube', 'youtube');
    		$config['id'] = $y_id;
    		$this->youtube->initialize($config);
    		$data_youtube = $this->youtube->getYoutubeData();
    		$this->load->helper('date');
    	    $video_cat_id=$this->input->post('video_cat_id');
    		 $video_name=$this->input->post('video_name');
    		 $no_of_views=$this->input->post('no_of_views');
    		$data = array(  
    		                 //'youtube_url'  =>$url,
    		                 'video_cat_id'  => $video_cat_id,
    		                  'no_of_views'=>  $no_of_views,
    	                      'video_name'=>$video_name,
    						'video_id'		=> $y_id,
    						'title'			=> $data_youtube['title'],
    						'description'	=> $data_youtube['description'],
    						'duration'		=> $data_youtube['duration'],
    						'created_date'	=> now(),
    						//'user_id'		=> getUserId(),
    						);
    						//print_r($data);
    					 
    		$this->Videos_Model->add($data);
    	//	print_r($data);
    		//exit;
    		//$msg = 'Video Added Successfully';
			//flashMsg($msg);
    		//redirect('admin/videos/add_url');

    	}
    	else
    	{
    		
    		header('Location: '.site_url().'/admin/videos/add_url');
    	}
    }
	
    
function categeories()
	  {
		$result = $this->Videos_Model->getvideocategeories();
		$data['query']=$result;
	   $this->load->view('admin/viewcategeories',$data);
	 // print_r($data);
	    
	  }
	
 function getvideos()
	 {
		$id = $this->uri->segment(4);
		$data['query'] = $this->Videos_Model->getvideos($id,'videos_list');
		$data['catid']=$id;
	    $this->load->view('admin/viewvideos',$data);
       // print_r($data);
	 }
	  
function editvideo()
	    {
		if(isset($_POST['edit']))
		{
			$id=$_POST['id'];
			$this->Videos_Model->editvideo($id); 
			$catid= $_POST['video_cat_id'];
		    redirect(base_url().'admin/videos/getvideos/'.$catid);
		}
		else {
			
			$id=$this->uri->segment(4);
			$data['videos_list']=$this->Videos_Model->getvideodetails($id);
			
			$this->load->view('admin/editvideos',$data);
			
		}
			
	}
	 
 function deletevideo()
	  {
		
		$id=$this->uri->segment(4);
		$catid= $this->uri->segment(5);
		$this->Videos_Model->deletevideo($id);
		redirect(base_url().'admin/videos/getvideos/'.$catid);
	}  
	 
function editcategeory()
	 {
		if (isset($_POST['edit']))
		{
			
			$this->Videos_Model->editcategeory();
			$this->categeories();
		}
		else{
			
		
		$id=$this->uri->segment(4);
		$data['details'] = $this->Videos_Model->getcategeorydetails($id);
		$this->load->view('admin/editvideocategeory',$data);
		}
	}
	
function deletecategeory()
	    {
		$id=$this->uri->segment(4);
		$this->Videos_Model->deletecategeory($id);
		redirect(base_url().'admin/videos/categeories');
	}	
}
?>