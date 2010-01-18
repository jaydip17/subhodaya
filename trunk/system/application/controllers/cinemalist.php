<?php
class Cinemalist extends Controller {
	function Cinemalist(){
		parent::Controller();
		$this->load->model('admin/Cinema_Model');
		$this->load->model('admin/News_Model');
	}
	function listview(){
		$more=$this->News_Model->more_news();
		 $type=$this->uri->segment(3,0);
		 $query=$this->Cinema_Model->get_cinema1($type);
		 $a =base_url().'cinemalist/listview/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =24;
        $this->paginationnew->filePath ='javascript:loadNews(\'content\',\''.$a.'';
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->Cinema_Model->count($type);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		 		
  	    $paginate = $this->paginationnew->paginate(); 
   		//pagination
   		
		 $data=array('details'=>$details,
		 				'more'=>$more,
		                'paginate'=>$paginate);
		$this->load->view('cine_listview',$data);
	}
	function thumbview(){
		$more=$this->News_Model->more_news();
		 $type=$this->uri->segment(3,0);
		  $query=$this->Cinema_Model->get_cinema1($type);
		 $a =base_url().'cinemalist/thumbview/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =14;
        $this->paginationnew->filePath ='javascript:loadNews(\'content\',\''.$a.'';
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->Cinema_Model->count($type);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		 		
  	    $paginate = $this->paginationnew->paginate(); 
   		//pagination
		 $data=array('details'=>$details,
		 			'more'=>$more,
		            'paginate' => $paginate);
		$this->load->view('cine_thubview',$data);
	}
}
?>