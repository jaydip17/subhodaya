<?php
class Video_Model extends Model {
	
       
	 function addcategeory(){
	 	
		
		$this->db->insert('videos_categeory',array('name'=>$_POST['name']));
	 }
	
  	function getvideocategeories(){
  		
		$query=$this->db->get('videos_categeory');
		return $query;
	}
	
	function addvideo(){
		
		$this->db->insert('videos',array('name'=>$_POST['name'],'time'=>$_POST['time'],'no_of_views'=>$_POST['no_of_views'],
		              'video_cat_id'=>$_POST['video_cat_id'],'rating'=>$_POST['rating'],'insert_date'=>$_POST['insert_date']));
		
		$i=$this->db->insert_id();
	    $this->load->library('upload');
		$dir =  './assets/videos';   
	    $config['upload_path'] = $dir;
		$config['allowed_types'] = 'flv';
		$config['max_size']	= '90000000';
    	//$config['max_width']  = '1024';
    	//$config['max_height']  = '768';
		
		$this->upload->initialize($config);
	
		if (!$this->upload->do_upload('video'))
		{
			//echo "hello";
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			
			//echo "hello";
			//$this->load->view('admin_images', $error);
		}	
		else
		{
		   $data = array('upload_data' => $this->upload->data());
	       $filepath = $data['upload_data']['file_name'];
	       rename($dir.'/'.$filepath , $dir.'/video'.$i.'.flv');
	       $this->db->where('id',$i);
	       $this->db->update('videos',array('video_uploaded'=>'1'));	
		
		//uploading image
		$dir1 =  './assets/videos/image_preview';   
	    $config1['upload_path'] = $dir1;
		$config1['allowed_types'] = 'gif|jpg|png';
		$config1['max_size']	= '90000000';
    	//$config['max_width']  = '1024';
    	//$config['max_height']  = '768';
		
		$this->upload->initialize($config1);
	
		if (!$this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			
			//$this->load->view('admin_images', $error);
		}	
		else
		{
		   $data = array('upload_data' => $this->upload->data());
	       $filepath = $data['upload_data']['file_name'];
	      rename($dir1.'/'.$filepath , $dir1.'/image'.$i.'.jpg');	
	      
	      //generating image to display in recent list 
	      
		$this->load->library('image_lib');
    	$filename = 'image'.$i.'.jpg';
    	
    	$config2['image_library'] = 'gd2';
        $config2['source_image'] = $dir1.'/'.$filename;
        $config2['new_image'] = 'home_image'.$i.'.jpg';
      	$config2['create_thumb'] = TRUE;
		$config2['maintain_ratio'] = TRUE;
		$config2['width'] = 86;
		$config2['height'] = 66;
    	
    	      
    	$this->image_lib->initialize($config2);
    	
    	if(!$this->image_lib->resize())
    	{
    		$error = array('error' => $this->image_lib->display_errors());
			print_r($error);
    	}
    	$this->image_lib->clear();

    	//generating image to display in categeory list
    	$this->load->library('image_lib');
    	$filename = 'image'.$i.'.jpg';
    	
    	$config4['image_library'] = 'gd2';
        $config4['source_image'] = $dir1.'/'.$filename;
        $config4['new_image'] = 'home_image'.$i.'.jpg';
      	$config4['create_thumb'] = TRUE;
		$config4['maintain_ratio'] = TRUE;     
		$config4['width'] = 122;
		$config4['height'] = 89;
    	
    	      
    	$this->image_lib->initialize($config4);
    	
    	if(!$this->image_lib->resize())
    	{
    		$error = array('error' => $this->image_lib->display_errors());
			print_r($error);
    	}
    	$this->image_lib->clear();
    	
    	
		//generating image to display in top list
		$this->load->library('image_lib');
    	$filename = 'image'.$i.'.jpg';
    	
    	$config3['image_library'] = 'gd2';
        $config3['source_image'] = $dir1.'/'.$filename;
      	$config3['create_thumb'] = TRUE;
		$config3['maintain_ratio'] = TRUE;
		$config3['width'] = 82;
		$config3['height'] =56;
    	
    	      
    	$this->image_lib->initialize($config3);
    	
    	if(!$this->image_lib->resize())
    	{
    		$error = array('error' => $this->image_lib->display_errors());
			print_r($error);
    	}
		}
	 }
	}
	 
	
      function getvideos($id,$table)
        {
      	$this->db->where('video_uploaded',1);
      	$this->db->where('video_cat_id',$id);
      	$query=$this->db->get($table);
      	return $query;
       }
	
 function deletecategeory($id)
   {   	
   	$removeid=array();
   	  if(isset($_POST['removeid'])){
   	  	$removeid = $_POST['removeid'];
   	  }
   	  else {
   	  	$removeid = array($id);
   	   	  }
   	   	   	   	
   	    foreach($removeid as $item){
   	   	    
   	   	  	$videos = array();
   	   	  	$videos = $this->getvideos($item,'videos');
   	   	  
   	   	   if($videos->num_rows()>0){
   	   	  	foreach($videos->result() as $video){
   	   	  	echo $video->id;		
   	   	  	$this->deletevideo($video->id);
   	   	  	}
   	   	  	
   	   	   }
   	   	  $this->db->where('id',$item);
   	     $this->db->delete('videos_categeory');
   	   	  }
   	    
   	   }
   	   
   function getcategeorydetails($id)
    {
   	  $this->db->where('id',$id);
   	  $query = $this->db->get('videos_categeory');
   	  return $query->result_array();
    }

    
    
 function editcategeory()
   {
   	 $this->db->where('id',$_POST['id']);
   	 $this->db->update('videos_categeory',array('name' => $_POST['name']));
   	
   }
   
  function getvideodetails($id)
   {
   	$this->db->where('id',$id);
   	$query = $this->db->get('videos');
   	return $query->result_array();
   	   	
   }
   
 function deletevideo($id)
   {
   	
   	if(isset($_POST['removeid1'])){
   		$removeid = $_POST['removeid1'];
   	}
   	else
   	{
   		$removeid = array($id);
   	}
     		
   	   foreach($removeid as $item){
   	   	
   	  	  $this->db->where('id',$item);
   	 	  $this->db->delete('videos');
   		  unlink('./assets/videos/video'.$item.'.flv');
   	 	  unlink('./assets/videos/image_preview/image'.$item.'.jpg');
   	 	  unlink('./assets/videos/image_preview/home_image'.$item.'_thumb.jpg');
   	  	  unlink('./assets/videos/image_preview/image'.$item.'_thumb.jpg');
   	 
   	   	 }
   	   }

 function editvideo($id)
   {
   	 $this->db->where('id',$id);
   	 $this->db->update('videos',array('id' => $_POST['id'], 'name' => $_POST['name'], 'no_of_views' => $_POST['no_of_views'] , 'rating' => $_POST['rating']));
   	 	
   }

/* function active()
    {
    	$this->db->select('*');
    	$array=array('videos.active'=>1);
    	$this->db->where($array);
		$this->db->from('videos_categeory');
		$this->db->join('videos', 'videos.categeory= videos_categeory.id');
		$query = $this->db->get_where();
		return $query->result();
    	
    }*/
   
}
?>