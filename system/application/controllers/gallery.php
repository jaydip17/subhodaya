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
		$type=11;
		$more=$this->News_Model->more_news();
		$details=$this->Gallery_Model->get_cateimage($type);
		$images=array();
		foreach($details as $item)
		{
			$images[$item->id]=$this->Gallery_Model->getimage($item->id);
		}
		$result=$this->Gallery_Model->get_categeory();
		$result1=$this->Gallery_Model->get_subcate();

		$data=array('more'   => $more,
					'result' => $result,
					'images'=> $images,
					'result1'=>$result1
					);
		$this->load->view('gallery_view',$data);
  	}
  	function categeory(){
  		$type=$this->uri->segment(3,0);
  		$more=$this->News_Model->more_news();
		$details=$this->Gallery_Model->get_cateimage($type);
		$images=array();
		foreach($details as $item)
		{
			$images[$item->id]=$this->Gallery_Model->getimage($item->id);
		}
		$result=$this->Gallery_Model->get_categeory();
		$result1=$this->Gallery_Model->get_subcate();
		$data=array('more'   => $more,
					'result' => $result,
					'images'=> $images,
					'result1'=>$result1
					);
		$this->load->view('gallery_view',$data);
  	}
  	function inner(){
  		$id=$this->uri->segment(3,0);
  		$more=$this->News_Model->more_news();
  		$total_count=$this->Gallery_Model->count($id);
  		//pagination
  		$this->load->library('pagination');
		$config['base_url'] = base_url()."gallery/inner/".$id;
		$config['total_rows'] = $total_count;
		$config['per_page'] = '9';

		$this->pagination->initialize($config);
		$pagination= $this->pagination->create_links();
		
		$limit=$this->uri->segment(4,0);
		$result=$this->Gallery_Model->get_gallery($id,$limit);
  		$data=array('more'=>$more,
  					'result'=>$result,
  					'pagination'=>$pagination);
  		$this->load->view('gallery_inner',$data);
  	}
  	function content($id){
  		$id=$this->uri->segment(3,0);
  		$more=$this->News_Model->more_news();
  		$image=$this->Gallery_Model->get_image($id);
  		$data=array('more'  => $more,
  					'image' => $image);
  		$this->load->view('gallery_content',$data);
  		
  	}
  	
}
?>