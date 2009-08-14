<?php
class Greetings extends Controller {
	var $layout = 'default'; 
	function greetings(){
		parent::Controller();
		$this->load->model("admin/Greeting_Model");
		$this->load->model("admin/News_Model");
	}
	function index(){
		$more=$this->News_Model->more_news();
		$greet_type1=$this->Greeting_Model->get_greetingtype(1);
		print_r($greet_type1);
		$data=array('more'=>$more,
					'greet_type1'=>$greet_type1);
		$this->load->view('greetings_view',$data);
  }
  function inner()
  {
  	$this->load->view('greetings_inner');
  }
  function content()
  {
  	$this->load->view('greetings_content');
  }

}
?>