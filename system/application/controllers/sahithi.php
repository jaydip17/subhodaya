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
		//print_r($more);
		$data=array('more'      =>$more,
		            'details'   =>$details,
		            'details_more' => $details_more);
		
		$this->load->view('sahithi_view',$data);
   }
   function sahithidetails(){
		$more=$this->News_Model->more_news();
		//$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$id=$this->uri->segment(3,0);
		$result=$this->News_Model->inner_news($id);
		$data=array('result'   =>   $result,
					 'more'    =>   $more,
				//'cinema_type1' =>   $cinema_type1
				);
				
		$this->load->view('sahithi_inner',$data);
	}
}
?>