<?php
class Cinema extends Controller {
	var $layout='default';
	function Cinema(){
		parent::Controller();
		$this->load->model("admin/Cinema_Model");
		$this->load->model("admin/News_Model");
		$this->load->model("admin/Poll_Model");
		$this->load->model("admin/Greeting_Model");
	}
	function index(){
		$more=$this->News_Model->more_news();
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$cinema_type2=$this->Cinema_Model->get_cinematype(2);
		$cinema_type3=$this->Cinema_Model->get_cinematype(3);
		$cinema_type4=$this->Cinema_Model->get_cinematype(4);
		$cinema_type5=$this->Cinema_Model->get_cinematype(5);
		$cinema_type6=$this->Cinema_Model->get_cinematype(6);
		$cinemapoll=$this->Poll_Model->get_newspolls($type=5);
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=5);
		$data=array('cinema_type1'=>$cinema_type1,
					'cinema_type2'=>$cinema_type2,
					'cinema_type3'=>$cinema_type3,
					'cinema_type4'=>$cinema_type4,
					'cinema_type5'=>$cinema_type5,
					'cinema_type6'=>$cinema_type6,
						'more'=>$more,
						'cinemapoll'=>$cinemapoll,
						'yes_poll'=>$yes_poll,
						'onload' => "display_text_1()",
		);
		$this->load->view('cinema_view',$data);
	}
	function details(){
		$type=$this->uri->segment(3);
		$onload = "loadNews('".base_url()."cinemalist/listview/".$type."')";
		$more=$this->News_Model->more_news();
		$id=$this->uri->segment(3,0);
		$result=$this->Cinema_Model->get_all($id);
		$active_news=$this->Cinema_Model->get_activenews();
		$active_news1=$this->Cinema_Model->get_activenews1(1);
		$active_news2=$this->Cinema_Model->get_activenews1(5);
		$active_news3=$this->Cinema_Model->get_activenews1(3);
		$active_news4=$this->Cinema_Model->get_activenews1(4);
		//greetings
		$greetings4=$this->Greeting_Model->get_main_greetings(4);
		//print_r($greetings4);
		$data=array('more'			=>	$more,
					'result'		=>	$result,
					'onload' 		=> 	$onload,
					'active_news'	=>	$active_news,
					'active_news1'  =>  $active_news1,
					'active_news2'	=>  $active_news2,
					'active_news3'	=>  $active_news3,
					'active_news4'	=>	$active_news4,
					'greetings4'	=>  $greetings4);
		$this->load->view('cinema_content',$data);
	}
	function inner(){
		$more=$this->News_Model->more_news();
		$news_type4=$this->News_Model->get_newstype1(4);
		$id=$this->uri->segment(3,0);
		$result=$this->Cinema_Model->inner($id);
		$data=array('more'   		=> $more,
					'result' 		=> $result,
					'news_type4'	=> $news_type4
					
					);
		$this->load->view('cinema_inner',$data);
	}
	
}
?>