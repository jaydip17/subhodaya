<?php
class Video extends Controller {
	var $layout = 'default'; 
	function video(){
		parent::Controller();
		$this->load->model("video_Model");
	}
	function index(){
		
		
		//show_error('message');
		
		$more=$this->video_Model->more_video();
		 if($this->uri->segment(3)!=0)
	    {
	      $videoid = $this->uri->segment(3);
	    }
	       else {
	    //for latest videoid
	    $result_videoid=$this->video_Model->get_videos('active',1);
	    $video_result=$result_videoid->result();
	    $videoid=$video_result['0']->id;
	    //for latest videoid
	     }
	    $this->video_Model->increase_viewcount($videoid);
	    	 
		$latestvideos = $this->video_Model->get_videos('latest',4);
		$topviewedvideos = $this->video_Model->get_videos('top',7);
		$videocategeories = $this->video_Model->getvideocategeories(3);
		
	    //this is the first categeory which is displayed in the div first on loading the page
	    $first_to_display=$videocategeories->result();
	    $first_id =$first_to_display['0']->id;
	    $onload = "loadVideos('$first_id','".base_url()."videolist/videoview/".$first_id."','".base_url()."videolist/videonamesview','body')";
  
     
	    $this->load->library('flash_video');
		$config['id'] = 'n0';
		$config['height'] = '360';
		$config['width']  = '500';
		$config['autostart'] = 'false';
		$config['file'] = base_url().'assets/videos/video'.$videoid.'.flv';//file full path
		$config['skin'] = 'simple'; 
		$config['previewimage']	= base_url().'assets/videos/image_preview/image'.$videoid.'.jpg';
		$this->flash_video->initialize($config);
		$jslinks = $this->flash_video->getcode();
	 
	    $data=array( 'title'	=>	'video',
                   'videoplayer' => $jslinks,
                        'more'=>$more,
                  'latestvideos'=>$latestvideos,
                  'videocategeories'=>$videocategeories,
                 'topviewedvideos'=>$topviewedvideos,
                               
	                  'onload'=>$onload,
	                 
       
        );
          
	   $this->load->view('videos_view',$data);
	  
	  
	    
	}
}
?>