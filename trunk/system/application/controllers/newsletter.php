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
				echo $email;
				$data = array(
	               'email' => $email ,
	                     );
				if($this->db->insert('newsletter', $data))
				{
					echo $messa='Thankyou for subscribing with us.';
					//$messagesent='Thankyou for subscribing with us</br>.Have a great day!!!';
					//$this->session->set_flashdata('messagesent',$messagesent); 
					
					 $to=$email;
					 $subject='Subhodaya Newsletter';
					 $from='dontreply@subhodaya.com';
					 $from_name='Subhodaya';
					 $this->send_mail($to,$subject,$messa,$from,$from_name);
							//echo "&nbsp;&nbsp;&nbsp;&nbsp;Successful";
				}
				else
					$messagesent="&nbsp;&nbsp;&nbsp;&nbsp;System Error";
					$this->session->set_flashdata('messagesent',$messagesent);
			}
			 else 
			 $messagesent="&nbsp;&nbsp;&nbsp;&nbsp;Email Exists";
			 $this->session->set_flashdata('messagesent',$messagesent);
				//echo $stuats;exit;
		}
		else
		 $messagesent="&nbsp;&nbsp;&nbsp;&nbsp;Invalid Email";
		
		$this->session->set_flashdata('messagesent',$messagesent);
				redirect(base_url().'newsletter/subscribed');
		
	}
    function subscribed(){
		$message= $this->session->flashdata('message');
		$this->session->flashdata('messagesent',$message);
		$this->load->view('newsletter_subscribed');
		
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
	
}

