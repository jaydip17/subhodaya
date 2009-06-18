<?php
class News extends Controller {
	var $layout = 'admin'; 
	function News(){
		parent::Controller();
	}
	function index(){
		$message = $this->session->flashdata('message');
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'description',
						   'skin'	  => 'full');
		$textarea[]= array('textarea' => 'summary',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$data=array(
							'jslinks'   => $links,
							'message'	=> $message,
		);
		$this->load->view('admin/news_view',$data);
	}
}
?>