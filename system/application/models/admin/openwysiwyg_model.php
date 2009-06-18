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
		$links = "<script type=\"text/javascript\" src=\"".$url."scripts/wysiwyg.js\"></script>\n";
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
	function setRtf($enable,$textarea=array())
	{
		if($enable == 'true')
		{
			$url = base_url()."assets/rte/";
			
		$links['0'] = "<script type=\"text/javascript\" src=\"".$url."richtext_compressed.js\"></script>\n";
        $links['1']="<script type=\"text/javascript\">\n";
        //Usage: initRTE(imagesPath, includesPath, cssFile)
        $links['1'] .="initRTE(\"".$url."/images/\", \"$url\",\"\");";
        //-->
        $links['1'] .="</script>";
		$links['2']="<script type=\"text/javascript\">\n";
		//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
       $links['2'] .="writeRichText('description', 'here&#39;s the \"<em>preloaded</em> <b>content</b>\"', 400, 200, true, false);";
       $links['2'] .= "</script>\n";
          
		
		return $links;
		}
	}
}
?>