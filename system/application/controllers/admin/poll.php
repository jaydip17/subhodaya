<?php
class  Poll extends Controller {
	var $layout = 'admin'; 
	function Poll(){
		parent::Controller();
		$this->load->model('admin/Poll_Model');
	}
	function index(){
		$message = $this->session->flashdata('message');
		$details=$this->Poll_Model->get_polltype();
		foreach($details as $row){
			$options[$row->id]=$row->matter;
		}
		$data=array('options'=>$options,
					'message'=>$message);
		$this->load->view('admin/newspoll',$data);
	}
	function insert(){
		$polltype=$this->input->post('polltype');
		$question=$this->input->post('question');
		$on_date=$this->input->post('on_date');
		$data=array('cat_id'=>$polltype,
					'question'=>$question,
					'displaydate'=>$on_date);
		if(!empty($data)){
		$result=$this->db->insert('poll',$data);
		//$id=$this->db->insert_id();
		}
		if($result==1){
			$message='poll Added Successfully';
			$this->session->set_flashdata('message',$message);
			redirect(base_url().'admin/poll',$message);
		}else{
			$error=mysql_error();
			$this->session->set_flashdata('message',$error);
			redirect(base_url().'admin/poll',$error);
		}
		
	}
	function getpoll(){
		$details=$this->Poll_Model->get_polls();
		$data=array('details'=>$details);
		$this->load->view('admin/polledit_view',$data);
	}
	function delete(){
		 $id=$this->uri->segment(4,0);
		$this->Poll_Model->delete($id);
		redirect(base_url().'admin/poll/getpoll');
	}
	function edit(){
		 $id=$this->uri->segment(4,0);
		 $result=$this->Poll_Model->get_edit($id);
		 //print_r($result);
		 $data=array('result'=>$result);
		$this->load->view('admin/poll_edit',$data);
		
	}
	function edit1()
	{
		if(!isset($_POST['active']))
   		{
			$active=0;
   		}else{
   			$active=$_POST['active'];
   		}
	  	 $id=$_POST['id'];
   	 $this->Poll_Model->edit1($id,$active);
   	redirect(base_url().'admin/poll/getpoll');
	}

}
?>