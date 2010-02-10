<?php
class Ads extends Controller {
	var $layout = 'admin';
	function Ads()
	{
		parent::Controller();
		$this->base_uri = base_url()."admin/adds/add_change";
		//$this->Login_Model->login_validate();
		$this->load->model('admin/Ads_Model');
	}
	function index()
	{
		$data=array('url'=>$this->base_uri);
		$this->load->view('admin/add_ads',$data);
	}
	function change_ad()
	{	//$this->segment=$this->uri->segment(4);
		//$data['ad_name'] = $this->segment;
		$this->load->view('/admin/upload_view');
		//$this->segment=$this->uri->segment(4);
		
	}
	function upload_ads(){
		$ad_name=$_POST['ad_name'];
		$config['upload_path'] = './assets/ads/';
		$config['allowed_types'] = 'png|jpg|gif';
		$config['max_size']	= '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( !$this->upload->do_upload('adimage'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			
			//$this->load->view('', $error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			
			$result=$this->Ads_Model->adds_rename($data,$ad_name);
			
			redirect("admin/ads");
		}
	}
}
?>