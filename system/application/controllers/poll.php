<?php
class Poll extends Controller {
	function Poll(){
		parent::Controller();
		$this->load->model('admin/Poll_Model');
		$this->load->model('admin/News_Model');
		$this->load->helper('date');
	}
	function index(){
		$more=$this->News_Model->more_news();
		$poll_id = $this->uri->segment(3);
		$answer = $this->uri->segment(4);
		$newspoll=$this->Poll_Model->get_newspolls1($poll_id);
		$result=$this->Poll_Model->insert_home($poll_id,$answer);
		$data=array('more'=>$more,
					'result'=>$result,
					'newspoll'=>$newspoll
				);
		$this->load->view('poll_result',$data);
	}
	//get yesterday poll
	function yes_result($poll_id){
		$more=$this->News_Model->more_news();
		$result=$this->Poll_Model->poll_result($poll_id);
		$newspoll=$this->Poll_Model->get_newspolls1($poll_id);
		$data=array('result'=>$result,
					'newspoll'=>$newspoll,
					'more'=>$more
		);
		//$this->load->view('poll_result',$data);
		$this->load->view('pre_result.html',$data);
	}
	
}
?>