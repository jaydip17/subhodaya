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
		$details=$this->News_Model->get_newstype1(1);
		$news_type2=$this->News_Model->get_newstype1(2);
		$news_type3=$this->News_Model->get_newstype1(3);
		$news_type4=$this->News_Model->get_newstype1(4);
		$news_type5=$this->News_Model->get_newstype1(5);
		$news_type6=$this->News_Model->get_newstype1(6);
		$news_type7=$this->News_Model->get_newstype1(7);
		$newspoll=$this->Poll_Model->get_newspolls($type=4);
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=4);
		$active_news1=$this->News_Model->active_news(1);
		$active_news2=$this->News_Model->active_news(2);
		$active_news3=$this->News_Model->active_news(3);
		$active_news4=$this->News_Model->active_news(4);
		
		$tabs=array();
		$current_url = current_url();
		//$navigation = array ($current_url);
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['3']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		
		$data=array('news_type1'  =>  $details,
					'news_type2'  =>  $news_type2,
					'news_type3'  =>  $news_type3,
					'news_type4'  =>  $news_type4,
					'news_type5'  =>  $news_type5,
					'news_type6'  =>  $news_type6,
					'news_type7'  =>  $news_type7,
					'more'        =>  $more,
					'newspoll'    =>  $newspoll,
					'yes_poll'    =>  $yes_poll,
					'active_news1'=>  $active_news1,
					'active_news2'=>  $active_news2,
					'active_news3'=>  $active_news3,
					'active_news4'=>  $active_news4,
					'bread_crumb' => $bread_crumb,
					'tabs'		  => $tabs	
		);
		$this->load->view("news_main",$data);
	}
	function details(){
		
		$type=$this->uri->segment(3);
		$onload = "loadNews('content','".base_url()."newslist/listview/".$type."')";
		$more=$this->News_Model->more_news();
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
		}
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['3']->matter,
							'home' => $more['2']->matter
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		//print_r($active_news4);
		$data=array(	'news'  		   =>	$news,
						'more'			   =>	$more,
						'onload'    	   => 	$onload,
						'active_news'	   =>	$active_news,
						'mahila_details'   =>   $mahila_details,
						'mahila_details1'  =>   $mahila_details1,
						'active_news1'     =>	$active_news1,
						'active_news2'	   =>	$active_news2,
						'active_news3'	   =>	$active_news3,
						'active_news4'	   =>   $active_news4,
						'mahila_details2'  =>	$mahila_details2,
						'bread_crumb' 	   =>  $bread_crumb,
						'tabs'			   =>  $tabs
						
						
						
				);
		$this->load->view("news_content",$data);
	}
	function newsdetails()
	{   
		$id=$this->uri->segment(3,0);
		//for subhodaya special news
		$seg=$this->uri->segment(5,0);
		if($seg==1){
		$result=$this->News_Model->get_special_news();
		
			$engheading=$result['0']->eng_heading;	
			$image_path="assets/special_newsimg";
			$heading=$result[0]->heading;
		}else
		{
			$result=$this->News_Model->inner_news($id);
			if(empty($result))
			{
	   		redirect(base_url().'news');
	   		}
			$engheading=$result['0']->eng_heading;	
			$image_path="assets/news";
			$heading=$result[0]->heading;
		}

		$more=$this->News_Model->more_news();
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		
		$type=$this->uri->segment(4,0);
		$cate=$this->db->get_where('news_types', array('id' => $type));
		$newscate=$cate->result();
		if(empty($newscate)){
			redirect(base_url().'news');
		}
		if($seg==1){
			$comments=$this->News_Model->get_comments($id=0);
		}else {
			$comments=$this->News_Model->get_comments($id);
		}
		
		//print_r($comments);
		$news=$this->News_Model->get_news($type,$count=false);
		$mahila_details=$this->Mahila_Model->active_mahila($type=4);
		$cinema_type5=$this->Cinema_Model->get_cinematype(5);
		$cinema_type3=$this->Cinema_Model->get_cinematype(3);
		$news_cat=$this->News_Model->get_newstype();
		$this->load->Model('Video_Model');
	    $videos=$this->Video_Model->get_videos('active',2);
	   	$video_result=$videos->result();
	   	$telegu_typing=array();
	  
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'heading' => $heading,
							'main' => $more['3']->matter,
							'home' => $more['2']->matter,
		); 		
		$bread_crumb = $this->bread_crumb->get_code($segments);
		//print_r($segments);	
		
		 //$res=$this->db->count_all('comments');	
		
		$data=array('result'   		=>   $result,
					 'more'    		=>   $more,
				'cinema_type1' 		=>   $cinema_type1,
				'mahila_details'	=>	 $mahila_details,
				'cinema_type5'		=>	 $cinema_type5,
				'cinema_type3'		=>   $cinema_type3,
				'news'				=>	 $news,
				'news_cat'			=>	 $news_cat,
		          'video_result'    => 	 $video_result,
				'bread_crumb' 		=> 	 $bread_crumb,
				'telegu_typing'		=>	 $telegu_typing,
				'engheading'		=>	 $engheading,
				'image_path'		=>	 $image_path,
				'comments'			=>	 $comments,
				'seg'				=>	 $seg
				);	
		$this->load->view('news_inner',$data);
	}
	function comments()
	{
			if(isset($_POST['email'])){
			 $email=$_POST['email'];
			 $name=$this->input->post('name');
			 $message=$this->input->post('message');
			 $newsid=$this->input->post('newsid');
			$current_url=$this->input->post('url');
			 $data=array(
			 		'newsid' => $newsid,
			 		'name'   => $name,
			 		'mailid'  => $email,
			 		'comment'=> $message,
			 		
			 );
			$result=$this->db->insert('comments',$data);
			if($result==1){
				redirect($current_url);
			}
		}
		
	}
}
?>