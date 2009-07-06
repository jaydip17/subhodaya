<?php
class Subhodaya extends Controller {
	var $layout = 'default'; 
	function Subhodaya(){
		parent::Controller();
		$this->load->helper('directory');
		$this->load->model('admin/News_Model');
	}
	function index(){
		$more=$this->News_Model->more_news();
		$data=array('more'=>$more);
		$this->load->view('home',$data);
	}
}
?>