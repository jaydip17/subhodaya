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
	function cinema()
	{
		$this->db->order_by("insert_date", "desc");
		$query=$this->db->get('cinema',10);
		
		return $query;	
	}
	function mahila()
	{
		$this->db->order_by("insert_date", "desc");
		$query=$this->db->get('mahila',10);

		return $query;	
	}
	function sahithi()
	{
		$this->db->order_by("insert_date", "desc");
		$query=$this->db->get('sahithi',10);
		return $query;	
	}
	function sports()
	{
		$this->db->where('type',4);
		$this->db->order_by("insert_date", "desc");
		$query=$this->db->get('news',10);
		return $query;	
	}
	function special()
	{
		$this->db->where('type',9);
		$this->db->order_by("insert_date", "desc");
		$query=$this->db->get('news',10);
		return $query;
	}
}
?>