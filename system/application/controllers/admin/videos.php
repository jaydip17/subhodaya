<?php
class Videos extends Controller {
	var $layout='admin';
	function Videos(){
		parent::Controller();
		$this->load->model('admin/Video_Model');
	}
	function index(){
		$data['options'] = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );
            
         
		$this->Video_Model->addvideo();
		$this->load->view('admin/video_view',$data);
	}
	
	function addcategeory(){
		//$this->Video_Model->addcategeory();
		 $this->load->view('admin/addvideocategeory');
		
	}
	

}
?>