<?php
class Gallery extends Controller {
	var $layout = 'default'; 
	function Gallery()
	{
		parent::Controller();
		$this->load->model('ratings_model', 'ratings');
	}
	function index()
	{
		$more=$this->News_Model->more_news();
		$result=$this->Gallery_Model->get_categeory(0);
		$details=array();
		//print_r($result);
		foreach ($result as $cate)
		{
			$subcats=$this->Gallery_Model->get_cateimage($cate->id,$limit="5");
			
			foreach ($subcats as $sub_cat)
			{
				$ss = $this->Gallery_Model->getimage($sub_cat->id);
				$sub_cats[] = array(
									'date'=>(isset($ss->insert_date)) ? $ss->insert_date : 0,
									'id' => $sub_cat->id,
									'catname'	=> $sub_cat->catname,
									'imageid'  => (isset($ss->id)) ? $ss->id : 0,
									'imagename'  => (isset($ss->title)) ? $ss->title : 0, 
									); 
									  
			}
			$cats[] = array (
							'id' => $cate->id,
						   	'name' => $cate->catname,
						   	'subcats' => $sub_cats
							);
			$sub_cats=array();
		}
		$images=array();
		foreach($details as $item)
		{
			foreach ($item as $sub)
			{
				$images[$sub->id]=$this->Gallery_Model->getimage($sub->id);
			}
			
		}
		
		//$current_url = current_url();
		//$navigation = array ($current_url);
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['6']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
	
		$data=array(
					'more'   		=> $more,
					'result' 		=> $result,
					'images' 		=> $images,
					'cats'   		=> $cats,
					'bread_crumb'  => $bread_crumb
					);
		$this->load->view('gallery_view',$data);
  	}
  	function categeory()
  	{
  		$type=$this->uri->segment(3,0);
  		$more=$this->News_Model->more_news();
		$details=$this->Gallery_Model->get_cateimage($type,$limit="");
		$a =base_url().'gallery/categeory/'.$type;
	  	$query= "from gallery_categeory where parentid = $type";
		 $total_count=$this->Gallery_Model->count1($type);
		 
    	$this->load->library('paginationnew');
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =20;
        $this->paginationnew->filePath =$a;
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $total_count;
        $this->paginationnew->add_query = $query;
        
   		$result1 = $this->paginationnew->getQuery(TRUE);
   		$details=$result1->result();
  	    $paginate = $this->paginationnew->paginate1();
  	    //end pagination
   		
		foreach($details as $item)
		{
			$images[$item->id]=$this->Gallery_Model->getimage($item->id);
		}
		if(empty($images)){
			redirect(base_url().'gallery');
		}
		$result=$this->Gallery_Model->get_categeory(0);
		   		
		//$current_url = current_url();
		//$navigation = array ($current_url);
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['6']->matter,
							'home' => $more['2']->matter,
		); 
		//print_r($segments);
		$bread_crumb = $this->bread_crumb->get_code($segments);
		$data=array(
					'more'   		=> $more,
					'cate' 			=> $result,
					'result'		=> $images,
		            'paginate' 		=> $paginate,
					'bread_crumb'	=> $bread_crumb
					);
		$this->load->view('gallery_subcat',$data);
  	}
  	function inner(){
  		$type=$this->uri->segment(3,0);
  		if($type==0){
  			redirect(base_url()."gallery");
  		}
  		$cate=$this->Gallery_Model->get_categeory(0);
  		//print_r($cate);
  		$more=$this->News_Model->more_news();
  		$result=$this->Gallery_Model->get_gallery($type);
  		$total_count=$this->Gallery_Model->count($type);
  		$query=$this->Gallery_Model->gallery_pagi($type);
  		//pagination
  		$a =base_url().'gallery/inner/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =20;
        $this->paginationnew->filePath =$a;
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $total_count;
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
  	    $paginate = $this->paginationnew->paginate1();
		//print_r($details);
		if(empty($details)){
			redirect(base_url().'gallery');
		}
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['6']->matter,
							'home' => $more['2']->matter,
							'title_cat' => $cate[0]->catname,
							'title_id'  => $cate[0]->id,
							'heading' => 'dd',
		); 
		
		$bread_crumb = $this->bread_crumb->get_code($segments);

  		$data=array(
  					'more'		 =>	$more,
  					'cate'		 =>	$cate,
  					'result'	 =>	$details,
  					'paginate'	 =>	$paginate,
  					'bread_crumb'=> $bread_crumb
  		);
  		$this->load->view('gallery_inner',$data);
  	}
  	function content()
  	{
  		$this->load->model('ratings_model', 'ratings');
  		$id=$this->uri->segment(3,0);
  		$parentid=$this->uri->segment(4,0);
  		if($parentid==0){
  			redirect(base_url().'gallery');
  		}
  		$more=$this->News_Model->more_news();
  		$image=$this->Gallery_Model->get_image($id);
  		if(empty($image)){
  			redirect(base_url().'gallery');
  		}
  		$query=$this->Gallery_Model->get_allimages($parentid);
  		$result=$query->result();
  		$views=array();
  		$views=$this->Gallery_Model->get_views($id);
  		$links=$this->prevnex($query->result(),$id);
  		//rating
  		$result1=$this->Gallery_Model->get_categeory(0);
  		//print_r($image);
  		$telegu_typing=array();
  		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['6']->matter,
							'home' => $more['2']->matter,
  						 'heading' => $image[0]->title
		); 
		//print_r($segments);
		$bread_crumb = $this->bread_crumb->get_code($segments);
		
  		$data=array('more'  => $more,
  					'image' => $image,
  					'result'=> $result1,
  					'links' => $links,
  			'telegu_typing' => $telegu_typing,
  			'bread_crumb'   => $bread_crumb
  		);
  		$this->load->view('gallery_content',$data);
  		
  	}
  	function prevnex($result,$id)
  	{
  	 	$ids = array();
		$titles = array();
		$links=array();
		$counter=0;
		
	 if(!empty($result))	
	{
		foreach($result as $item)
		{
			$ids[$counter] = $item->id;
			$titles[$item->id] = $item->title;
			$counter++;
		}
		
		$id1 = array_search($id,$ids);
		if($id1!=0)
		{
		 $links['prev'] = $ids[$id1-1];
		}
		if(isset($ids[$id1+1]))
		{
		 $links['next'] = $ids[$id1+1];
		}
		
		if(isset($ids['0']))
		{
		 $links['first'] = $ids['0'];
		}
	    if(!empty($ids))
		{
		  $links['last'] = array_pop($ids);
		}
	  
		return $links;
	
	}
	}

}
?>