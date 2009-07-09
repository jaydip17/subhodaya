<?php
class Newslist extends Controller {
	function Newslist(){
		parent::Controller();
		$this->load->model('admin/News_Model');
	}
	function listview(){
		$more=$this->News_Model->more_news();
		 $q=$this->uri->segment(3,0);
		 $details=$this->News_Model->get_news($q);
		 $data=array('details'=>$details,
		 				'more'=>$more);
		$this->load->view('linklistview',$data);
	}
	function thumbview(){
		$more=$this->News_Model->more_news();
		 $q=$this->uri->segment(3,0);
		 $details=$this->News_Model->get_news($q);
		 $data=array('details'=>$details,
		 			'more'=>$more);
		$this->load->view('linkthumbview',$data);
	}
}
?>