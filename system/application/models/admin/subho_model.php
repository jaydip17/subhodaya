<?php
class Subho_Model extends Model {
function get_special_news()
 	{
 		$this->db->order_by('id','desc');
		$result=$this->db->get('subhodaya_spec');
		return $result->result();
	}
	
  function getspecial_details()
	{
		$result=$this->db->get('subhodaya_spec');
		return $result->result();
	}
	
 function get_special_details($id)
	{
		$this->db->where('id',$id);
		$result=$this->db->get('subhodaya_spec');
		return $result->result();
	}
	
  function get_special()
    {   
 		$this->db->select('*');
 		$this->db->order_by("subhodaya_spec.insert_date", "desc");
    	$this->db->where('heading');
		$this->db->from('subhodaya_spec');
		$query = $this->db->get_where();
		
			return $query->result();
	}
   function get_special1($type)
	 {
		$query="from Subhodaya_spec where type=$type order by Subhodaya_spec.insert_date desc";
		return $query;
	 }

 
  function specialedit1($id,$active)
    {
     if(!isset($_POST['active']))
   	{
		$active=0;
   	}else{
   		$active=$_POST['active'];
   	}
    	$data=array('heading'=>$_POST['heading'],
  					'summary'=>$_POST["summary"],
  					'description'=>$_POST["description"],
    				'active'=>$active
  					);
  		$this->db->where('id',$id);	
  		$this->db->update('subhodaya_spec',$data);		
    }
	
 function specialcount($type)
	{
		
    	$this->db->where('type',$type);
		$this->db->from('subhodaya_spec');
		$count =$this->db->count_all_results();
		return $count;
		
		
	} 
    
   function specialdelete($id)
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
    		$this->db->delete('subhodaya_spec');
    		if(file_exists("./assets/special_newsimg/news_img'.$item.'.jpg")){
    		unlink('./assets/special_newsimg/news_img'.$item.'.jpg');
    		}
    		if(file_exists("./assets/special_newsimg/news_img'.$item.'_thumb.jpg")){
    		unlink('./assets/special_newsimg/news_img'.$item.'_thumb.jpg');
    		}
    	}
	}
	
  function active_special($id,$type)
    {
    	if($type=="home")
    	{
    		$this->db->select('subhodaya_spec.id,heading,summary');
    	}
    	else {
    	$this->db->select('*');
    	}
    	$array=array('subhodaya_spec.heading'=>$id,'subhodaya_spec.active'=>1);
    	$this->db->where($array);
		$this->db->from('subhodaya_spec');
		$this->db->order_by('subhodaya_spec.id','desc');
		$query = $this->db->get_where();
		return $query->result();
    }	
	
  function get_home_stories()
    {
    	$this->db->select('id,heading,summary');
    	$where=array('active'=>'1');
    	$this->db->where($where);
    	$this->db->limit(4);
    	$this->db->order_by('id','desc');
    	$query=$this->db->get('subhodaya_spec');
    	return $query->result();
    }
}
?>