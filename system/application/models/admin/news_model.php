<?php
class News_Model extends Model
 {
	function rename($data,$id){
		$oldname='assets/news/'.$data['upload_data']['file_name'];
		rename($oldname,'assets/news/news_img'.$id.'.jpg');
	}
	function getnews_details($type)
	{
		$result=$this->db->get_where('news',array('type'=>$type));
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
     if(!isset($_POST['active']))
   	{
		$active=0;
   	}else{
   		$active=$_POST['active'];
   	}
    	$data=array('heading'=>$_POST['heading'],
    				'eng_heading'=>$_POST['eng_heading'],
  					'summary'=>$_POST["summary"],
  					'description'=>$_POST["description"],
  					'breking_news'=>$breaking,
    				'active'=>$active
  					);
  		$this->db->where('id',$id);	
  		$this->db->update('news',$data);		
    }
    function get_newstype($active)
    {
    	$this->db->select('id,news_cat');
    	$this->db->where('active',$active);
    	$result=$this->db->get('news_types');
    	return $result->result();
    }
    function get_newstypes()
    {
   		 $this->db->select('id,news_cat');
    	$result=$this->db->get('news_types');
    	return $result->result();	
    }
    function get_newstype1($type)
    {
    	$this->db->select('*');
    	$this->db->order_by("news.insert_date", "desc");
    	$array=array('type'=>$type,'news.breking_news'=>0);
    	$this->db->where($array);
    	$this->db->limit(6);
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
 		$this->db->order_by("news.insert_date", "desc");
    	$this->db->where('type',$type);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		
			return $query->result();
	}
	function get_news1($type)
	{
		$query="from news where type=$type order by news.insert_date desc";
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
    function active_news($type)
    {
    	$this->db->select('*');
    	$array=array('news.type'=>$type,'news.active'=>1);
    	$this->db->where($array);
    	$this->db->order_by("insert_date", "desc"); 
    	$this->db->limit(8);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    	
    }
     function active_news1($limit)
    {
    	$this->db->select('*');
    	$array=array('news.breking_news'=>1);
    	$this->db->where($array);
    	if(!empty($limit)){
    		$this->db->limit($limit);
    	}else{
    		$this->db->limit(10);
    	}
    	
    	$this->db->order_by("insert_date", "desc");
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    	
    }
    
    // function to get the category name by id 
    
    function get_root_cat_by_id($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('news_types');
    	$result = $rs->row();
    	return $result->news_cat;
    }
    
    //comments news
 	
    function get_comments($type,$id){
    	$arrary=array('newsid'=>$id,'news_type'=>$type);
    	$this->db->where($arrary);
    	$this->db->limit(5);
    	$this->db->order_by('id','desc');
    	$result=$this->db->get('comments');
    	return $result->result();
    }
	function count_comments($type,$id){
		$arrary=array('newsid'=>$id,'news_type'=>$type);
		$this->db->where($arrary);
		$this->db->like('newsid', $id);
		$this->db->from('comments');
		$res=$this->db->count_all_results();
		return $res;
	}
	//all active news
	function all_active_news()
	{
		$this->db->where('active',1);
		$this->db->order_by('id','desc');
		$this->db->limit(10);
		$query=$this->db->get('news');
		return $query->result();
	}
	//breaking news
	function breaking_news($news_cat,$limit)
	{
		$array=array('breking_news'=>1,'type'=>$news_cat);
		$this->db->where($array);
		$this->db->order_by('id','desc');
		$this->db->limit($limit);
		$query=$this->db->get('news');
		return $query->result();	
	}
 	function breaking_news1()
	{
		$array=array('breking_news'=>1);
		$this->db->where($array);
		$this->db->order_by('id','desc');
		$this->db->limit(8);
		$query=$this->db->get('news');
		return $query->result();	
	}
 	function thaja_news()
	{
		$array=array('breking_news'=>1);
		$this->db->where($array);
		$this->db->order_by('id','desc');
		$this->db->limit(8);
		$query=$this->db->get('news');
		return $query->result();	
	}
//most_read_news
	function most_read_news($news_cat){
		$array=array(
			'type'			=>	$news_cat,
		);
		$this->db->order_by('views','desc');
		$this->db->order_by('news.id','desc');
		$this->db->where($array);
		$this->db->limit(15);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
	}
 	function get_views($id)
	{
		$pre_views=0;
		$this->db->where('id',$id);
  		$this->db->select('id, views');
  		$query=$this->db->get_where('news');
  		$result=$query->result();
		//print_r($result);
		if(!empty($result)){
		 $pre_views=$result['0']->views;
				 $id=$result['0']->id;
		}
		$this->insert_views($id,$pre_views);
	
	}
	function insert_views($id,$pre_views)
	{
		$this->db->where('id', $id);
		$views=$pre_views+1;
		$data=array(
				'news.views'	=>	$views
			);
		$this->db->update('news', $data);
	}
	function get_districs()
	{
		$query=$this->db->get('districts');
		return $query->result();
	}
	function state_inner($id)
	{
		$this->db->where('districts_news.id',$id);
		$this->db->from('news_types');
		$this->db->join('districts_news', 'districts_news.dist_id= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
	}
	function state_realtion_news($cat)
	{
		$this->db->where('dist_id',$cat);
		$query=$this->db->get('districts_news');
		return $query->result();
	}
	function more_state_news($cat)
	{
		$this->db->where('dist_id',$cat);
		$query=$this->db->get('districts_news');
		return $query->result();	
	}
	function get_statenews($cat)
	{
		$this->db->where('dist_id',$cat);
		$this->db->order_by('id','desc');
		$query=$this->db->get('districts_news');
		return $query->result();
	}
/*	function tamil_table()
	{
		$query=$this->db->get('thamil');
		return $query->result();
	}*/
	
}

?>