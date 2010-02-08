<?php
  class Login_Model extends Model {
  	
  	function __construct()
  	{
  		parent::Model();
  	}
  	
  	function validate_username($uname="",$pass="")
  	{
  		$data = array(
  						'uname'	=> $uname,
  						'pass'	=> $pass,
  						'type'	=> 'admin'
  		);		
  		$this->db->where($data);
  		
  		$count = $this->db->count_all_results('users');

  		if(intval($count)>0 )
		{
			$this->session->set_userdata($data);
			redirect('admin/adminhome');
		}
		else 
		{
			redirect('admin/login/error/1');
		}
  		
  	}
  	function login_validate($logout="")
  	{
 		 $session_uname = $this->session->userdata('uname');
		
 		 if($session_uname=="" && $logout=="")
		{
			redirect('admin/login/error/2');
		}
		else if($session_uname=="" && $logout=="logout")
		{
			return "no";
		}
  	}
  }
?>