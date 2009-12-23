<?php
class Tabs extends Controller {
	function Tabs(){
		parent::Controller();
		$this->load->library('Home', 'home');
	}
	function index()
	{
		$mahila_block = $this->home->tabs_block($this->lang->line('mahila'));
		$data=array(
					'tabs_block'	=> $mahila_block,
		);
		$this->load->view('tab_view',$data);
	}
	function rastriya()
	{
		$rasriyam_block = $this->home->tabs_block($this->lang->line('news_rasriyam'));
		$data=array(
					'tabs_block'	=> $rasriyam_block,
		);
		$this->load->view('tab_view',$data);
	}
	function jathiyam()
	{
		$mahila_block = $this->home->tabs_block($this->lang->line('news_jathiyam'));
		$data=array(
					'tabs_block'	=> $mahila_block,
		);
		$this->load->view('tab_view',$data);
	}
	function antharja()
	{
		$mahila_block = $this->home->tabs_block($this->lang->line('news_antharja'));
		$data=array(
					'tabs_block'	=> $mahila_block,
		);
		$this->load->view('tab_view',$data);
	}
	function kridalu()
	{
		$kridalu_block = $this->home->tabs_block($this->lang->line('news_kridalu'));
		$data=array(
					'tabs_block'	=> $kridalu_block,
		);
		$this->load->view('tab_view',$data);
	}
	function cini_pukarlu()
	{
		$pukarlu_block = $this->home->tabs_block($this->lang->line('cini_pukarlu'));
		$data=array(
					'tabs_block'	=> $pukarlu_block,
		);
		$this->load->view('tab_view',$data);
	}
	function cini_varthalu()
	{
		$varthalu_block = $this->home->tabs_block($this->lang->line('cini_vishesm'));
		$data=array(
					'tabs_block'	=> $varthalu_block,
		);
		$this->load->view('tab_view',$data);
	}
	function sahithi()
	{
		$sahithi_block = $this->home->tabs_block($this->lang->line('sahithi'));
		$data=array(
					'tabs_block'	=> $sahithi_block,
		);
		$this->load->view('tab_view',$data);
	}
	function photo_gallery()
	{
		$photo_gallery = $this->home->photo_gallery('');
		$data=array('tabs_block' => $photo_gallery );
		$this->load->view('tab_view',$data);	
	}
	function video_home()
	{
		$videos= $this->home->video_block('');
		$data=array('tabs_block'=>$videos);
		$this->load->view('tab_view',$data);	
	}
	function greetings_home()
		{
			$videos= $this->home->greeting_block('');
			$data=array('tabs_block'=>$videos);
			$this->load->view('tab_view',$data);	
		}
}
?>