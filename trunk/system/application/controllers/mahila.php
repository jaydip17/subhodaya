<?php
class Mahila extends Controller {
	var $layout = 'default'; 
	function mahila()
	{
		parent::Controller();
	}
	function index()
	{
		$breaking=$this->News_Model->breaking_news1();
		$newscss=array();
		$ma_special=$this->cinema_lib->mahila_block($this->lang->line('mahila_spec'));
		$home_carer=$this->cinema_lib->mahila_block($this->lang->line('home_carer'));
		$mahila_fashon=$this->cinema_lib->mahila_block($this->lang->line('mahila_fashon'));
		$mahila_yoga=$this->cinema_lib->mahila_block($this->lang->line('mahila_yoga'));
		$dite_helth=$this->cinema_lib->mahila_block($this->lang->line('dite_helth'));
		$mahila_mehandi=$this->cinema_lib->mahila_block($this->lang->line('mahila_mehandi'));
		$mahi_buty=$this->cinema_lib->mahila_block($this->lang->line('mahi_buty'));
		$mahila_food=$this->cinema_lib->mahila_block($this->lang->line('mahila_food'));
		$more=$this->News_Model->more_news();
		$title=$this->lang->line('mahila_title').$more['8']->matter;
		$description=$this->lang->line('mahila_descrip');
		/*$more=$this->News_Model->more_news();
		$details=$this->Mahila_Model->get_Mahilatype();
		//print_r($details);
		foreach($details as $item)
		$details_more[$item->id]=$this->Mahila_Model->getdetails($item->id,'yes',6);;
		
		$details_sahithi=$this->Sahithi_Model->get_sahithitype();
		$details_more_sahithi=array();
		foreach($details_sahithi as $item)
		$details_more_sahithi[$item->id]=$this->Sahithi_Model->getdetails($item->id,'yes',8);
	
		$types = array_keys($details_more);
		$types_sahithi =array_keys($details_sahithi);
		//print_r($details_more_sahithi);
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['8']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);*/
		$data=array(/*'more'      	=>	$more,
				'bread_crumb'		=>	$bread_crumb*/
					'newscss'		=>	$newscss,
					'ma_special'	=>	$ma_special,
					'home_carer'	=>	$home_carer,
					'mahila_fashon' =>	$mahila_fashon,
					'mahila_yoga'	=>	$mahila_yoga,
					'dite_helth'	=>  $dite_helth,
					'mahila_mehandi'=>	$mahila_mehandi,
					'mahi_buty'		=>	$mahi_buty,
					'mahila_food'	=>	$mahila_food,
					'title'			=>	$title,
					'description'   =>  $description,
					'breaking'		=>	$breaking
		             );
		$this->load->view('mahila_view',$data);
  }
    function mahiladetails()
    {
    	$breaking=$this->News_Model->breaking_news1();
    	$more=$this->News_Model->more_news();
    	$id=$this->uri->segment(3,0);
		$type=$this->uri->segment(4,0);
		$newscss=array();
		$mahila_inner=$this->news_lib->mahila_inner($id,$type);
		$result=$this->Mahila_Model->inner_mahila($id);
		$title=$result[0]->eng_heading. '|' .$result[0]->heading;
	/*	$cate=$this->db->get_where('mahila_cat',array('id'=>$type));
		$mahilacate=$cate->result();
		if(empty($mahilacate)){
			redirect(base_url().'mahila');
		}
		
		if(empty($result)){
			redirect(base_url().'mahila');
		}
 	   $this->load->model('admin/Sahithi_Model');
 	    $news_type2=$this->News_Model->get_newstype1(1);
		$more=$this->Mahila_Model->more_mahila();
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$this->load->model("admin/News_Model");
		$details=array();
	
		$details=$this->Mahila_Model->get_mahilatype();
		
		$details_more=$this->Sahithi_Model->getdetails(2,'yes',5);
	    $key = key($details_more);
		$evenmore=$this->Mahila_Model->evenmore($id);
		
		$this->load->Model('Video_Model');
	   
	    $videos=$this->Video_Model->get_videos('active',2);
	   	  
	    $video_result=$videos->result();
		$telegu_typing=array();*/
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['8']->matter,
							'home' => $more['2']->matter,
						 'heading' => $result[0]->heading
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		
		$data=array(
				'bread_crumb'  =>	$bread_crumb,
				'newscss'	   =>	$newscss,
				'news_inner'   =>	$mahila_inner,
				'title' 	   =>	$title,
				'breaking'		=>	$breaking
		     	);
				
		$this->load->view('news_inner',$data);
	}
    function details()
    {
    	$breaking=$this->News_Model->breaking_news1();
    	$newscss=array();
    	$more=$this->News_Model->more_news();
    	$type=$this->uri->segment(3,0);
    	$title=$this->lang->line('mahila_cat'.$type);
    	$mahila_content=$this->news_lib->mahila_content($type);
    	
   	 /*   $this->load->model('admin/Poll_Model');
   	    $details_sahithi=$this->Sahithi_Model->get_sahithitype();
   	    $sahithi_details=$this->Sahithi_Model->active_sahithi(3,$type='home');
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=4);
      	$details=$this->Mahila_Model->get_mahilatype();
		foreach($details as $item)
		$details_more[$item->id]=$this->Mahila_Model->getdetails($item->id,'yes',6);
		$more=$this->Mahila_Model->more_mahila();
		$total_rows=$this->Mahila_Model->count($type);
	    $this->load->library('pagination');
		$config['base_url'] = base_url()."mahila/details/";
    	$config['total_rows'] = $total_rows;
		$config['per_page'] = '13';
		$this->pagination->initialize($config); 
		$pagination=$this->pagination->create_links();
		$mahila=$this->Mahila_Model->get_mahila($type,$count=false);
		if(empty($mahila)){
			redirect(base_url().'mahila');
		}
		$cinemapoll=$this->Poll_Model->get_newspolls($type=5);
		$tabs=array();*/
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['8']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		$data=array(	
				'bread_crumb'	=>	$bread_crumb,
				'news_content'	=>	$mahila_content,
					'newscss'	=>	$newscss,
					'title'     =>	$title,
					'breaking'	=>	$breaking
		);
		$this->load->view("news_content",$data);
	}

}
?>