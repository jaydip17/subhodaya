              <?php

class Videos extends Controller 
{
	var $layout='admin';
	function Videos()
	{
		parent::Controller();
		//$this->load->model('Videos_Model');
		$this->load->model('Videos_Model');
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
      
/*function addvideo()

	{
		$title=$this->input->post('title');
		$video_id=$this->input->post('video_id');
		$hero_name=$this->input->post('hero_name');
		$description=$this->input->post('description');
		$duration=$this->input->post('duration');
		$date_created=$this->input->post('date_created');
		$created_date=$this->input->post('created_date');
		$user_id=$this->input->post('user_id');
		$banned=$this->input->post('banned');
		$video_cat_id=$this->input->post('video_cat_id');
		$no_of_views=$this->input->post('no_of_views');
		//$video_cat_id=$this->input->post('video_cat_id');
		//$youtube_url=$this->input->Post('youtube_url');
		//$rating=$this->input->post('rating');
		//$date=$this->input->post('insert_date');
		
		$data=array('title'			=>	$title,
					'no_of_views'	=>	$no_of_views,
					'video_cat_id'  =>	$video_cat_id,
		             'video_id'     =>  $video_id,
		              'hero_name'   =>  $hero_name,
		              'description' =>  $description,
		               'duration'   =>  $duration,
		              'date_created'=>  $date_created,
		              'created_date'=>  $created_date,
		              'user_id'     =>  $user_id,
		               'banned'     =>  $banned,
		               'no_of_views'=> $no_of_views,
		             );
		if(!empty($data))
		{
			$result=$this->db->insert('fa_videos_list',$data);
			$i=$this->db->insert_id();
		}
		
		/*if($result==1)
		{
		$dir =  './assets/videos';   
	    $config['upload_path'] =$dir;
		$config['allowed_types'] = 'flv|wmp';
		$config['max_size']	= '90000000';		
		
		$this->load->library('upload',$config);
		if (!$this->upload->do_upload('video'))
		{
			
			$error = array('error' => $this->upload->display_errors());
			$this->db->where('id',$i);
			$this->db->delete('videos');
			$message = 'error';
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
		   $data = array('upload_data' => $this->upload->data());
	       $filepath = $data['upload_data']['file_name'];
	       rename($dir.'/'.$filepath , $dir.'/video'.$i.'.flv');
	       $this->db->where('id',$i);
	       $this->db->update('videos',array('video_uploaded'=>'1'));
	       $message='Video Added Successfully';
		
			$dir1 =  './assets/videos/image_preview';   
		    $config1['upload_path'] = $dir1;
			$config1['allowed_types'] = 'gif|jpg|png';
			$config1['max_size']	= '100000';
			$config1['max_width']  = '1024';
			$config1['max_height']  = '768';
  
	       $this->upload->initialize($config1);
			if (!$this->upload->do_upload('image'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message',$error);
				print_r($error);
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
	    	}
	    	$this->image_lib->clear();
    	
    	$filename = 'image'.$i.'.jpg';
    	
    	$config3['image_library'] = 'gd2';
        $config3['source_image'] = $dir1.'/'.$filename;
      	$config3['create_thumb'] = TRUE;
		$config3['maintain_ratio'] = TRUE;
		$config3['width'] = 102;
		$config3['height'] =72;
    	
    	$this->load->library('image_lib'); 
    	$this->image_lib->initialize($config3);
    	
    	if(!$this->image_lib->resize())
    	{
    		$error = array('error' => $this->image_lib->display_errors());
    		$this->session->set_flashdata('message',$error);
    	}
		}
	 }
	}
		
	//redirect(base_url()."admin/videos/viewaddvideo",$message);
		
		
	}*/
	
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