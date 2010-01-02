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
	function message_sent(){
		//$message = $this->session->flashdata('message');
		$this->session->flashdata('messagesent');
		$this->load->view('message_sent');
		
	}
	function send_advertise()
		{
		if(!empty($_POST['name'])){
			$name=$_POST['name'];
			$this->session->set_flashdata('name',$name);	 
			}else {
			$name1='Enter Your name';
			$this->session->set_flashdata('name1',$name1);
			redirect(base_url().'contact/advertise');
			}
			
			if(!empty($_POST['mailid'])){
				$mailid=$_POST['mailid'];
			$this->session->set_flashdata('mailid',$mailid);	
			}else{
			$mailid1='Enter Your Mailid';
			$this->session->set_flashdata('mailid1',$mailid1);
			redirect(base_url().'contact/advertise');
			}
			
			if(!empty($_POST['phone'])){
				$phone=$_POST['phone'];
				$this->session->set_flashdata('phone',$phone);
			}else{
			$phone1='Enter Your phone number';
			$this->session->set_flashdata('phone1',$phone1);
			redirect(base_url().'contact/advertise');
			}
			if(!empty($_POST['message'])){
				$messa=$_POST['message'];
				$this->session->set_flashdata('messa',$messa);
			}else{
			$mess='Please Enter Your Message';
			$this->session->set_flashdata('message1',$mess);
			redirect(base_url().'contact/advertise');
			}
			
			
			if(isset($_POST['location'])){
			$location=$_POST['location'];
			$this->session->set_flashdata('comp',$location);
			}
			if(isset($_POST['city'])){
			$city=$_POST['city'];
			$this->session->set_flashdata('city',$city);
			}
			
				$mailid=$_POST['mailid'];
				$name=$_POST['name'];
				$phone=$_POST['phone'];
				$city=$_POST['city'];
				$location=$_POST['location'];
				$messa=$_POST['message'];
			
			$to='advertise@subhodaya.com';
			$subject='For Advertise';
			$from=$mailid;
			$from_name=$name;
			
			$message='Name:'.$name.',<br>
					 phone:'.$phone.',<br>
					 Email_id:'.$mailid.',<br>City:'.$city.',<br>Location for add:'.$location.',<br>Message:'.$messa.'.';
					
			$this->send_mail($to,$subject,$message,$from,$from_name);
				/*$success='Thankyou for Intresting to advertise with us.</br>Our marketing executiws will respond you 
				              with in 24 hours</br>.Thanku have a greate day!';
				$this->session->set_flashdata('messagesent',$success);*/
			$success='Thankyou for Intresting to advertise with us.';
				$this->session->set_flashdata('messagesent',$success);
				redirect(base_url().'contact/message_sent');	
		}
	function send_contact()
	{
			if(!empty($_POST['name'])){
				$name=$_POST['name'];
			$this->session->set_flashdata('name',$name);	 
			}else {
			$name1='Enter Your name';
			$this->session->set_flashdata('name1',$name1);
			redirect(base_url().'contact');
			}
			
			if(!empty($_POST['mailid'])){
				$mailid=$_POST['mailid'];
			$this->session->set_flashdata('mailid',$mailid);	
			}else{
			$mailid1='Enter Your Mailid';
			$this->session->set_flashdata('mailid1',$mailid1);
			redirect(base_url().'contact');
			}
			
			if(!empty($_POST['phone'])){
				$phone=$_POST['phone'];
				$this->session->set_flashdata('phone',$phone);
			}else{
			$phone1='Enter Your phone number';
			$this->session->set_flashdata('phone1',$phone1);
			redirect(base_url().'contact');
			}
			if(!empty($_POST['message'])){
				$messa=$_POST['message'];
				$this->session->set_flashdata('messa',$messa);
			}else{
			$mess='Please Enter Your Message';
			$this->session->set_flashdata('message1',$mess);
			redirect(base_url().'contact');
			}
			
			
			if(isset($_POST['company'])){
			$company=$_POST['company'];
			$this->session->set_flashdata('comp',$company);
			}
			if(isset($_POST['city'])){
			$city=$_POST['city'];
			$this->session->set_flashdata('city',$city);
			}
			$to='contact@subhodaya.com';
			$subject='For Contact';
			$from=$mailid;
			$from_name=$name;
			
			$message='Company:'.$company.',<br>Name:'.$name.',<br>phone:'.$phone.',<br>Email_id:'
					.$mailid.',<br>City:'.$city.',<br>Message:'.$messa.'.';
					
				$this->send_mail($to,$subject,$message,$from,$from_name);
				$success='Your message have been sent.</br>Thanyou for contact. Have a great day!';
				$this->session->set_flashdata('messagesent',$success);
				redirect(base_url().'contact/message_sent');
	}
	function send_feedback(){
	if(!empty($_POST['name'])){
				$name=$_POST['name'];
			$this->session->set_flashdata('name',$name);	 
			}else {
			$name1='Enter Your name';
			$this->session->set_flashdata('name1',$name1);
			redirect(base_url().'contact/feedback');
			}
			
			if(!empty($_POST['mailid'])){
				$mailid=$_POST['mailid'];
			$this->session->set_flashdata('mailid',$mailid);	
			}else{
			$mailid1='Enter Your Mailid';
			$this->session->set_flashdata('mailid1',$mailid1);
			redirect(base_url().'contact/feedback');
			}
			
			if(!empty($_POST['phone'])){
				$phone=$_POST['phone'];
				$this->session->set_flashdata('phone',$phone);
			}else{
			$phone1='Enter Your phone number';
			$this->session->set_flashdata('phone1',$phone1);
			redirect(base_url().'contact/feedback');
			}
			if(!empty($_POST['message'])){
				$messa=$_POST['message'];
				$this->session->set_flashdata('messa',$messa);
			}else{
			$mess='Please Enter Your Message';
			$this->session->set_flashdata('message1',$mess);
			redirect(base_url().'contact/feedback');
			}
			if(isset($_POST['company'])){
			$company=$_POST['company'];
			$this->session->set_flashdata('comp',$company);
			}
			if(isset($_POST['city'])){
			$city=$_POST['city'];
			$this->session->set_flashdata('city',$city);
			}
			$to='feedback@subhodaya.com';
			$subject='For Feedback';
			$from=$mailid;
			$from_name=$name;
			
			$message='<br>Name:'.$name.',<br>phone:'.$phone.',<br>Email_id:'
					.$mailid.',<br>City:'.$city.',<br>Message:'.$messa.'.';
					
			$this->send_mail($to,$subject,$message,$from,$from_name);
			$success='Thanyou for your feedback. Have a great day!';
				$this->session->set_flashdata('messagesent',$success);
				redirect(base_url().'contact/message_sent');
		}
		function email_send()
		{
			
			$this->load->view('email_view');
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