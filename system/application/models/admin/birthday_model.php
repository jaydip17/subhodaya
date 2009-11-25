<?php 
class Birthday_Model extends Model {
	function rename($data,$id)
	{
		$oldname='assets/birthday/'.$data['upload_data']['file_name'];
		rename($oldname,'assets/birthday/birth_img'.$id.'.jpg');
	}
	function get_birthday()
	{
		$result=$this->db->get('orkut_friends');
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
    		$this->db->delete('orkut_friends');
    		unlink('./assets/birthday/birth_img'.$item.'.jpg');
    		unlink('./assets/greetings/birth_img'.$item.'_thumb.jpg');
    	}
	}
	function get_details($id)
	{
		$query=$this->db->get_where('orkut_friends',array('id'=>$id));
		return $query->result();
	}
	
 /*	function get_greetings($type="")
 	{
   		$this->db->select('*');
   		$this->db->order_by("greetings.insert_date", "desc");
   		$this->db->where('type',$type);
		$this->db->from('greeting_cat');
		$this->db->join('greetings','greetings.type=greeting_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
    function get_details($id){
    	$this->db->select('*');
   		$this->db->where('greetings.id',$id);
		$this->db->from('greeting_cat');
		$this->db->join('greetings','greetings.type=greeting_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
    function get_main_greetings($type){
    	$this->db->select('*');
   		$this->db->order_by("greetings.insert_date", "desc");
   		$array=array('type'=>$type,'greetings.active'=>1);
   		$this->db->where($array);
		$this->db->from('greeting_cat');
		$this->db->join('greetings','greetings.type=greeting_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
	function greeings_pagi($type)
	{
		$query="from greetings where type=$type order by greetings.insert_date desc";
		return $query;
	}
	function count($type)
	{
    	$this->db->where('type',$type);
		$this->db->from('greetings');
		$count =$this->db->count_all_results();
		return $count;
	}
	function greeting_details($type){
		$this->db->order_by("greetings.insert_date", "desc");
		$array=array('type'=>$type);
   		$this->db->where($array);
		$result=$this->db->get('greetings');
		return $result->result();
	}
    function edit1($id,$active)
    {
    	$data=array('name'=>$_POST['name'],
  					'summery'=>$_POST["summery"],
  					'active'=>$active
  					);
  		$this->db->where('id',$id);	
  		$this->db->update('greetings',$data);		
    }
   function get_root_cat_by_id($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('greeting_cat');
    	$result = $rs->row();
    	return $result->gree_cat;
    }*/
}
?>