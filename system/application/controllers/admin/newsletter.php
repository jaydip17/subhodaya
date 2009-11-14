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
		$config['per_page'] = '300';
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
	 	/*$heading=$this->lang->line('subhodaya_spec_heading');
	 	$com=$this->lang->line('subhod_spec_matter');
	 	$para2=$this->lang->line('subhod_spec_para2');
	 	$para1=$this->lang->line('subhod_spec_para1');
	 	$quas1=$this->lang->line('subhod_spec_quas1');
	 	$quas2=$this->lang->line('subhod_spec_quas2');*/
		//$message='Thank you for subscribing with us.';
		$message=$this->lang->line('subhodaya_ysjagan');
		$more=$this->lang->line('enkachadavandi');
		if(isset($_POST['addresses']))
     		{
     		//$subject="[SUBHODAYA.COM] News letter";
     		$subject=$this->lang->line('subhodaya_sub');
		 		    	$data = array (
	 					'message'   => $message,
	 					'subhodaya' => $subhodaya,
	 					 'com'		=> $com,
		 		    	'more'     =>  $more,
		 		    	'subject'  =>  $subject
		 		    /*	'para1'		=> $para1,
		 		    	'para2'		=> $para2,
		 		    	'quas1'		=> $quas1,
		 		    	'quas2'		=> $quas2,
		 		    	'heading'	=> $heading*/
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