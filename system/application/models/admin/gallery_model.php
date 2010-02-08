<?php
 class Gallery_Model extends Model {
 	function Gallery_Model()
 	{
 		parent::Model();
 	}
    // add categeory into database 
 	function addCategeory($catname,$parentid,$type="")
 	{
 		
  	  $this->db->insert('gallery_categeory',array('catname' =>$catname ,
 	  'parentid'=> $parentid));
 	
  	}
  	//getting info of categeories from database and saving 
  	//them in array options for dropdown list
  	function Categeory($parentid)
	{
	  
	  $this->db->where('parentid',$parentid);
	  $query = $this->db->get('gallery_categeory');
	  $cat = $query->result();
      if($parentid ==0){
       $options[0] = 'Root';
      }
      else{
        $options[0] = 'Select';
      }
	  
	//sending root categeories to admin form
	  foreach($cat as $row)
        {
       	$options[$row->id]= $row->catname;
        }
        return $options;
   	}	
 	//extract all categery details for displaying

 	//extract all categery details for displaying   	
   function categeoryview($parentid,$num,$offset)
    {
		//extracting root categeories from database
		
		$this->db->where('parentid',$parentid);
		$query = $this->db->get('gallery_categeory',$num, $offset);
		return $query;
	}
	//checking whether root or not
	function isrootcategeory($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('gallery_categeory');
		$result = $query->result();
		
	if($result[0]->parentid == 0)
		{
			
	   return true;		
	   
		}
	else {
	
	   return false;
	}
	   
	}
	function deletecategeory($id)
 	{
 		$this->db->where('id',$id);
 		$this->db->delete('gallery_categeory');
 		//if it is paent categeory delete sub categeories also.
 		
 		//redirect('admin/categeory/categeoryview/0');
  	}
  	function deletesubcategeory($id)
    {
 		$this->db->where('parentid',$id);
 		$this->db->delete('gallery_categeory');
 		//if it is paent categeory delete sub categeories also.
  	}
  	function cat($id)
  	{
  		$this->db->where('id',$id);
 		$query = $this->db->get('gallery_categeory');
 		return $query;
  	}
  	// function to get all sub-categories in movies category
	 
	function get_movies($cat = 'movies')
	{
		 $query = "SELECT a.catname,a.id FROM
 				 gallery_categeory a , gallery_categeory b 
 				 where a.parentid = b.id  and b.catname = '$cat' order by a.id desc";	 
 		$result = $this->db->query($query);
 		return $result->result();
	}
  	//rename,add image into database and folder assets	
 	function addImage($title,$parentid,$active) 	
 	{
 	   $i=0;
 	   $this->load->library('image_lib');
 	  foreach($title as $item)
 	  {
 	  	$datestring = "%Y-%m-%d";
		$time = time();
		$date=mdate($datestring, $time);
 		$this->db->insert('gallery_images',array('title'=>$item, 'parentid'=>$parentid,'active'=>$active,'insert_date'=>$date));
 		
 		
 	    $id = $this->db->insert_id();
 	    $dir =  './assets/gallery/';   
	    $config['upload_path'] = $dir;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '800';
		$config['max_height']  = '1500';

		$config1['upload_path'] = $dir;
		$config1['allowed_types'] = 'gif|jpg|png';
		$config1['max_size']	= '400';
		$config1['max_width']  = '200';
		$config1['max_height']  = '400';
				
		$this->load->library('upload', $config);
		$this->load->library('upload', $config1);
	
		if ( ! $this->upload->do_upload('image'.$i))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			
			$this->load->view('gallery_admin_images', $error);
		}	
		else
		{
		   $data = array('upload_data' => $this->upload->data());
	       $filepath = $data['upload_data']['file_name'];
	       rename($dir.$filepath , $dir.'image'.$id.'.jpg');
	       $aspect_ratio = $data['upload_data']['image_height'] / $data['upload_data']['image_width'];	
		
		$this->image_lib->clear();
		}
 	  if ( ! $this->upload->do_upload('thumb'.$i))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			
			$this->load->view('gallery_admin_images', $error);
		}	
		else
		{
		   $data = array('upload_data' => $this->upload->data());
	       $filepath = $data['upload_data']['file_name'];
	       rename($dir.$filepath , $dir.'thumimg'.$id.'.jpg');
	       $aspect_ratio = $data['upload_data']['image_height'] / $data['upload_data']['image_width'];	
		
		$this->image_lib->clear();
		}
  		}
 	}
	//fetching all sub categeories from database
    function subcat($uriseg)
	{
		$this->db->where('parentid',$uriseg);
		$this->db->limit(4);
		$query =$this->db->get('gallery_categeory');
		if(!empty($query->result))
		print_r($query->result);
		return $query;
	}
	//editcategeory
 	function editcategeory($id,$catname)
 	{
 		$this->db->where('id',$id);
 		$this->db->update('gallery_categeory',array('catname' => $catname));
 		
 	}
    //extract image details from adatabase 
    function image_view($parentid)
    {
    	
    	$this->db->where('parentid',$parentid);
    	$query = $this->db->get('gallery_images');
    	return $query;
    }
    //edit image form
     function imageedit($uriseg)
     {
     	$this->db->where('id',$uriseg);
 		$query=$this->db->get('gallery_images');
 		return $query->result();
     	   	
     }
     //edit image
    function editimage($id,$title,$active)
    {
    	//echo $active; exit;
    	$this->db->where('id',$id);
 		$this->db->update('gallery_images',array('title' => $title,'active'=>$active));
 		
    }
    //delete image
    function deleteimage($id)
 	{ 		
 		unlink('./assets/gallery/image'.$id.'.jpg');
 		unlink('./assets/gallery/image'.$id.'_thumb.jpg');
 		$this->db->where('id',$id);
 		$this->db->delete('gallery_images');
  	}
  	//get categeories for main page
	function get_categeory()
	{
		
		$this->db->order_by('id','desc');
		$this->db->where('parentid',0);
		$query=$this->db->get('gallery_categeory');
		return $query->result();
	}
	function get_cateimage($type,$limit)
	{
		if(isset($limit)){
			$this->db->limit($limit);
		}
		$this->db->order_by('id','desc');
		
		$array=array('parentid'=>$type);
		$this->db->where($array);
		$quary=$this->db->get('gallery_categeory');
		
		return $quary->result();
		
	}
	function getimage($parentid)
	{
		$this->db->order_by('id','desc');
		//$this->db->select('id,title','parentid');
		$this->db->limit(1);
		$array=array('cat_id'=>$parentid);
		$this->db->where($array);
		$query=$this->db->get('gall_image_path');
		return $query->row();
	}
  	function get_subcate()
  	{
  		$id=0;
  		$this->db->where('parentid !=', $id);
  		$this->db->order_by('id','desc');
		$quary=$this->db->get('gallery_categeory');
		return $quary->result();
  	}
  	function get_subcate1(){
  		$id=0;
  		$this->db->where('parentid !=', $id);
  		$this->db->order_by('id','desc');
  		$this->db->limit(20);
		$quary=$this->db->get('gallery_categeory');
		//print_r($quary->result());
		return $quary->result();
  	}
  	function get_gallery($type)
  	{
  		$this->db->where('parentid',$type);
  		$quary=$this->db->get('gallery_images');
  		return $quary->result();
  	}
  	function count($id)
  	{
  		$this->db->like('parentid',$id);
		$this->db->from('gallery_images');
		$count =$this->db->count_all_results();
		return $count;
  	}
   	function count1($type)
  	{
  		$this->db->like('parentid',$type);
		$this->db->from('gallery_categeory');
		$count =$this->db->count_all_results();
		return $count;
  	}
  	function get_image($id)
  	{
  		$this->db->where('id',$id);
  		$this->db->select('id, parentid, title');
  		$query=$this->db->get_where('gallery_images');
  		return $query->result();
  	}
 	function getimage1()
	{
		$this->db->order_by('id','desc');
		//$this->db->select('id,title','parentid');
		$this->db->limit(4);
		$array=array(
			'image_path'	=>	1
		 );
		$this->db->where($array);
		$query=$this->db->get('gall_image_path');
		//print_r($query->result_array());
		return $query->result_array();
	}
 	function gallery_pagi($type)
	{
		$query="from gallery_images where parentid=$type order by gallery_images.id desc";
		return $query;
	}
  	function gallery_pagi1($type)
	{
		/*$this->db->order_by('id','desc');
		//$this->db->select('id,title','parentid');
		$this->db->limit(1);
		$array=array('parentid'=>$parentid);
		$this->db->where($array);
		$query=$this->db->get('gallery_images'); */
		
		$query="from gallery_images where parentid=$type order by gallery_images.id desc";
		return $query;
	}
	function get_allimages($parentid)
	{
		$this->db->where('parentid',$parentid);
  		$this->db->select('id, parentid, title');
  		$query=$this->db->get_where('gallery_images');
  		return $query;	
	}
	function get_views($id)
	{
		$this->db->where('id',$id);
  		$this->db->select('id, views');
  		$query=$this->db->get_where('gallery_images');
  		$result=$query->result();
		//print_r($result);
		 $pre_views=$result['0']->views;
				 $id=$result['0']->id;
		$this->insert_views($id,$pre_views);
	
	}
	function insert_views($id,$pre_views)
	{
		$this->db->where('id', $id);
		$views=$pre_views+1;
		$data=array(
				'gallery_images.views'	=>	$views
			);
		$query=$this->db->update('gallery_images', $data);
	}
	function top_views()
	{
		$this->db->order_by('views','desc');
		$this->db->order_by('id','desc');
		$this->db->limit(3);
  		$this->db->select('id, parentid, title,views');
  		$query=$this->db->get_where('gallery_images');
  		return $query->result();
	}
    function get_root_cat_by_id($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('gallery_categeory');
    	$result = $rs->row();
    	//return $result->catname;
    }
    function get_root_cat_by_id1($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('gallery_categeory');
    	$result = $rs->row();
    	print_r($result->catname);
    	return $result->catname;
    	
    }
	
  	
 }
?>