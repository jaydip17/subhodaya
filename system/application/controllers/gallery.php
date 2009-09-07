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
			//print_r($item);
			$images[$item->id]=$this->Gallery_Model->getimage($item->id);
		}
		$result=$this->Gallery_Model->get_categeory(0);
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
		$result=$this->Gallery_Model->get_categeory(0);
		$result1=$this->Gallery_Model->get_subcate();
		$data=array('more'   => $more,
					'result' => $result,
					'images'=> $images,
					'result1'=>$result1
					);
		$this->load->view('gallery_view',$data);
  	}
  	function inner(){
  		$type=$this->uri->segment(3,0);
  		$more=$this->News_Model->more_news();
  		$result=$this->Gallery_Model->get_gallery($type);
  		$total_count=$this->Gallery_Model->count($type);
  		$query=$this->Gallery_Model->gallery_pagi($type);
  		//pagination
  		$a =base_url().'gallery/inner/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =2;
        $this->paginationnew->filePath =$a;
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $total_count;
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		 		
  	    $paginate = $this->paginationnew->paginate1();
		
  		$data=array('more'=>$more,
  					'result'=>$details,
  					'pagination'=>$paginate);
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