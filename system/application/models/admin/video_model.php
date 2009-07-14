<?php
class Video_Model extends Model {

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