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
		$this->load->model('admin/mahila_Model');
		$more=$this->News_Model->more_news();
		$details=$this->Sahithi_Model->get_sahithitype();
		$details_more=array();
		foreach($details as $item)
		$details_more[$item->id]=$this->Sahithi_Model->getdetails($item->id,'yes',6);
		
			$details_mahila=$this->mahila_Model->get_mahilatype();
		$details_more_mahila=array();
		foreach($details_mahila as $item)
		$details_more_mahila[$item->id]=$this->mahila_Model->getdetails($item->id,'yes',8);
	
		$types = array_keys($details_more);
		$types_mahila =array_keys($details_mahila);
		//print_r($details_more);
		//print_r($types);
		$data=array('more'      =>$more,
		            'details'   =>$details,
		            'details_more' => $details_more,
		             'types'        =>   $types,        
		             'details_more_mahila' => $details_more_mahila,
		             'details_mahila'   => $details_mahila,
		             'types_mahila'  => $types_mahila);
		
		$this->load->view('sahithi_view',$data);
   }
   function sahithidetails(){
       	$this->load->model('admin/mahila_Model');
       	$more=$this->Sahithi_Model->more_sahithi();
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$id=$this->uri->segment(3,0);
		$result=$this->Sahithi_Model->inner_sahithi($id);
		$evenmore=$this->Sahithi_Model->evenmore($id);
		$details=$this->Sahithi_Model->get_sahithitype();
		$details_mahila=$this->mahila_Model->get_mahilatype();
		$details_more=array();
		foreach($details_mahila as $item)
		$details_more[$item->id]=$this->mahila_Model->getdetails($item->id,'yes',6);
		//print_r($result);
		$data=array('result'   =>   $result,
					 'more'    =>   $more,
				'cinema_type1' =>   $cinema_type1,
		        'details'   =>  $details,
		        'evenmore'  =>$evenmore,
		        'details_more'  => $details_more,
		         'type'=>'sahithi',
		         'link' =>'mahila'
				);
				
		$this->load->view('mahila_inner',$data);
	}
   function details(){
   	   $this->load->model('admin/Poll_Model');
   	 $newspoll=$this->Poll_Model->get_newspolls($type=4);
   	 $cinemapoll=$this->Poll_Model->get_newspolls($type=5);
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=4);
   	$details=$this->Sahithi_Model->get_sahithitype();
   	$details_more=array();
		foreach($details as $item)
		$details_more[$item->id]=$this->Sahithi_Model->getdetails($item->id,'yes',6);
		$more=$this->Sahithi_Model->more_sahithi();
		$type=$this->uri->segment(3,0);
		$onload = "loadNews('".base_url()."sahithilist/listview/".$type."')";
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
					'pagination'=>$pagination,
		             'onload' =>$onload,
				     'newspoll'    =>  $newspoll,
				      'yes_poll'    =>  $yes_poll,
		             'details' =>$details,
		              'details_more' =>$details_more,
		               'type'=>'sahithi',
		              'cinemapoll'  => $cinemapoll);
		$this->load->view("mahila_content",$data);
	}
}
?>