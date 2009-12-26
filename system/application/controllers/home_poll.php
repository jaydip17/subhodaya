<?php
class Home_poll extends Controller {
	var $layout = 'default'; 
	function Home_poll(){
		parent::Controller();
		$this->lang->load('telugu', 'telugu');
	}
	function index()
	{
		$limit=$this->uri->segment(4,0);
		if($limit!=0)
		list($limit,$ext) = explode('.',$limit);
		$newscss=array();
		$active_news=$this->Cinema_Model->get_activenews();
		$poll=$this->Poll_Model->get_allpolls($limit);
		$count=$this->Poll_Model->get_allcount();
		$this->load->library('pagination');
		
		$config['base_url'] = base_url().'home_poll'.'/index/';
		$config['total_rows'] = $count;
		$config['per_page'] = '5';
		$config['num_links'] = 5;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$pagination=$this->pagination->create_links();
		$count=0;
		foreach ($poll as $row)
		{
			$result=$this->Poll_Model->poll_result($row->id);
			
			$details[$count]->yes=$result['yes'];
			$details[$count]->no=$result['no'];
			$details[$count]->yn=$result['yn'];
			$details[$count]->date=$row->displaydate;
			$details[$count]->views=$row->optionb+$row->optionc+$row->optiona;
			$details[$count]->question=$row->question;
			$count++;
		}
		$data=array(
				'active_news'	=>	$active_news,
				'newscss'		=>	$newscss,
				'poll'			=>	$details,
				'pagination'	=>	$pagination
		);
		
		$this->load->view('poll_view',$data);
	}
}
?>