<?php
class Contacts extends Controller {
	var $layout = 'admin'; 
	function Contacts()
	{
		parent::Controller();
	}
	function index()
	{
		$this->load->view('admin/contactsform');
	}
	function import()
	{
		
		
		
		if(isset($_POST['username']))
		{
			$login = $_POST['username'];
  			$password = $_POST['password'];
  			$formaction = "sample.php";
  			$this->load->plugin('grabcontacts');
  			list($names,$emails) = grabgmail($login,$password);
  				   if (!eregi("@", $login))
				   {
				   		$login = $login . "@" . strtolower('gmail') . ".com";
				   }
			$data = array(
							'login' 	=> $login,
							'names'		=> $names,
							'emails'	=> $emails,
							'formaction'=> $formaction
			);
			$this->load->view('admin/contactslist',$data);

		}
	}
}
?>