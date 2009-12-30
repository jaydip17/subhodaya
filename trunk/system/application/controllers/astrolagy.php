<?php
class  Astrolagy extends Controller
{
	 var $layout='default';
     function astrolagy()
     {
     	parent::Controller();
     }
	 function index()
	 {
	 	$newscss=array();
	 	//$types=$this->Astrolagy_Model->get_astrolagycat();
	 	$astrology=$this->astrology_lib->astrology_block(0);
	 	$data=array(
	 			//'types' 	=> $types,
	 			'newscss'	=>	$newscss,
	 			'tabs_block'=>	$astrology
	 	);
	 	$this->load->view('tab_view',$data);
	 }
	 function details()
	 {
	 	$newscss=array();
		$cat_id=$this->uri->segment(3,0);
		
	 	$astrology=$this->astrology_lib->rasi_block($cat_id);
	 	$data=array(
	 			//'types' 	=> $types,
	 			'newscss'	=>	$newscss,
	 			'tabs_block'=>	$astrology
	 	);
	 	$this->load->view('tab_view',$data);	
	 }
}
?>