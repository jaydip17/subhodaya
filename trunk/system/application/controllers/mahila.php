<?php
class Mahila extends Controller {
	var $layout = 'default'; 
	function mahila(){
		parent::Controller();
		$this->load->model("admin/mahila_Model");
	}
	function index(){
		$this->load->model("admin/News_Model");
		$more=$this->News_Model->more_news();
		$details=$this->mahila_Model->get_mahilatype();
		$data=array('more'      =>$more,
		            'details'   =>$details);
		$this->load->view('mahila_main',$data);
  }
  function content()
  {
  	$this->load->view('mahila_content',$data);
  }
  function inner()
  {
  	$this->load->view('mahila_inner',$data);
  }

}
?>