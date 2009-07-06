<?php
class Subhodaya extends Controller {
	var $layout = 'default'; 
	function Subhodaya(){
		parent::Controller();
		$this->load->helper('directory');
		$this->load->model('admin/News_Model');
		$this->load->model("admin/Cinema_Model");
	}
	function index(){
		$cinema_type2=$this->Cinema_Model->get_cinematype(2);
		$more=$this->News_Model->more_news();
		$data=array('more'=>$more,
					'cinema_type2'=>$cinema_type2);
		$this->load->view('home',$data);
	}
}
?>