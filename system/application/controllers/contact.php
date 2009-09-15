<?php
class contact extends Controller {
	function contact(){
		parent::Controller();
		$this->load->helper('email');
	}
	function index(){
		$data = array('type'=> 'contact',
		              'url' => 'contact/send_contact',
		              'onsubmit' =>'feedback_validate');
		$this->load->view('advertise',$data);
	}
	function feedback(){
		$data = array('type'=> 'feedback',
		              'url' => 'contact/send_contact',
		              'onsubmit' =>'feedback_validate');
		$this->load->view('advertise',$data);
	}
	function advertise(){
		$data = array('type'=> 'advertise',
		              'url' => 'contact/send_advertise',
		              'onsubmit' =>'advertise_validate');
		$this->load->view('advertise',$data);
	}
	function send_advertise()
		{
			if(!empty($_POST['mailid'])){
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
		else{
			redirect(base_url());
		}
		redirect(base_url());
	}
	function send_contact()
	{
		if(!empty($_POST['mailid'])){
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
		else{
			redirect(base_url());
		}
		redirect(base_url());
			
	}

}
?>