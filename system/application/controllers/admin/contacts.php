<?php
class Contacts extends Controller {
	//var $layout = 'admin'; 
	function Contacts()
	{
		parent::Controller();
		$this->load->helper('email');
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
	function import()
	{
		if(isset($_GET['username']))
		{
			set_time_limit(0);
			$login = $_GET['username'];
  			$password = $_GET['password'];
  			if(isset($_POST['page']))
  			{
  			$page=$_POST['page'];
  			}
  			else {
  			$page="";
  			}
  			
  			$formaction ='admin/contacts/sendmail';
  			$this->load->plugin('grabcontacts');
  			
  			if($_GET['type']=="gmail")
  			list($names,$emails) = grabgmail($login,$password,$page);
  			if($_GET['type']=="yahoo")
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
		  if(mailto($tomails,$subject,$message))
		  {
		  	echo "mail sent";
		  }
		  else {
		  	echo "unable to send mail";
		  }
		   
		  redirect(base_url());
		 }
		else{	
		         $data = array('login' 	=> $login,
							  'names'		=> $names,
							  'emails'	=> $emails,
						   	  'formaction'=> $formaction
			          );
			          //print_r($emails);
			  

			
		$this->load->view('admin/contactslist',$data);

		    }
		}
     }
     function sendmail(){
     	
     	if(isset($_POST['addresses']))
     		{
     		$subject="welcome to shubhodaya..";
		 	$message="hai".$_POST['addresses']."has invited you for the following website.
		 		          /n follow the below link to go to the website.\n";
		 	
	     		$addresses=$_POST['addresses'];
	     		//print_r($addresses);
	     		//exit();
	     		$this->load->library('email');
				$this->email->from('www.subhodaya.com', 'Your Name');
				$this->email->to($addresses);
				//$this->email->cc('another@another-example.com');
				//$this->email->bcc('them@their-example.com');
				
				$this->email->subject($subject);
				$this->email->message($message); 
				//$this->email->initialize($config);
				$this->email->send();
				$this->email->print_debugger();
     	}
     	redirect(base_url());
     }
}
?>