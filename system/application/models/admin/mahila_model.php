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
			$this->db->select('id,heading');
		}
		$result=$this->db->get_where('mahila',array('cat_id'=>$id));
		return $result->result();
		
	}

}
?>