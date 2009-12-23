<?php

class  Astrolagy extends Controller {
	    
	    var $layout='default';
	    
     function astrolagy(){
       
     	parent::Controller();
     	$this->load->model('admin/astrolagy_model');
     	
     }
	
	 function index(){
	 	$this->load->view('astrolagy_view');
	 }
	
	
	
	
	
}
?>