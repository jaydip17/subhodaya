<?php
class Newsletter extends Controller {

	function Newsletter()
	{
		parent::Controller();	
		$this->load->model('Newsletter_model');
		$this->lang->load('telugu', 'telugu');
	}
	
	function index()
	{
		echo "Success";
	}
	function show_subscribe_form()
	{
		$message = $this->session->flashdata('message');
		$data = array('type'=> 'advertise',
		              'url' => 'contact/send_advertise',
		              'onsubmit' =>'advertise_validate',
						'message'=> $message);
		$this->load->view('newsletter',$data);
	}
	function subscribe()
	{	
	  $email=$this->uri->segment(3,0);
		//$email = $this->input->get_post('email', TRUE);
		//$name=$this->input->get_post('name', TRUE);
		$validate = $this->Newsletter_model->check_email_address($email);
		if($validate==TRUE)
		{
			$count = $this->Newsletter_model->check_newsletter_email($email);
			if($count<1)
			{
				 $email;
				$data = array(
	               'email' => $email ,
	                     );
				if($this->db->insert('newsletter', $data))
				{
					
					$messagesent='Thankyou for subscribing with us</br>.Have a great day!!!';
					//$this->session->set_flashdata('messagesent',$messagesent); 
					
					 $to=$email;
					 $subject='Subhodaya Newsletter';
					 $from='dontreply@subhodaya.com';
					 $from_name='Subhodaya';
					 $this->send_mail($to,$subject,$messagesent,$from,$from_name);
							echo 'Thankyou for subscribing with us.';
				}
				else
				echo "&nbsp;&nbsp;&nbsp;&nbsp;System Error";
			}
			 else 
			echo "&nbsp;&nbsp;&nbsp;&nbsp;Email Exists";
		}
		else
		 echo "&nbsp;&nbsp;&nbsp;&nbsp;Invalid Email";		
	}
    function subscribed(){
		
    	 echo $email=$this->uri->segment(3,0);
    	 return $email;
		$message= $this->session->flashdata('message');
		$this->session->flashdata('messagesent',$message);
		//$this->load->view('newsletter_subscribed');
		
	}
	 function send_mail($to,$subject,$messa,$from,$from_name)
	 {
	 	$subhodaya=$this->lang->line('subhodaya');
	 	$com=$this->lang->line('com');
	 	$data = array (
	 					'message'   => $messa,
	 					'subhodaya' => $subhodaya,
	 					 'com'		=> $com
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
		//echo $this->email->print_debugger();
		return true;
	 }
	 function gallery(){
	 	$folder_path=$this->uri->segment(3,0);
	 	$image_path=$this->uri->segment(4,0);
	 	$data=array('folder'=>$folder_path,
	 			   'image'=>$image_path
	 );
	 	$this->load->view('gallery',$data);
	 }
	
}

