<?php
class mahilalist extends Controller {
	function mahilalist(){
		parent::Controller();
		$this->load->model('admin/mahila_Model');
	}
	function listview(){
		$more=$this->mahila_Model->more_mahila();
		 $type=$this->uri->segment(3,0);
		 $query=$this->mahila_Model->get_mahila1($type);
		 $a =base_url().'mahilalist/listview/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =10;
        $this->paginationnew->filePath ='javascript:loadNews(\''.$a.'';
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->mahila_Model->count($type);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		 		
  	    $paginate = $this->paginationnew->paginate(); 
   		//pagination
   		
		 $data=array('details'=>$details,
		 				'more'=>$more,
		                'paginate'=>$paginate,
		                'type' =>'mahila');
		$this->load->view('sahithi_linklistview.php',$data);
	}
	function thumbview(){
		$more=$this->mahila_Model->more_mahila();
		 $type=$this->uri->segment(3,0);
		  $query=$this->mahila_Model->get_mahila1($type);
		 $a =base_url().'mahilalist/thumbview/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =4;
        $this->paginationnew->filePath ='javascript:loadNews(\''.$a.'';
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->mahila_Model->count($type);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		 		
  	    $paginate = $this->paginationnew->paginate(); 
   		//pagination
		 $data=array('details'=>$details,
		 			'more'=>$more,
		            'paginate' => $paginate,
		            'type' =>'mahila');
		$this->load->view('sahithi_linkthumbview.php',$data);
	}
}
?>