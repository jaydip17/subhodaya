<?php
class Sahithilist extends Controller {
	function Sahithilist(){
		parent::Controller();
		$this->load->model('admin/Sahithi_Model');
	}
	function listview(){
		$more=$this->Sahithi_Model->more_sahithi();
		 $type=$this->uri->segment(3,0);
		 $query=$this->Sahithi_Model->get_sahithi1($type);
		 $a =base_url().'sahithilist/listview/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =20;
        $this->paginationnew->filePath ='javascript:loadNews(\'content\',\''.$a.'';
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->Sahithi_Model->count($type);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		 		
  	    $paginate = $this->paginationnew->paginate(); 
   		//pagination
   		
		 $data=array('details'=>$details,
		 				'more'=>$more,
		                'paginate'=>$paginate,
		                 'type' =>'sahithi');
		$this->load->view('sahithi_linklistview.php',$data);
	}
	function thumbview(){
		$more=$this->Sahithi_Model->more_sahithi();
		 $type=$this->uri->segment(3,0);
		  $query=$this->Sahithi_Model->get_sahithi1($type);
		 $a =base_url().'sahithilist/thumbview/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =4;
        $this->paginationnew->filePath ='javascript:loadNews(\'content\',\''.$a.'';
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->Sahithi_Model->count($type);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		 		
  	    $paginate = $this->paginationnew->paginate(); 
   		//pagination
		 $data=array('details'=>$details,
		 			'more'=>$more,
		            'paginate' => $paginate,
		             'type' =>'sahithi');
		$this->load->view('sahithi_linkthumbview.php',$data);
	}
}
?>