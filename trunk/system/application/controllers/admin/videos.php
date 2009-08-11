<?php
class Videos extends Controller {
	var $layout='admin';
	function Videos(){
		parent::Controller();
	}
	function index(){
		$data['options'] = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );


		
		$this->load->view('admin/video_view',$data);
	}
	function addcategeory(){
		$this->load->view('admin/addvideocategeory');
	}
	
}
?>