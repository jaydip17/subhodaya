<?php
class Cinema extends Controller {
	var $layout='default';
	function index(){
		$this->load->view('cinema_view');
	}
}
?>