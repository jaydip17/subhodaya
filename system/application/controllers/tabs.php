<?php
class Tabs extends Controller {
	function Tabs(){
		parent::Controller();
		$this->load->library('Home', 'home');
	}
	function index(){
		$tabs_block = $this->home->tabs_block('Actors');
		$data=array('tabs_block'=>$tabs_block);
		$this->load->view('tabs_view',$data);
	}
}
?>