<?php
class Feeds_model extends Model {
	function feeds_model()
	{
		parent::Model();
	}
	function news()
	{
		$query=$this->db->get('news',10);
		return $query;
	}
}
?>