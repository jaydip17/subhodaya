<?php
class Subhodaya extends Controller {
	function Subhodaya(){
		parent::Controller();
		$this->load->helper('directory');
	}
	function index(){
		$this->load->view('home');
	}
}
?>