<?php
class Srungaram_Model extends Model {
function get_special_news()
 	{
 		$this->db->order_by('id','desc');
		$result=$this->db->get('srungaram');
		return $result->result();
	}
	
  function getspecial_details()
	{
		$result=$this->db->get('srungaram');
		return $result->result();
	}
	
 function get_special_details($id)
	{
		$this->db->where('id',$id);
		$result=$this->db->get('srungaram');
		return $result->result();
	}
	
  function get_special()
    {   
 		$this->db->select('*');
 		$this->db->order_by("srungaram.insert_date", "desc");
    	$this->db->where('heading');
		$this->db->from('srungaram');
		$query = $this->db->get_where();
		
			return $query->result();
	}
   function get_special1($type)
	 {
		$query="from srungaram where type=$type order by srungaram.insert_date desc";
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
  		$this->db->update('srungaram',$data);		
    }
	
 function specialcount($type)
	{
		
    	$this->db->where('type',$type);
		$this->db->from('srungaram');
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
    		$this->db->delete('srungaram');
    		if(file_exists("./assets/srungaram/news_img'.$item.'.jpg")){
    		unlink('./assets/srungaram/news_img'.$item.'.jpg');
    		}
    		if(file_exists("./assets/srungaram/news_img'.$item.'_thumb.jpg")){
    		unlink('./assets/srungaram/news_img'.$item.'_thumb.jpg');
    		}
    	}
	}	
    function active_srung(){
    	$this->db->where('active',1);
    	$this->db->limit(4);
    	$this->db->order_by('insert_date','desc');
    	$result=$this->db->get('srungaram');
    	return $result->result();
    	//print_r($result->result());
    }
}
?>