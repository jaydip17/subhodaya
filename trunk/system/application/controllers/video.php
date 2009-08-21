<?php
class Video extends Controller {
	var $layout = 'default'; 
	function video(){
		parent::Controller();
		$this->load->model("admin/video_Model");
	}
	function index(){
		$more=$this->video_Model->more_video();
	    $data=array('more'=>$more);
    // print_r($data);
	
	$this->load->view('videos_view',$data);
  }
}
?>