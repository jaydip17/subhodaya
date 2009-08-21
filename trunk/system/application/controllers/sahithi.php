<?php
class Sahithi extends Controller {
	var $layout = 'default'; 
	function Sahithi(){
		parent::Controller();
		$this->load->model("admin/Sahithi_Model");
		$this->load->model("admin/News_Model");
		$this->load->model("admin/Cinema_Model");
	}
	function index(){
		$more=$this->News_Model->more_news();
		$details=$this->Sahithi_Model->get_sahithitype();
		$details_more=array();
		foreach($details as $item)
		$details_more[$item->id]=$this->Sahithi_Model->getdetails($item->id,'yes');
		$types = array_keys($details_more);
		//print_r($details_more);
		//print_r($types);
		$data=array('more'      =>$more,
		            'details'   =>$details,
		            'details_more' => $details_more,
		               'types'           =>   $types);
		
		$this->load->view('sahithi_view',$data);
   }
   function sahithidetails(){
		$more=$this->Sahithi_Model->more_sahithi();
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$id=$this->uri->segment(3,0);
		$result=$this->Sahithi_Model->inner_sahithi($id);
		//print_r($result);
		$data=array('result'   =>   $result,
					 'more'    =>   $more,
				'cinema_type1' =>   $cinema_type1
				);
				
		$this->load->view('sahithi_inner',$data);
	}
   function details(){
		$more=$this->Sahithi_Model->more_sahithi();
		$type=$this->uri->segment(3,0);
		$total_rows=$this->Sahithi_Model->count($type);
		//echo $total_rows;
	    $this->load->library('pagination');
		$config['base_url'] = base_url()."sahithi/details/";
    	$config['total_rows'] = $total_rows;
		$config['per_page'] = '13';
		$this->pagination->initialize($config); 
		$pagination=$this->pagination->create_links();
		$sahithi=$this->Sahithi_Model->get_sahithi($type,$count=false);
		//print_r($sahithi);
		$data=array(	'news'  =>$sahithi,
						'more'=>$more,
					'pagination'=>$pagination);
		$this->load->view("sahithi_content",$data);
	}
}
?>