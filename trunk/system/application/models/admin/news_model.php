<?php
class News_Model extends Model
 {
	function rename($data,$id){
		$oldname='assets/news/'.$data['upload_data']['file_name'];
		rename($oldname,'assets/news/news_img'.$id.'.jpg');
	}
	function getnews_details()
	{
		$result=$this->db->get('news');
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
    		$this->db->delete('news');
    		unlink('./assets/news/news_img'.$item.'.jpg');
    		unlink('./assets/news/news_img'.$item.'_thumb.jpg');
    	}
	}
	function getdetails($id)
	{
		$result=$this->db->get_where('news',array('id'=>$id));
		return $result->result();
		
	}
    function edit1($id,$breaking)
    {
    	
    	$data=array('heading'=>$_POST['heading'],
  					'summery'=>$_POST["summary"],
  					'description'=>$_POST["description"],
  					'breking_news'=>$breaking
  					);
  					print_r($data);
  		$this->db->where('id',$id);	
  		$this->db->update('news',$data);		
    }
    function get_newstype()
    {
    	$this->db->select('id,news_cat');
    	$result=$this->db->get('news_types');
    	return $result->result();
    }
    function get_newstype1($type)
    {
    	$this->db->select('*');
    	$this->db->where('type',$type);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function more_news(){
    	$result=$this->db->get('more');
    	return $result->result();
    }
    function get_news($type)
    {
 		$this->db->select('*');
    	$this->db->where('type',$type);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		
			return $query->result();
	}
	function get_news1($type)
	{
		$query=" from news where type=$type";
		return $query;
	}
	
	function count($type)
	{
		
    	$this->db->where('type',$type);
		$this->db->from('news');
		$count =$this->db->count_all_results();
		return $count;
		
		
	}
    function inner_news($id)
    {
    	$this->db->select('*');
    	$this->db->where('news.id',$id);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function active_news($id)
    {
    	$this->db->select('*');
    	$array=array('news.type'=>$id,'news.active'=>1);
    	$this->db->where('news.type',$id);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    	
    }
}
?>