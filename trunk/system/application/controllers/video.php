<?php
class Video extends Controller {
	var $layout = 'default'; 
	function video(){
		parent::Controller();
		$this->load->model("video_Model");
	}
	function index(){
		$more=$this->video_Model->more_video();
	    	 
		$latestvideos = $this->video_Model->get_videos('latest',4);
		$topviewedvideos = $this->video_Model->get_videos('top',7);
	    $videocategeories = $this->video_Model->getvideocategeories(3);
	    $hotvideos=array();
	    foreach($videocategeories->result() as $item)
	       {
	      $hotvideos[$item->id]=$this->video_Model->get_videos($item->id,6);
	     }
	    $result_videoid=$this->video_Model->get_videos('active',1);
	    $video_result=$result_videoid->result();
	    $videoid=$video_result['0']->id;
	    
	    $this->load->library('flash_video');
		$config['id'] = 'n0';
		$config['height'] = '360';
		$config['width']  = '500';
		$config['autostart'] = 'true';
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
                         'hotvideos' => $hotvideos,
	                   
       
        );
            
	   $this->load->view('videos_view',$data);
	    
   }
}
?>