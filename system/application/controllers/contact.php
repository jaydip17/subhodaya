<?php
class contact extends Controller {
	function contact(){
		parent::Controller();
		$this->load->helper('email');
	}
	function index(){
		$message = $this->session->flashdata('message');
		$data = array('type'=> 'contact',
				   'message'=> $message,
		              'url' => 'contact/send_contact',
		              'onsubmit' =>'feedback_validate');
		$this->load->view('contact',$data);
	}
	function feedback(){
		$message = $this->session->flashdata('message');
		$data = array('type'=> 'feedback',
		              'url' => 'contact/send_contact',
		              'onsubmit' =>'feedback_validate',
					'message'=> $message	);
		$this->load->view('feedback',$data);
	}
	function advertise(){
		$message = $this->session->flashdata('message');
		$data = array('type'=> 'advertise',
		              'url' => 'contact/send_advertise',
		              'onsubmit' =>'advertise_validate',
						'message'=> $message);
		$this->load->view('advertise',$data);
	}
	function send_advertise()
		{
			if(!empty($_POST['name'])){
				echo $_POST['name']; 
			}
			exit;
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
			if(!empty($_POST['name'])){
				$name=$_POST['name']; 
			}else {
			$name1='Enter Your name';
			$this->session->set_flashdata('name',$name1);
			redirect(base_url().'contact');
			}
			
			if(!empty($_POST['mailid'])){
				$mailid=$_POST['mailid'];
			}else{
			$mailid1='Enter Your Mailid';
			$this->session->set_flashdata('mailid',$mailid1);
			redirect(base_url().'contact');
			}
			
			if(!empty($_POST['message'])){
				$message1=$_POST['message'];
			}else{
			$mess='Please Enter Your Message';
			$this->session->set_flashdata('message',$mess);
			redirect(base_url().'contact');
			}
			
			if(!empty($_POST['phone'])){
				$phone=$_POST['phone'];
			}else{
			$phone1='Enter Your phone number';
			$this->session->set_flashdata('phone',$phone1);
			redirect(base_url().'contact');
			}
			
			$company=$_POST['company'];
			$city=$_POST['city'];
			
			$to='admin@subhodaya.com';
			$subject='For Contact';
			$from='www.subhodaya.com';
			$from_name=$name;
			
			$message='Company:'.$company.',<br>Name:'.$name.',<br>phone:'.$phone.',<br>Email_id:'
					.$mailid.',<br>City:'.$city.',<br>Message:'.$message1.'.';
					
			$status=$this->send_mail($to,$subject,$message,$from,$from_name);
			if($status==1){
				$success='Enter Your phone number';
				$this->session->set_flashdata('phone',$success);
			}else {
				$error='please enter details again';
			}
			//echo $message; exit;
		/*if(!empty($_POST['mailid'])){
		$company=$_POST['company'];
		//$name=$_POST['name'];
		$phone=$_POST['phone'];
		//$mailid=$_POST['mailid'];
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
		}*/
			
			//print_r($data);exit;
		redirect(base_url().'contact',$message);
			
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
		
		$status=$this->email->send();
		return $status;
	 }

}
?>