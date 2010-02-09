<?php
class Videos_Model extends Model
 {
 	
 	
 function addcategeory()
	 {	
		$this->db->insert('videos_categeory',array('name'=>$_POST['name']));
	 }
 	function add($data)
 	{
 		
 	   if(!empty($data))
		     {
			    $result=$this->db->insert('videos_list',$data);
			     $i=$this->db->insert_id();
		     }
    										    
 		
 	 }
 	
 
 /*function addvideo()
	{
		
		$title=$this->input->post('title');
		$video_id=$this->input->post('video_id');
		$hero_name=$this->input->post('hero_name');
		$description=$this->input->post('description');
		$duration=$this->input->post('duration');
		$date_created=$this->input->post('date_created');
		$created_date=$this->input->post('created_date');
		$user_id=$this->input->post('user_id');
		$banned=$this->input->post('banned');
		$video_cat_id=$this->input->post('video_cat_id');
		$no_of_views=$this->input->post('no_of_views');
		//$video_cat_id=$this->input->post('video_cat_id');
		//$youtube_url=$this->input->Post('youtube_url');
		//$rating=$this->input->post('rating');
		//$date=$this->input->post('insert_date');
		
		$data=array('title'			=>	$title,
					'no_of_views'	=>	$no_of_views,
					'video_cat_id'  =>	$video_cat_id,
		             'video_id'     =>  $video_id,
		              'hero_name'   =>  $hero_name,
		              'description' =>  $description,
		               'duration'   =>  $duration,
		              'date_created'=>  $date_created,
		              'created_date'=>  $created_date,
		              'user_id'     =>  $user_id,
		               'banned'     =>  $banned,
		               'no_of_views'=> $no_of_views,
					//'rating'		=>  $rating,
					//'insert_date'	=>	$date
					);
		if(!empty($data))
		{
			$result=$this->db->insert('fa_videos_list',$data);
			$i=$this->db->insert_id();
		}
		
	return $message;
	}*/
 	
 	
 function getvideocategeories()
	{
  		
		$query=$this->db->get('videos_categeory');
		//print_r($query->result());
		return $query->result();
	}	
  
 function get_categeory()
	{
		$this->db->select('id,name');
		$result=$this->db->get('videos_categeory');
		return $result->result();
	}
	
 function getvideos($id,$table)
        {
      	$this->db->where('video_id',0);
      	$this->db->where('video_cat_id',$id);
      	$query=$this->db->get($table);
      	return $query;
      	//print_r($query);
       }

 function getvideodetails($id)
   {
   	$this->db->where('id',$id);
   	$query = $this->db->get('videos_list');       
   	return $query->result_array();
   	   	
   }
       
 function getcategeorydetails($id)
    {
   	  $this->db->where('id',$id);
   	  $query = $this->db->get('videos_categeory');
   	  return $query->result_array();
    }
   
 function editvideo($id)
   {
   	 $this->db->where('id',$id);
   	 $this->db->update('videos_list',array('id' => $_POST['id'], 'video_name' => $_POST['video_name'], 'no_of_views' => $_POST['no_of_views'] , 'video_id' => $_POST['video_id']));
   	 	
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
   	 	  $this->db->delete('videos_list');
   		  unlink('./assets/videos/video'.$item.'.flv');
   	 	  unlink('./assets/videos/image_preview/image'.$item.'.jpg');
   	 	  unlink('./assets/videos/image_preview/home_image'.$item.'_thumb.jpg');
   	  	  unlink('./assets/videos/image_preview/image'.$item.'_thumb.jpg');
   	 
   	   	 }
   	   } 
   
 function editcategeory()
   {
   	 $this->db->where('id',$_POST['id']);
   	 $this->db->update('videos_categeory',array('name' => $_POST['name']));
   	
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
   	   	    
   	   	  	$videos_list = array();
   	   	  	$videos_list = $this->getvideos($item,'videos_list');
   	   	  
   	   	   if($videos_list->num_rows()>0){
   	   	  	foreach($videos_list->result() as $video){
   	   	  	echo $video->id;		
   	   	  	$this->deletevideo($video->id);
   	   	  	}
   	   	  	
   	   	   }
   	   	  $this->db->where('id',$item);
   	     $this->db->delete('videos_categeory');
   	   	  }
   	    
   	   }

 	function insert_video($data)
	{
        $this->db->insert($this->videos_list, $data);
        $insert_id = $this->db->insert_id();
        $this->upload_video($insert_id);
        $test = $this->upload_video_img($insert_id);
        $this->thumbnail_creation($test);
        redirect('admin/videos/add_video');
	}	   
   	   
 function upload_video($insert_id)
	{
		//$tem = $insert_id;
		$this->load->library('youtube');
		$dir =  './assets/videos';   
	    $config['upload_path'] = $dir;
		$config['allowed_types'] = 'flv';
		$config['max_size']	= '90000000';
    	$this->upload->initialize($config);
		if (!$this->upload->do_upload('video'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
	        $filepath = $data['upload_data']['file_name'];
	       	$file_ext = $data['upload_data']['file_ext'];
	        rename($dir.'/'.$filepath,$dir.'/'.'video'.$insert_id.'.flv');
	        //$this->upload_video_img($insert_id);
	 	}
	}
	
	
 function upload_video_img($insert_id)
	{
	    $this->load->library('image_lib');
		$config['image_library']='gd2';
		$dir = './assets/videos/image_preview';
		$config['upload_path'] = $dir;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000000';
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('v_img'))
		{
			$error = array('error' => $this->upload->display_errors());
			print $error;
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
	        $filepath = $data['upload_data']['file_name'];
	        $file_ext = $data['upload_data']['file_ext'];
	        $rename_as = 'vimg'.$insert_id.$file_ext;
	        rename($dir.'/'.$filepath,$dir.'/'.$rename_as);
	        //$this->image_lib->clear();
	      	//$this->thumbnail_creation($insert_id);
		}
		return $rename_as;
	}
	
 function thumbnail_creation($test)
		{
			
		$configt['source_image'] = './assets/videos/image_preview'.$test;
	    $configt['new_image']='./assets/videos/image_preview/thumb_img/'.$test;
       	//$configt['create_thumb'] = TRUE;
		$configt['maintain_ratio'] = TRUE;
		$configt['width'] = 140;
		$configt['height'] = 110;
    	  	      
    	$this->image_lib->initialize($configt);
    	if(!$this->image_lib->resize())
    	{
    		
    		$error = array('error' => $this->image_lib->display_errors());
    	
		}
	   	$this->image_lib->clear();
		$msg = $this->lang->line('FAL_video_added');
		flashMsg($msg);
	}
	
	
 function get_videos($type,$limit)
    {
    	$this->db->where('video_id',0);
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
       
		$query = $this->db->get('videos_list');
		//print_r($query);
		
		return $query->result();
		
    }
 function get_video($id)
    {
    	$video_id = $id;
    	
		$query = "select * from videos_list
				 where active != 0";
				    
		if($video_id != NULL)
    	$query .= " AND id = $video_id ";
		$query .= " ORDER BY id desc";
		
		$result = $this->db->query($query);
  		return $result;
   	
		
    }
 function get_vlist($video_cat_id)
    {
    	
    	if($video_cat_id!='null')
    	{
			$this->db->where('video_cat_id',$video_cat_id);
    	}
   	 	   	
    	$this->db->orderby('no_of_views','desc');
    	$query = $this->db->get('videos_list');
    	
    	return $query->result();
    
    }
 function get_videocat($id)
    {
    	$video_cat_id = $id;
    	
		$query = "select * from videos_list
				 where active != 0";
				    
		if($video_cat_id != NULL)
		{
    		$query .= " AND video_cat_id = ".$video_cat_id."";
		}
			$query .= " ORDER BY id desc";
		
		$result = $this->db->query($query);
  		return $result->result();
   	}   
 function active()
    {
    	$this->db->limit(3);
    	$this->db->order_by('videos_list.id','desc');
		$query=$this->db->get('videos_list');
		return $query->result();
    	
    }
    
 function more_video(){
    	$result=$this->db->get('more');
    	return $result->result();
    } 

    
 function count_videos($catid)
     {
    	//echo $catid;
    	if($catid!=0)
    	{
    		$this->db->where('video_cat_id',$catid);
    	}
    	
    	$count=$this->db->count_all_results('videos_list');
    	return $count;
    	
    } 
    
 function getvideoname($id)
	{
		$this->db->where('id',$id);
		$this->db->select('video_name,no_of_views,title');
		$query = $this->db->get('videos_list');
		//print_r($query->result());
		return $query->result();
	  
	}
    
    
 function getlatestvideos($limit,$catid,$id)
	{
		
		$this->db->where('video_id',0);
		if($catid!=-1)
		{
			$this->db->where('video_cat_id',$catid);
		}
		if($id!=-1)
		{
			$this->db->where('id !=',$id);
		}
		$this->db->order_by('date_created','desc');
		if($limit!=0)
		{		$this->db->limit($limit);
		}
		//$this->db->order_by('rating','desc')
		$query = $this->db->get('videos_list');	
		return $query->result();	
		
	}
	
 function getvideosnames($limit)
	{
		$query = $this->db->get('videos_list');
		return $query->result();
		
	}
	
 function gettopviewedvideo($limit)
	{
		$this->db->where('video_id',0);
		$this->db->order_by('no_of_views','desc');
		$this->db->limit($limit);                       
		$query = $this->db->get('videos_list');
		return $query->result();
	}
	
  function getvideo($id)
        {
      	$this->db->where('video_id',0);
      	$this->db->where('video_cat_id',$id);
      	$query=$this->db->get('videos_list');
      	return $query;
       }
	
 function increase_viewcount($id)
   
	 {
	 	$this->db->query('update videos_list set no_of_views=no_of_views+1 where id='.$id);
   
	} 
       
  function get_root_cat_by_id($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('videos_categeory');
    	$result = $rs->row();
    	return $result->name;
    }     
	
	
}
?>