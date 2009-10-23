<?php
class Feeds_model extends Model {
	function feeds_model()
	{
		parent::Model();
	}
	function news()
	{
		$this->db->order_by("insert_date", "desc");
		$query=$this->db->get('news',10);
		
		return $query;
	}
}
?>