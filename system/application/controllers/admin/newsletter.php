<?php
class Newsletter extends Controller {
	var $layout='admin';
	function Newsletter()
	{
		parent::Controller();
		$this->load->model('Newsletter_Model');
	}
	function index()
	{
		//$this->db->select('email');
		$result=$this->db->get('newsletter');
		$details=$result->result();
		foreach ($details as $row){	
		$emails[]=$row->email;
		}
		//print_r($emails);exit;
	$count=$this->Newsletter_Model->count();

		$formaction="admin/newsletter/sendmail";
		$login="www.subhodaya.com";
		$data=array('emails'	=>$emails,
					'formaction'=>$formaction,
					'login'		=>$login,
					'count' 	=>$count
		);
		$this->load->view('admin/newsletter_view',$data);
	}
	function sendmail()
	{
		if(isset($_POST['addresses']))
     		{
     		$subject="[SUBHODAYA.COM] $_POST[uname] has invited to view subhodaya.com";
		 	$message="Dear Sir/Madam  \n\n Your Friend $_POST[uname] has recently viewed subhodaya.com .
		 		      \n To accept this invitation  click  the below link .\n http://www.subhodaya.com";
		 	
		 		    $data=array(
		 		    			'message'  =>$message,
		 		    			);  
		 		      
	     		$addresses=$_POST['addresses'];
	     		$this->load->library('email');
	     		$this->email->clear();
				$this->email->from('dontreply@subhodaya.com', 'Subhodaya');

				$this->email->to($addresses);
				$html_message  = $this->load->view('email_layout/invitation_friend',$data,TRUE);
				$this->email->subject($subject);
				$this->email->message($html_message); 
				//$this->email->send();
				//echo $this->email->print_debugger();
				$this->session->set_flashdata('messagesent','message sent successfully to selected contacts.');
     	}
	}
}
?>