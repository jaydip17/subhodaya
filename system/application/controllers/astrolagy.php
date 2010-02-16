<?php
class  Astrolagy extends Controller
{
	 var $layout='default';
     function Astrolagy()
     {
     	parent::Controller();
     }
	 function index()
	 {
	 	$breaking=$this->News_Model->breaking_news1();
	 	//print_r($breaking);
	 	$newscss=array();
	 	$title=$this->lang->line('astrology');
	 	//$types=$this->Astrolagy_Model->get_astrolagycat();
	 	$astrology=$this->astrology_lib->astrology_block(0);
	 	$data=array(
	 			//'types' 	=> $types,
	 			'newscss'	=>	$newscss,
	 			'tabs_block'=>	$astrology,
	 			'breaking'	=>	$breaking,
	 			'title'		=>	$title
	 	);
	 	$this->load->view('tab_view',$data);
	 }
	 function details()
	 {
	 	$breaking=$this->News_Model->breaking_news1();
	 	$newscss=array();
	 	$title=$this->lang->line('day_details');
		$cat_id=$this->uri->segment(3,0);
	 	$astrology=$this->astrology_lib->rasi_block($cat_id);
	 	$data=array(
	 			//'types' 	=> $types,
	 			'newscss'	=>	$newscss,
	 			'tabs_block'=>	$astrology,
	 			'breaking'	=>	$breaking,
	 			'title'		=>	$title
	 	);
	 	$this->load->view('tab_view',$data);	
	 }
}
?>