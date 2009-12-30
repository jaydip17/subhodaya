<?php
class Video_Model extends Model
 {
	 function addcategeory()
	 {	
		$this->db->insert('videos_categeory',array('name'=>$_POST['name']));
	 }
	
  	function getvideocategeories()
	{
  		
		$query=$this->db->get('videos_categeory');
		//print_r($query->result());
		return $query->result();
	}
	
	function addvideo()
	{
		
		$name=$this->input->post('name');
		$time=$this->input->post('time');
		$no_of_views=$this->input->post('no_of_views');
		$video_cat_id=$this->input->post('video_cat_id');
		$rating=$this->input->post('rating');
		$date=$this->input->post('insert_date');
		
		$data=array('name'			=>	$name,
					'time'			=>	$time,
					'no_of_views'	=>	$no_of_views,
					'video_cat_id'  =>	$video_cat_id,
					'rating'		=>  $rating,
					'insert_date'	=>	$date);
		if(!empty($data))
		{
			$result=$this->db->insert('videos',$data);
			$i=$this->db->insert_id();
		}
		if($result==1)
		{
		$dir =  './assets/videos';   
	    $config['upload_path'] = $dir;
		$config['allowed_types'] = 'flv';
		$config['max_size']	= '90000000';		
		//$this->upload->initialize($config);
		$this->load->library('upload',$config);
		if (!$this->upload->do_upload('video'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->db->where('id',$i);
			$this->db->delete('videos');
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
		   $data = array('upload_data' => $this->upload->data());
	       $filepath = $data['upload_data']['file_name'];
	       rename($dir.'/'.$filepath , $dir.'/video'.$i.'.flv');
	       $this->db->where('id',$i);
	       $this->db->update('videos',array('video_uploaded'=>'1'));
	       $message='Video Added Successfully';
		   $this->session->set_flashdata('message',$message);	
		
			$dir1 =  './assets/videos/image_preview';   
		    $config1['upload_path'] = $dir1;
			$config1['allowed_types'] = 'gif|jpg|png';
			$config1['max_size']	= '90000000';
  
		    $this->load->library('image_lib');      
	    	$this->image_lib->initialize($config);
	
			if (!$this->upload->do_upload('image'))
			{
				$error = array('error' => $this->upload->display_errors());
				//print_r($error);
			}	
			else
			{
			   $data = array('upload_data' => $this->upload->data());
		       $filepath = $data['upload_data']['file_name'];
		       rename($dir1.'/'.$filepath , $dir1.'/image'.$i.'.jpg');	
		      
 	    	   	$filename = 'image'.$i.'.jpg';
	    	
		    	$config4['image_library'] = 'gd2';
		        $config4['source_image'] = $dir1.'/'.$filename;
		        $config4['new_image'] = 'home_image'.$i.'.jpg';
		      	$config4['create_thumb'] = TRUE;
				$config4['maintain_ratio'] = TRUE;     
				$config4['width'] = 122;
				$config4['height'] = 89;
	    	
	    	   $this->load->library('image_lib');
	    	   $this->image_lib->initialize($config4);
	    	
	    	if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());
				//print_r($error);
	    	}
	    	$this->image_lib->clear();
    	
    	
		//generating image to display in top list
		
    	$filename = 'image'.$i.'.jpg';
    	
    	$config3['image_library'] = 'gd2';
        $config3['source_image'] = $dir1.'/'.$filename;
      	$config3['create_thumb'] = TRUE;
		$config3['maintain_ratio'] = TRUE;
		$config3['width'] = 87;
		$config3['height'] =67;
    	
    	$this->load->library('image_lib'); 
    	$this->image_lib->initialize($config3);
    	
    	if(!$this->image_lib->resize())
    	{
    		$error = array('error' => $this->image_lib->display_errors());
			//print_r($error);
    	}
		}
	 }
	}
	return $message;
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
    function get_root_cat_by_id($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('videos_categeory');
    	$result = $rs->row();
    	return $result->name;
    }
	function get_videos($type,$limit)
    {
    	$this->db->where('video_uploaded',1);
    	//$this->db->order_by('no_of_views','desc');
		$this->db->limit($limit);
		if($type=='latest')
		{
			$this->db->order_by('id','desc');
		}
		else if($type=='top')
		{
			$this->db->order_by('no_of_views','desc');
		}
		else if($type=='active')
		{
			$this->db->where('active',$type);
		}
		else
		{
			$this->db->where('video_cat_id',$type);
		}
       
		$query = $this->db->get('videos');
		//print_r($query);
		
		return $query->result();
		
    }

function active()
    {
    	$array=array('videos.active'=>1,'video_uploaded'=>1);
    	$this->db->where($array);
    	$this->db->limit(4);
    	$this->db->order_by('videos.id','desc');
    	$this->db->order_by('no_of_views','desc');
    	$this->db->order_by('rating','desc');
		$query=$this->db->get('videos');
		//print_r($query->result());
		return $query->result();
    	
    }
function more_video(){
    	$result=$this->db->get('more');
    	return $result->result();
    } 
	
    /*function get_videos($type,$limit)
    {
    	$this->db->where('video_uploaded',1);
    	//$this->db->order_by('no_of_views','desc');
		$this->db->limit($limit);
		if($type=='latest')
		{
			$this->db->order_by('id','desc');
		}
		else if($type=='top')
		{
			$this->db->order_by('no_of_views','desc');
		}
		else if($type=='active')
		{
			$this->db->where('active',$type);
		}
		else
		{
			$this->db->where('video_cat_id',$type);
		}
       
		$query = $this->db->get('videos');
		//print_r($query);
		
		return $query;
		
    }*/
    
    function count_videos($catid)
     {
    	//echo $catid;
    	if($catid!=0)
    	{
    		$this->db->where('video_cat_id',$catid);
    	}
    	
    	$count=$this->db->count_all_results('videos');
    	return $count;
    	
    }
	/*function getvideocategeories($limit)
	{
	//if($limit!=0)
	//{
	  $this->db->limit($limit);
	// }
	   $query=$this->db->get('videos_categeory');
	   return $query;
	}*/
	
  /*function getvideos($id,$bywhat)
	 {
	
		$flag=1;
		$query='';
		if($bywhat!='')
		{
		
		$query.= "where to_Days(sysdate())- to_days(insert_date) >=" .$bywhat." and videouploaded=1 order by name asc";
			$flag=0;
		}
		if($id!=0)
		{
			$query .= 'where video_cat_id ='.$id.' and video_uploaded=1 order by name asc';
			$flag=0;
		}
		if($flag!=0)
		{
	    	$query.= " where video_uploaded=1";
		$query.=" order by name asc";
		}
			
		return $query;
	}*/
	 
 function getvideoname($id)
	{
		$this->db->where('id',$id);
		$this->db->select('name,no_of_views,rating');
		$query = $this->db->get('videos');
		return $query->result();
		
	}
	
function getlatestvideos($limit,$catid,$id)
	{
		
		$this->db->where('video_uploaded',1);
		if($catid!=-1)
		{
			$this->db->where('video_cat_id',$catid);
		}
		if($id!=-1)
		{
			$this->db->where('id !=',$id);
		}
		$this->db->order_by('insert_date','desc');
		if($limit!=0)
		{		$this->db->limit($limit);
		}
		//$this->db->order_by('rating','desc')
		$query = $this->db->get('videos');	
		return $query->result();	
		
	}
	
 function getvideosnames($limit)
	{
		$query = $this->db->get('videos');
		return $query->result();
		
	}
	
	
 function gettopviewedvideo($limit)
	{
		$this->db->where('video_uploaded',1);
		$this->db->order_by('no_of_views','desc');
		$this->db->limit($limit);                       
		$query = $this->db->get('videos');
		return $query->result();
	}
	
 function getvideo($id)
        {
      	$this->db->where('video_uploaded',1);
      	$this->db->where('video_cat_id',$id);
      	$query=$this->db->get('videos');
      	return $query;
       }
  
 
       
  function increase_viewcount($id)
   
	 {
	 	$this->db->query('update videos set no_of_views=no_of_views+1 where id='.$id);
   
	}
   /* function get_root_cat_by_id($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('videos_categeory');
    	$result = $rs->row();
    	//return $result->name;
    }*/
   
}
?>