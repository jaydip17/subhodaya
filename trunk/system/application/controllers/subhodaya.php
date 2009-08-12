<?php
class Subhodaya extends Controller {
	var $layout = 'default'; 
	function Subhodaya(){
		parent::Controller();
		$this->load->helper('directory');
		$this->load->model('admin/News_Model');
		$this->load->model("admin/Cinema_Model");
		$this->load->model("admin/Poll_Model");
	}
	function index(){
		$news_type7=$this->News_Model->get_newstype1(7);
		$active_news=$this->News_Model->active_news(2);
		$active_news1=$this->News_Model->active_news(7);
		$news_type4=$this->News_Model->get_newstype1(4);
		$cinema_type2=$this->Cinema_Model->get_cinematype(2);
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$more=$this->News_Model->more_news();
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=4);
		$newspoll=$this->Poll_Model->get_newspolls($type=4);
		$data=array('more'=>$more,
		            'news_type7'=>$news_type7,
					'news_type4'=>$news_type4,
					'cinema_type2'=>$cinema_type2,
					'cinema_type1'=>$cinema_type1,
					'newspoll'=>$newspoll,
					'yes_poll'=>$yes_poll,
					'active_news'=>$active_news,
		            'active_news1'=>$active_news1
					);
		$this->load->view('home',$data);
	}

}
?>