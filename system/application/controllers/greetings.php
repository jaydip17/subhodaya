<?php
class Greetings extends Controller {
	var $layout = 'default'; 
	function greetings(){
		parent::Controller();
		$this->load->model('admin/Flash_model');
	}
	function index(){
		$type=$this->Greeting_Model->get_type();
		//print_r($type);
		$greetings1=$this->Greeting_Model->get_main_greetings(1);
		$greetings2=$this->Greeting_Model->get_main_greetings(2);
		$greetings12=$this->Greeting_Model->get_main_greetings(12);
		$greetings10=$this->Greeting_Model->get_main_greetings(10);
		$greetings9=$this->Greeting_Model->get_main_greetings(9);
		$greetings8=$this->Greeting_Model->get_main_greetings(8);
		$greetings4=$this->Greeting_Model->get_main_greetings(4);
		$greetings6=$this->Greeting_Model->get_main_greetings(6);
		//print_r($greetings9);
		$greetings7=$this->Greeting_Model->get_main_greetings(7);
		$more=$this->News_Model->more_news();
		$tabs=array();
		$query=$this->Flash_model->flash_greetings();
		//$flashiamges=$query->result();
		//print_r($query);
		$data=array('greetings1' 	=> 	$greetings1,
					'greetings2' 	=> 	$greetings2,
					'greetings12'	=> 	$greetings12,
					'greetings10'	=> 	$greetings10,
					'greetings9' 	=> 	$greetings9,
					'greetings8' 	=> 	$greetings8,
					'greetings4'	=> 	$greetings4,
					'greetings6'	=>	$greetings6,
					'greetings7'	=>	$greetings7,
					'more'       	=> 	$more,
					'type'       	=> 	$type,
					'onload' 		=> 	"display_text_1()",
					'tabs'			=> $tabs,
					'query'        => $query
			);
		$this->load->view('greetings_content',$data);
  }
  function content()
  {
  	$more=$this->News_Model->more_news();
  	$type=$this->uri->segment(3,0);
  	$greetings=$this->Greeting_Model->get_greetings($type);
  	$query=$this->Greeting_Model->greeings_pagi($type);
	$a =base_url().'greetings/content/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =9;
        $this->paginationnew->filePath =$a;
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->Greeting_Model->count($type);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		 		
  	    $paginate = $this->paginationnew->paginate1(); 
  	    $data=array('greetings'  	=>  $details,
  					'more'   	 	=>  $more,
  				'pagination'   		=>   $paginate);
  	$this->load->view('greetings_view',$data);
  }
  function inner()
  {
  	$id=$this->uri->segment(3,0);
  	$result=$this->Greeting_Model->get_details($id);
  	$more=$this->News_Model->more_news();
  	$telegu_typing=array();
  	$data=array('more'=>$more,
  				'result'=>$result,
  				'telegu_typing'=>$telegu_typing);
  	$this->load->view('greetings_inner',$data);
  }


}
?>