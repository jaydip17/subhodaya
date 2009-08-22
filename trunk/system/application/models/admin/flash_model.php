<?php
class Flash_model extends Model {
	function Flash_model()
	{
		parent::Model();
	}
	function get_flash_images()
	{
		$this->db->limit(5);
		$query=$this->db->get('slideimages');
		return $query;
	}
}
?>