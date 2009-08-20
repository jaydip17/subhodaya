<?php
class Gallery extends Controller {
	var $layout='admin';
	function Gallery()
	{
		parent::Controller();
		$this->load->model('admin/Gallery_Model');
	}
	function index()
	{
		$message = $this->session->flashdata('message');
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'categeory',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$data= array('jslinks'   => $links,
					 'message'   => $message);
		$this->load->view('admin/gallery_view',$data);
	}
	function add_gallery()
	{
		$this->load->view('admin/add_gallery');
		
	}
	function cat_insert()
	{
		
		$cate=$this->input->post('categeory');
		$data=array('cat_name'=>$cate);
		$result=$this->db->insert('gallery_cat',$data);
		if($result==1){
		$message = 'Gallery Categeory added succssfully';
		$this->session->set_flashdata('message',$message);
		redirect(base_url().'admin/gallery',$message);
		}
	}
	function sub_cate()
	{
		$message = $this->session->flashdata('message');
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'sub-categeory',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		
		$result=$this->Gallery_Model->get_cate();
		
		foreach ($result as $res )
				{
					$options[$res->id] = $res->cat_name;
				}
			$data= array(	'jslinks'   => $links,
					 		'message'   => $message,
							'options'   => $options);
		$this->load->view('admin/gall_addsub',$data);
	}
	function subcat_insert()
	{
		if(!isset($_POST['active'])){
			$active=0;
		}else{
			$active=$_POST['active'];
		}
		$cateid=$this->input->post('cate-id');
		$subcate=$this->input->post('subcategeory');
		$data= array('cat_id'     => $cateid,
					 'subcat_name'=> $subcate,
					'active'      =>  $active
		);
		$result=$this->db->insert('gall_subcat',$data);
		if($result==1){
			$message = 'Gallery sub-Categeory added succssfully';
			$this->session->set_flashdata('message',$message);
			redirect(base_url().'admin/gallery/sub_cate',$message);
		}
	}
	function gallery_image(){
		$message = $this->session->flashdata('message');
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'imagename',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$options=array();
		$options1=array();
		$result=$this->Gallery_Model->get_cate();
		$options['0'] = '--select--';
		$options1['0']='--select--';
		foreach ($result as $res )
				{
					$options[$res->id] = $res->cat_name;
				}
	
			$data= array(	'jslinks'   => $links,
					 		'message'   => $message,
							'options'   => $options,
							'options1' => $options1
							);
		$this->load->view('admin/gallery_image',$data);
	}
function cate_fordropdoun()
	{
       if($this->input->post('catid'))
       {
       	$message = $this->session->flashdata('message');
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'imagename',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		
        $catid = $this->input->post('catid');
      	$result=$this->Gallery_Model->categeory($catid);
        $cat=$result->result();
       $options=array();
		$result=$this->Gallery_Model->get_cate();
		$options['0'] = '--select--';
		foreach ($result as $res )
				{
					$options[$res->id] = $res->cat_name;
				}
        $options1=array();
        
       	foreach ($cat as $res )
				{
					$options1[$res->id] = $res->subcat_name;
				}
       $data=array('options1'  =>  $options1,
                  'options'    =>  $options,
       				'jslinks'  =>   $links,
					 'message' =>  $message, );
       }
	   $this->load->view('admin/gallery_image',$data);
	}
	function insert_image(){
		if(!isset($_POST['active'])){
			
			$active=0;
		}else{
			$active=$_POST['active'];
		}
		$sub_id=$this->input->post('subcate-id');
		$imagename=$this->input->post('imagename');

		$data=array('subcat_id'    => $sub_id,
					'name'         => $imagename,
					'active'       => $active
		);
		if(!empty($data))
		{
		$result=$this->db->insert('gallery_imag',$data);
		$id=$this->db->insert_id();
		}
		if($result==1){
		$config['upload_path'] ='assets/gallery/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('image'))
		{
			$this->db->where('id',$id);
			$this->db->delete('gallery_imag');
			$error[]= array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->Gallery_Model->rename($data,$id);
			$message='Gallery image Added Successfully';
			$this->session->set_flashdata('message',$message);
		}
			$filename = 'galle_img'.$id.'.jpg';
			$image_path='assets/gallery/';
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
			redirect(base_url().'admin/gallery/gallery_image',$message);
		}
	}
	function edit_view(){
		$result=$this->Gallery_Model->get_allgallery();
		$data=array('details'=>$result);
		$this->load->view('admin/gallery_editview',$data);
	}
	function delete()
	{
		$id=$this->uri->segment(4,0);
		$result=$this->Gallery_Model->delete($id);
		redirect(base_url()."admin/gallery/edit_view");
	}
	function edit()
	{
	    $id =$this->uri->segment(4,0);
        $edit = $this->Gallery_Model->get_details($id);
   		$message = $this->session->flashdata('message');
        $this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'imagename',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$data=array(
							'jslinks'   => $links,
							'message'	=> $message,
							'edit'     => $edit
							
		);
    $this->load->view('admin/edit_gallery',$data);
	}
 function edit1()
   {
 
   	if(!isset($_POST['active']))
   	{
		$active=0;
   	}else{
   		$active=$_POST['active'];
   	}
	   $id=$_POST['gall_id'];
   	 $this->Gallery_Model->edit1($id,$active);
   	redirect(base_url().'admin/gallery/edit_view');
   }
	
}
?>