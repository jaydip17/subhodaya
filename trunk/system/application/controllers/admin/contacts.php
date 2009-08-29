<?php
class Contacts extends Controller {
	var $layout = 'admin'; 
	function Contacts()
	{
		parent::Controller();
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
		print_r($_POST);
		
		if(isset($_POST['username']))
		{
			set_time_limit(0);
			$login = $_POST['username'];
  			$password = $_POST['password'];
  			$formaction = "sample.php";
  			$this->load->plugin('grabcontacts');
  			
  			if($_POST['type']=="gmail")
  			list($names,$emails) = grabgmail($login,$password);
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
  			list($names,$emails) = grabyahoo($login,$password);
  			
  			}
  			else {
  				echo "no fdomain selected";
  			}
  			
  				   if (!eregi("@", $login))
				   {
				   		$login = $login . "@" . strtolower('gmail') . ".com";
				   }
				   
	    if(isset($_POST['page']) && $_POST['page']=="home")
		 {
			print_r($emails);
			
		
			
		 }
		else{	$data = array('login' 	=> $login,
							  'names'		=> $names,
							  'emails'	=> $emails,
						   	  'formaction'=> $formaction
			          );
		//$this->load->view('admin/contactslist',$data);

		    }
		}
	
	
   }
}
?>