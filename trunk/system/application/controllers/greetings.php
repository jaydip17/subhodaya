<?php
class Greetings extends Controller {
	var $layout = 'default'; 
	function greetings(){
		parent::Controller();
		$this->load->model("admin/Greeting_Model");
		$this->load->model("admin/News_Model");
	}
	function index(){
		$type=$this->Greeting_Model->get_type();
		$greetings1=$this->Greeting_Model->get_greetings(1);
		$greetings2=$this->Greeting_Model->get_greetings(2);
		$greetings12=$this->Greeting_Model->get_greetings(12);
		$greetings10=$this->Greeting_Model->get_greetings(10);
		$more=$this->News_Model->more_news();
		$data=array('greetings1'=>$greetings1,
					'greetings2'=>$greetings2,
					'greetings12'=>$greetings12,
					'greetings10'=>$greetings10,
					'more' => $more,
					'type' => $type,
			);
		$this->load->view('greetings_content',$data);
  }
  function content()
  {
  	$more=$this->News_Model->more_news();
  	$id=$this->uri->segment(3,0);
  	$greetings=$this->Greeting_Model->get_greetings($id);
  	$data=array('greetings'  =>  $greetings,
  					'more'  =>  $more);
  	$this->load->view('greetings_view',$data);
  }
  function inner()
  {
  	$this->load->view('greetings_inner');
  }


}
?>