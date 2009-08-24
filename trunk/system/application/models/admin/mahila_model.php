<?php
class Mahila_Model extends Model {
	function Mahila_Model(){
		parent::Model();
		
	}
	function get_mahilatype()
	{
		$query=$this->db->get('mahila_cat');
		return $query->result();
		
	}
    function getmahila_details()
	{
		$result=$this->db->get('mahila');
		return $result->result();
	}
    function delete($id)
	{
		  $remove=array();
    	if(isset($_POST['remove']))
    	{
    		$remove = $_POST['removeid'];
    		
    	}
    	else {
    		$remove = array($id);
    	}
    	foreach($remove as $item)
    	{
    		$this->db->where('id',$item);
    		$this->db->delete('mahila');
    		unlink('./assets/mahila/news_img'.$item.'.jpg');
    		unlink('./assets/mahila/news_img'.$item.'_thumb.jpg');
    	}
	}
    function edit1($id,$homepage)
    {
    	
    	$data=array('heading'=>$_POST['heading'],
  					'summary'=>$_POST["summary"],
  					'description'=>$_POST["description"],
  					'homepage'=>$homepage
  					);
  				
  		$this->db->where('id',$id);	
  		$this->db->update('mahila',$data);		
    }
    function getdetails($id,$headingonly)
	{
		if($headingonly=='yes')
		{
			$this->db->select('id,heading,summary');
		}
		$result=$this->db->get_where('mahila',array('cat_id'=>$id));
		return $result->result();
		
	}
 function get_mahilatype1($type)
    {
    	$this->db->select('*');
    	$this->db->order_by("mahila.insert_date", "desc");
    	$this->db->where('type',$type);
		$this->db->from('mahila_cat');
		$this->db->join('mahila', 'mahila.cat_id= mahila_cat.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function more_mahila(){
    	$result=$this->db->get('more');
    	return $result->result();
    }
    function get_mahila($type)
    {   
 		$this->db->select('*');
 		$this->db->order_by("mahila.insert_date", "desc");
    	$this->db->where('cat_id',$type);
		$this->db->from('mahila_cat');
		$this->db->join('mahila', 'mahila.cat_id= mahila_cat.id');
		$query = $this->db->get_where();
		
			return $query->result();
	}
	function get_mahila1($type)
	{
		$query="from mahila where cat_id=$type order by mahila.insert_date desc";
		return $query;
	}
	
	function count($type)
	{
		
    	$this->db->where('cat_id',$type);
		$this->db->from('mahila');
		$count =$this->db->count_all_results();
		return $count;
		
		
	}
    function inner_mahila($id)
    {
    	$this->db->select('*');
    	$this->db->where('mahila.id',$id);
		$this->db->from('mahila_cat');
		$this->db->join('mahila', 'mahila.cat_id= mahila_cat.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function active_mahila($id)
    {
    	$this->db->select('*');
    	$array=array('mahila.cat_id'=>$id,'mahila.active'=>1);
    	$this->db->where($array);
		$this->db->from('mahila_cat');
		$this->db->join('mahila', 'mahila.cat_id= mahila_cat.id');
		$query = $this->db->get_where();
		return $query->result();
    }

}
?>