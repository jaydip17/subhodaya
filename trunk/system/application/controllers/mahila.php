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
		foreach($details as $item)
		$details_more[$item->id]=$this->mahila_Model->getdetails($item->id,'yes');
		//print_r($details_more);
		$data=array('more'      =>$more,
		            'details'   =>$details,
		            'details_more' => $details_more);
		$this->load->view('sahithi_view',$data);
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