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
	//print_r($images);
    $output="<images>";
    		$i=1;
    		foreach($images as $item)
		{
		  $output.="<preview".$i.">flash_images/image".$item->id.".jpg</preview".$i.">";
		  $output.="<thumb".$i.">flash_images/image".$item->id."_thumb.jpg</thumb".$i.">";
		  $output.="<content".$i.">".$item->id."</content".$i.">";
		  $output.="<hyperlink".$i.">".$item->hyperlink."</hyperlink".$i.">";
		  $i++;		}
		$output.="</images>";
		print($output);

	}
	
function greetings()
{
	echo "<images>
<preview1>images/i miss u.jpg</preview1>
<preview2>images/birthday.jpg</preview2>
<preview3>images/for u.jpg</preview3>
<preview4>images/happy new year.jpg</preview4>
<preview5>images/top-banner1.jpg</preview5>
<thumb1>images/1.jpg</thumb1>
<thumb2>images/2.jpg</thumb2>
<thumb3>images/3.jpg</thumb3>
<thumb4>images/4.jpg</thumb4>
<thumb5>images/5.jpg</thumb5>
<content1>content1 dsf sdf dsfdsf dsf dsfdsf dsf dsfds f dsf ds</content1>
<content2>content2f dsf dsf dsdsf dsf sdfdsf dsf dsf dfsdf dfsdfdsfdsf fdg fd gfdg fdg fdg fdg fdg fdg fdg fdg fdg fd gfg dfg df</content2>
<content3>content3</content3>
<content4>content4</content4>
<content5>content5</content5>
<link1>link1</link1>
<link2>link2</link2>
<link3>link3</link3>
<link4>link4</link4>
<link5>link5</link5>
</images>";
}
}