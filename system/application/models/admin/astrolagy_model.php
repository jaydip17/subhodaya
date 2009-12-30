<?php

class Astrolagy_Model extends Model
 {
 	
 function Astrolagy_Model(){
		parent::Model();
		
	}
 	
 function get_astrolagycat(){
 	  $this->db->select('id,astrolagy_cat');
 	  $query=$this->db->get('astrolagy_cat');
	  return $query->result();
 		
   }
 	
  function get_astrolagytype(){
  	  $this->db->select('id,astrolagy_type');
   	  $query=$this->db->get('astrolagy_types');
   	  return $query->result();
   
   }
 	
  function getastrolagy_details($id){
  	
  	 
  	  $result=$this->db->get_where('astrolagy',array('id'=>$id));
	  return $result->result();
   	
   }
   
   function get_astrolagy1($type){
   	     
   	      $this->db->select('distinct(astrolagy_types.id),astrolagy_types.astrolagy_type,astrolagy.astrolagy_type');
		  $this->db->from('astrolagy');
		  $this->db->join('astrolagy_types','astrolagy_types.id=astrolagy.astrolagy_type');
   
		  $query="from astrolagy where astrolagy_cat=$type order by astrolagy.id desc";
		  return $query;
	}
   
/*function get_astrolagy($type){
	
	 $datestring = " %Y-%m-%d ";
		$today=mdate($datestring);
		$array=array('astrolagy_type'=>$type,'display_date'=>$today);
		$this->db->limit(1);
		$this->db->where($array);
		$result=$this->db->get('astrolagy');
		//print_r($result->result());
		return $result->result();	
	
}*/
	
	
  function edit1($id)
    {
    
    	$data=array('astrolagy_type'=>$_POST["astrolagy_type"],
  					'description'=>$_POST["description"],
  					 'display_date'=>$_POST["display_date"]
  					);
  		$this->db->where('id',$id);	
  		$this->db->update('astrolagy',$data);		
    }
	
	
	
function delete($id)
	{
	     $remove=array();
    	if(isset($_POST['remove']))
    	{
    		$remove = $_POST['removeid'];
    	}
    	else 
    	{
    		$remove = array($id);
    	}
    	foreach($remove as $item)
    	  {
    		$this->db->where('id',$item);
    		$this->db->delete('astrolagy');
    	  }
	}
	function get_today_rasi($date,$astrolagy_cat)
	{
		$array=array('display_date'=>$date,'astrolagy_cat'=>$astrolagy_cat);
		$this->db->where($array);
		//$this->db->select('description','astrolagy.id','astrolagy_types.id');
		$this->db->from('astrolagy');
		$this->db->join('astrolagy_types', 'astrolagy_types.id = astrolagy.astrolagy_type');
		$query = $this->db->get();
		return $query->result();
	}
	function get_day_details($ct_id,$date,$id)
	{
		$this->db->select('description');
		$arrary=array(
			'astrolagy_type'=>$ct_id,
			'display_date' =>$date,
			'astrolagy_cat'=>$id
		);
		$this->db->where($arrary);
		$query=$this->db->get('astrolagy');
		return $query->result();
	}
	function get_week_details($cat_id,$week,$id)
	{
		$sql='SELECT * FROM `astrolagy` WHERE astrolagy_type='.$cat_id.' and astrolagy_cat='.$id.'  and week(display_date)='.$week;
		$result=$this->db->query($sql);
		return $result->result();
	}
	function get_month_details($cat_id,$m,$id)
	{
		$sql='SELECT * FROM `astrolagy` WHERE astrolagy_type='.$cat_id.' and astrolagy_cat='.$id.'  and month(display_date)='.$m;
		$result=$this->db->query($sql);
		return $result->result();
	}
	function get_year_details($cat_id,$y,$id)
	{
		$sql='SELECT * FROM `astrolagy` WHERE astrolagy_type='.$cat_id.' and astrolagy_cat='.$id.'  and year(display_date)='.$y;
		$result=$this->db->query($sql);
		return $result->result();
	}

	

 }
?>