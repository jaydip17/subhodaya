<?php
class Sahithi extends Controller {
	var $layout = 'default'; 
	function Sahithi(){
		parent::Controller();
		$this->load->model("admin/Sahithi_Model");
		$this->load->model("admin/News_Model");
	}
	function index(){
		$more=$this->News_Model->more_news();
		$details=$this->Sahithi_Model->get_sahithitype();
		$details_more=array();
		foreach($details as $item)
		$details_more[$item->id]=$this->Sahithi_Model->getdetails($item->id,'yes');
		//print_r($details_more);
		$data=array('more'      =>$more,
		            'details'   =>$details,
		            'details_more' => $details_more);
		
		$this->load->view('sahithi_view',$data);
  }
}
?>