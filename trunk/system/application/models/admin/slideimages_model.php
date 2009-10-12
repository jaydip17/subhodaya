<?php
class Slideimages_model extends Model{
	function Slideimages_model()
	{
		parent::Model();
	}
	function show()
	{
		$this->db->order_by('slideimages.id','desc');
		$query = $this->db->get('slideimages');
		return $query;
	}
	function add()
	{
		 $i=0;
		// $this->load->library('image_lib');
		 $title=$this->input->post('title');
	    foreach($title as $item)
 	  {
		$this->db->insert('slideimages',array('title'=>$item));
 		
 	    $id = $this->db->insert_id();
 	    $dir =  './assets/flash_images';   
	    $config['upload_path'] = $dir;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
    	$config['max_width']  = '1024';
    	$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('image'.$i))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			//$this->load->view('admin_images', $error);
		}	
		else
		{
		   $data = array('upload_data' => $this->upload->data());
	       $filepath = $data['upload_data']['file_name'];
	       rename($dir.'/'.$filepath , $dir.'/image'.$id.'.jpg');	
	       
	       
	       $config['upload_path'] = $dir;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
    	$config['max_width']  = '1024';
    	$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('image'.$i.'_thumb'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			//$this->load->view('admin_images', $error);
		}	
		else
		{
		   $data = array('upload_data' => $this->upload->data());
	       $filepath = $data['upload_data']['file_name'];
	       rename($dir.'/'.$filepath , $dir.'/image'.$id.'_thumb.jpg');	
	       
	       
	   }
		}
 	  $i++; }//foreach;
	
    }
    function delete($id)
    {
    	$this->db->where('id',$id);
    	$this->db->delete('slideimages');
    	unlink('./assets/flash_images/image'.$id.'.jpg');
    	unlink('./assets/flash_images/image'.$id.'_thumb.jpg');
    	
    }
}

?>