<?php
class News extends Controller {
	var $layout = 'default'; 
	function News()
	{
		parent::Controller();
	}
	function index()
	{
		$more=$this->News_Model->more_news();
		$title=$this->lang->line('news_title').$more['3']->matter;
		$description=$this->lang->line('news_descrip'); 
		$photo_gallery = $this->home->photo_gallery('');
		$videos= $this->home->video_block('');
		$rasriyam= $this->news_lib->news_block($this->lang->line('news_rasriyam'));
		$jathiyam= $this->news_lib->news_block($this->lang->line('news_jathiyam'));
		$anthar= $this->news_lib->news_block($this->lang->line('news_antharja'));
		$state=$this->news_lib->news_block($this->lang->line('state_news'));
		$setier=$this->news_lib->news_left($this->lang->line('news_setier'));
		$ardikam=$this->news_lib->news_left($this->lang->line('news_ardikam'));
		$main_news=$this->news_lib->news_main('');
		$thaja_varhta=$this->News_Model->thaja_news();
		$newscss=array();
		$breaking=$this->News_Model->breaking_news1();
		/*$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							//'main' => $more['3']->matter,
							//'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);*/
		
		$data=array(
					'newscss'		  	=> $newscss,
					'photo_gallery'  	 => $photo_gallery,
					'videos'		  	=> $videos,
					'rasriyam'		  	=> $rasriyam,
					'jathiyam'		  	=> $jathiyam,
					'anthar'		  	=> $anthar,
					'state'			  	=> $state,
					'ardikam'		  	=> $ardikam,
					'setier'		 	=> $setier,
					'main_news'			=> $main_news,
					'thaja_varhta'		=> $thaja_varhta,
					'title'				=> $title,
					'description'		=> $description,
					'breaking'			=>	$breaking
		);
		$this->load->view("news_main",$data);
	}
	function details()
	{
		$newscss=array();
		$breaking=$this->News_Model->breaking_news1();
		$more=$this->News_Model->more_news();
		$type=$this->uri->segment(3);
		$title=$this->lang->line('newscat'.$type);
		//$setier=$this->news_lib->news_left($this->lang->line('news_setier'));
		$news_content=$this->news_lib->news_content($type);
		
		/*$type=$this->uri->segment(3);
		$onload = "loadNews('content','".base_url()."newslist/listview/".$type."')";
		
		$type=$this->uri->segment(3,0);
		$active_news=$this->News_Model->active_news1();
		$totel_rows=$this->News_Model->get_news($type,$count=true,$limit=0);
		$news=$this->News_Model->get_news($type,$count=false);
		$mahila_details=$this->Mahila_Model->active_mahila($type=2);
		$mahila_details1=$this->Mahila_Model->active_mahila($type=7);
		$mahila_details2=$this->Mahila_Model->active_mahila($type=3);
		$active_news1=$this->News_Model->active_news(1);
		$active_news2=$this->News_Model->active_news(2);
		$active_news3=$this->News_Model->active_news(3);
		$active_news4=$this->News_Model->active_news(4);
		$tabs=array();
		if(empty($news)){
			redirect(base_url().'news');
		}*/
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['3']->matter,
							'home' => $more['2']->matter
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		
		$data=array(
						'newscss'		  	=> 	$newscss,
						'news_content'		=> 	$news_content,
						'bread_crumb'		=>  $bread_crumb,
						'title'				=>	$title,
						'breaking'			=>	$breaking
				);
		$this->load->view("news_content",$data);
	}
	function newsdetails()
	{ 
		$breaking=$this->News_Model->breaking_news1(); 
		$more=$this->News_Model->more_news();
		$id=$this->uri->segment(3,0);
		$type=$this->uri->segment(4,0);
		$news_inner=$this->news_lib->news_inner($id,$type);
		$newscss=array();
		$result=$this->News_Model->inner_news($id);
		$heading=$result[0]->heading;
		//for subhodaya special news
	/*	$seg=$this->uri->segment(5,0);
		if($seg==1){
		$result=$this->News_Model->get_special_news();
		
			$engheading=$result['0']->eng_heading;	
			$image_path="assets/special_newsimg";
		}else
		{
			
			if(empty($result))
			{
	   		redirect(base_url().'news');
	   		}
			$engheading=$result['0']->eng_heading;	
			$image_path="assets/news";
			$heading=$result[0]->heading;
		}*/

	/*	$more=$this->News_Model->more_news();
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);*/
		$cate=$this->db->get_where('news_types', array('id' => $type));
		$newscate=$cate->result();
		if(empty($newscate)){
			redirect(base_url().'news');
		}
		/*if($seg==1){
			$comments=$this->News_Model->get_comments(0);
			$res=$this->News_Model->count_comments(0);
		}else {
			$comments=$this->News_Model->get_comments($id);
			$res=$this->News_Model->count_comments($id);
		}*/
		//print_r($comments);
	/*	$news=$this->News_Model->get_news($type,$count=false);
		$mahila_details=$this->Mahila_Model->active_mahila($type=4);
		$cinema_type5=$this->Cinema_Model->get_cinematype(5);
		$cinema_type3=$this->Cinema_Model->get_cinematype(3);
		$news_cat=$this->News_Model->get_newstype();
		$this->load->Model('Video_Model');
	    $videos=$this->Video_Model->get_videos('active',2);
	   	$video_result=$videos->result();*/
	/*   	$telegu_typing=array();
	  
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'heading' => $heading,
							'main' => $more['3']->matter,
							'home' => $more['2']->matter,
		); 		
		$bread_crumb = $this->bread_crumb->get_code($segments);*/
		//print_r($segments);	
		$title=$result[0]->eng_heading. ' | '.$heading;
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'heading' => $heading,
							'main' => $more['3']->matter,
							'home' => $more['2']->matter,
		); 	
		//print_r($segments);	
		$bread_crumb = $this->bread_crumb->get_code($segments);
		
		$data=array(
				'news_inner'		=>	 $news_inner,
				'newscss'			=>	 $newscss,
				'bread_crumb' 		=> 	 $bread_crumb,
				'title'				=>	$title,
				'breaking'			=>	$breaking
				);	
		$this->load->view('news_inner',$data);
	}
	function comments()
	{
		
			$name=$this->input->post('name');
			$message=$this->input->post('message');
			$newsid=$this->input->post('newsid');
			$current_url=$this->input->post('url');
			$type=$this->input->post('type');
			 $data=array(
			 		'news_type'	 => $type,
			 		'newsid' => $newsid,
			 		'name'   => $name,
			 		'comment'=> $message,
			 );
			$result=$this->db->insert('comments',$data);
			if($result==1){
				redirect($current_url);
			}
	}
	function statenews()
	{ 
		$breaking=$this->News_Model->breaking_news1(); 
		$more=$this->News_Model->more_news();
		$id=$this->uri->segment(3,0);
		$type=$this->uri->segment(4,0);
		$news_inner=$this->news_lib->state_inner($id,$type);
		$newscss=array();
		$result=$this->News_Model->state_inner($id);
		//print_r($result);
		$heading=$result[0]->heading;	
		$title=$result[0]->eng_heading. ' | '.$heading;
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'heading' => $heading,
							'main' => $this->lang->line('nagaram'),
							'home' => $more['2']->matter,
		); 		
		//print_r($segments);
		$bread_crumb = $this->bread_crumb->get_code($segments);
		//print_r($bread_crumb);
		$data=array(
				'news_inner'		=>	 $news_inner,
				'newscss'			=>	 $newscss,
				//'bread_crumb' 		=> 	 $bread_crumb,
				'title'				=>	$title,
				'breaking'			=>	$breaking
				);	
		$this->load->view('news_inner',$data);
	}
	function states()
	{
		
		$tabs_block=$this->news_lib->states_block();
			$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							//'main' => $more['3']->matter,
							//'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		$data=array(
			'tabs_block' =>$tabs_block,
			'bread_crumb'=>$bread_crumb
		);
		
		$this->load->view('tab_view',$data);	
	}
}
?>