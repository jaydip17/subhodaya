<?php
class Subhodaya extends Controller {
	var $layout = 'default'; 
	function Subhodaya(){
		parent::Controller();
		$this->load->library('Home', 'home');
		$this->lang->load('telugu', 'telugu');
		$this->load->helper(array('form', 'url','language'));
				//$this->load->language('form_validation_lang');
	}
	function index(){
		//for telugu content
		$cini_vishesm=$this->lang->line('cini_vishesm');
		$cini_pukarlu=$this->lang->line('cini_pukarlu');
		//news
		$news_rasriyam=$this->lang->line('news_rasriyam');
		$news_jathiyam=$this->lang->line('news_jathiyam');
		$news_antharja=$this->lang->line('news_antharja');
		$news_kridalu=$this->lang->line('news_kridalu');
		//videos
		$videos=$this->lang->line('videos');
		//greetings
		$greetings=$this->lang->line('greetings');
		//gallery
		$photo_gallery=$this->lang->line('photo_gallery');
		//mahila
		$mahila=$this->lang->line('mahila');
		//sahithi
		$sahithi=$this->lang->line('sahithi');
		//home_blocks
		$ardikam_block = $this->home->right_block($this->lang->line('news_ardikam'));
		$Bhavisham_block = $this->home->right_block($this->lang->line('bavishyam'));
		$srugaram_block = $this->home->right_block($this->lang->line('srungaram'));
		$special_block = $this->home->left_block($this->lang->line('subh_spec'));
		$songs_block = $this->home->songs_block($this->lang->line('sangitham'));
		$reviews_block = $this->home->reviews_block($this->lang->line('reviews'));
		$middle_block = $this->home->middle_block($this->lang->line('eenati_vishe'));
		$home_poll = $this->home->home_poll($this->lang->line('homepoll'));
		
		/*$news_type7=$this->News_Model->get_newstype1(7);
		$active_news=$this->News_Model->active_news(2);
		$active_news1=$this->News_Model->active_news(1);
		$news_type4=$this->News_Model->get_newstype1(4);
		$cinema_type2=$this->Cinema_Model->get_activenews1(2);
		$cinema_type1=$this->Cinema_Model->get_activenews1(1);
		$more=$this->News_Model->more_news();
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=4);
		$newspoll=$this->Poll_Model->get_newspolls($type=4);
		$sahithi_details=$this->Sahithi_Model->active_sahithi(1,$type='home');
		$mahila_details=$this->Mahila_Model->active_mahila(1,$type='home');
		$mahila_details_yoga=$this->Mahila_Model->active_mahila(4,$type='home');

	    $greetings1=$this->Greeting_Model->get_main_greetings(1);
		$greetings1=$this->Greeting_Model->get_main_greetings(1);
        $home_stories=$this->Sahithi_Model->get_home_stories($type=2);
		$images=array();
		$gallery_maincategeories = $this->Gallery_Model->get_categeory($active=1);

		
		if(!empty($gallery_maincategeories))//if atleast one main categeory exists..
		{
			
		  foreach($gallery_maincategeories as $item)
		  {
			$subcategeories[$item->id]=$this->Gallery_Model->subcat($item->id);
		  }
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
	    	
		$activenews=$this->News_Model->active_news1();
		$gall_topviews=$this->Gallery_Model->top_views();
 
	    //home page 3 videos from three recent categeories
	    $this->load->Model('Video_Model');
	   
	     $videos=$this->Video_Model->get_videos('active',2);
	   	  
	     $video_result=$videos->result();
	     // subhodaya special news
	     $special_news=$this->News_Model->get_special_news();*/
	    // print_r($special_news);
	   // $tabs=array();
		$data=array(/*'more'				=>	$more,
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
					'tabs'				=>	$tabs,
					'special_news'		=>  $special_news,*/
		
					'Bhavisham_block'	=>	$Bhavisham_block,
					'special_block'		=>  $special_block,
					'middle_block'		=>	$middle_block,
					'home_poll'			=>	$home_poll,
		//news
					'news_kridalu'		=>	$news_kridalu,
					'news_antharja'		=>  $news_antharja,
					'news_jathiyam'		=> 	$news_jathiyam,
					'news_rasriyam'		=>	$news_rasriyam,
					'ardikam_block'		=>  $ardikam_block,
		//cinema
					'srugaram_block'	=>	$srugaram_block,
					'songs_block'		=>	$songs_block,
					'reviews_block'		=>	$reviews_block,	
					'cini_pukarlu'		=>	$cini_pukarlu,
					'cini_vishesm'		=>	$cini_vishesm,
		//vidos
					'videos'			=>	$videos,
		//greetings
					'greetings'			=>	$greetings,
		//gallry
					'photo_gallery'		=>	$photo_gallery,
		//sahithi
					'sahithi'			=>	$sahithi,
		//mahila
					'mahila'			=>	$mahila,
					
					);
		$this->load->view('home',$data);
	}
	function sendmail()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('uemail', 'Email', 'required');
		$this->form_validation->set_rules('fname', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('description', 'Message', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{		
			$this->session->set_flashdata('yourname', $this->lang->line('required'));
			redirect($_POST['url']);
		}
		else
		{
			$this->load->library('email');
			$email=$_POST['email'];
			$validate=$this->email->valid_email($email);
			if($validate==0)
			{
				$this->session->set_flashdata('yourname', $this->lang->line('valid_email'));
				redirect($_POST['url']);	
			}else {
				
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
		$this->session->set_flashdata('gallery', $this->lang->line('galley_mail_succ'));
		$this->session->set_flashdata('greetings', $this->lang->line('gretting_mail_succ'));
		$this->session->set_flashdata('cinema', $this->lang->line('cinema_mail_succ'));
		$this->session->set_flashdata('news', $this->lang->line('news_mail_succ'));
		$this->session->set_flashdata('mahila', $this->lang->line('mahila_mail_succ'));
		$this->session->set_flashdata('sahithi', $this->lang->line('mahila_mail_succ'));
        redirect($_POST['url']);
	 }
	}
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