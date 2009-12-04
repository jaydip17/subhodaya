<?php
class Tabs extends Controller {
	function Tabs(){
		parent::Controller();
		$this->load->library('Home', 'home');
	}
	function index()
	{
		$mahila=$this->lang->line('mahila');
		$sahithi=$this->lang->line('sahithi');
		$mahila_block = $this->home->tabs_block($mahila);
		$sahithi_block = $this->home->tabs_block($sahithi);
		$tabs_block = $this->home->tabs_block($mahila);
		$data=array(
					'tabs_block' 	=> $tabs_block,
					'mahila_block'	=> $mahila_block,
					'sahithi_block'	=> $sahithi_block
		
		);
		$this->load->view('tab_view',$data);
	}
	function photo_gallery()
	{
		$photo_gallery = $this->home->photo_gallery('');
		$data=array('photo_gallery' => $photo_gallery );
		$this->load->view('photo_gall',$data);	
	}
	function video_home()
	{
		$videos= $this->home->video_block('');
		$data=array('videos'=>$videos);
		$this->load->view('video_block',$data);	
	}
}
?>