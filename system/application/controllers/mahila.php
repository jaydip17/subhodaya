<?php
class Mahila extends Controller {
	var $layout = 'default'; 
	function mahila(){
		parent::Controller();
	}
	function index(){
		 $this->load->model('admin/Sahithi_Model');
		$this->load->model("admin/News_Model");
		$more=$this->News_Model->more_news();
		$details=$this->Mahila_Model->get_Mahilatype();
		foreach($details as $item)
		$details_more[$item->id]=$this->Mahila_Model->getdetails($item->id,'yes',6);;
		
		$details_sahithi=$this->Sahithi_Model->get_sahithitype();
		$details_more_sahithi=array();
		foreach($details_sahithi as $item)
		$details_more_sahithi[$item->id]=$this->Sahithi_Model->getdetails($item->id,'yes',8);
	
		
		$types = array_keys($details_more);
		$types_sahithi =array_keys($details_sahithi);
		//print_r($details_more);
		$data=array('more'      	=>	$more,
		            'details'   	=>	$details,
		            'details_more' 	=> 	$details_more,
		             'types'       	=> 	$types,
		    'details_more_sahithi'  =>	$details_more_sahithi,
		        'details_sahithi'   => 	$details_sahithi
		             );
		$this->load->view('mahila_view',$data);
  }
 function mahiladetails(){
 	   $this->load->model('admin/Sahithi_Model');
		$more=$this->Mahila_Model->more_mahila();
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$this->load->model("admin/News_Model");
		$details=array();
		//$news_type1=$this->News_Model->get_newstype(5);
		//print_r($news_type1);
		$id=$this->uri->segment(3,0);
		$result=$this->Mahila_Model->inner_mahila($id);
		$details=$this->Mahila_Model->get_mahilatype();
		$details_sahithi=$this->Sahithi_Model->get_sahithitype();
		$details_more=array();
		foreach($details_sahithi as $item)
		$details_more[$item->id]=$this->Sahithi_Model->getdetails($item->id,'yes',6);
	
		$evenmore=$this->Mahila_Model->evenmore($id);
		
		
		$this->load->Model('Video_Model');
	   
	     $videos=$this->Video_Model->get_videos('active',2);
	   	  
	     $video_result=$videos->result();
		
		$data=array('result'   =>   $result,
					 'more'    =>   $more,
				'cinema_type1' =>   $cinema_type1,
		         'evenmore' =>$evenmore,
		        'details' =>$details,
		        'details_more' =>$details_more,
		            'type'=>'mahila',
		            'link' => 'sahithi',
		              'video_result'     =>  $video_result
		     	);
				
		$this->load->view('mahila_inner',$data);
	}
   function details(){
   	    $this->load->model('admin/Poll_Model');
   	    $newspoll=$this->Poll_Model->get_newspolls($type=4);
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=4);
      	$details=$this->Mahila_Model->get_mahilatype();
		foreach($details as $item)
		$details_more[$item->id]=$this->Mahila_Model->getdetails($item->id,'yes',6);
		$more=$this->Mahila_Model->more_mahila();
		$type=$this->uri->segment(3,0);
		$onload = "loadNews('content','".base_url()."mahilalist/listview/".$type."')";
		//print_r($details_more);
		$total_rows=$this->Mahila_Model->count($type);
		//echo $total_rows;
	    $this->load->library('pagination');
		$config['base_url'] = base_url()."mahila/details/";
    	$config['total_rows'] = $total_rows;
		$config['per_page'] = '13';
		$this->pagination->initialize($config); 
		$pagination=$this->pagination->create_links();
		$mahila=$this->Mahila_Model->get_mahila($type,$count=false);
		//print_r($mahila);
		$data=array(	'news'  =>$mahila,
						'more'=>$more,
					'pagination'=>$pagination,
		             'onload' =>$onload,
		            'details' =>$details,
		              'newspoll'    =>  $newspoll,
				 'yes_poll'    =>  $yes_poll,
		            'details_more' =>$details_more,
		            'type'  =>'mahila');
		$this->load->view("mahila_content",$data);
	}

}
?>