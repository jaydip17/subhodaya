<?php
class Contact extends Controller {
	function contact(){
		parent::Controller();
		$this->load->helper('email');
	}
	function index(){
		$this->load->view('contact');
	}
	function feedback(){
		$this->load->view('feedback');
	}
	function advertise(){
		$this->load->view('advertise');
	}
	function send_advertise()
		{
		$company=$_POST['company'];
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$mailid=$_POST['mailid'];
		$city=$_POST['city'];
		$location=$_POST['location'];
		$message=$_POST['message'];
		
		$message1='Company:'.$company.',<br>Name:'.$name.',<br>phone:'.$phone.',<br>Email_id:'
					.$mailid.',<br>City:'.$city.',<br>Location for add:'.$location.',<br>Message:'.$message.'.';
		
				$this->load->library('email');
				$this->email->from('www.subhodaya.com', $name);
				$this->email->to('admin@subhodaya.com');
				//$this->email->cc('another@another-example.com');
				//$this->email->bcc('them@their-example.com');
				
				$this->email->subject('For advertise');
				$this->email->message($message1); 
				//$this->email->initialize($config);
				$this->email->send();
				echo $this->email->print_debugger();
		
	}
	function send_contact()
	{
		$company=$_POST['company'];
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$mailid=$_POST['mailid'];
		$city=$_POST['city'];
		//$location=$_POST['location'];
		$message=$_POST['message'];
		
		$message1='Company:'.$company.',<br>Name:'.$name.',<br>phone:'.$phone.',<br>Email_id:'
					.$mailid.',<br>City:'.$city.',<br>Message:'.$message.'.';
		
				$this->load->library('email');
				$this->email->from('www.subhodaya.com', $name);
				$this->email->to('admin@subhodaya.com');
				//$this->email->cc('another@another-example.com');
				//$this->email->bcc('them@their-example.com');
				
				$this->email->subject('For advertise');
				$this->email->message($message1); 
				//$this->email->initialize($config);
				$this->email->send();
				echo $this->email->print_debugger();
			
	}

}
?>