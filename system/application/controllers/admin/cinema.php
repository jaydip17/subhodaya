<?php
class Cinema extends Controller {
	var $layout='admin';
	function Cinema(){
		parent::Controller();
		$this->load->helper(array('form','url','file'));
		$this->load->model('admin/Cinema_Model');
	}
	function index(){
		$message = $this->session->flashdata('message');
		$details=$this->Cinema_Model->get_cinemanewstype();
		foreach ($details as $res )
				{
					$options[$res->id] = $res->cinema_type;
				}
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'description',
						   'skin'	  => 'full');
		$textarea[]= array('textarea' => 'summary',
						   'skin'	  => 'small');
		$textarea[]= array('textarea' => 'heading',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$data=array(
							'jslinks'   => $links,
							'message'	=> $message,
							'options'   => $options
		);

		$this->load->view('admin/cinema_view',$data);
	}
	function insert(){
		$type=$this->input->post('type');
		$heading=$this->input->post('heading');
		$summery=$this->input->post('summary');
		$description=$this->input->post('description');
		$data=array('type'    => $type,
					'heading' => $heading,
					'summary' => $summery,
				'description' => $description,
		);
		if(!empty($data))
		{
		$result=$this->db->insert('cinema',$data);
		$id=$this->db->insert_id();
		}
		if($result==1){
		$config['upload_path'] ='assets/cinema/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('image'))
		{
			$this->db->where('id',$id);
			$this->db->delete('cinema');
			$error[]= array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->Cinema_Model->rename($data,$id);
			$message='CinemaNews Added Successfully';
			$this->session->set_flashdata('message',$message);
		}
			$filename = 'ceni_img'.$id.'.jpg';
			$image_path='assets/cinema/';
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
			redirect(base_url().'admin/cinema',$message);
		}
		
	}
	function getcinema(){
		$this->load->model('admin/Cinema_Model');
		$details=$this->Cinema_Model->getcinema_details();
		$data=array('details'=>$details);
		$this->load->view('admin/cinema_edit',$data);
	}
	function edit(){
	 $id =$this->uri->segment(4,0);
    $edit = $this->Cinema_Model->cinemadetails($id);
   
    $message = $this->session->flashdata('message');
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'description',
						   'skin'	  => 'full');
		$textarea[]= array('textarea' => 'summary',
						   'skin'	  => 'small');
		$textarea[]= array('textarea' => 'heading',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$data=array(
							'jslinks'   => $links,
							'message'	=> $message,
		                    'edit'      =>  $edit
		);
    $this->load->view('admin/editcinema',$data);
	}
	function edit1()
   	{
	   $id=$_POST['id'];
   	 $this->Cinema_Model->edit1($id);
   	 redirect(base_url().'admin/cinema/getcinema');
   }
	function delete(){
	$this->load->model('admin/Cinema_Model');
	$id=$this->uri->segment(4,0);
	$result=$this->Cinema_Model->delete($id);
	redirect(base_url()."admin/cinema/getcinema");
	}
	
	
}
?>