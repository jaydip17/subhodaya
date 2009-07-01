<?php
class Gallery extends Controller {
	var $layout='admin';
	function Gallery(){
		parent::Controller();
	}
	function index(){
		$this->load->view('admin/gallery_view');
	}
}
?>