<?php
class Slideimages extends Controller {
	var $layout = 'admin';
	var $base_uri = '';
	function Slideimages()
	{
		parent::Controller();
		$this->load->model('admin/Slideimages_model');
	}
	function flashimages()
	{

     $this->load->model('admin/Flash_model');

	$query=$this->Flash_model->get_flash_images();
	$images=$query->result();
    $output="<images>";
    		$i=1;
    		foreach($images as $item)
		{
		  $output.="<preview".$i.">images/image".$item->id.".jpg</preview".$i.">";
		  $output.="<thumb".$i.">images/".$item->id.".jpg</thumb".$i.">";
		  $output.="<content".$i.">".$item->title."</content".$i.">";
		  $output.="<hyperlink".$i.">".$item->hyperlink."</hyperlink".$i.">";
		  $i++;		}
		$output.="</images>";
		print($output);
		exit;
	}
	
	function index()
	{	
		$data['query']= $this->Slideimages_model->show();
		$this->load->view('admin/slideimageview',$data);
		
	}
	function add()
	{
		if($this->input->post('mysubmit'))
		{
			$this->Slideimages_model->add();
			$data['added'] ='yes';
		}
		else {
		   $data['added'] = 'no';
		}
		
		$this->load->view('admin/addslideimage',$data);
		
	}
	function delete()
	{
		$id = $this->uri->segment(4);
		$this->Slideimages_model->delete($id);
		redirect(base_url()."admin/slideimages");
	}
}

?>