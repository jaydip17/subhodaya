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
  					'summary'=>$_POST["summary"],
  					'description'=>$_POST["description"],
  					'breking_news'=>$breaking,
    				'active'=>$active
  					);
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
    	$this->db->order_by("news.insert_date", "desc");
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
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    	
    }
     function active_news1()
    {
    	$this->db->select('*');
    	$array=array('news.breking_news'=>1);
    	$this->db->where($array);
    	$this->db->limit(10);
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
    
    //special news
 	function get_special_news()
 	{
 		$this->db->order_by('id','desc');
		$result=$this->db->get('subhodaya_spec');
		return $result->result();
	}
	
  function getspecial_details()
	{
		$result=$this->db->get('subhodaya_spec');
		return $result->result();
	}
	
 function get_special_details($id)
	{
		$this->db->where('id',$id);
		$result=$this->db->get('subhodaya_spec');
		return $result->result();
	}
	
  function get_special()
    {   
 		$this->db->select('*');
 		$this->db->order_by("subhodaya_spec.insert_date", "desc");
    	$this->db->where('heading');
		$this->db->from('subhodaya_spec');
		$query = $this->db->get_where();
		
			return $query->result();
	}
   function get_special1($type)
	 {
		$query="from Subhodaya_spec where type=$type order by Subhodaya_spec.insert_date desc";
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
  		$this->db->update('subhodaya_spec',$data);		
    }
	
 function specialcount($type)
	{
		
    	$this->db->where('type',$type);
		$this->db->from('subhodaya_spec');
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
    		$this->db->delete('subhodaya_spec');
    		if(file_exists("./assets/special_newsimg/news_img'.$item.'.jpg")){
    		unlink('./assets/special_newsimg/news_img'.$item.'.jpg');
    		}
    		if(file_exists("./assets/special_newsimg/news_img'.$item.'_thumb.jpg")){
    		unlink('./assets/special_newsimg/news_img'.$item.'_thumb.jpg');
    		}
    	}
	}
	
  function active_special($id,$type)
    {
    	if($type=="home")
    	{
    		$this->db->select('subhodaya_spec.id,heading,summary');
    	}
    	else {
    	$this->db->select('*');
    	}
    	$array=array('subhodaya_spec.heading'=>$id,'subhodaya_spec.active'=>1);
    	$this->db->where($array);
		$this->db->from('subhodaya_spec');
		$this->db->order_by('subhodaya_spec.id','desc');
		$query = $this->db->get_where();
		return $query->result();
    }	
	
  function get_home_stories($type)
    {
    	$this->db->select('id,heading,summary');
    	$where=array('homepage'=>'1','heading'=>$type);
    	$this->db->where($where);
    	$this->db->limit(4);
    	$this->db->order_by('id','desc');
    	$query=$this->db->get('subhodaya_spec');
    	return $query->result();
    }
    function get_comments($id){
    	$this->db->where('newsid',$id);
    	$this->db->limit(5);
    	$this->db->order_by('id','desc');
    	$result=$this->db->get('comments');
    	return $result->result();
    }
	
}

?>