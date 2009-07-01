<?php
class Greetings extends Controller {
	var $layout='admin';
	function Greetings(){
		parent::Controller();
	}
	function index(){
		$this->load->view('admin/greetings_view');
	}
}
?>