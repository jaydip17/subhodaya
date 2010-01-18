<?php
class Videos extends Controller {
	var $layout = 'default';
	function Videos()
	{
		parent::Controller();
	}
	function index()
	{
		$breaking=$this->News_Model->breaking_news1();
		$newscss=array();
		$more=$this->News_Model->more_news();
		$video_cat= $this->Video_Model->getvideocategeories();
		$latestvideos = $this->Video_Model->get_videos('latest',24);
		$title=$this->lang->line('video_title').$more['5']->matter;
		$description=$this->lang->line('video_descrip');
		//print_r($latestvideos);
		$data=array(
			'newscss'		=>	$newscss,
			'type'			=>	$video_cat,
			'latestvideos'	=>	$latestvideos,
			'title'			=>	$title,
			'description'	=>	$description,
			'breaking'		=>	$breaking
		);
		$this->load->view('video_view',$data);
	}
	function content()
	{
		$breaking=$this->News_Model->breaking_news1();
		$newscss=array();
		$video_cat= $this->Video_Model->getvideocategeories();
		$id=$this->uri->segment(3,0);
		 $query=" from videos where video_cat_id=$id order by insert_date desc ";
		 $a =base_url().'video/index/'.$id;
		 $this->load->library('paginationnew');$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	 $this->paginationnew->limit =24;
         $this->paginationnew->filePath ='javascript:loadNews(\''.$id.'\',\''.$a;
      
         $this->paginationnew->select_what = '*';
         $this->paginationnew->nbItems = $this->Video_Model->count_videos($id);
         $this->paginationnew->add_query = $query;
            
   		 $result = $this->paginationnew->getQuery(TRUE);
   		 $hotvideos=$result->result();
   		 $paginate = $this->paginationnew->paginate();
   		// print_r($hotvideos);
		$data=array(
			'newscss'		=>	$newscss,
			'type'			=>	$video_cat,
			'paginate'		=>	$paginate,
		'latestvideos'		=>  $hotvideos,
			'breaking'		=>	$breaking
		);
		$this->load->view('video_view',$data);
	}
	function playvideo()
	{
		$breaking=$this->News_Model->breaking_news1();
		$newscss=array();
		$id=$this->uri->segment(3,0);
		$cat_id=$this->uri->segment(4,0);
		$thisvideo=$this->Video_Model->getvideoname($id);
		//print_r($thisvideo);
		$video_cat= $this->Video_Model->getvideocategeories();
		$more=$this->News_Model->more_news();
		//video player
		$this->load->library('flash_video');
		$config['id'] = 'n0';
		$config['height'] = '350';
		$config['width']  = '560';
		$config['autostart'] = 'true'; 
		$config['file'] = base_url().'assets/videos/video'.$id.'.flv';//file full path
		$config['skin'] = 'swift'; 
		$config['previewimage']	= base_url().'assets/videos/image_preview/image'.$id.'.jpg';
		$this->flash_video->initialize($config);
		$jslinks = $this->flash_video->getcode();
		
		$more=$this->News_Model->more_news();
		 
		 $query=" from videos where video_cat_id=$cat_id order by no_of_views desc ";
		 $a =base_url().'video/index/'.$id.'/'.$cat_id;
		 $this->load->library('paginationnew');$this->paginationnew->start = ($this->uri->segment(5)) ? $this->uri->segment(5) : '0';
    	 $this->paginationnew->limit =12;
         $this->paginationnew->select_what = '*';
         $this->paginationnew->nbItems = $this->Video_Model->count_videos($cat_id);
         $this->paginationnew->add_query = $query;
         $this->paginationnew->filePath ='javascript:loadNews(\''.$cat_id.'\',\''.$a;   
   		 $result = $this->paginationnew->getQuery(TRUE);
   		
   		 $topvideos=$result->result();
   		 $paginate = $this->paginationnew->paginate();
   		//print_r( $hotvideos);
   		 $paginate = $this->paginationnew->paginate(); 
	 	//bread_crumb
	 	$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['5']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		
		$data=array(
		         'more'         =>  $more,
				'newscss'		=>	$newscss,
				'type'			=>	$video_cat,
				'paginate'		=>	$paginate,
				'bread_crumb'	=>	$bread_crumb,
				'videoplay'		=>	$jslinks,
				'topvideos' 	=>	$topvideos,
				'thisvideo'		=>	$thisvideo,
				'paginate'		=>	$paginate,
				'breaking'		=>	$breaking
		);
		
		 $this->load->view('video_play',$data);
	}
}
?>