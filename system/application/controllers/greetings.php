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
		$greetings1=$this->Greeting_Model->get_main_greetings(1);
		$greetings2=$this->Greeting_Model->get_main_greetings(2);
		$greetings12=$this->Greeting_Model->get_main_greetings(12);
		$greetings10=$this->Greeting_Model->get_main_greetings(10);
		$greetings9=$this->Greeting_Model->get_main_greetings(9);
		$greetings8=$this->Greeting_Model->get_main_greetings(8);
		$greetings4=$this->Greeting_Model->get_main_greetings(4);
		$greetings16=$this->Greeting_Model->get_main_greetings(16);
		$greetings7=$this->Greeting_Model->get_main_greetings(7);
		$more=$this->News_Model->more_news();
		$data=array('greetings1' => $greetings1,
					'greetings2' => $greetings2,
					'greetings12'=> $greetings12,
					'greetings10'=> $greetings10,
					'greetings9' => $greetings9,
					'greetings8' => $greetings8,
					'greetings4'=> $greetings4,
					'greetings16'=>$greetings16,
					'greetings7'=>$greetings7,
					'more'       => $more,
					'type'       => $type,
			);
		$this->load->view('greetings_content',$data);
  }
  function content()
  {
  	$more=$this->News_Model->more_news();
  	$type=$this->uri->segment(3,0);
  	$greetings=$this->Greeting_Model->get_greetings($type);
  	$data=array('greetings'  =>  $greetings,
  					'more'  =>  $more);
  	$this->load->view('greetings_view',$data);
  }
  function inner()
  {
  	$id=$this->uri->segment(3,0);
  	$result=$this->Greeting_Model->get_details($id);
  	$more=$this->News_Model->more_news();
  	$data=array('more'=>$more,
  				'result'=>$result);
  	$this->load->view('greetings_inner',$data);
  }


}
?>