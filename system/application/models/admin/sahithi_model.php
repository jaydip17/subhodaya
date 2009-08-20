<?php
class Sahithi_Model extends Model {
	function Sahithi_Model(){
		parent::Model();
		
	}
	function get_sahithitype()
	{
		$query=$this->db->get('sahithi_cat');
		return $query->result();
		
	}
    function getsahithi_details()
	{
		$result=$this->db->get('sahithi');
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
    		$this->db->delete('sahithi');
    		unlink('./assets/sahithi/news_img'.$item.'.jpg');
    		unlink('./assets/sahithi/news_img'.$item.'_thumb.jpg');
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
  		$this->db->update('sahithi',$data);		
    }
    function getdetails($id,$headingonly)
	{
		if($headingonly=='yes')
		{
			$this->db->select('id,heading');
		}
		$result=$this->db->get_where('sahithi',array('cat_id'=>$id));
		return $result->result();
		
	}
   
    function get_newstype1($type)
    {
    	$this->db->select('*');
    	$this->db->order_by("news.insert_date", "desc");
    	$this->db->where('type',$type);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function more_sahithi(){
    	$result=$this->db->get('more');
    	return $result->result();
    }
    function get_sahithi($type)
    {
 		$this->db->select('*');
 		$this->db->order_by("news.insert_date", "desc");
    	$this->db->where('type',$type);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		
			return $query->result();
	}
	function get_sahithi1($type)
	{
		$query="from news where type=$type order by news.insert_date desc";
		return $query;
	}
	
	function count($type)
	{
		
    	$this->db->where('type',$type);
		$this->db->from('news');
		$count =$this->db->count_all_results();
		return $count;
		
		
	}
    function inner_sahithi($id)
    {
    	$this->db->select('*');
    	$this->db->where('news.id',$id);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function active_sahithi($id)
    {
    	$this->db->select('*');
    	$array=array('news.type'=>$id,'news.active'=>1);
    	$this->db->where($array);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    }
}
?>