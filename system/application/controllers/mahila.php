<?php
class Mahila extends Controller {
	var $layout = 'default'; 
	function mahila(){
		parent::Controller();
		$this->load->model("admin/mahila_Model");
	}
	function index(){
		
		$this->load->view('mahila_main');
  }
  function content()
  {
  	$this->load->view('mahila_content',$data);
  }
  function inner()
  {
  	$this->load->view('mahila_inner',$data);
  }

}
?>