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
	
	//$catid =$this->uri->segment(4);
	//$videoid=$this->uri->segment(3);
  
   	$latestvideos = array();
	$latestvideos = $this->video_Model->getlatestvideos(4,-1,-1);
		
	$topviewedvideos = array();
		$latestvideos = array();
		$latestvideos = $this->video_Model->getlatestvideos(7,-1,-1);
		$topviewedvideos = $this->video_Model->gettopviewedvideo(10,-1);
		
		
	  //  $this->video_Model->increase_viewcount($videoid);
	    
	    
   	
	 $getallvideos=array();
	 $getallvideos=$this->video_Model->getallvideos(15,-1,-1);
	 
       $data=array( 'title'	=>	'Video',
             'more'=>$more,
            'latestvideos'=>$latestvideos,
            'topviewedvideos'=>$topviewedvideos,
       
        );
            
	    $this->load->view('videos_view',$data);
	    
   }
}
?>