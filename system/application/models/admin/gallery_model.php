<?php
class Gallery_Model extends Model{
	function get_cate()
	{
		$this->db->select('id,cat_name');
		$result=$this->db->get('gallery_cat');
		return $result->result();
	}
	function get_subcate()
	{
		$this->db->select('id,subcat_name');
		$result=$this->db->get('gall_subcat');
		return $result->result();
	}
	function categeory($cateid)
	{
		$this->db->select('id,subcat_name');
		$this->db->where('cat_id',$cateid);
		$query=$this->db->get_where('gall_subcat');
		return $query;
	}
	function rename($data,$id)
		{
			$oldname='assets/gallery/'.$data['upload_data']['file_name'];
			rename($oldname,'assets/gallery/galle_img'.$id.'.jpg');
		}
	function get_allgallery(){
		$result=$this->db->get('gallery_imag');
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
    		$this->db->delete('gallery_imag');
    		unlink('./assets/gallery/galle_img'.$item.'.jpg');
    		unlink('./assets/gallery/galle_img'.$item.'_thumb.jpg');
    	}
	}
	function get_details($id){
		$this->db->where('id',$id);
		$query=$this->db->get_where('gallery_imag');
		return $query->result();
	}
    function edit1($id,$active)
    {
    	$data=array('name'=>$_POST['imagename'],
  					'active'=>$active
  					);
  					print_r($data); 
  		$this->db->where('id',$id);	
  		$this->db->update('gallery_imag',$data);		
    }
    function get_categeory()
    {
    	
 		$this->db->select('*');
		$this->db->from('gall_subcat');
		$this->db->join('gallery_cat', 'gallery_cat.id=gall_subcat.cat_id');

			$query = $this->db->get();
			return $query->result();
    }
    function get_gallery($cat_id)
    {
    	$this->select('*');
    	$this->db->where('gall_subcat.cat_id',$cat_id);
    	$this->db->form('');
    	
    }

	 
}
?>