<?php
class Video_Model extends Model {
	
	function video_model()
	{
		parent::model();
	}
    
	function addcategeory(){
		$this->db->insert('video_categeory',array('name'=>$_POST['name']));
	}
	
	function getvideocategeories(){
		$query=$this->db->get('video_categeory');
		return $query->result();
	}
	
	function addvideo(){
		$this->db->insert('videos',array('name'=>$_POST['name'],'time'=>$_POST['time'],'no_of_views'=>$_POST['no_of_views'],
		                    'video_cat_id'=>$_POST['video_cat_id']));
		
		$id=$this->db->insert_id();
		$this->uploadvideo($id);
	}
	
        function rename($data,$id){
		$oldname='assets/video/'.$data['upload_data']['file_name'];
		rename($oldname,'assets/video/video_img'.$id.'.jpg');
	}
	
        function getvideo_details(){
		$result=$this->db->get('video');
		return $result->result();
	  }
        function more_video(){
    	$result=$this->db->get('more');
    	return $result->result();
    }
	
}
  
?>