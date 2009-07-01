<?php
class Mahila extends Controller {
	var $layout='admin';
	function Mahila(){
		parent::Controller();
	}
	function index(){
		$this->load->view('admin/mahila_view');
	}
}
?>