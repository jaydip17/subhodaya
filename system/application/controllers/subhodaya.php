<?php
class Subhodaya extends Controller {
	var $layout = 'default'; 
	function Subhodaya(){
		parent::Controller();
	}
	function index(){
		$news_type7=$this->News_Model->get_newstype1(7);
		$active_news=$this->News_Model->active_news(2);
		$active_news1=$this->News_Model->active_news(7);
		$news_type4=$this->News_Model->get_newstype1(4);
		$cinema_type2=$this->Cinema_Model->get_cinematype(2);
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$more=$this->News_Model->more_news();
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=4);
		$newspoll=$this->Poll_Model->get_newspolls($type=4);
		$sahithi_details=$this->Sahithi_Model->active_sahithi(1,$type='home');
		//mahila
		$mahila_details=$this->Mahila_Model->active_mahila(1,$type='home');
		$mahila_details_yoga=$this->Mahila_Model->active_mahila(4,$type='home');
		//print_r($mahila_details_yoga);
		//echo $mahila_details_yoga['0']->id;
	    $greetings1=$this->Greeting_Model->get_main_greetings(1);
		$greetings1=$this->Greeting_Model->get_main_greetings(1);
        //$details=$this->Gallery_Model->get_cateimage(11);
        $home_stories=$this->Sahithi_Model->get_home_stories($type=2);
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
	    		foreach ($eachone as $row)
	    		{
	 				$images[$row->id]=$this->Gallery_Model->getimage1($row->id);
	    		}
	    	}
	    	if($count>=3)
	 				break;
	    	$count++;
		   }
	    }
	   // print_r($images);
	    	
		$activenews=$this->News_Model->active_news1();
		$gall_topviews=$this->Gallery_Model->top_views();
		//print_r($activenews);
	    //home page 3 videos from three recent categeories
	    $this->load->Model('Video_Model');
	   
	     $videos=$this->Video_Model->get_videos('active',2);
	   	  
	     $video_result=$videos->result();
	    //$breadcrumb= $this->breadcrumb->generate();
	    //print_r($breadcrumb); 
		$data=array('more'				=>	$more,
		            'news_type7'		=>	$news_type7,
					'news_type4'		=>	$news_type4,
					'cinema_type2'		=>	$cinema_type2,
					'cinema_type1'		=>	$cinema_type1,
					'newspoll'			=>	$newspoll,
					'yes_poll'			=>	$yes_poll,
					'active_news'		=>	$active_news,
		            'active_news1'		=>	$active_news1,
		            'sahithi_details'	=>	$sahithi_details,
		            'mahila_details'	=>	$mahila_details,
					'greetings1'		=>	$greetings1,
		            'home_stories' 		=>	$home_stories,
					'images'			=>	$images,
		            'video_result'      =>  $video_result,
					'images'			=>	$images,
					'activenews'		=>  $activenews,
					'gall_topviews'		=>  $gall_topviews,
					'mahila_details_yoga'	=>$mahila_details_yoga,
					);
		$this->load->view('home',$data);
	}
	function sendmail()
	{
		if(isset($_POST['send']))
		{
		$to = $_POST['email'];
		$heading= $_POST['heading'];
		
        $subject = "[SUBHODAYA.COM]".$heading;
		if(isset($_POST['subject']))
		{
			$subject .= $_POST['subject'];
		}
        $message= "Dear ".$_POST['fname'].".. \n\n Your friend ".$_POST['name']." sent u an article on shubhodaya \n\n".$_POST['description'];
        $message.="\n";
        $message.= "To read this article follow the below link.\n".$_POST['url'];
        $message.="Thanks and Regards.\n Shubhodaya Team.";
        $headers = "From: subhodaya \r\n".
               "Reply-To: dontreply@subhodaya.com"; 
        if( mail($to,$subject,$message,$headers))
        $status= "1";
        else
        $status= "-1";
		}
        redirect($_POST['url'].'/'.$status);
		
     
	    }


}
?>