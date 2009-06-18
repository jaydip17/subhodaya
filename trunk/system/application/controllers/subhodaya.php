<?php
class Subhodaya extends Controller {
	function Subhodaya(){
		parent::Controller();
	}
	function index(){
		$this->load->view('home');
	}
}
?>