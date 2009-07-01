<?php
class Sahithi extends Controller {
	var $layout='admin';
	function Sahithi(){
		parent::Controller();
	}
	function index(){
		$this->load->view('admin/sahithi_view');
	}
}
?>