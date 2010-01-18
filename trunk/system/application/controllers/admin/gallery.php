<?php
  class Gallery extends Controller {
  	  var $layout = 'admin';
  	  
	function Gallery(){
		parent::Controller();
		$this->load->model('admin/Gallery_model');
		$this->load->helper(array('form','url','file','date'));
		//if not logged in go to login page
	   //$this->Login_Model->login_validate();
	}
    //displaying root categeories from database	
   function categeory1()
	{  	 
	$message = $this->session->flashdata('message');
		$this->load->model('admin/Openwysiwyg_Model');
	
		$textarea[]= array('textarea' => 'id',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
	   $parentid=0;	    
       $options =$this->Gallery_model->Categeory($parentid);
       $data=array('options'=>$options,
       				'jslinks'   => $links,);
       $this->load->view('admin/gallery_admin_categeory',$data);
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
	  $options1= $this->Gallery_model->Categeory($parentid);
	  $options= array(''=>'');
	  $parentid= 0;
       
       if($this->input->post('parentid'))
       {
       $parentid = $this->input->post('parentid');
        $options= $this->Gallery_model->Categeory($this->input->post('parentid'));
       $parentid= $parentid;
       
       }
       $data=array('jslinks'   => $links,
       				'message '  => $message,
       				'parentid' =>$parentid,
       				'options1'=>$options1,
       				'options'=>$options);
	   $this->load->view('admin/gallery_admin_images',$data);
	}
		//adding categeories
   function addCategeory()
	{ 
	 
	 $this->Gallery_model->addCategeory($this->input->post('catname'),$this->input->post('parentid'));
     redirect('admin/gallery/categeory1');
    }
	
	//extracting categeory info and displaying in edit form for categeory
	function catedit()
	{
		$query = $this->Gallery_model->cat($this->uri->segment(4));
		$data['cat'] = $query->result();
		
		$this->load->view('admin/gallery_edit',$data);
		
	}
	 
	//adding images into the categeory
	function addImage()
	{ 
		$title = array();
		$title =$_POST['title'];
		if(!isset($_POST['active'])){
			
			$active=0;
		}else{
			$active=$_POST['active'];
		} 
	 //print_r($title);
		
	  $this->Gallery_model->addImage($title,$_POST['parentid1'],$active);
	   redirect('admin/gallery/root_forimages');
	}
	
	//displaying categeories and sub categeories
	function categeoryview()
    {
    	//pagination
        $parentid = $this->uri->segment(4);
    	$this->load->library('paginationnew');
    	$this->paginationnew->start = ($this->uri->segment(5)) ? $this->uri->segment(5) : '0';
    	$this->paginationnew->limit =10;
   $this->paginationnew->filePath = base_url().'admin/Gallery/categeoryview/'.$this->uri->segment(4);
   $this->paginationnew->select_what = '*';
   
   //$this->paginationnew->the_table = 'gallery_categeory';
   $this->paginationnew->add_query = 'from gallery_categeory WHERE parentid = '.$parentid.' order by update_date desc';
        
     $data['query'] = $this->paginationnew->getQuery(TRUE);
  // print_r($data['query']->result());
   $data['paginate'] = $this->paginationnew->paginate1(); 
	  	if($this->uri->segment(4,0)!=0)
	{
		//if it is subcategeory
	   $data['sub']='yes';
	}
      $this->load->view('admin/gallery_categeory-view',$data);
		
	}
	//view all images for the specified categeory
    function image_view()
    {
    	$parentid = $this->uri->segment(4);
    	$this->load->library('paginationnew');
    	$this->paginationnew->start = ($this->uri->segment(5)) ? $this->uri->segment(5) : '0';
    	$this->paginationnew->limit =10;
    $this->paginationnew->filePath = base_url().'admin/gallery/image_view/'.$this->uri->segment(4);
   $this->paginationnew->select_what = '*';
    
   $this->paginationnew->add_query = 'from gallery_images WHERE parentid = '.$parentid.' order by id desc';
        
    	$data['query'] = $this->paginationnew->getQuery(TRUE);
   $data['paginate'] = $this->paginationnew->paginate1(); 
    	
    	
    	$this->load->view('admin/gallery_image-view',$data);
     }
    //edit categeory info in database 
	function editcategeory()
	{   
		 $id = $this->input->post('id');
		 $parentid = $this->input->post('parentid');
		 $catname = $this->input->post('catname');
		 $this->Gallery_model->editcategeory($id,$catname);
		 redirect('admin/gallery/categeoryview/'.$parentid);
		 
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
   	    	$isroot = $this->Gallery_model->isrootcategeory($id);
	    //check whether the wallpaper is root	
	   if($isroot)
	  {
		//fetch all sub categeories
	    $query1 = $this->Gallery_model->subcat($id);
	    foreach ($query1->result() as $item1):	
        //fetch and delete all images in each and every sub wallpaper
        $query2 = $this->Gallery_model->image_view($item1->id); 		 
	  	  foreach ($query2->result() as $item2):	
	    $this->Gallery_model->deleteimage($item2->id);
		  
	    endforeach;
	    endforeach;
	    //delete all subcategeories
	    $this->Gallery_model->deletesubcategeory($id);				  
	 }	
	else{//sub categeory
		 //fetch all images
		 $query2 = $this->Gallery_model->image_view($id); 		 
         //fetch and delete all images
         foreach ($query2->result() as $item2):	
	     $this->Gallery_model->deleteimage($item2->id);
	     
         endforeach;
	    }
	    
	    
	   //delete wallpaper	
	   $this->Gallery_model->deletecategeory($id);
  	  }//foreach
 	  }//if
   }//if

   else{		
		
		$id = $this->uri->segment(4);
		
		$parentid = $this->uri->segment(5);
	    $isroot = $this->Gallery_model->isrootcategeory($id);
	  //check whether the wallpaper is root	
	if($isroot)
	{
		//fetch all sub categeories
	    $query1 = $this->Gallery_model->subcat($id);
	    foreach ($query1->result() as $item1):	
        //fetch and delete all images in each and every sub wallpaper
        $query2 = $this->Gallery_model->image_view($item1->id); 		 
	  	  foreach ($query2->result() as $item2):	
	    $this->Gallery_model->deleteimage($item2->id);
		  
	    endforeach;
	    endforeach;
	    //delete all subcategeories
	    $this->Gallery_model->deletesubcategeory($id);				  
	 }	
	else{//sub wallpaper
		 //fetch all images
		 $query2 = $this->Gallery_model->image_view($item1->id); 		 
         //fetch and delete all images
         foreach ($query2->result() as $item2):	
	     $this->Gallery_model->deleteimage($item2->id);
         endforeach;
	  }
	    
	   //delete wallpaper	
	   $this->Gallery_model->deletecategeory($id);
	  
	  
    }//else
    redirect('admin/gallery/categeoryview/'.$parentid);
	}
    //display info of image in edit form
 	 function imageedit()
	{
		$data['img'] = $this->Gallery_model->imageedit($this->uri->segment(4));
		$this->load->view('admin/gallery_image-edit',$data);
	}
	//edit image in database
	function editImage()
	{   
		  $id = $this->input->post('id');
		  $parentid = $this->input->post('parentid'); 
		  $title = $this->input->post('title');
		  $active=$this->input->post('active');
		  $this->Gallery_model->editimage($id,$title,$active);
		  redirect('admin/gallery/image_view/'.$parentid);
		   
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
    	 	$this->Gallery_model->deleteimage($id);
    	 	
    	 }
 	    
	 }
	 }
	 else{
	 	
		$id = $this->uri->segment(4);
		$parentid = $this->uri->segment(5);
		$this->Gallery_model->deleteimage($id);
		
	   }
	redirect('admin/gallery/image_view/'.$parentid);
	}
	
 }
?>
