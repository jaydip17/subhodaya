<?php
class Openwysiwyg_Model extends Model {
	
	function __construct()
	{
		parent::Model();
	}
	/*
	 * ex :
	 * $textarea[]= array('textarea' => 'test',
	 * 					  'skin'	 => 'none');  none to select default skin (none,full,small)		
	 * setEdior(enable=TRUE,$textarea)
	 */
	
	function setEditor($enable=TRUE,$textarea=array() )
	{
		if($enable == TRUE)
		{
		//$textarea[]= array('textarea' => 'test',
		//				   'skin'	  => '');
		$url = base_url()."assets/openwysiwyg/";
		$links = "<script type=\"text/javascript\">  var base_url='".base_url()."'; </script>";
		$links .= "<script type=\"text/javascript\" src=\"".$url."scripts/wysiwyg.js\"></script>\n";
		$links .= "<script type=\"text/javascript\" src=\"".$url."scripts/wysiwyg-settings.js\"></script>\n";
		
		$links .="<script type=\"text/javascript\">\n";
		foreach ($textarea as $text):
		if($text['skin']!='' && $text['skin']!='none'):
		$links .= "WYSIWYG.attach('".$text['textarea']."',".$text['skin'].");\n";
		else:
		$links .= "WYSIWYG.attach('".$text['textarea']."');\n";
		endif;
		endforeach;
		$links .= "</script>\n";
		return $links;
		}
	}
}
?>