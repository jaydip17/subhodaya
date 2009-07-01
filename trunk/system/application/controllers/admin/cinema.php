<?php
class Cinema extends Controller {
	var $layout='admin';
	function Cinema(){
		parent::Controller();
		$this->load->helper('form');
	}
	function index(){
		$this->load->view('admin/cinema_view');
	}
}
?>