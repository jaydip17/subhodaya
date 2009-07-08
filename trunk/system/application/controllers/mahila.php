<?php
class Mahila extends Controller {
	var $layout = 'default'; 
	function mahila(){
		parent::Controller();
		$this->load->model("admin/mahila_Model");
	}
	function index(){
		
		$this->load->view('mahila_view',$data);
  }
}
?>