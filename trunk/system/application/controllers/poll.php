<?php
class Poll extends Controller {
	function Poll(){
		parent::Controller();
		$this->load->model('admin/Poll_Model');
		$this->load->model('admin/News_Model');
		$this->lang->load('telugu', 'telugu');
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
	function insert()
	{
		$poll_id = $this->uri->segment(3);
		$answer_id = $this->uri->segment(4);
		$cat_id = $this->uri->segment(5);

		if($answer_id==0){
			$answer='a';
		}
		if($answer_id==1){
			 $answer='b';
		}
		if($answer_id==2){
			 $answer='c';
		}
		$result=$this->Poll_Model->insert_home($poll_id,$answer);
		if(!empty($result)){
			if($cat_id==4)
			{
				echo 'thanks for your vote';	
			redirect(base_url());
			}else{
					echo 'thanks for your vote';
				redirect(base_url().'cinema');
			}
		}
	}

	
}
?>