<?php
class Newslist extends Controller {
	function Newslist(){
		parent::Controller();
		$this->load->model('admin/News_Model');
	}
	function listview(){
		 $q=$this->uri->segment(3,0);
		 $details=$this->News_Model->get_news($q);
		 $data=array('details'=>$details);
		$this->load->view('linklistview',$data);
	}
	function thumbview(){
		 $q=$this->uri->segment(3,0);
		 $details=$this->News_Model->get_news($q);
		 $data=array('details'=>$details);
		$this->load->view('linkthumbview',$data);
	}
}
?>