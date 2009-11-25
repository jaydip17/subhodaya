<?php
class Birthdays extends Controller {
	var $layout='admin';
	function Birthdays(){
		parent::Controller();
		$this->load->model('admin/Birthday_Model');
	}
	function index(){
		$message = $this->session->flashdata('message');
		$insert='insert';
		$data=array(
							'message'	=> $message,
							'insert'	=> $insert
		);
		$this->load->view('admin/wishes_insert',$data);
	}
	function insert(){
		if(!isset($_POST['active'])){
			
			$active=0;
		}else{
			$active=$_POST['active'];
		}
		$birthday=$this->input->post('birthday');
		$name=$this->input->post('name');
		$marriage=$this->input->post('marriage');
		$datestring = "%Y-%m-%d";
		$time = time();
		$date=mdate($datestring, $time);

		$data=array('birthday'     => $birthday,
					'name' 		   => $name,
					'marri_day'    => $marriage,
					'active'       => $active,
					'insert_date'  => $date
				
		);
		print_r($data);
		if(!empty($data))
		{
		$result=$this->db->insert('orkut_friends',$data);
		$id=$this->db->insert_id();
		}
		if($result==1){
		$config['upload_path'] ='assets/birthday/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		$data = array('upload_data' => $this->upload->data());
		if ( ! $this->upload->do_upload('image'))
		{
			$this->db->where('id',$id);
			$this->db->delete('orkut_friends');
			$error[]= array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			
			$this->Birthday_Model->rename($data,$id);
			$message='Birthday details Added Successfully';
			$this->session->set_flashdata('message',$message);
		}
			$filename = 'birth_img'.$id.'.jpg';
			$image_path='assets/birthday/';
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
			redirect(base_url().'admin/birthdays',$message);
		}
	}
/*	function editpage()
	{
		$id=$this->uri->segment(4,0);
		//$details=$this->Greeting_Model->greeting_details($type);
		$query=$this->Greeting_Model->greeings_pagi($id);
		//print_r($query);
	    $a =base_url().'admin/greetings/editpage/'.$id;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(5)) ? $this->uri->segment(5) : '0';
    	$this->paginationnew->limit =9;
        $this->paginationnew->filePath =$a;
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->Greeting_Model->count($id);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		// print_r($details);
  	    $paginate = $this->paginationnew->paginate1(); 
		$data=array(	'details'	=>	$details,
						'paginate'	=>  $paginate
						);
		$this->load->view('admin/edit_greetings',$data);
	}*/
	function delete()
	{
		$id=$this->uri->segment(4,0);
		$this->Birthday_Model->delete($id);
		redirect(base_url()."admin/birthdays/get_birthday");
	}
	function edit()
	{
	    $id =$this->uri->segment(4,0);
        $result= $this->Birthday_Model->get_details($id);
   		$message = $this->session->flashdata('message');
   		$edit='edit1';
		$data=array(
							'message'	=> $message,
							'edit'      => $edit,
							'result'	=> $result
							
		);
    $this->load->view('admin/birthdays',$data);
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
   function get_birthday()
   {
   	$details=$this->Birthday_Model->get_birthday();   	
	$data=array('details'=>$details);
	$this->load->view('admin/birthday_list',$data);
   }
}
?>