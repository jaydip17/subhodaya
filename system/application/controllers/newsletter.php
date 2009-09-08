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
					echo "&nbsp;&nbsp;&nbsp;&nbsp;Successful";
				else
					echo "&nbsp;&nbsp;&nbsp;&nbsp;System Error";
			}
			 else 
			 echo "&nbsp;&nbsp;&nbsp;&nbsp;Email Exists";
		}
		else
		echo "&nbsp;&nbsp;&nbsp;&nbsp;Invalid Email";
	}
	
}

