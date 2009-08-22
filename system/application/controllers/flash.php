<?php
class Flash extends Controller {
	function Flash()
	{
		parent::Controller();
		$this->load->model('admin/Flash_model');
	}
function flashimages()
{
	$query=$this->Flash_model->get_flash_images();
	$images=$query->result();
    $output="<images>";
    		$i=1;
    		foreach($images as $item)
		{
		  $output.="<preview".$i.">flash_images/image".$item->id.".jpg</preview".$i.">";
		  $output.="<thumb".$i.">flash_images/image".$item->id."_thumb.jpg</thumb".$i.">";
		  $output.="<content".$i.">".$item->title."</content".$i.">";
		  $output.="<hyperlink".$i.">".$item->hyperlink."</hyperlink".$i.">";
		  $i++;		}
		$output.="</images>";
		print($output);
		exit;	}
}