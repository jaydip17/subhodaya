<?php
class Poll_Model extends Model {
	function get_polltype(){
		$where = "id in(4,5)";
		$this->db->where($where);
		$deatils=$this->db->get('more');
		return $deatils->result();
	}
	function get_polls(){
		$result=$this->db->get('poll');
		return $result->result();
	}
	function get_newspolls($type){
		$this->db->where('cat_id',$type);
		$result=$this->db->get('poll');
		return $result->result();	
	}
	function get_newspolls1($type){
		$this->db->where('id',$type);
		$result=$this->db->get('poll');
		return $result->result();	
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
    		$this->db->delete('news');
    	}
	}
	function get_edit($id){
		$result=$this->db->get_where('poll',array('id'=>$id));
		return $result->result();
	}
	function insert_home($poll_id = '',$answer = ''){		
		if($answer !='')
		{
			$Percentages=$this->update_poll_result($answer,$poll_id);
		}

		return $Percentages;
	}
	function update_poll_result($option = '',$poll_id = 0)
	{
		if($poll_id != 0)
		{
			
			$this->db->where('id',$poll_id);
			$result_set = $this->db->get('poll');
			$result  = $result_set->result_array();
		switch ($option)
			{
				case 'a': 
					$option_val = intval($result[0]['optiona'])+1;
					$set_column = 'optiona';
					break;
				case 'b': 
					$option_val = intval($result[0]['optionb'])+1;
					$set_column = 'optionb';
					break;
				case 'c': 
					$option_val = intval($result[0]['optionc'])+1;
					$set_column = 'optionc';
					break;
			}
			$ip=$this->input->ip_address();
			$array=array('pollid'=>$poll_id,'ipadress'=>$ip);
			$this->db->where($array);
			$ip_result=$this->db->get('ipaddress');
			$ip_result_set=$ip_result->result_array();
			
			if($ip_result_set){
				$per=$this->poll_result($poll_id);
				return $per;
			}else{
			$data=array('pollid'=>$poll_id,'ipadress'=>$ip);
			$res1=$this->db->insert('ipaddress',$data);
			if($res1==1)
			$update_query = "Update poll set $set_column = $option_val Where id = $poll_id";
			$res2=$this->db->query($update_query);
			if($res2==1)
				$per=$this->poll_result($poll_id);
			}
		
			return $per;
		}
	}
	function poll_result($poll_id= ''){
		if($poll_id != 0){
			$this->db->where('id',$poll_id);
			$poll_result=$this->db->get('poll');
			$result=$poll_result->result_array();
		  	$a=$result[0]['optiona'];
		    $b=$result[0]['optionb'];
		    $c=$result[0]['optionc'];
		    $t=$a+$b+$c;
		    $y=$a/$t*100;
		    $n=$b/$t*100;
		    $yn=$c/$t*100;
		    $data=array('yes'=>$y,'no'=>$n,'yn'=>$yn);
		}
		return $data;
	}
	
}
?>