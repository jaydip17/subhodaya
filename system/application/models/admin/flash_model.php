<?php
class Flash_model extends Model {
	function Flash_model()
	{
		parent::Model();
	}
	function get_flash_images()
	{
		$this->db->limit(5);
		$this->db->order_by('slideimages.id','desc');
		$query=$this->db->get('slideimages');
		//print_r($query->result());
		return $query;
	}
	function flash_greetings()
	{
		$this->db->limit(5);
		$this->db->order_by('flash_greet.id','desc');
		$query=$this->db->get('flash_greet');
		$result=$query->result();
		return $result;
	}
}
?>