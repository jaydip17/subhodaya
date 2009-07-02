<?php
class Cinema extends Controller {
	var $layout='default';
	function Cinema(){
		parent::Controller();
		$this->load->model("admin/Cinema_Model");
	}
	function index(){
		$cinema_type1=$this->Cinema_Model->get_cinematype1();
		$cinema_type2=$this->Cinema_Model->get_cinematype2();
		$cinema_type3=$this->Cinema_Model->get_cinematype3();
		$cinema_type4=$this->Cinema_Model->get_cinematype4();
		$cinema_type5=$this->Cinema_Model->get_cinematype5();
		$cinema_type6=$this->Cinema_Model->get_cinematype6();
		$data=array('cinema_type1'=>$cinema_type1,
					'cinema_type2'=>$cinema_type2,
					'cinema_type3'=>$cinema_type3,
					'cinema_type4'=>$cinema_type4,
					'cinema_type5'=>$cinema_type5,
					'cinema_type6'=>$cinema_type6);
		$this->load->view('cinema_view',$data);
	}
}
?>