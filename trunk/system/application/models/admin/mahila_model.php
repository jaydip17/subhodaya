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
	function edit($id)
	{
		$this->db->where('id',$id);
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
    		if(file_exists("./assets/mahila/news_img'.$item.'.jpg")){
    		unlink('./assets/mahila/news_img'.$item.'.jpg');
    		}
    		if(file_exists("./assets/mahila/news_img'.$item.'_thumb.jpg")){
    		unlink('./assets/mahila/news_img'.$item.'_thumb.jpg');
    		}
    	}
	}
    function edit1($id,$homepage)
    {
    	
    	$data=array('heading'=>$_POST['heading'],
    	            'eng_heading'=>$_POST['engheading'],
  					'summary'=>$_POST["summary"],
  					'description'=>$_POST["description"],
  					'homepage'=>$homepage
  					);
  				
  		$this->db->where('id',$id);	
  		$this->db->update('mahila',$data);		
    }
    function getdetails($id,$headingonly,$limit)
	{
		if($limit==5)
		{
			$this->db->limit(5);
		}
		if($headingonly=='yes')
		{
			$this->db->select('id,heading,summary,cat_id');
		}
		$this->db->order_by('id','desc');
		$result=$this->db->get_where('mahila',array('cat_id'=>$id));
		return $result->result();
		
	}
   function get_mahilatype1($type)
    {
    	$this->db->select('*');
    	$this->db->order_by("mahila.insert_date", "desc");
    	$arrary=array('cat_id'=>$type,'mahila.active'=>0);
    	$this->db->where($arrary);
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
	function evenmore($id)
	{
		$this->db->select('cat_id');
		$this->db->where('id',$id);
		$query=$this->db->get('mahila');
		$result=$query->result();
		$cat_id=$result['0']->cat_id;
		$evenmore=$this->active_mahila($cat_id);
		return $evenmore;	
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
    function active_mahila($limit)
    {
    	$this->db->select('*');
    	$array=array('mahila.active'=>1);
    	$this->db->where($array);
    	$this->db->limit($limit);
    	$this->db->order_by("mahila.insert_date", "desc");
		$this->db->from('mahila_cat');
		$this->db->join('mahila', 'mahila.cat_id= mahila_cat.id');
		$this->db->order_by('mahila.id','desc');
		$query = $this->db->get_where();
		return $query->result();
    }
   function get_root_cat_by_id($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('mahila_cat');
    	$result = $rs->row();
    	return $result->cat_name;
    }
    function most_read_mahila_news($mahila_cat)
    {
    		$array=array(
			'cat_id'			=>	$mahila_cat,
		);
		$this->db->order_by('views','desc');
		$this->db->order_by('mahila.id','desc');
		$this->db->where($array);
		$this->db->limit(15);
		$this->db->from('mahila_cat');
		$this->db->join('mahila', 'mahila.cat_id= mahila_cat.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function mahila_active_news($mahil_cat){
    		$this->db->select('*');
    	$array=array('mahila.active'=>1,'cat_id'=>$mahil_cat);
    	$this->db->where($array);
    	$this->db->limit(8);
    	$this->db->order_by("mahila.insert_date", "desc");
		$this->db->from('mahila_cat');
		$this->db->join('mahila', 'mahila.cat_id= mahila_cat.id');
		$this->db->order_by('mahila.id','desc');
		$query = $this->db->get_where();
		return $query->result();
    }
	function get_views($id)
	{
		$this->db->where('id',$id);
  		$this->db->select('id, views');
  		$query=$this->db->get_where('mahila');
  		$result=$query->result();
		//print_r($result);
		 $pre_views=$result['0']->views;
				 $id=$result['0']->id;
		$this->insert_views($id,$pre_views);
	
	}
	function insert_views($id,$pre_views)
	{
		$this->db->where('id', $id);
		$views=$pre_views+1;
		$data=array(
				'mahila.views'	=>	$views
			);
		$this->db->update('mahila', $data);
	}
   
}
?>