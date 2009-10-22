<?php
class Newsletter extends Controller {

	function Newsletter()
	{
		parent::Controller();	
		$this->load->model('Newsletter_model');
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
		
		$email = $this->input->get_post('email', TRUE);
		$validate = $this->Newsletter_model->check_email_address($email);
		if($validate==TRUE)
		{
			$count = $this->Newsletter_model->check_newsletter_email($email);
			if($count<1)
			{
				$data = array(
	               'email' => $email ,
	                     );
				if($this->db->insert('newsletter', $data))
				{
					$message='Thankyou for Intresting to advertise with us.</br>Our marketing executiws will respond you 
				              with in 24 hours</br>.Thanku have a great day!';
				
				
					//echo "&nbsp;&nbsp;&nbsp;&nbsp;Successful";
				}
				else
					$message="&nbsp;&nbsp;&nbsp;&nbsp;System Error";
			}
			 else 
			 $message="&nbsp;&nbsp;&nbsp;&nbsp;Email Exists";
		}
		else
		 $message="&nbsp;&nbsp;&nbsp;&nbsp;Invalid Email";
		
		$this->session->set_flashdata('messagesent',$message);
				redirect(base_url().'newsletter/subscribed');
		
	}
    function subscribed(){
		$message = $this->session->flashdata('message');
		$this->session->flashdata('messagesent');
		$this->load->view('newsletter_subscribed');
		
	}
	
}

