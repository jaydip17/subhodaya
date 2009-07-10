<?php
class Poll extends Controller {
	function Poll(){
		parent::Controller();
		$this->load->model('admin/Poll_Model');
		$this->load->model('admin/News_Model');
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
}
?>