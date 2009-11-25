<?php
class Newsletter extends Controller {
	var $layout='admin';
	function Newsletter()
	{
		parent::Controller();
		$this->load->model('Newsletter_Model');
		$this->lang->load('telugu', 'telugu');
	}
	function index()
	{
		
		$limit=$this->uri->segment(4,0);
		if($limit!=0)
		list($limit,$ext) = explode('.',$limit);
		$message= $this->session->flashdata('message');
		$this->session->flashdata('messagesent',$message);
		$count1=$this->Newsletter_Model->count1();
		$details=$this->Newsletter_Model->get_newsletter($limit);
		foreach ($details as $row)
		{	
			$emails[]=$row->email;
		}
		$count=$this->Newsletter_Model->count($limit);
		
		$this->load->library('pagination');
		
		$config['base_url'] = base_url().'admin/newsletter'.'/index/';
		$config['total_rows'] = $count1;
		$config['per_page'] = '750';
		$config['num_links'] = 70;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$pagination=$this->pagination->create_links();
		$formaction="admin/newsletter/sendmail";
		$login="www.subhodaya.com";
		
		$data=array('emails'		=>	$emails,
					'formaction'	=>	$formaction,
					'login'			=>	$login,
					'count' 		=>	$count,
					'pagination'   =>  $pagination
		);
		$this->load->view('admin/newsletter_view',$data);
	}
	function sendmail()
	{
		$subhodaya=$this->lang->line('subhodaya');
	 	$com=$this->lang->line('com');
	 	$h1=$this->lang->line('subhodaya_heading1');
	 	$h3=$this->lang->line('subhodaya_heading3');
	 	$h4=$this->lang->line('subhodaya_heading4');
	 	$h5=$this->lang->line('subhodaya_heading5');
	 	$h2=$this->lang->line('subhodaya_heading2');
	 	$h6=$this->lang->line('subhodaya_heading6');
	 	$h7=$this->lang->line('subhodaya_heading7');
	 	$h8=$this->lang->line('subhodaya_heading8');
	 	$h9=$this->lang->line('subhodaya_heading9');
	 	$h10=$this->lang->line('subhodaya_heading10');
	 	$h11=$this->lang->line('subhodaya_heading11');
		$message='Thank you for subscribing with us';
		if(isset($_POST['addresses']))
     		{
     		//$subject="[SUBHODAYA.COM] News letter";
     		$subject="[SUBHODAYA.COM] Thank you for being with us!";
     		//$subject=$this->lang->line('subhodaya_sub');
		 		    	$data = array (
	 					'message'   => $message,
	 					'subhodaya' => $subhodaya,
	 					 'com'		=> $com,
		 		    	'subject'  =>  $subject,
		 		    	'h1'	   => $h1,
		 		    	'h2'	   => $h2,
		 		    	'h3'	   => $h3,
		 		    	'h4'	   => $h4,
		 		    	'h5'	   => $h5,
		 		    	'h6'	   => $h6,
		 		    	'h7'	   => $h7,
		 		    	'h9'	   => $h9,
		 		    	'h8'	   => $h8,
		 		    	'h10'	   => $h10,
		 		    	'h11'	   => $h11,
	 					);
		 		      
	     		$addresses=$_POST['addresses'];
	     		$this->load->library('email');
	     		$this->email->clear();
				$this->email->from('dontreply@subhodaya.com', 'Subhodaya.com');
				$this->email->bcc($addresses); 
				$this->email->to('admin@subhodaya.com');
				$html_message  = $this->load->view('email_layout/news_sent',$data,TRUE);
				$this->email->subject($subject);
				$this->email->message($html_message); 
				$status=$this->email->send();
				
				echo $this->email->print_debugger();
				exit;
				$this->session->set_flashdata('messagesent','message sent successfully to selected contacts.');
				redirect(base_url()."admin/newsletter");
				
     	}
	}
}
?>