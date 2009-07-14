<?php
class Mahila_Model extends Model {
	function get_mahilatype(){
		$this->db->select('id,cat_name');
    	$result=$this->db->get('mahila_cat');
    	return $result->result();
	}
	function rename($data,$id){
		$oldname='assets/mahila/'.$data['upload_data']['file_name'];
		rename($oldname,'assets/mahila/mahila_img'.$id.'.jpg');
	}
	
}
?>