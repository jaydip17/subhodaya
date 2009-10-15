<?php
class Subhodaya extends Controller {
	var $layout = 'default'; 
	function Subhodaya(){
		parent::Controller();
				$this->lang->load('telugu', 'telugu');
	}
	function index(){
 		
		
		$news_type7=$this->News_Model->get_newstype1(7);
		$active_news=$this->News_Model->active_news(2);
		$active_news1=$this->News_Model->active_news(1);
		$news_type4=$this->News_Model->get_newstype1(4);
		$cinema_type2=$this->Cinema_Model->get_activenews1(2);
		//print_r($cinema_type2);
		$cinema_type1=$this->Cinema_Model->get_activenews1(1);
		$more=$this->News_Model->more_news();
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=4);
		$newspoll=$this->Poll_Model->get_newspolls($type=4);
		$sahithi_details=$this->Sahithi_Model->active_sahithi(1,$type='home');
		//print_r($sahithi_details);
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
		//print_r($gallery_maincategeories);
		
		if(!empty($gallery_maincategeories))//if atleast one main categeory exists..
		{
			
		  foreach($gallery_maincategeories as $item)
		  {
			$subcategeories[$item->id]=$this->Gallery_Model->subcat($item->id);
		  }
	 // print_r($subcategeories);
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
	   //print_r($images);
	    	
		$activenews=$this->News_Model->active_news1();
		$gall_topviews=$this->Gallery_Model->top_views();
		//print_r($gall_topviews); 
	    //home page 3 videos from three recent categeories
	    $this->load->Model('Video_Model');
	   
	     $videos=$this->Video_Model->get_videos('active',2);
	   	  
	     $video_result=$videos->result();
	    //$breadcrumb= $this->breadcrumb->generate();
	    //print_r($breadcrumb); 
	    $tabs=array();
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
					'tabs'				=>	$tabs
					);
		$this->load->view('home',$data);
	}
	function sendmail()
	{
		if(isset($_POST['send']))
		{
		$to = $_POST['email'];
		if(isset($_POST['heading']))
		$heading= $_POST['heading'];
		else $heading='';
		
        $subject = "[SUBHODAYA.COM] ".$heading;
		if(isset($_POST['subject']))
		{
			$subject .= strip_tags($_POST['subject']);
		}
		if(isset($_POST['type']))
		{
			$type =  $_POST['type'];
		}
		else
		{
			$type ="Article";
		}
		if(isset($_POST['name'])){
			$from_name=$_POST['name'];
		}else{
			$from_name='Subhodaya';
		}
		if(isset($_POST['umail'])){
			$from=$_POST['umail'];
		}else{
			$from='dontreply@subhodaya.com';
		}
//		if($type=="Article")
//		{
//        $message= "Dear ".$_POST['fname'].".. \n\n Your friend ".$_POST['name']." sent u an article on shubhodaya \n\n".$_POST['description'];
//        $message.="\n";
//        $message.= "To read this article follow the below link.\n".$_POST['url'];
//		}
//		else 
//		{
//		$message= "Dear ".$_POST['fname'].".. \n\n Your friend ".$_POST['name']." sent u an article on shubhodaya \n\n".$_POST['description'];
//        $message.="\n";
//        $message.= "To read this article follow the below link.\n".$_POST['url'];
//		}
//		
		switch ($type)
		{
			case 'Article' : 
				$message= "Dear ".$_POST['fname'].".. \n\n Your friend ".$_POST['name']." sent u an article on subhodaya \n\n".$_POST['description'];
        		$message.="\n";
        		$message.= "To read this article follow the below link.\n".$_POST['url'];
        				break;
			case 'Gallery' :
				$message= "Dear ".$_POST['fname'].".. \n\n Your friend ".$_POST['name']." sent u an image on subhodaya \n\n".$_POST['description'];
		        $message.="\n";
		        $message.= "To view this image follow the below link.\n".$_POST['url'];
		        		break;
			case 'Greeting' :
				$message= "Dear ".$_POST['fname'].".. \n\n Your friend ".$_POST['name']." sent u an greeting on subhodaya \n\n".$_POST['description'];
		        $message.="\n";
		        $message.= "To view this greeting follow the below link.\n".$_POST['url'];
		        		break;
        
		}
        $message.="\n\n\nRegards.\n Subhodaya Team.";
        $headers = "From: subhodaya \r\n".
               "Reply-To: dontreply@subhodaya.com"; 
        $this->send_mail($to,$subject,$message,$from,$from_name);
//        if( mail($to,$subject,$message,$headers))
//        $status= "1";
//        else
//        $status= "-1";
		}
		$status=1;
		$this->session->set_flashdata('gallery', $this->lang->line('galley_mail_succ'));
		$this->session->set_flashdata('greetings', $this->lang->line('gretting_mail_succ'));
		$this->session->set_flashdata('cinema', $this->lang->line('cinema_mail_succ'));
		$this->session->set_flashdata('news', $this->lang->line('news_mail_succ'));
		$this->session->set_flashdata('mahila', $this->lang->line('mahila_mail_succ'));
		$this->session->set_flashdata('sahithi', $this->lang->line('mahila_mail_succ'));
        redirect($_POST['url'].'/'.$status);
	 }
	 function send_mail($to,$subject,$message,$from,$from_name)
	 {
	 	$data = array (
	 					'message' => $message,
	 	);
	 	$this->load->library('email');
		$this->email->clear();
		$this->email->from($from, $from_name);
		$this->email->to($to);
		//$this->email->cc('another@another-example.com');
		//$this->email->bcc('them@their-example.com');
		$html_message  = $this->load->view('email_layout/invitation_friend',$data,TRUE);
		$this->email->subject($subject);
		$this->email->message($html_message);
		
		$this->email->send();
		return true;
	 }
}
?>