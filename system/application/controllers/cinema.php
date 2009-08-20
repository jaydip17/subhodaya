<?php
class Cinema extends Controller {
	var $layout='default';
	function Cinema(){
		parent::Controller();
		$this->load->model("admin/Cinema_Model");
		$this->load->model("admin/News_Model");
		$this->load->model("admin/Poll_Model");
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
						'yes_poll'=>$yes_poll
		);
		$this->load->view('cinema_view',$data);
	}
	function details(){
		$more=$this->News_Model->more_news();
		$id=$this->uri->segment(3,0);
		$result=$this->Cinema_Model->get_all($id);
		$data=array('more'=>$more,
					'result'=>$result);
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