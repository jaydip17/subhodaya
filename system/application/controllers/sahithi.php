<?php
class Sahithi extends Controller {
	var $layout = 'default'; 
	function Sahithi(){
		parent::Controller();
		$this->load->model("admin/Sahithi_Model");
		$this->load->model("admin/News_Model");
	}
	function index(){
		$more=$this->News_Model->more_news();
		$details=$this->Sahithi_Model->get_sahithitype();
		print_r($details);
		$data=array('more'      =>$more,
		            'details'   =>$details);
		
		$this->load->view('sahithi_view',$data);
  }
}
?>