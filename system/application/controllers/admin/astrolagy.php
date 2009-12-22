<?php

class Astrolagy extends Controller {
	var $layout = 'admin'; 
	function Astrolagy(){
		parent::Controller();
		$this->load->model('admin/Astrolagy_Model');
	  }
	  
	  
	 function index(){
	 	
	 	$message = $this->session->flashdata('message');
	 	$details=$this->Astrolagy_Model->get_astrolagycat();
	 	   foreach($details as $res)
	 	   {
	 	   	$options[$res->id]=$res->astrolagy_cat;
	 	   }
	 	$details1=$this->Astrolagy_Model->get_astrolagytype();
	 	   foreach($details1 as $res)
	 	   {
	 	   	$options1[$res->id]=$res->astrolagy_type;
	 	   }
	 	$this->load->model('admin/Openwysiwyg_Model');
	 	 
	 	$textarea[]= array('textarea' => 'description',
						   'skin'	  => 'full');
		
	 	
        $links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
        
                   $data=array(
							'jslinks'   => $links,
							'message'	=> $message,
							'options'   => $options,
                            'options1'  => $options1,
                            
		            );
		$this->load->view('admin/astrolagy_view',$data);
		
	 }
	 
	function insert(){
		
	     $astrolagy_cat=$this->input->post('astrolagy_cat'); 
	     $astrolagy_type=$this->input->post('astrolagy_type');
	     $description=$this->input->post('description');
	     $display_date=$this->input->post('display_date');
	     
	     $data=array('astrolagy_cat'=>$astrolagy_cat,
	                 'astrolagy_type'=>$astrolagy_type,
	                 'description'=>$description,
	                 'display_date' => $display_date
	                );
	                
	           if(!empty($data)){
	            $result=$this->db->insert('astrolagy',$data);
	                }
	            if($result==1){
	            $message='<span style="color:green;">Astrolagy Add Successfully</span>';	
	            $this->session->set_flashdata('message',$message);    
		        redirect(base_url()."admin/astrolagy/index",$message);     
	            }
	            
	         else{
			   $error=mysql_error();
			   $this->session->set_flashdata('message',$error);
			   redirect(base_url()."admin/astrolagy/index",$error);
		      }
	            
	}

 function getastrolagycats(){
 	    $details=$this->Astrolagy_Model->get_astrolagycat();
 	    $data=array('details'=>$details);
 	    $this->load->view('admin/viewastrolagy_cat',$data);
 	
 }
	 
function getastrolagy(){

        $id=$this->uri->segment(4,0);
		//$details=$this->Astrolagy_Model->getastrolagy_details($type);
		
		$query=$this->Astrolagy_Model->get_astrolagy1($id);
		//print_r($query);
	    $a =base_url().'admin/astrolagy/getastrolagy/'.$id;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(5)) ? $this->uri->segment(5) : '0';
    	$this->paginationnew->limit =10;
        $this->paginationnew->filePath =$a;
      
        $this->paginationnew->select_what = '*';
     //   $this->paginationnew->nbItems = $this->Astrolagy_Model->count($id);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		// print_r($details);
  	    $paginate = $this->paginationnew->paginate1(); 
		$data=array(
					'details' => $details,
					'paginate'=> $paginate
		);
		$this->load->view('admin/viewastrolagy_type',$data);
	
}
	 
 function edit(){
 	
 	    $id =$this->uri->segment(4,0);
        $edit = $this->Astrolagy_Model->getastrolagy_details($id);
    
        $message = $this->session->flashdata('message');
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'description',
						   'skin'	  => 'full');
		
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$data=array(
							'jslinks'   => $links,
							'message'	=> $message,
		                    'edit'      =>  $edit,
		                   
		);
       $this->load->view('admin/editastrolagytype',$data);
 	
 }
 
 function edit1(){
 	
 	 $id=$_POST['id'];
   	 $this->Astrolagy_Model->edit1($id);
   	 redirect(base_url().'admin/astrolagy/getastrolagy/'.$id);
 	
 	
 }
	 
function delete(){
	 $this->load->model('admin/Astrolagy_Model');
	 $id=$this->uri->segment(4,0);
	 $result=$this->Astrolagy_Model->delete($id);
	 redirect(base_url().'admin/astrolagy/getastrolagy/'.$id);
	}
	 


}
?>