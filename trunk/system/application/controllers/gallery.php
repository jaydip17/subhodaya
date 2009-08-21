<?php
class Gallery extends Controller {
	var $layout = 'default'; 
	function gallery(){
		parent::Controller();
		$this->load->model("admin/News_Model");
		$this->load->model("admin/Gallery_Model");
	}
	function index()
	{
		$more=$this->News_Model->more_news();
		//$details=$this->Gallery_Model->get_cateimage();
		$result=$this->Gallery_Model->get_categeory();
		print_r($result);
		$data=array('more'   => $more,
					'result' => $result
					);
		$this->load->view('gallery_view',$data);
  	}
  	function inner(){
  		echo $cat_id=$this->uri->segment(3,0);
  		$result=$this->Gallery_Model->get_gallery($id);
  		$more=$this->News_Model->more_news();
  		$data=array('more'=>$more);
  		$this->load->view('gallery_inner',$data);
  	}
}
?>