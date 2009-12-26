<?php
class Sex extends Controller {
	var $layout='default';
	function Sex()
	{
		parent::Controller();
		$this->load->library('News_lib', 'news_lib');
		$this->lang->load('telugu', 'telugu');
		$this->load->model('admin/Srungaram_Model');
	}
	function index()
	{
		$news_content=$this->news_lib->news_content(9);
		$newscss=array();
		$data=array(
			'news_content'	=>	$news_content,
			'newscss'		=>	$newscss
		);
		$this->load->view('news_content',$data);
	}
	function inner()
	{
		$id=$this->uri->segment(3,0);
		$news_inner=$this->news_lib->srungaram_inner($id,0);
		$newscss=array();
		$data=array(
			'news_inner'	=>	$news_inner,
			'newscss'		=>	$newscss
		);
		$this->load->view('news_inner',$data);
	}
}
?>