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
	
	
	
function delete($id){
	
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
    		$this->db->delete('astrolagy');
    		
    	}
}
	
/*function editcategeory($id)
   {
   	 $this->db->where('id',$_POST['id']);
   	 $this->db->update('astrolagy_cat',array('astrolagy_cat' => $_POST['astrolagy_cat']));
   	
   }*/	
	
		

 /*function deletecategeory($id)
    {   	
    	$removeid=array();
   	  if(isset($_POST['removeid'])){
   	  	$removeid = $_POST['removeid'];
   	  }
   	  else {
   	  	$removeid = array($id);
   	   	  }
   	   	   	   	
   	    foreach($removeid as $item){
   	   	    
   	   	  	$astrolagy = array();
   	   	  	$astrolagy = $this->getastrolagy($id,'astrolagy');
   	   	  
   	   	   if($astrolagy->num_rows()>0){
   	   	  	foreach($astrolagy->result() as $astrolagy){
   	   	  	echo $astrolagy->id;		
   	   	  	$this->deletevideo($astrolagy->id);
   	   	  	}
   	   	  	
   	   	   }
   	   	  $this->db->where('id',$item);
   	     $this->db->delete('astrolagy_cat');
   	   	  }
   	    
   	   }*/
	
	
	
	
	/*$this->db->select('distinct(movies.id),movies.movie_name,trailors.movie_id');
			$this->db->from('trailors');
			$this->db->join('movies','movies.id=trailors.movie_id');*/
	
	
	
	

 }
?>