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
 function get_sahithi_details($id)
	{
		$this->db->where('id',$id);
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
    		if(file_exists("./assets/sahithi/news_img'.$item.'.jpg")){
    		unlink('./assets/sahithi/news_img'.$item.'.jpg');
    		}
    		if(file_exists("./assets/sahithi/news_img'.$item.'_thumb.jpg")){
    		unlink('./assets/sahithi/news_img'.$item.'_thumb.jpg');
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
  		$this->db->update('sahithi',$data);		
    }
    function getdetails($id,$headingonly,$limit)
	{
	
		switch($limit)
		{
			case 6:$this->db->limit(6);
			        break;
			case 8:$this->db->limit(8);
			        break;
		}
		if($headingonly=='yes')
		{
			$this->db->select('id,heading,summary,cat_id');
		}
		$this->db->order_by('id','desc');
		$result=$this->db->get_where('sahithi',array('cat_id'=>$id));
		return $result->result();
		
	}
   
    function get_sahithitype1($type)
    {
    	$this->db->select('*');
    	$this->db->order_by("sahithi.insert_date", "desc");
    	$this->db->where('type',$type);
		$this->db->from('sahithi_cat');
		$this->db->join('sahithi', 'sahithi.cat_id= sahithi_cat.id');
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
 		$this->db->order_by("sahithi.insert_date", "desc");
 		$array=array('cat_id'=>$type);
    	$this->db->where($array);
		$this->db->from('sahithi_cat');
		$this->db->join('sahithi', 'sahithi.cat_id= sahithi_cat.id');
		$query = $this->db->get_where();
		
			return $query->result();
	}
	function get_sahithi1($type)
	{
		$query="from sahithi where cat_id=$type order by sahithi.insert_date desc";
		return $query;
	}
    function evenmore($id)
	{
		$this->db->select('cat_id');
		$this->db->where('id',$id);
		$query=$this->db->get('sahithi');
		$result=$query->result();
		$cat_id=$result['0']->cat_id;
		$evenmore=$this->active_sahithi($cat_id,$type="normal");
		return $evenmore;	
	}
	function count($type)
	{
		
    	$this->db->where('cat_id',$type);
		$this->db->from('sahithi');
		$count =$this->db->count_all_results();
		return $count;
		
		
	}
    function inner_sahithi($id)
    {
    	$this->db->select('*');
    	$this->db->where('sahithi.id',$id);
		$this->db->from('sahithi_cat');
		$this->db->join('sahithi', 'sahithi.cat_id= sahithi_cat.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function active_sahithi($limit)
    {
    	$this->db->select('*');
    	$array=array('sahithi.active'=>1);
    	$this->db->where($array);
    	$this->db->limit($limit);
		$this->db->from('sahithi_cat');
		$this->db->join('sahithi', 'sahithi.cat_id= sahithi_cat.id');
		$this->db->order_by('sahithi.id','desc');
		$query = $this->db->get_where();
		return $query->result();
    }
    function get_home_stories($type)
    {
    	$this->db->select('id,heading,summary,cat_id');
    	$where=array('homepage'=>'1','cat_id'=>$type);
    	$this->db->where($where);
    	$this->db->limit(4);
    	$this->db->order_by('id','desc');
    	$query=$this->db->get('sahithi');
    	return $query->result();
    }
   function get_root_cat_by_id($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('sahithi_cat');
    	$result = $rs->row();
    	return $result->cat_name;
    }
    function most_read_sahithi_news($cat_id){
        		$array=array(
			'cat_id'			=>	$cat_id,
		);
		$this->db->order_by('views','desc');
		$this->db->order_by('sahithi.id','desc');
		$this->db->where($array);
		$this->db->limit(15);
		$this->db->from('sahithi_cat');
		$this->db->join('sahithi', 'sahithi.cat_id= sahithi_cat.id');
		$query = $this->db->get_where();
		return $query->result();	
    }
    function sahithi_active_news($cat_id)
    {
    	$this->db->select('*');
    	$array=array('sahithi.active'=>1,'cat_id'=>$cat_id);
    	$this->db->where($array);
    	$this->db->limit(8);
    	$this->db->order_by("sahithi.insert_date", "desc");
		$this->db->from('sahithi_cat');
		$this->db->join('sahithi', 'sahithi.cat_id= sahithi_cat.id');
		$this->db->order_by('sahithi.id','desc');
		$query = $this->db->get_where();
		return $query->result();
    }
	function get_views($id)
	{
		$this->db->where('id',$id);
  		$this->db->select('id, views');
  		$query=$this->db->get_where('sahithi');
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
				'sahithi.views'	=>	$views
			);
		$this->db->update('sahithi', $data);
	}
}
?>
