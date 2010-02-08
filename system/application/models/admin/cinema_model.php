<?php
class Cinema_Model extends Model {
	function get_cinemanewstype(){
		$this->db->select('id,cinema_type');
		$result=$this->db->get('cinema_cat');
		return $result->result();
	}
	function rename($data,$id){
		$oldname='assets/cinema/'.$data['upload_data']['file_name'];
		rename($oldname,'assets/cinema/news_img'.$id.'.jpg');
	}
	function getcinema_details($type){
		$result=$this->db->get_where('cinema',array('type'=>$type));
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
    	             'active'   =>$_POST['active'],
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
    		unlink('./assets/cinema/news_img'.$item.'.jpg');
    		unlink('./assets/cinema/news_img'.$item.'_thumb.jpg');
    	}
	}
    function get_cinematype($type=""){
   		$this->db->select('*');
   		$this->db->order_by("cinema.insert_date", "desc");
   		$array=array('type'=>$type);
    	$this->db->where($array);
   		$this->db->limit(6);
		$this->db->from('cinema_cat');
		$this->db->join('cinema','cinema.type=cinema_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
    function get_all($type){
    	$this->db->select('*');
    	$this->db->order_by("cinema.insert_date", "desc");
    	$array=array('type'=>$type,'cinema.active'=>0);
    	$this->db->where($array);
		$this->db->from('cinema_cat');
		$this->db->join('cinema', 'cinema.type=cinema_cat.id');
		$query = $this->db->get_where();
			return $query->result();
		
    }
	function get_cinema1($type)
	{
		$query="from cinema where type=$type order by cinema.insert_date desc";
		return $query;
	}
	function count($type)
	{
    	$this->db->where('type',$type);
		$this->db->from('cinema');
		$count =$this->db->count_all_results();
		return $count;
	}
    function inner($id)
    {
    	$this->db->select('*');
    	$this->db->where('cinema.id',$id);
		$this->db->from('cinema_cat');
		$this->db->join('cinema', 'cinema.type= cinema_cat.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function get_activenews($limit)
    {
   		$this->db->select('*');
    	$this->db->where('cinema.active',1);
    	$this->db->limit($limit);
    	$this->db->order_by("cinema.insert_date", "desc");
		$this->db->from('cinema_cat');
		$this->db->join('cinema', 'cinema.type= cinema_cat.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function get_activenews1($type,$limit)
    {
   		$this->db->select('*');
   		$array=array('cinema.type'=>$type,'cinema.active'=>1);
    	$this->db->where($array);
    	$this->db->limit($limit);
    	$this->db->order_by("cinema.insert_date", "desc");
		$this->db->from('cinema_cat');
		$this->db->join('cinema', 'cinema.type= cinema_cat.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function get_root_cat_by_id($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('cinema_cat');
    	//print_r($rs);
    	$result = $rs->row();
    	//print_r($result);
    	return $result->cinema_type;
    }
    function breaking_news($news_cat)
    {
    	$array=array('active'=>1,'type'=>$news_cat);
		$this->db->where($array);
		$this->db->order_by('id','desc');
		$this->db->limit(8);
		$query=$this->db->get('cinema');
		return $query->result();	    
    }
	function most_read_news($news_cat){
		$array=array(
			'type'			=>	$news_cat,
		);
		$this->db->order_by('views','desc');
		$this->db->order_by('cinema.id','desc');
		$this->db->where($array);
		$this->db->limit(15);
		$this->db->from('cinema_cat');
		$this->db->join('cinema', 'cinema.type= cinema_cat.id');
		$query = $this->db->get_where();
		return $query->result();
	}
	function reviews_rating($rat_id)
	{
		$this->db->where('id',$rat_id);
		$this->db->select('total_votes,total_value');
		$query=$this->db->get('ratings');
		$result=$query->result();
		return $result;
	}
	function get_views($id)
	{
		$this->db->where('id',$id);
  		$this->db->select('id, views');
  		$query=$this->db->get_where('cinema');
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
				'cinema.views'	=>	$views
			);
		$this->db->update('cinema', $data);
	}
}
?>