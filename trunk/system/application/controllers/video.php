<?php
class Video extends Controller {
	var $layout = 'default'; 
	function video(){
		parent::Controller();
		$this->load->model("admin/video_Model");
	}
	function index(){
		
	
	$this->load->view("videos_view",$data);
  }
}
?>