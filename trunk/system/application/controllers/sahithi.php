<?php
class Sahithi extends Controller {
	var $layout = 'default'; 
	function sahithi(){
		parent::Controller();
		$this->load->model("admin/sahithi_Model");
	}
	function index(){
		
		$this->load->view('sahithi_view',$data);
  }
}
?>