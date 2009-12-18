<?php
class Video extends Controller {
	var $layout = 'default'; 
	function video()
	{
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
	    	 
		$latestvideos = $this->video_Model->get_videos('latest',20);
		$topviewedvideos = $this->video_Model->get_videos('top',20);
		$videocategeories = $this->video_Model->getvideocategeories(8);
		
	    //this is the first categeory which is displayed in the div first on loading the page
	    $first_to_display=$videocategeories->result();
	    $first_id =$first_to_display['0']->id;
	    $onload = "loadVideos('$first_id','".base_url()."video/index/".$first_id."','".base_url()."videolist/videonamesview','body')";
  
     
	    $this->load->library('flash_video');
		$config['id'] = 'n0';
		$config['height'] = '350';
		$config['width']  = '560';
		$config['autostart'] = 'true'; 
		$config['file'] = base_url().'assets/videos/video'.$videoid.'.flv';//file full path
		$config['skin'] = 'swift'; 
		$config['previewimage']	= base_url().'assets/videos/image_preview/image'.$videoid.'.jpg';
		$this->flash_video->initialize($config);
		$jslinks = $this->flash_video->getcode();
	 	$sprytabs=array();
	 	
	 	
	$this->load->model('admin/News_Model');
		 $more=$this->News_Model->more_news();
		 //pagination for hot videos view
		 $id=$this->uri->segment(3,0);
		 $query=" from videos where video_cat_id=$id order by insert_date desc ";
		 $a =base_url().'video/index/'.$id;
		 $this->load->library('paginationnew');$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	 $this->paginationnew->limit =20;
         $this->paginationnew->filePath ='javascript:loadNews(\''.$id.'\',\''.$a;
      
         $this->paginationnew->select_what = '*';
         $this->paginationnew->nbItems = $this->video_Model->count_videos($id);
         $this->paginationnew->add_query = $query;
            
   		 $result = $this->paginationnew->getQuery(TRUE);
   		 $hotvideos=$result;
   		 $paginate = $this->paginationnew->paginate(); 
   		 if(empty($hotvideos)){
   		 	redirect(base_url().'video');
   		 }
	 	
	 	
	 	
	 	$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['5']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		
	    $data=array( 'title'		=>	'video',
                  // 'videoplayer' 	=> 	$jslinks,
                        'more'		=>	$more,
                  'videocategeories'=>	$videocategeories,
	               'latestvideos'	=>	$latestvideos,
                 //'topviewedvideos'	=>	$topviewedvideos,
                     'paginate'	 =>	$paginate,
		                'hotvideos'  =>	$hotvideos,
	                'onload'		=>		$onload,
	    				//'sprytabs'	=>	$sprytabs,
	    			'bread_crumb'	=> $bread_crumb
	                 
          
        );
          
	   $this->load->view('videos_view',$data);
	  
	  
	    
	}
	
	
function playvideo(){
		
 
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
	    	 
		$latestvideos = $this->video_Model->get_videos('latest',20);
		$topviewedvideos = $this->video_Model->get_videos('top',8);
		$videocategeories = $this->video_Model->getvideocategeories(8);
		
	    //this is the first categeory which is displayed in the div first on loading the page
	    $first_to_display=$videocategeories->result();
	    $first_id =$first_to_display['0']->id;
	    $onload = "loadVideos('$first_id','".base_url()."video/playvideo/".$first_id."','".base_url()."videolist/videonamesview','body')";
  
     
	    $this->load->library('flash_video');
		$config['id'] = 'n0';
		$config['height'] = '350';
		$config['width']  = '560';
		$config['autostart'] = 'true'; 
		$config['file'] = base_url().'assets/videos/video'.$videoid.'.flv';//file full path
		$config['skin'] = 'swift'; 
		$config['previewimage']	= base_url().'assets/videos/image_preview/image'.$videoid.'.jpg';
		$this->flash_video->initialize($config);
		$jslinks = $this->flash_video->getcode();
	 	$sprytabs=array();
	 	
	 	
	$this->load->model('admin/News_Model');
		 $more=$this->News_Model->more_news();
		 //pagination for hot videos view
		 $id=$this->uri->segment(3,0);
		 $query=" from videos where video_cat_id=$id order by insert_date desc ";
		 $a =base_url().'video/index/'.$id;
		 $this->load->library('paginationnew');$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	 $this->paginationnew->limit =20;
         $this->paginationnew->filePath ='javascript:loadNews(\''.$id.'\',\''.$a;
      
         $this->paginationnew->select_what = '*';
         $this->paginationnew->nbItems = $this->video_Model->count_videos($id);
         $this->paginationnew->add_query = $query;
            
   		 $result = $this->paginationnew->getQuery(TRUE);
   		 $hotvideos=$result;
   		 $paginate = $this->paginationnew->paginate(); 
   		 if(empty($hotvideos)){
   		 	redirect(base_url().'video');
   		 }
	 	
	 	
	 	
	 	$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['5']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		
	    $data=array( 'title'		=>	'video',
                   'videoplayer' 	=> 	$jslinks,
                        'more'		=>	$more,
                  'videocategeories'=>	$videocategeories,
	               'latestvideos'	=>	$latestvideos,
                 'topviewedvideos'	=>	$topviewedvideos,
                     'paginate'	 =>	$paginate,
		                'hotvideos'  =>	$hotvideos,
	                'onload'		=>		$onload,
	    				//'sprytabs'	=>	$sprytabs,
	    			'bread_crumb'	=> $bread_crumb
	                 
          
        );
          
	   $this->load->view('video_inner',$data);
	  
	  
	    
	}
	
	
	
	
	
	
	
	
	
}
?>