<?php
class Newslist extends Controller {
	function Newslist(){
		parent::Controller();
		$this->load->model('admin/News_Model');
	}
	function listview(){
		$more=$this->News_Model->more_news();
		 $type=$this->uri->segment(3,0);
		 $query=$this->News_Model->get_news1($type);
		 $a =base_url().'newslist/listview/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =10;
        $this->paginationnew->filePath ='javascript:loadNews(\'content\',\''.$a.'';
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->News_Model->count($type);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		 		
  	    $paginate = $this->paginationnew->paginate(); 
   		//pagination
   		
		 $data=array('details'=>$details,
		 				'more'=>$more,
		                'paginate'=>$paginate);
		$this->load->view('linklistview',$data);
	}
	function thumbview(){
		$more=$this->News_Model->more_news();
		 $type=$this->uri->segment(3,0);
		  $query=$this->News_Model->get_news1($type);
		 $a =base_url().'newslist/thumbview/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =4;
        $this->paginationnew->filePath ='javascript:loadNews(\'content\',\''.$a.'';
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->News_Model->count($type);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		 		
  	    $paginate = $this->paginationnew->paginate(); 
   		//pagination
		 $data=array('details'=>$details,
		 			'more'=>$more,
		            'paginate' => $paginate);
		$this->load->view('linkthumbview',$data);
	}
}
?>