<?php
class Cinema extends Controller {
	var $layout='default';
	function Cinema(){
		parent::Controller();
	}
	function index(){
		$more=$this->News_Model->more_news();
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$cinema_type2=$this->Cinema_Model->get_cinematype(2);
		$cinema_type3=$this->Cinema_Model->get_cinematype(3);
		$cinema_type4=$this->Cinema_Model->get_cinematype(4);
		$cinema_type5=$this->Cinema_Model->get_cinematype(5);
		$cinema_type6=$this->Cinema_Model->get_cinematype(6);
		$cinemapoll=$this->Poll_Model->get_newspolls($type=5);
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=5);
	$images=array();
		$gallery_maincategeories = $this->Gallery_Model->get_categeory($active=1);
		
		if(!empty($gallery_maincategeories))//if atleast one main categeory exists..
		{
			
		  foreach($gallery_maincategeories as $item)
		  {
			$subcategeories[$item->id]=$this->Gallery_Model->subcat($item->id);
		  }
		//  print_r($subcategeories);
		 	$count = 1;
	       foreach($subcategeories as $item)
	       {  
	       	$eachone=$item->result();
	    	if(!empty($eachone))
	    	{
	    		foreach ($eachone as $row){
	    			//print_r($row);
	    			
	 				$images[$row->id]=$this->Gallery_Model->getimage1($row->id);
	 				
	 				
	    		}
	 		
	    	}
	    	if($count >=3)
	 				break;
	 				$count++;
		   }
	    }
	   // print_r($images);
	    $this->load->Model('Video_Model');
	    $videos=$this->Video_Model->get_videos('latest',4);
	   	$video_result=$videos->result();
	    $gall_topviews=$this->Gallery_Model->top_views();
		$data=array('cinema_type1'		=>	$cinema_type1,
					'cinema_type2'		=>	$cinema_type2,
					'cinema_type3'		=>	$cinema_type3,
					'cinema_type4'		=>	$cinema_type4,
					'cinema_type5'		=>	$cinema_type5,
					'cinema_type6'		=>	$cinema_type6,
						'more'			=>	$more,
						'cinemapoll'	=>	$cinemapoll,
						'yes_poll'		=>	$yes_poll,
						'onload' 		=> "display_text_1()",
						'images'		=> $images,
						'gall_topviews' => $gall_topviews,
		          'video_result'     =>  $video_result
		);
		$this->load->view('cinema_view',$data);
	}
	function details(){
		$type=$this->uri->segment(3);
		$onload = "loadNews('content','".base_url()."cinemalist/listview/".$type."')";
		$more=$this->News_Model->more_news();
		$id=$this->uri->segment(3,0);
		$result=$this->Cinema_Model->get_all($id);
		//active news for side heaidngs
		$active_news=$this->Cinema_Model->get_activenews();
		//active news for tabs
		$active_news1=$this->Cinema_Model->get_activenews1(1);
		$active_news2=$this->Cinema_Model->get_activenews1(5);
		$active_news3=$this->Cinema_Model->get_activenews1(3);
		$active_news4=$this->Cinema_Model->get_activenews1(4);
		//greetings
		$greetings4=$this->Greeting_Model->get_main_greetings(4);
		//sahithi 
		$sahithi=$this->Sahithi_Model->get_home_stories(2);
		$sahithi_cat=$this->Sahithi_Model->get_sahithitype();
		//print_r($sahithi_cat);
		$data=array('more'			=>	$more,
					'result'		=>	$result,
					'onload' 		=> 	$onload,
					'active_news'	=>	$active_news,
					'active_news1'  =>  $active_news1,
					'active_news2'	=>  $active_news2,
					'active_news3'	=>  $active_news3,
					'active_news4'	=>	$active_news4,
					'greetings4'	=>  $greetings4,
					'sahithi'       =>  $sahithi,
					'sahithi_cat'	=>	$sahithi_cat);
		$this->load->view('cinema_content',$data);
	}
	function inner(){
		$more=$this->News_Model->more_news();
		$news_type4=$this->News_Model->get_newstype1(4);
		$id=$this->uri->segment(3,0);
		$type=$this->uri->segment(4,0);
		$result1=$this->Cinema_Model->get_all($type);
		$result=$this->Cinema_Model->inner($id);
		$mahila_details=$this->Mahila_Model->active_mahila(6);
		$news_type2=$this->News_Model->get_newstype1(2);
		$mahila_details1=$this->Mahila_Model->active_mahila(8);
		$cinema_cat=$this->Cinema_Model->get_cinemanewstype();
		
		$this->load->Model('Video_Model');
	    $videos=$this->Video_Model->get_videos('active',2);
	   	$video_result=$videos->result();
		
		$data=array('more'   		 => $more,
					'result' 		 => $result,
					'news_type4'	 => $news_type4,
					'mahila_details' =>	$mahila_details,
					'cinema_cat'	 => $cinema_cat,
					'news_type2'	 =>	$news_type2,
					'mahila_details1'=>	$mahila_details1,
					'result1'		 => $result1,
		          'video_result'     =>  $video_result
	
					);
		$this->load->view('cinema_inner',$data);
	}
	
}
?>