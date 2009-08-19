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
    function getnews_details()
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

}
?>