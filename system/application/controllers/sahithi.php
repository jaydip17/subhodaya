<?php
class Sahithi extends Controller {
	var $layout = 'default'; 
	function Sahithi()
	{
		parent::Controller();
		$this->load->library('Cinema_lib', 'cinema_lib');
		$this->lang->load('telugu', 'telugu');
	}
	function index()
	{
		$newscss=array();
		$sahi_festiva=$this->cinema_lib->mahila_block($this->lang->line('sahi_festiva'));
		$sahi_kathalu=$this->cinema_lib->mahila_block($this->lang->line('sahi_kathalu'));
		$matru_basha=$this->cinema_lib->mahila_block($this->lang->line('matru_basha'));
		$sahi_sametha=$this->cinema_lib->mahila_block($this->lang->line('sahi_sametha'));
		$sahi_kavithalu=$this->cinema_lib->mahila_block($this->lang->line('sahi_kavithalu'));
		$sahi_kavithm=$this->cinema_lib->mahila_block($this->lang->line('sahi_kavithm'));
		$sahi_janapadam=$this->cinema_lib->mahila_block($this->lang->line('sahi_janapadam'));
		$sahi_vyasam=$this->cinema_lib->mahila_block($this->lang->line('sahi_vyasam'));
		/*$this->load->model('admin/mahila_Model');
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
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['9']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);*/
		
		$data=array(/*'more'      		=> $more,
		            'details'  			=> $details,
		            'details_more' 		=> $details_more,
		             'types'        	=> $types,        
		          'details_more_mahila' => $details_more_mahila,
		             'details_mahila'   => $details_mahila,
		             'types_mahila'  	=> $types_mahila,
						'bread_crumb'	=> $bread_crumb*/
					'newscss'			=>	$newscss,
					'sahi_festiva'		=>	$sahi_festiva,
					'sahi_kathalu'		=>	$sahi_kathalu,
					'matru_basha'		=>	$matru_basha,
					'sahi_sametha'		=>	$sahi_sametha,
					'sahi_kavithalu'	=>	$sahi_kavithalu,
					'sahi_kavithm'		=>	$sahi_kavithm,
					'sahi_janapadam'	=>	$sahi_janapadam,
					'sahi_vyasam'		=>	$sahi_vyasam
					
		);
		
		$this->load->view('sahithi_view',$data);
   }
   function sahithidetails()
   {
   	
  		 $id=$this->uri->segment(3,0);
		$type=$this->uri->segment(4,0);
		$cate=$this->db->get_where('sahithi_cat',array('id'=>$type));	
		$sahithicate=$cate->result();
		if(empty($sahithicate)){
			redirect(base_url().'sahithi');
		}
		$result=$this->Sahithi_Model->inner_sahithi($id);
		if(empty($result)){
			redirect(base_url().'sahithi');
		}
       	$this->load->model('admin/mahila_Model');
       	$news_type2=$this->News_Model->get_newstype1(2);
       	$more=$this->Sahithi_Model->more_sahithi();
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		
		$evenmore=$this->Sahithi_Model->evenmore($id);
		$details=$this->Sahithi_Model->get_sahithitype();
		//$details_mahila=$this->mahila_Model->get_mahilatype();
		//$details_more=array();
		
		//foreach($details_mahila as $item)
		$details_more=$this->mahila_Model->getdetails(2,'yes',5);
		if(empty($details_more)){
			redirect(base_url().'sahithi');
		}
		$key = key($details_more);
		$this->load->Model('Video_Model');
	   
	     $videos=$this->Video_Model->get_videos('top',2);
	   	  
	     $video_result=$videos->result();
	     $segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['9']->matter,
							'home' => $more['2']->matter,
	     				  'heading'=> $result[0]->heading
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		
	    $telegu_typing=array();
	    $data=array('result'   	=>  $result,
					 'more'    	=>  $more,
				'cinema_type1' 	=>  $cinema_type1,
		        'details'   	=>  $details,
		        'evenmore'  	=>	$evenmore,
		        'details_more'  => 	$details_more,
		         'type'			=>	'sahithi',
		         'link' 		=>	'mahila',
		          'video_result'=>  $video_result,
	              'news_type2'  =>	$news_type2,
	             'key'         	=>  $key,
	    		'telegu_typing'	=>	$telegu_typing,
	    		'bread_crumb'	=>	$bread_crumb
				);
				
		$this->load->view('mahila_inner',$data);
	}
   function details()
   {
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
		$onload = "loadNews('content','".base_url()."sahithilist/listview/".$type."')";
		$total_rows=$this->Sahithi_Model->count($type);
		//echo $total_rows;
	    $this->load->library('pagination');
		$config['base_url'] = base_url()."sahithi/details/";
    	$config['total_rows'] = $total_rows;
		$config['per_page'] = '13';
		$this->pagination->initialize($config); 
		$pagination=$this->pagination->create_links();
		$sahithi=$this->Sahithi_Model->get_sahithi($type,$count=false);
		if(empty($sahithi)){
			redirect(base_url().'sahithi');
		}
		$details_sahithi=$this->Sahithi_Model->get_sahithitype();
		$tabs=array();
		 $segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['9']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		
		$data=array(	'news'  	=>	$sahithi,
						'more'		=>	$more,
					'pagination'	=>	$pagination,
		             'onload' 		=>	$onload,
				     'newspoll'    	=>  $newspoll,
				      'yes_poll'    =>  $yes_poll,
		             'details' 		=>	$details,
		             'details_more' =>	$details_more,
		               'type'		=>	'sahithi',
		              'cinemapoll'  =>  $cinemapoll,
				'details_sahithi'	=>	$details_sahithi,
				'tabs'             	=> 	$tabs,
				'bread_crumb'		=>	$bread_crumb
		             );
		$this->load->view("mahila_content",$data);
	}
}
?>