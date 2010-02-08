<?php
class Subhodaya extends Controller {
	var $layout = 'default'; 
	function Subhodaya()
	{
		parent::Controller();
	}
	function index(){
		$newspoll=$this->Poll_Model->get_newspolls($type=4,1);
		//print_r($newspoll);
		$tabscss=array();
		//for telugu content
		$more=$this->News_Model->more_news();
		//gallery
		$photo_gallery=$this->lang->line('photo_gallery');
	
		//home_blocks
		$ardikam_block = $this->home->right_block($this->lang->line('news_ardikam'));
		$Bhavisham_block = $this->home->bavishyam_block($this->lang->line('bavishyam'));
		$srugaram_block = $this->home->right_block($this->lang->line('srungaram'));
		$special_block = $this->home->left_block($this->lang->line('subh_spec'));
		$songs_block = $this->home->songs_block($this->lang->line('sangitham'));
		$reviews_block = $this->home->reviews_block($this->lang->line('reviews'));
		$middle_block = $this->home->middle_block($this->lang->line('eenati_vishe'));
		$home_poll = $this->home->home_poll($this->lang->line('homepoll'));
		$breaking=$this->News_Model->breaking_news1();
		$rasriyam_block= $this->home->tabs_block($this->lang->line('news_rasriyam'));
		$jathiyam_block= $this->home->tabs_block($this->lang->line('news_jathiyam'));
		$antharja_block= $this->home->tabs_block($this->lang->line('news_antharja'));
		$kridalu_block= $this->home->tabs_block($this->lang->line('news_kridalu'));
		$pukarlu_block= $this->home->tabs_block($this->lang->line('cini_pukarlu'));
		$vishesm_block= $this->home->tabs_block($this->lang->line('cini_vishesm'));
		$gallery_block= $this->home->photo_gallery($this->lang->line('photo_gallery'));
		$videos_block= $this->home->video_block($this->lang->line('videos'));
		$greetings_block= $this->home->greeting_block($this->lang->line('greetings'));
		$mahila_block= $this->home->tabs_block($this->lang->line('mahila'));
		$sahithi_block= $this->home->tabs_block($this->lang->line('sahithi'));
		$data=array(
					'tabscss'			=>	$tabscss,
					'Bhavisham_block'	=>	$Bhavisham_block,
					'special_block'		=>  $special_block,
					'middle_block'		=>	$middle_block,
					'home_poll'			=>	$home_poll,
		//cinema
					'srugaram_block'	=>	$srugaram_block,
					'songs_block'		=>	$songs_block,
					'reviews_block'		=>	$reviews_block,	

						'more'   	 	=>  $more,
					'breaking'			=>	$breaking,
					'rasriyam_block'	=>	$rasriyam_block,
					'jathiyam_block'	=>	$jathiyam_block,
					'antharja_block'	=>	$antharja_block,
					'kridalu_block'     =>  $kridalu_block,
					'pukarlu_block'		=>	$pukarlu_block,
					'vishesm_block'		=>  $vishesm_block,
					'gallery_block'		=>  $gallery_block,
					'videos_block'		=>	$videos_block,
					'greetings_block'	=>	$greetings_block,
					'mahila_block'		=>	$mahila_block,
					'sahithi_block'		=>	$sahithi_block,
					'ardikam_block'		=>	$ardikam_block,
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