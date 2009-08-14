<?php
class Greetings extends Controller {
	var $layout = 'default'; 
	function greetings(){
		parent::Controller();
		$this->load->model("admin/greetings_Model");
	}
	function index(){
		
		$this->load->view('greetings_view');
  }
  function inner()
  {
  	$this->load->view('greetings_inner');
  }
  function content()
  {
  	$this->load->view('greetings_content');
  }

}
?>