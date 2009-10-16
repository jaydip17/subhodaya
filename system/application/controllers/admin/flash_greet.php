<?php
class Flash_greet extends Controller {
	var $layout='admin';
	function Flash_greet(){
		parent::Controller();
	}
	function index(){
		$message = $this->session->flashdata('message');
		$data=array('message'=>$message);
		$this->load->view('admin/flash_greet',$data);
	}
	function add(){
		$title=$this->input->post('title');
		$link=$this->input->post('link');
		$title[0];
		$data=array('text' => $title[0],
					'link' => $link);
	if(!empty($data))
		{
		$result=$this->db->insert('flash_greet',$data);
		$id=$this->db->insert_id();
		}
		if($result==1){
		$config['upload_path'] ='assets/images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('image'))
		{
			$this->db->where('id',$id);
			$this->db->delete('flash_greet');
			$error[]= array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$oldname='assets/images/'.$data['upload_data']['file_name'];
			rename($oldname,'assets/images/flash'.$id.'.jpg');
			$message='Added Successfully';
			$this->session->set_flashdata('message',$message);
			
			$filename = 'flash'.$id.'.jpg';
			$image_path='assets/images/';
	    	$config['image_library'] = 'gd2';
	        $config['source_image'] = $image_path.$filename;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 143;
			$config['height'] = 148;
	    	$this->load->library('image_lib');      
	    	$this->image_lib->initialize($config);
	    	if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());	
	    	}
	    	$this->image_lib->clear();
	    	redirect(base_url().'admin/flash_greet',$message);
		}
		
		
	}
	}
	function edit_flash()
	{
		$result=$this->db->get('flash_greet');
		$data=array('query'=>$result);
		$this->load->view('admin/edit_flash',$data);
	}
	function delete()
	{
		$id=$this->uri->segment(4,0);
		$this->db->where('id',$id);
    	$this->db->delete('flash_greet');
    	unlink('./assets/images/flash'.$id.'.jpg');
    	unlink('./assets/images/flash'.$id.'_thumb.jpg');
    	redirect(base_url().'admin/flash_greet/edit_flash');
	}
	function edit()
	{
		$id=$this->input->post('id');
		$text=$this->input->post('text');
		$link=$this->input->post('link');
		//exit;
		$data=array(	'text'	=>	$text,
						'link'	=>	$link
					);
  		$this->db->where('id', $id);
		$query=$this->db->update('flash_greet', $data); 
  		//print_r($query); 
  		redirect(base_url().'admin/flash_greet/edit_flash');
	}
	function edit1(){
		$id=$this->uri->segment(4,0);
		$query=$this->db->get_where('flash_greet',array('id'=>$id));
		$result=$query->result();
		$data=array('text'=>$result);
		$this->load->view('admin/flashedit',$data);
		
	}
}
?>