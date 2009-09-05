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
		$videosnames=$this->video_Model->getvideosnames('name',15);
	    $videocategeories = $this->video_Model->getvideocategeories(3);
	   // print_r($videocategeories->result());
	    $hotvideos=array();
	    
	   // $this->load->library('paginationnew');
	  //  print_r($videocategeories->result());
//	     foreach($videocategeories->result() as $item)
//	       {
//    	
//    	   $this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
//        $this->paginationnew->limit =10;
//         $this->paginationnew->filePath ='javascript:loadNews(\''.$item->id.'';
//      
//         $this->paginationnew->select_what = '*';
//         $this->paginationnew->nbItems = $this->video_Model->count_videos($item->id);
//         $this->paginationnew->add_query = $query;
//        
//   		$result = $this->paginationnew->getQuery(TRUE);
//   		$details=$result->result();
//   		 		
//  	    $paginate = $this->paginationnew->paginate(); 
//	   
//	      $hotvideos[$item->id]=$this->video_Model->get_videos($item->id,6);
//	     }
        
      //  $onload = "loadNews('".base_url()."videolist/listview/".$type."')";
       $count=1;
       $pagination=array();
	   foreach($videocategeories->result() as $item)
	   {
	   //	echo "hello";
        $onload = "loadNews('".base_url()."videolist/videoview/".$item->id."')";
        $total_rows=$this->video_Model->count_videos($item->id);
        //echo $total_rows;
	    $this->load->library('pagination');
		$config['base_url'] = base_url()."videolist/videoview/".$item->id;
    	$config['total_rows'] = $total_rows;
		$config['per_page'] = 1;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config); 
		$pagination[$item->id]=$this->pagination->create_links();
		$hotvideos[$item->id]=$this->video_Model->get_videos($item->id,2);
		
		
		 $count++;
	   }
        print_r($pagination);
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
                         'hotvideos' => $hotvideos,
	                  'videosnames'=>$videosnames,
	                  'onload'=>$onload,
	                 'pagination' =>$pagination
       
        );
            
	   $this->load->view('videos_view',$data);
	    
	}
}
?>