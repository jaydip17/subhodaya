<?php
class Greetings extends Controller {
	var $layout='admin';
	function Greetings(){
		parent::Controller();
		$this->load->model('admin/Greeting_Model');
	}
	function index(){
		$message = $this->session->flashdata('message');
		$details=$this->Greeting_Model->get_type();
		foreach ($details as $res )
				{
					$options[$res->id] = $res->gree_cat;
				}
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'summery',
						   'skin'	  => 'small');
		/*$textarea[]= array('textarea' => 'name',
						   'skin'	  => 'small');*/
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$data=array(
							'jslinks'   => $links,
							'message'	=> $message,
							'options'   => $options
		);
		$this->load->view('admin/greetings_view',$data);
	}
	function insert(){
		if(!isset($_POST['active'])){
			
			$active=0;
		}else{
			$active=$_POST['active'];
		}
		$type=$this->input->post('type');
		$heading=$this->input->post('name');
		$summery=$this->input->post('summery');

		$data=array('type'    => $type,
					'name' => $heading,
					'summery' => $summery,
					'active'   => $active
				
		);
		if(!empty($data))
		{
		$result=$this->db->insert('greetings',$data);
		$id=$this->db->insert_id();
		}
		if($result==1){
		$config['upload_path'] ='assets/greetings/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('image'))
		{
			$this->db->where('id',$id);
			$this->db->delete('greetings');
			$error[]= array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->Greeting_Model->rename($data,$id);
			$message='Greeting card Added Successfully';
			$this->session->set_flashdata('message',$message);
		}
			$filename = 'gree_img'.$id.'.jpg';
			$image_path='assets/greetings/';
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
			redirect(base_url().'admin/greetings',$message);
		}
	}
	function editpage($type)
	{
		$details=$this->Greeting_Model->greeting_details($type);
		$data=array('details'=>$details);
		$this->load->view('admin/edit_greetings',$data);
	}
	function delete()
	{
		$id=$this->uri->segment(4,0);
		$result=$this->Greeting_Model->delete($id);
		redirect(base_url()."admin/greetings/editpage");
	}
	function edit()
	{
	    $id =$this->uri->segment(4,0);
        $edit = $this->Greeting_Model->get_details($id);
   		$message = $this->session->flashdata('message');
        $this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'summery',
						   'skin'	  => 'small');
		$textarea[]= array('textarea' => 'name',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$data=array(
							'jslinks'   => $links,
							'message'	=> $message,
							'edit'     => $edit
							
		);
    $this->load->view('admin/gree_editview',$data);
	}
 function edit1()
   {
   	if(!isset($_POST['active']))
   	{
		$active=0;
   	}else{
   		$active=$_POST['active'];
   	}
	  	 $id=$_POST['id'];
   	 $this->Greeting_Model->edit1($id,$active);
   	redirect(base_url().'admin/greetings/editpage');
   }
   function getgreetypes()
   {
   	$details=$this->Greeting_Model->get_type();
	$data=array('details'=>$details);
	$this->load->view('admin/getgreetypes',$data);
   }
}
?>