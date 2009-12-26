<?php
class Special_sub extends Controller {
	var $layout = 'default'; 
	function Special_sub()
	{
		parent::Controller();
		$this->load->library('News_lib', 'news_lib');
		$this->lang->load('telugu', 'telugu');
	}
	function index()
	{
		$news_content=$this->news_lib->news_content(0);
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
		$news_inner=$this->news_lib->specila_inner($id,0);
		$newscss=array();
		$data=array(
			'news_inner'	=>	$news_inner,
			'newscss'		=>	$newscss
		);
		$this->load->view('news_inner',$data);
	}
}
?>