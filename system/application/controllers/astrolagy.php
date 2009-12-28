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
	 	$astrology=$this->astrology_lib->astrology_block();
	 	$data=array(
	 			//'types' 	=> $types,
	 			'newscss'	=>	$newscss,
	 			'tabs_block'=>	$astrology
	 	);
	 	$this->load->view('tab_view',$data);
	 }	
}
?>