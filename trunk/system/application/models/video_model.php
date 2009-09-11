<?php
class Video_model extends Model
{
	function Video_model()
	{
		parent::Model();
	}
	
	function more_video(){
    	$result=$this->db->get('more');
    	return $result->result();
    } 
	
    function get_videos($type,$limit)
    {
    	$this->db->where('video_uploaded',1);
    	//$this->db->order_by('no_of_views','desc');
		$this->db->limit($limit);
		if($type=='latest')
		{
			$this->db->order_by('id','desc');
		}
		else if($type=='top')
		{
			$this->db->order_by('rating','desc');
		}
		else if($type=='active')
		{
			$this->db->where('active',$type);
		}
		else
		{
			$this->db->where('video_cat_id',$type);
		}
       
		$query = $this->db->get('videos');
		//print_r($query);
		
		return $query;
		
    }
    function count_videos($catid)
    {
    	//echo $catid;
    	if($catid!=0)
    	{
    		$this->db->where('video_cat_id',$catid);
    	}
    	
    	$count=$this->db->count_all_results('videos');
    	return $count;
    	
    }
	function getvideocategeories($limit)
	{
	//if($limit!=0)
	//{
	  $this->db->limit($limit);
	// }
	   $query=$this->db->get('videos_categeory');
	   return $query;
	}
	
  function getvideos($id,$bywhat)
	 {
	
		$flag=1;
		$query='';
		if($bywhat!='')
		{
		
		$query.= "where to_Days(sysdate())- to_days(insert_date) >=" .$bywhat." and videouploaded=1 order by name asc";
			$flag=0;
		}
		if($id!=0)
		{
			$query .= 'where video_cat_id ='.$id.' and video_uploaded=1 order by name asc';
			$flag=0;
		}
		if($flag!=0)
		{
	    	$query.= " where video_uploaded=1";
		$query.=" order by name asc";
		}
			
		return $query;
	}
	
 function getvideoname($id)
	{
		$this->db->where('id',$id);
		$this->db->select('name');
		$query = $this->db->get('videos');
		return $query->result();
		
	}
	
function getlatestvideos($limit,$catid,$id)
	{
		
		$this->db->where('video_uploaded',1);
		if($catid!=-1)
		{
			$this->db->where('video_cat_id',$catid);
		}
		if($id!=-1)
		{
			$this->db->where('id !=',$id);
		}
		$this->db->order_by('insert_date','desc');
		if($limit!=0)
		{		$this->db->limit($limit);
		}
		//$this->db->order_by('rating','desc')
		$query = $this->db->get('videos');	
		return $query->result();	
		
	}
	
 function getvideosnames($limit)
	{
		$query = $this->db->get('videos');
		return $query->result();
		
	}
	
	
 function gettopviewedvideo($limit)
	{
		$this->db->where('video_uploaded',1);
		$this->db->order_by('no_of_views','desc');
		$this->db->limit($limit);     
		$query = $this->db->get('videos');
		return $query->result();
	}
	
 function getvideo($id)
        {
      	$this->db->where('video_uploaded',1);
      	$this->db->where('video_cat_id',$id);
      	$query=$this->db->get('videos');
      	return $query;
       }
  
 
       
  function increase_viewcount($id)
   
	 {
	 	
		    $this->db->query('update videos set no_of_views=no_of_views+1 where id='.$id);
	}
}
?>