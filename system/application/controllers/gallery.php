<?php
class Gallery extends Controller {
	var $layout = 'default'; 
	function Gallery(){
		parent::Controller();
	}
	function index()
	{
		$more=$this->News_Model->more_news();
		$result=$this->Gallery_Model->get_categeory(0);
		$details=array();
		//print_r($result);
		foreach ($result as $cate)
		{
			$subcats=$this->Gallery_Model->get_cateimage($cate->id);
			foreach ($subcats as $sub_cat)
			{
				$ss = $this->Gallery_Model->getimage($sub_cat->id);
				//echo $sub_cat->id;
				//print_r($ss);
				$sub_cats[] = array(
									'date'=>(isset($ss->insert_date)) ? $ss->insert_date : 0,
									'id' => $sub_cat->id,
									'catname'	=> $sub_cat->catname,
									'imageid'  => (isset($ss->id)) ? $ss->id : 0,
									'imagename'  => (isset($ss->title)) ? $ss->title : 0, 
									);   
			}
			$cats[] = array ('id' => $cate->id,
						   'name' => $cate->catname,
						   'subcats' => $sub_cats,);
			$sub_cats=array();
			//$details[$cate->id]=$this->Gallery_Model->get_cateimage($cate->id);
			//$cats = array_merge($cate ,$details);
		}
//		foreach ($cats as $cates)
//		{
//			echo $cates['name'];
//			foreach ($cates['subcats'] as $sub_ca)
//			{
//				print_r($sub_ca->catname);
//			}
//			echo "<br/>";
//		}
		//print_r($cats);
		/*foreach ($sub_cats as $row){
			print_r($row);
		}*/
		$images=array();
		foreach($details as $item)
		{
			//$sub=$item[0]->id;
			foreach ($item as $sub){
				//echo $sub->id;exit;
				$images[$sub->id]=$this->Gallery_Model->getimage($sub->id);
			}
			
		}
		
	//	print_r($images);
	//	exit;
		
//		
//		foreach ($result as $cat)
//		{
//			echo "<br/>".$cat->catname."<br/>";
//			 foreach ($details as $det)
//			 {
//				 	if($det[1]->parentid == $cat->id)
//				 	{
//				 	echo ','.$det[1]->catname.','.$det[1]->id.',';
//				 	$parent_id = $det[1]->id;
//				 	
//				 	//print_r($images[$parent_id]);
//				 	foreach ($images as $img)
//				 	{
//				 		if(!empty($img))
//				 		if($parent_id == $img[1]['parentid'])
//				 			print_r($img);
//				 	}
//			 	}
//			 }
//		}
		//print_r($temp);
		//$result1=$this->Gallery_Model->get_subcate1();
		//print_r($images);
		$data=array('more'   => $more,
					'result' => $result,
					'images' => $images,
					'cats'=>$cats
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
					'cate' => $result,
					'result'=> $images,
					'result1'=>$result1
					);
		$this->load->view('gallery_inner',$data);
  	}
  	function inner(){
  		$type=$this->uri->segment(3,0);
  		$cate=$this->Gallery_Model->get_categeory(0);
  		$more=$this->News_Model->more_news();
  		$result=$this->Gallery_Model->get_gallery($type);
  		//print_r($result); 
  		$total_count=$this->Gallery_Model->count($type);
  		$query=$this->Gallery_Model->gallery_pagi($type);
  		//pagination
  		$a =base_url().'gallery/inner/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =30;
        $this->paginationnew->filePath =$a;
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $total_count;
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
  	    $paginate = $this->paginationnew->paginate1();
		//print_r($details);
  		$data=array('more'=>$more,
  					'cate'=>$cate,
  					'result'=>$details,
  					'pagination'=>$paginate);
  		$this->load->view('gallery_inner',$data);
  	}
  	function content(){
  		 $this->load->model('ratings_model', 'ratings');
  		$id=$this->uri->segment(3,0);
  		 $parentid=$this->uri->segment(4,0);
  		$more=$this->News_Model->more_news();
  		$image=$this->Gallery_Model->get_image($id);
  		$query=$this->Gallery_Model->get_allimages($parentid);
  		//print_r($query);
  		$result=$query->result();
  		//print_r($result);
  		$views=array();
  		$views=$this->Gallery_Model->get_views($id);
  		$links=$this->prevnex($query->result(),$id);
  		//rating
  		$result1=$this->Gallery_Model->get_categeory(0);
  		//sprint_r($links);
  		$data=array('more'  => $more,
  					'image' => $image,
  					'result'=> $result1,
  					'links'=> $links);
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
		//print_r($ids);
		
		//$values = array_values($ids);
		//print_r($values);
		
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
	/*function rating(){
	$rating=$this->input->post('spry_dynamic2');
		$rid=$this->input->post('id');
		$ip=$this->input->ip_address();
	
		echo $result=$this->insert_rating($rating,$rid,$ip);
	
	}
	function insert_rating($rating,$id,$ip)
	{
		
		$result=array();
		$this->db->where('galleryid',$id);
  		$this->db->select('ipaddress,rating,views');
  		$query=$this->db->get_where('gall_rating');
  		$result=$query->result();
  		print_r($result);
  		if(isset($result['0']))
  		{
  			 $peve_ip=$result['0']->ipaddress;
  			 $prv_view=$result['0']->views;
  			 $prv_rate=$result['0']->rating;
  			 $prv_view=$result['0']->views;
  			 echo $ip.','.$peve_ip;
  			 if($ip==$peve_ip)
  			 	{
  			 		echo "sad";
  			 		return false;
  			 	}else{
  			 		$rating1=($prv_rate+$rating)%5;
  			 		$data=array(
  			 				'rating'	=>	$rating1,
  			 				'galleryid' => 	$id ,
               				'ipaddress' => 	$ip ,
  			 			);
  			 			
  			 		$query=$this->db->insert('gall_rating1', $data);
  			 		
  			 		
  			 	return TRUE;	
  			 	}
  		}else{
  		 $rating1=(3.2+$rating)%5;
  		 $data=array('rating'=>$rating1);
		$query=$this->db->insert('gall_rating', $data); 
		
  		}
  		return true;
	}*/
}
?>