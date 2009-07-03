<?php
class Cinema_Model extends Model {
	function get_cinemanewstype(){
		$this->db->select('id,cinema_type');
		$result=$this->db->get('cinema_cat');
		return $result->result();
	}
	function rename($data,$id){
		$oldname='assets/cinema/'.$data['upload_data']['file_name'];
		rename($oldname,'assets/cinema/ceni_img'.$id.'.jpg');
	}
	function getcinema_details(){
		$result=$this->db->get('cinema');
		return $result->result();
	}
	function cinemadetails($id){
		$result=$this->db->get_where('cinema',array('id'=>$id));
		return $result->result();
		
	}
  function edit1($id)
    {
    	$data=array('heading'=>$_POST['heading'],
  					'summary'=>$_POST["summary"],
  					'description'=>$_POST["description"],
  					);
  		$this->db->where('id',$id);	
  		$this->db->update('cinema',$data);		
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
    		$this->db->delete('cinema');
    		unlink('./assets/cinema/ceni_img'.$item.'.jpg');
    		unlink('./assets/cinema/ceni_img'.$item.'_thumb.jpg');
    	}
	}
    function get_cinematype1(){
   		$this->db->select('*');
   		$this->db->where('type','1');
		$this->db->from('cinema_cat');
		$this->db->join('cinema','cinema.type=cinema_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
    function get_cinematype2(){
   		$this->db->select('*');
   		$this->db->where('type','2');
		$this->db->from('cinema_cat');
		$this->db->join('cinema','cinema.type=cinema_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
    function get_cinematype3(){
   		$this->db->select('*');
   		$this->db->where('type','3');
		$this->db->from('cinema_cat');
		$this->db->join('cinema','cinema.type=cinema_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
    function get_cinematype4(){
   		$this->db->select('*');
   		$this->db->where('type','4');
		$this->db->from('cinema_cat');
		$this->db->join('cinema','cinema.type=cinema_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
    function get_cinematype5(){
   		$this->db->select('*');
   		$this->db->where('type','5');
		$this->db->from('cinema_cat');
		$this->db->join('cinema','cinema.type=cinema_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
    function get_cinematype6(){
   		$this->db->select('*');
   		$this->db->where('type','6');
		$this->db->from('cinema_cat');
		$this->db->join('cinema','cinema.type=cinema_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
}
?>