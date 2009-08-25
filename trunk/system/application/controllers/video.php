<?php
class Video extends Controller {
	var $layout = 'default'; 
	function video(){
		parent::Controller();
		$this->load->model("video_Model");
	}
	function index(){
		$more=$this->video_Model->more_video();
	    
    // print_r($data);
	
	$catid =$this->uri->segment(4);
	$videoid=$this->uri->segment(3);
  
   	$latestvideos = array();
	$latestvideos = $this->video_Model->getlatestvideos(4,-1,-1);
		
	$topviewedvideos = array();
		$latestvideos = array();
		$latestvideos = $this->video_Model->getlatestvideos(4,-1,-1);
		$topviewedvideos = $this->video_Model->gettopviewedvideo(7,-1,-1);
		
		
	  //  $this->video_Model->increase_viewcount($videoid);
	  // $hotvideos=array();
	  // $hotvideos=$this->video_Model->gethotvideos(4,-1,-1);
	    
   	
	$getvideosnames=array();
	 $getvideosnames=$this->video_Model->getvideosnames(15,-1,-1);
	 //print_r('$getallvideos');
	$relatedvideos = array();
	$relatedvideos = $this->video_Model->getlatestvideos(3,-1,-1);
	 
	 
	 $videocategeories = $this->video_Model->getvideocategeories(0);
	// $musicvideos=array();
	// $musicvideos=$this->video_Model->getmusicvideos(6,-1)
	// print_r($videocategeories);
	 
	 $video = $this->video_Model->getvideoname($videoid);
		
		if(!empty($video))
		{
		$videoname = $video['0']->name;	
		}
		else 
		{
			$videoname = '';	
		}
		$this->load->library('flash_video');
		$config['id'] = 'n0';
		$config['height'] = '360';
		$config['width']  = '500';
		$config['autostart'] = 'true';
		$config['file'] = 'http://localhost/subhodaya/assets/videos/video113.flv';//file full path
		$config['skin'] = 'simple'; 
		$config['previewimage']	=base_url().'assets/videos/image_preview/image'.$videoid.'.jpg';
		$this->flash_video->initialize($config);
		$jslinks = $this->flash_video->getcode();
	 
	 
	 
	 
	
       $data=array( 'title'	=>	'video',
                  'jquery'  =>  FALSE, 
                  'videoplayer' => $jslinks,
                  'videos' => $latestvideos,
                  'more'=>$more,
                  'latestvideos'=>$latestvideos,
                  'videocategeories'=>$videocategeories,
                  'videoname' => $videoname,
                 'relatedvideos'=>$relatedvideos,
                 'getvideosnames'=>$getvideosnames,
                  'topviewedvideos'=>$topviewedvideos,
                //  'musicvideos'=>$musicvideos,
       
        );
            
	    $this->load->view('videos_view',$data);
	    
   }
}
?>