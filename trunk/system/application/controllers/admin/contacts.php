<?php
class Contacts extends Controller {
	//var $layout = 'admin'; 
	function Contacts()
	{
		parent::Controller();
		$this->load->helper('email');
		$this->lang->load('telugu', 'telugu');
		$this->load->model('Newsletter_Model');
	}
	function index()
	{
		$temp = $this->uri->segment(4);
		if($temp==1)
		{
			$message = "<b style=\"color:red\">Invalid Login</b>";
		}
		else
		 	$message = '';
		$data = array(
						'message'		=>	$message, 
		);
		$this->load->view('admin/contactsform',$data);
	}
    function invite_friends_form()
	{
		$message = $this->session->flashdata('message');
		$data = array(//'type'=> 'advertise',
		            //  'url' => 'contact/send_advertise',
		             // 'onsubmit' =>'advertise_validate',
						'message'=> $message);
		$this->load->view('invite_friends',$data);
	}
	function message_sent()
	{
		$this->load->view('message_sent');
	}
	function import()
	{
		
		if(isset($_POST['username']))
		{
			set_time_limit(0);
			$login = $_POST['username'];
  			$password = $_POST['password'];
  			if(isset($_POST['page']))
  			{
  			$page=$_POST['page'];
  			}
  			else {
  			$page="";
  			}
  			
  			$formaction ='admin/contacts/sendmail';
  			$this->load->plugin('grabcontacts');
  			
  			if($_POST['type']=="gmail")
  			list($names,$emails) = grabgmail($login,$password,$page);
  			if($_POST['type']=="yahoo")
  			{
				$dir = './assets/csvUpload';
				$dp = opendir($dir) or die ('Fatal Error: ');
				while ($file = readdir($dp)) 
				{
					if ((eregi('.csv',$file)) && (filemtime($dir."/".$file)) < (strtotime('yesterday'))) 
					{
						$del=@unlink($dir."/".$file);
					}
				}
  			list($names,$emails) = grabyahoo($login,$password,$page);
  			
  			}
  			
  			       if (!eregi("@", $login))
				   {
				   		$login = $login . "@" . strtolower('gmail') . ".com";
				   }
				   
	    if($page=="home")
		 {
		 	$tomails="";
		 	$count=0;
		 	foreach($emails as $item)
		 	{
		 		if($count==0)
		 		{
		 		 $count++;
		 		 continue;
		 		}
		 		 $tomails.= ",".$item;
		 	  } 
		 	$subject="welcome to shubhodaya..";
		 	$message="hai".$_POST['username']."has invited you for the following website.
		 		          /n follow the below link to go to the website.\n";
		 	
		    $message.=base_url()."shubhodaya";
		    //echo "hello";
//		  if(mailto($tomails,$subject,$message))
//		  {
//		  	echo "mail sent";
//		  }
//		  else {
//		  	echo "unable to send mail";
//		  }
		   
		  redirect(base_url());
		 }
		else{	$maxin = count($emails);		
		 		for ($i=0; $i<$maxin; ++$i)
                   {
                     $emails[$i] = trim($emails[$i]);
                     if ($emails[$i]!="" && eregi("@", $emails[$i]))
                     {
                     	//$count = $this->Newsletter_Model->check_newsletter_email($emails[$i]);
          					   $emails[$i] = strtolower($emails[$i]);
          					   		$data1=array('email'=>$emails[$i]);
          							$this->db->insert('invite_emails', $data1); 		   
                     }
                   }
			
		         $data = array('login' 	=> $login,
							  'names'	=> $names,
							  'emails'	=> $emails,
						   	  'formaction'=> $formaction,
		         			  'username' => $_POST['username'],
			          );
			          //print_r($emails);
			  

			
		$this->load->view('admin/contactslist',$data);

		    }
		}
     }
     function sendmail(){
     	//$emails=$_POST['addresses'];
     	     	
     	$subhodaya=$this->lang->line('subhodaya');
	 	$com=$this->lang->line('com');
     		if(isset($_POST['addresses']))
     		{
     		$subject="[SUBHODAYA.COM] $_POST[uname] has invited to view subhodaya.com";
		 	$message="Dear Sir/Madam  \n\n Your Friend $_POST[uname] has recently viewed subhodaya.com .
		 		      \n To accept this invitation  click  the below link .\n http://www.subhodaya.com";
		 	
		 		    $data=array('message'  =>$message,
		 		    			'subhodaya'=>$subhodaya,
		 		    			'com'      => $com
		 		    
		 		    );  
		 		      
	     		$addresses=$_POST['addresses'];
	     		$this->load->library('email');
	     		$this->email->clear();
				$this->email->from('dontreply@subhodaya.com', 'Subhodaya');

				$this->email->to('admin@subhodaya.com');
				$this->email->bcc($addresses);
				$html_message  = $this->load->view('email_layout/invitation_friend',$data,TRUE);
				$this->email->subject($subject);
				$this->email->message($html_message); 
				$this->email->send();
				//echo $this->email->print_debugger();
				//exit;
				$this->session->set_flashdata('messagesent','message sent successfully to selected contacts.');
     	}
     	
     	redirect(base_url().'admin/contacts/message_sent');
     }
}
?>