<?php
  class Gall extends Controller {
  	  var $layout = 'admin';
  	  
	function Gall()
	{
		parent::Controller();
		$this->load->model('admin/Gall_model');
		$this->load->helper(array('form','url','file','date'));
	}
    function categeory1()
	{  	 
	$message = $this->session->flashdata('message');
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'id',
	                       'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
	   $parentid=0;	    
       $options =$this->Gall_model->Categeory($parentid);
       $data=array('options'=>$options,
       				'jslinks'   => $links,);

       $this->load->view('admin/gallery_admin_categeory1',$data);
	}
	//displaying categeories for adding images
	function root_forimages()
	{
		$message = $this->session->flashdata('message');
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'id',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
	    $parentid=0;	
	    $options1= $this->Gall_model->Categeory($parentid);
	    $options= array(''=>'');
	    $parentid= 0;
       
       if($this->input->post('parentid'))
       {
       $parentid = $this->input->post('parentid');
       $options= $this->Gall_model->Categeory($this->input->post('parentid'));
       $parentid= $parentid;
       }
       $data=array('jslinks'   => $links,
       				'message '  => $message,
       				'parentid' =>$parentid,
       				'options1'=>$options1,
       				'options'=>$options);
	   $this->load->view('admin/gallery_admin_images1',$data);
	}
		//adding categeories
    function addCategeory()
	{ 
	 $this->Gall_model->addCategeory($this->input->post('catname'),$this->input->post('parentid'));
     redirect('admin/gall/categeory1');
    }
	//extracting categeory info and displaying in edit form for categeory
	function catedit()
	{
		$query = $this->Gall_model->cat($this->uri->segment(4));
		$data['cat'] = $query->result();
		$this->load->view('admin/gallery_edit',$data);
	}
	 //adding images into the categeory
	function addImage()
	{ 
	    $title =$this->input->post('title');
		$parentid=$this->input->post('parentid1');
		if(!isset($_POST['active']))
		{
		   $active=0;
		}
		else
		{
			$active=$_POST['active'];
		} 
		$this->Gall_model->uploadzipfile($title,$active,$parentid);
	}
	
	function categeoryview()
    {
    	$parentid = $this->uri->segment(4);
    	$this->load->library('paginationnew');
    	$this->paginationnew->start = ($this->uri->segment(5)) ? $this->uri->segment(5) : '0';
    	$this->paginationnew->limit =10;
   $this->paginationnew->filePath = base_url().'admin/gall/categeoryview/'.$this->uri->segment(4);
   $this->paginationnew->select_what = '*';
   $this->paginationnew->add_query = 'from gallery_categeory WHERE parentid = '.$parentid.' order by update_date desc';
   $data['query'] = $this->paginationnew->getQuery(TRUE);
   $data['paginate'] = $this->paginationnew->paginate1(); 
	if($this->uri->segment(4,0)!=0)
	{
		$data['sub']='yes';
	}
      $this->load->view('admin/gallery_categeory-view',$data);
	}
	
	function image_view()
    {
    	$parentid = $this->uri->segment(4);
    	$this->load->library('paginationnew');
    	$this->paginationnew->start = ($this->uri->segment(5)) ? $this->uri->segment(5) : '0';
    	$this->paginationnew->limit =10;
        $this->paginationnew->filePath = base_url().'admin/gallery/image_view/'.$this->uri->segment(4);
		$this->paginationnew->select_what = '*';
        $this->paginationnew->add_query = 'from gallery_images1 WHERE categoryid = '.$parentid.' order by id desc';
        $query = $this->paginationnew->getQuery(TRUE);
		$data['paginate'] = $this->paginationnew->paginate1(); 
		print_r($query->result());
    	$this->load->view('admin/gallery_image-view',$data);
     }
    
	function editcategeory()
	{   
		 $id = $this->input->post('id');
		 $parentid = $this->input->post('parentid');
		 $catname = $this->input->post('catname');
		 $this->Gall_model->editcategeory($id,$catname);
		 redirect('admin/gall/categeoryview/'.$parentid);
	}	   
	//delete categeory from database	
	function deletecategeory()
	{
	  //if check boxes are selected for deleting
	 if (isset($_POST['remove']) && $_POST['remove']=='remove selected')
	 {//get the values 
 	  $id1 = array();
 	  $id1 = $_POST['removeid'];
 	  $parentid = $_POST['parentid'];
 	  //if no of check boxes selected > 0
 	 if (count($id1) > 0)
 	  { //fetch each and every one check box item
    	 foreach ($id1 as $id)
    	 {
   	    	$isroot = $this->Gall_model->isrootcategeory($id);
	    //check whether the wallpaper is root	
	   if($isroot)
	  {
		//fetch all sub categeories
	    $query1 = $this->Gall_model->subcat($id);
	    foreach ($query1->result() as $item1):	
        //fetch and delete all images in each and every sub wallpaper
        $query2 = $this->Gall_model->image_view($item1->id); 		 
	  	  foreach ($query2->result() as $item2):	
	      $this->Gall_model->deleteimage($item2->id);
		  endforeach;
	      endforeach;
	    //delete all subcategeories
	    $this->Gall_model->deletesubcategeory($id);				  
	 }	
	else
	{//sub categeory
		 //fetch all images
		 $query2 = $this->Gall_model->image_view($id); 		 
         //fetch and delete all images
         foreach ($query2->result() as $item2):	
	     $this->Gall_model->deleteimage($item2->id);
	     endforeach;
	}
	   $this->Gall_model->deletecategeory($id);
  	  }
 	  }
   }
   else
   {		
		$id = $this->uri->segment(4);
		$parentid = $this->uri->segment(5);
	    $isroot = $this->Gall_model->isrootcategeory($id);
	  //check whether the wallpaper is root	
	if($isroot)
	{
		//fetch all sub categeories
	    $query1 = $this->Gall_model->subcat($id);
	    foreach ($query1->result() as $item1):	
        //fetch and delete all images in each and every sub wallpaper
        $query2 = $this->Gall_model->image_view($item1->id); 		 
	  	  foreach ($query2->result() as $item2):	
	      $this->Gall_model->deleteimage($item2->id);
		  endforeach;
	      endforeach;
	    //delete all subcategeories
	    $this->Gall_model->deletesubcategeory($id);				  
	 }	
	else
	{//sub wallpaper
		 //fetch all images
		 $query2 = $this->Gall_model->image_view($item1->id); 		 
         //fetch and delete all images
         foreach ($query2->result() as $item2):	
	     $this->Gall_model->deleteimage($item2->id);
         endforeach;
	  }
	   //delete wallpaper	
	   $this->Gall_model->deletecategeory($id);
	  }
    redirect('admin/gall/categeoryview/'.$parentid);
	}
    //display info of image in edit form
 	 function imageedit()
	{
		$data['img'] = $this->Gall_model->imageedit($this->uri->segment(4));
		$this->load->view('admin/gallery_image-edit',$data);
	}
	//edit image in database
	function editImage()
	{   
		  $id = $this->input->post('id');
		  $parentid = $this->input->post('parentid'); 
		  $title = $this->input->post('title');
		  $active=$this->input->post('active');
		  $this->Gall_model->editimage($id,$title,$active);
		  redirect('admin/gall/image_view/'.$parentid);
	}
	//delete image from database
	function deleteimage()
	{   	
		if (isset($_POST['remove']) && $_POST['remove']=='remove selected')
	 {//get the values 
 	  $id1 = array();
 	  $id1 = $_POST['removeid'];
 	  $parentid = $_POST['parentid'];
 	  if (count($id1) > 0)
 	  { //fetch each and every one check box item
    	 foreach ($id1 as $id)
    	 {
    	 	$this->Gall_model->deleteimage($id);
    	 }
 	  }
	 }
	 else
	 {
	 	$id = $this->uri->segment(4);
		$parentid = $this->uri->segment(5);
		$this->Gall_model->deleteimage($id);
	 }
	redirect('admin/gall/image_view/'.$parentid);
	}
	function delete_names()
	{
		  $folder_path=$this->uri->segment(4,0);
	      $cat_id=$this->uri->segment(5,0);
	      $array=array('cat_id'=>$cat_id,'folder_path'=>$folder_path);
	      $this->db->where($array);
	      $result=$this->db->delete('gall_image_path');
	      if($result==1)
	      {
	      	$array1=array('categoryid'=>$cat_id,'imagepath'=>$folder_path);
	      	$this->db->where($array1);
	      	$result1=$this->db->delete('gallery_images1');
	      	if($result1==1){
		      	$path='thumbnail_images';
				$mydir = './assets/gallery/'.$path.'/'.$folder_path; 
				$d = dir($mydir); 
				opendir($mydir);
				while($entry = $d->read())
				{
				 if ($entry!= "." && $entry!= ".." && $entry!='Thumbs.db')
				 {
				    unlink('./assets/gallery/'.$path.'/'.$folder_path.'/'.$entry);
				 } 
				}
				 closedir($mydir);
				rmdir($mydir);
			
				$mydir = './assets/gallery/'.$folder_path; 
				$d = dir($mydir);
				opendir($mydir);
				while($entry = $d->read())
				{
				 if ($entry!= "." && $entry!= ".." && $entry!='Thumbs.db')
				 {
				   unlink('./assets/gallery/'.$folder_path.'/'.$entry);
				 } 
				}
				$d->close();
				rmdir($mydir);
				//unlink()
	         }
	      }
				  redirect('admin/gall/image_view');
	}
 }
?>
