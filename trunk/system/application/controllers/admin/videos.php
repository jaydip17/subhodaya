<?php
class Videos extends Controller {
	var $layout='admin';
	function Videos(){
		parent::Controller();
	}
	function index(){
		$this->load->view('admin/video_view');
	}
}
?>