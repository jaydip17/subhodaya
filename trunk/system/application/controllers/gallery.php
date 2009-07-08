<?php
class Gallery extends Controller {
	var $layout = 'default'; 
	function gallery(){
		parent::Controller();
		$this->load->model("admin/gallery_Model");
	}
	function index(){
		
		$this->load->view('gallery_view',$data);
  }
}
?>