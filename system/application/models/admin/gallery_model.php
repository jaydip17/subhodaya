<?php
 class Gallery_model extends Model {
 	function Gallery_model()
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
 	function addImage($title,$parentid,$active) 	{
 	   $i=0;
 	   $this->load->library('image_lib');
 	  foreach($title as $item)
 	  {
 		$this->db->insert('gallery_images',array('title'=>$item, 'parentid'=>$parentid,'active'=>$active));
 		
 		
 	    $id = $this->db->insert_id();
 	    $dir =  './assets/gallery/';   
	    $config['upload_path'] = $dir;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';

				
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('image'.$i))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			
			$this->load->view('gallery_admin_images', $error);
		}	
		else
		{
		   $data = array('upload_data' => $this->upload->data());
	       echo $filepath = $data['upload_data']['file_name'];
	       rename($dir.$filepath , $dir.'image'.$id.'.jpg');	
		
		//generating thumnail of image
		
 	    $filename = 'image'.$id.'.jpg';
 	    
 	  	$config1['image_library'] = 'gd2';
	  	$config1['source_image'] = $dir.'/'.$filename;
        $config1['maintain_ratio'] = TRUE;
     	$config1['width'] = 80;
	    $config1['height'] = 60;
		$config1['create_thumb'] = TRUE;
		//$config['quality'] = '100';
	  $this->image_lib->initialize($config1);
 	  if(!$this->image_lib->resize())
    	{
    		$error = array('error' => $this->image_lib->display_errors());
			print_r($error);
					
    	}
    	$this->image_lib->clear();
    	
    	//thumb
    	
 		$config['image_library'] = 'gd2';
        $config['source_image'] = $dir.'/'.$filename;
         
      	//echo $dir.'/'.$filename;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 130;
		$config['height'] = 95;
	
		      
   	$this->image_lib->initialize($config);
  	
   	if(!$this->image_lib->resize())
   	{
   		$error = array('error' => $this->image_lib->display_errors());
		print_r($error);
			
    	}
    	$this->image_lib->clear();
    	
    	 $i++;
		}//endforeach
  	}
 	}
	//fetching all sub categeories from database
    function subcat($uriseg)
	{
		//echo $uriseg;
		$this->db->where('parentid',$uriseg);
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
    function image_view($parentid){
    	
    	$this->db->where('parentid',$parentid);
    	$query = $this->db->get('gallery_images');
    	return $query;
    	//print_r($query->result());
    	
    }
    //edit image form
     function imageedit($uriseg)
     {
     	$this->db->where('id',$uriseg);
 		$query=$this->db->get('gallery_images');
 		return $query->result();
     	   	
     }
     //edit image
    function editimage($id,$title)
    {
    	$this->db->where('id',$id);
 		$this->db->update('gallery_images',array('title' => $title));
 		
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
	function get_categeory($active)
	{
		if($active==1)
		{
			$this->db->where('active',1);
		}
		$this->db->order_by('update_date','desc');
		$this->db->where('parentid',0);
		$query=$this->db->get('gallery_categeory');
		return $query->result();
	}
	function get_cateimage($type)
	{
		$this->db->order_by('id','desc');
		$this->db->limit(12);
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
		$array=array('parentid'=>$parentid);
		$this->db->where($array);
		$query=$this->db->get('gallery_images');
		return $query->result_array();
	}
  	function get_subcate()
  	{
  		$id=0;
  		$this->db->where('parentid !=', $id);
  		$this->db->order_by('id','desc');
		$quary=$this->db->get('gallery_categeory');
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
  	function get_image($id)
  	{
  		$this->db->where('id',$id);
  		$query=$this->db->get_where('gallery_images');
  		return $query->result();
  	}
 	function getimage1($parentid)
	{
		$this->db->order_by('id','desc');
		//$this->db->select('id,title','parentid');
		$this->db->limit(1);
		$array=array('parentid'=>$parentid,'active'=>1);
		$this->db->where($array);
		$query=$this->db->get('gallery_images');
		return $query->result_array();
	}
 	function gallery_pagi($type)
	{
		$query="from gallery_images where parentid=$type order by gallery_images.id desc";
		return $query;
	}

  	
 }
?>