<?php
class Videos extends Controller {
	var $layout = 'default';
	function Videos()
	{
		parent::Controller();
	}
	
	
function index()
	{
		
		
		$this->load->library('Youtube', 'youtube');
		$breaking=$this->News_Model->breaking_news1();
		$newscss=array();
		$more=$this->News_Model->more_news();
		$video_cat= $this->Videos_Model->getvideocategeories();
		$latestvideos = $this->Videos_Model->get_videos('latest',24);
		$title=$this->lang->line('video_title').$more['5']->matter;
		$description=$this->lang->line('video_descrip');
		//print_r($latestvideos);
		$id=$this->uri->segment(3,0);
		
		//$this->Videos_Model->increase_viewcount($id);
		/*$query=" from videos where id=$id order by insert_date desc ";
		 $a =base_url().'video/index/'.$id;
		 $this->load->library('paginationnew');$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	 $this->paginationnew->limit =24;
         $this->paginationnew->filePath ='javascript:loadNews(\''.$id.'\',\''.$a;
      
         $this->paginationnew->select_what = '*';
         $this->paginationnew->nbItems = $this->Videos_Model->count_videos($id);
         $this->paginationnew->add_query = $query;
            
   		 $result = $this->paginationnew->getQuery(TRUE);
   		 $hotvideos=$result->result();
   		 $paginate = $this->paginationnew->paginate();*/
		
		//$relist = $this->Videos_model->get_vlist($video_cat_id,null);
		$re_list = $latestvideos;
		
			
		foreach ($re_list as $row)
			{
				$config['id'] = $row->video_id;
				$this->youtube->initialize($config);
				$re_res[] = array(	'image' 		=> $this->youtube->getImage(),
									'title'			=> $row->title,
				                    'video_name'	=> $row->video_name,
									'cat_id'		=> $row->video_cat_id,
									'description'	=> $row->description,
									'duration'		=> $row->duration,
									'no_of_views'	=> $row->no_of_views,
									'id'			=> $row->id,
									'yt_id'			=> $row->video_id,
									'on_date'		=> date($this->config->item('date_format'),$row->created_date),
									);
				
				
				
			}
			
		 $data=array(
			'newscss'		=>	$newscss,
			'type'			=>	$video_cat,
			'latestvideos'	=>	$latestvideos,
			'title'			=>	$title,
			'description'	=>	$description,
			'breaking'		=>	$breaking,
		   //  'paginate'   =>  $paginate
		   're_res' 		    => $re_res,
		);
		
		$this->load->view('video_view',$data);
	}
	
	
function content()
	{
		
		$breaking=$this->News_Model->breaking_news1();
		$newscss=array();
		$id=$this->uri->segment(3,0);
		//$this->Videos_Model->increase_viewcount($id);
		$this->load->library('Youtube', 'youtube');
    	$latestvideos = $this->Videos_Model->get_videocat($id);
    	 
    	$video_cat= $this->Videos_Model->getvideocategeories();
		//$video_cat_id =$seg3= $this->uri->segment(3);
		//$cat_id=$this->uri->segment(4,0);
		//$videocategeory=$this->Videos_Model->get_categeory();
		//$video_cat_id = $this->Videos_Model->get_videos('video_cat_id',24);
		//$clist = $this->Videos_Model->get_videocat($id);
		//$c_list = $clist->result();
		//print_r($cat_video);
		$cat_video=$video_cat;
		
	foreach ($latestvideos as $row)
			{
				$config['id'] = $row->video_id;
				$this->youtube->initialize($config);
				$re_res[] = array(	'image' 		=> $this->youtube->getImage(),
									'title'			=> $row->title,
				                    'video_name'	=> $row->video_name,
									'cat_id'		=> $row->video_cat_id,
									'description'	=> $row->description,
									'duration'		=> $row->duration,
									'no_of_views'	=> $row->no_of_views,
									'id'			=> $row->id,
									'yt_id'			=> $row->video_id,
									'on_date'		=> date($this->config->item('date_format'),$row->created_date),
									);
					
			}
		
		
		
		/*$id=$this->uri->segment(3,0);
		 $query=" from videos_list where video_cat_id=$id order by insert_date desc ";
		 $a =base_url().'video/index/'.$id;
		 $this->load->library('paginationnew');$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	 $this->paginationnew->limit =24;
         $this->paginationnew->filePath ='javascript:loadNews(\''.$id.'\',\''.$a;
      
         $this->paginationnew->select_what = '*';
         $this->paginationnew->nbItems = $this->Videos_Model->count_videos($id);
         $this->paginationnew->add_query = $query;
            
   		 $result = $this->paginationnew->getQuery(TRUE);*/
   		// $hotvideos=$result->result();
   		 //$paginate = $this->paginationnew->paginate();
   		// print_r($hotvideos);
		$data=array(
			'newscss'		=>	$newscss,
			'type'			=>	$video_cat,
			//'paginate'		=>	$paginate,
		//'latestvideos'		=>  $c_list,
			'breaking'		=>	$breaking,
		    're_res'        =>$re_res
		);
		$this->load->view('video_view',$data);
	}
	
	
function playvideo()
	{
		//$offset = 0;
    	//$limit = 48;
    	//$uid=24;
    	$this->load->library('Youtube', 'youtube');
		$seg3= $this->uri->segment(3);
		$seg4= $this->uri->segment(4);
		$v_e_id =null;
    	if($seg3==null && $seg4==null){
			$v_list = $this->Videos_Model->get_vlist('null');
		}
		if($seg3!=null){
			$v_list = $this->Videos_Model->get_vlist($seg3);
		}
		if($seg4!=null){
			foreach ($v_list as $row)
			{	
				if($row->id==$seg4){
					$v_e_id = $row->video_id;
				}
			}
		}
		
		foreach ($v_list as $row)
			{
				$config['id'] = $row->video_id;
				$this->youtube->initialize($config);
				$rel_title = $row->title;
				$cat_res[] = array(	'image' 		=> $this->youtube->getImage(),
									'video_name'	=> $row->video_name,
				                    'title'	        => $row->title,
				                    'no_of_views'   => $row->no_of_views,
									'cat_id'		=> $row->video_cat_id,
									'description'	=> $row->description,
									'duration'		=> $row->duration,
									'id'			=> $row->id,
									'yt_id'			=> $row->video_id,
									'on_date'		=> date($this->config->item('date_format'),$row->created_date),
									);
			}
		if($seg4!=null){
			$te['id'] = $v_e_id;
			$this->youtube->initialize($te);
		}
		
		
		/*$top_videos = $this->Videos_Model->get_videos('top',12);
		foreach ($top_videos as $row)
			{
				$config['id'] = $row->video_id;
				$this->youtube->initialize($config);
				$cat_res[] = array(	'image' 		=> $this->youtube->getImage(),
									'title'			=> $row->title,
				                    'video_name'	=> $row->video_name,
									'cat_id'		=> $row->video_cat_id,
									'description'	=> $row->description,
									'duration'		=> $row->duration,
									'no_of_views'	=> $row->no_of_views,
									'id'			=> $row->id,
									'yt_id'			=> $row->video_id,
									'on_date'		=> date($this->config->item('date_format'),$row->created_date),
									);
				
				
				
			}
			
			
			$vlist = $this->Videos_Model->get_video(131);
			$v_list = $vlist->result();
			
			foreach ($v_list as $row)
			{
				
				$config['id'] = $row->video_id;
				$this->youtube->initialize($config);
				$rel_title = $row->title;
				$video_data[] = array('image' 		=> $this->youtube->getImage(),
									'title'			=> $row->title,
									'cat_id'		=> $row->video_cat_id,
									'description'	=> $row->description,
									'duration'		=> $row->duration,
									'id'			=> $row->id,
									'yt_id'			=> $row->video_id,
									'on_date'		=> date($this->config->item('date_format'),$row->created_date),
									);
			}	
			/*echo $this->youtube->getEmbededCode();
			print_r($full_res);
			exit;*/
		
    	
		$breaking=$this->News_Model->breaking_news1();
		$newscss=array();
		$id=$this->uri->segment(3,0);
		$cat_id=$this->uri->segment(4,0);
	    $thisvideo=$this->Videos_Model->getvideoname($cat_id);
		//print_r($thisvideo);
		$this->Videos_Model->increase_viewcount($cat_id);
		//print_r($thisvideo);
		$video_cat= $this->Videos_Model->getvideocategeories();
		$more=$this->News_Model->more_news();
		
		 
		 $query=" from videos_list where video_cat_id=$cat_id order by no_of_views desc ";
		 $a =base_url().'video/playvideo/'.$id.'/'.$cat_id;
		 $this->load->library('paginationnew');$this->paginationnew->start = ($this->uri->segment(5)) ? $this->uri->segment(5) : '0';
    	 $this->paginationnew->limit =12;
         $this->paginationnew->select_what = '*';
         $this->paginationnew->nbItems = $this->Videos_Model->count_videos($cat_id);
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
				//'videoplay'		=>	$jslinks,
				//'topvideos' 	=>	$top_videos
				'thisvideo'		=>	$thisvideo,
				'paginate'		=>	$paginate,
				'breaking'		=>	$breaking,
				'top_viewed' 	=>	$cat_res,	
		);
		
		 $this->load->view('video_play',$data);
	}
	
	
}

?>