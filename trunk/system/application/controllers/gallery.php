<?php
class Gallery extends Controller {
	var $layout = 'default'; 
	function gallery(){
		parent::Controller();
		$this->load->model("admin/News_Model");
		$this->load->model("admin/gallery_Model");
	}
	function index(){
		$more=$this->News_Model->more_news();
		$data=array('more' => $more);
		$this->load->view('gallery_view',$data);
  }
}
?>