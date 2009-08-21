<?php
class Mahila extends Controller {
	var $layout = 'default'; 
	function mahila(){
		parent::Controller();
		$this->load->model("admin/mahila_Model");
		$this->load->model("admin/Cinema_Model");
	}
	function index(){
		
		$this->load->model("admin/News_Model");
		$more=$this->News_Model->more_news();
		$details=$this->mahila_Model->get_mahilatype();
		foreach($details as $item)
		$details_more[$item->id]=$this->mahila_Model->getdetails($item->id,'yes');
		$types = array_keys($details_more);
		//print_r($details_more);
		$data=array('more'      =>$more,
		            'details'   =>$details,
		            'details_more' => $details_more,
		             'types'       => $types);
		$this->load->view('mahila_view',$data);
  }
 function mahiladetails(){
		$more=$this->mahila_Model->more_mahila();
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$id=$this->uri->segment(3,0);
		$result=$this->mahila_Model->inner_mahila($id);
		//print_r($result);
		$data=array('result'   =>   $result,
					 'more'    =>   $more,
				'cinema_type1' =>   $cinema_type1
				);
				
		$this->load->view('mahila_inner',$data);
	}
   function details(){
		$more=$this->mahila_Model->more_mahila();
		$type=$this->uri->segment(3,0);
		$total_rows=$this->mahila_Model->count($type);
		//echo $total_rows;
	    $this->load->library('pagination');
		$config['base_url'] = base_url()."mahila/details/";
    	$config['total_rows'] = $total_rows;
		$config['per_page'] = '13';
		$this->pagination->initialize($config); 
		$pagination=$this->pagination->create_links();
		$mahila=$this->mahila_Model->get_mahila($type,$count=false);
		//print_r($mahila);
		$data=array(	'news'  =>$mahila,
						'more'=>$more,
					'pagination'=>$pagination);
		$this->load->view("mahila_content",$data);
	}

}
?>