<?php
class Cinema extends Controller {
	var $layout='default';
	function Cinema()
	{
		parent::Controller();
		$this->load->model('admin/Flash_model');
		$this->load->library('Cinema_lib', 'cinema_lib');
		$this->lang->load('telugu', 'telugu');
	}
	function index()
	{
		$query=$this->Flash_model->get_flash_images();
		$img=$query->result();
		$newscss=array();
		$cine_news=$this->cinema_lib->cinema_block($this->lang->line('cini_news'));
		$cin_pukarlu=$this->cinema_lib->cinema_block($this->lang->line('cini_pukarlu'));
		$cin_riviews=$this->cinema_lib->cinema_block($this->lang->line('reviews'));
		$cin_shedule=$this->cinema_lib->cinema_block($this->lang->line('cini_shedul'));
		$cin_interviews=$this->cinema_lib->cinema_block($this->lang->line('interviews'));
		$cin_therachatu=$this->cinema_lib->cinema_block($this->lang->line('therachatu'));
		//print_r($img);
		/*$more=$this->News_Model->more_news();
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
	    $sprytabs=array();
	    $tabs=array();*/
	    
	   /* $current_url = current_url();
		//$navigation = array ($current_url);
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['4']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);*/
		//print_r($bread_crumb);
		$data=array(
						'onload' 		=> 	"display_text_1()",
						'img'			=> $img,
						'newscss'		=>	$newscss,
						'cin_pukarlu'	=>	$cin_pukarlu,
						'cine_news'		=>	$cine_news,
						'cin_riviews'	=>	$cin_riviews,
						'cin_shedule'	=>	$cin_shedule,
						'cin_interviews'=>	$cin_interviews,
						'cin_therachatu'=>	$cin_therachatu,
						'cine_news'		=>	$cine_news
						//'bread_crumb'  => $bread_crumb 
		);
		$this->load->view('cinema_view',$data);
	}
	function details()
	{
		$type=$this->uri->segment(3);
		$onload = "loadNews('content','".base_url()."cinemalist/listview/".$type."')";
		$more=$this->News_Model->more_news();
		$id=$this->uri->segment(3,0);
		$result=$this->Cinema_Model->get_all($id);
		if(empty($result)){
			redirect(base_url().'cinema');
		}
		//active news for side heaidngs
		$active_news=$this->Cinema_Model->get_activenews();
		//active news for tabs
		$active_news1=$this->Cinema_Model->get_activenews1(1);
		$active_news2=$this->Cinema_Model->get_activenews1(5);
		$active_news3=$this->Cinema_Model->get_activenews1(3);
		$active_news4=$this->Cinema_Model->get_activenews1(4);
		//print_r($active_news2);
		//greetings
		$greetings4=$this->Greeting_Model->get_main_greetings(4);
		//sahithi 
		$sahithi=$this->Sahithi_Model->get_home_stories(2);
		$sahithi1=$this->Sahithi_Model->get_home_stories(4);
		$sahithi_cat=$this->Sahithi_Model->get_sahithitype();
		//print_r($sahithi);
		$tabs=array();
		//$current_url = current_url();
		//$navigation = array ($current_url);
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['4']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
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
					'sahithi1'      =>  $sahithi1,
					'sahithi_cat'	=>	$sahithi_cat,
					'tabs'			=> $tabs,
					'bread_crumb'  => $bread_crumb
		);
		$this->load->view('cinema_content',$data);
	}
	function inner()
	{
		$more=$this->News_Model->more_news();
		$news_type4=$this->News_Model->get_newstype1(4);
		$id=$this->uri->segment(3,0);
		$type=$this->uri->segment(4,0);
		$result1=$this->Cinema_Model->get_all($type);
		$result=$this->Cinema_Model->inner($id);
		if(empty($result)){
			redirect(base_url().'cinema');
		}
		$engheading=$result['0']->eng_heading;
		$mahila_details=$this->Mahila_Model->active_mahila(6);
		//print_r($mahila_details);
		$news_type2=$this->News_Model->get_newstype1(2);
		$mahila_details1=$this->Mahila_Model->active_mahila(8);
		$cinema_cat=$this->Cinema_Model->get_cinemanewstype();
		
		$this->load->Model('Video_Model');
	    $videos=$this->Video_Model->get_videos('active',2);
	   	$video_result=$videos->result();
		$telegu_typing=array();
			$current_url = current_url();
		//$navigation = array ($current_url);

		$cate=$this->db->get_where('cinema_cat',array('id'=>$type));
		$cinemacate=$cate->result();
		if(empty($cinemacate)){
			redirect(base_url().'cinema');
		}
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'heading' => $result[0]->heading,
							'main' => $more['4']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		$data=array('more'   		 => $more,
					'result' 		 => $result,
					'news_type4'	 => $news_type4,
					'mahila_details' =>	$mahila_details,
					'cinema_cat'	 => $cinema_cat,
					'news_type2'	 =>	$news_type2,
					'mahila_details1'=>	$mahila_details1,
					'result1'		 => $result1,
		          'video_result'     =>  $video_result,
					'telegu_typing'	 =>	$telegu_typing,
					'bread_crumb'	 => $bread_crumb,
					'engheading'	 => $engheading
	
					);
		$this->load->view('cinema_inner',$data);
	}
	
    function mail_box(){
	 	$this->load->view('mail_box');	
	 }
}
?>