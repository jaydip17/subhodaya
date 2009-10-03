<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		Pradeep Kumar
 * @copyright	Copyright (c) 2008, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Flash_video Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Flash_video
 * @author		Pradeep Kumar
 */
class CI_Flash_video {
	var $id				= 'n0'; 
	var $author  		= 'Techpundits'; // The Author of the video
	var $date	 		= ''; // The date of video published
	var $description	= ''; // Description of the video
	var $captions	 	= ''; // The current page being viewed
	var $controlbar   	= 'bottom';
	var $height			= '360';
	var $previewimage 	= 'http://localhost/subhodaya/assets/videos/image_preview/subhodaya.jpg';  //preview image 
	var $playlist		= 'none';
	var $skin			= '';			//bright , nacht,overlay,silverywhite,simple,stylish,swift,thin
	var $width			= '500';
	var $autostart		= 'false';
	var $bufferlength	= '1';
	var $displayclick	= 'play';
	var $icons			= 'true';
	var $linktarget		= '_blank';
	var $logo			= '';
	var $mute			= 'false';
	var $quality		= 'true';
	var $repeat			= 'none';
	var $resizing		= 'true';
	var $shuffle		= 'false';
	var $stretching		= 'uniform';
	var $volume			= '90';
	var $aboutlink		= 'http://techpundits.com/';
	var $file			= 'http://localhost/subhodaya/assets/players/video.flv';

	/**
	 * Constructor
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 */
	function CI_Flash_video($params = array())
	{
		if (count($params) > 0)
		{
			$this->initialize($params);		
		}
		
		log_message('debug', "Flash_video Class Initialized");
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Initialize Preferences
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 * @return	void
	 */
	function initialize($params = array())
	{
		if (count($params) > 0)
		{
			foreach ($params as $key => $val)
			{
				if (isset($this->$key))
				{
					$this->$key = $val;
				}
			}
		}
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Generate the Flash_video content
	 *
	 * @access	public
	 * @return	string
	 */	
	
	function getcode()
	{
		$jscript = "<script type=\"text/javascript\" src=\"".base_url()."assets/players/swfobject.js\"></script>\n";
		$jscript .= "<span id=\"video\" class=\"flashvideo\">
<a href=\"http://www.macromedia.com/go/getflashplayer\">Get the Flash Player</a> to see this player.</span>\n
<script type=\"text/javascript\">
var s1 = new SWFObject(\"".base_url()."assets/players/mediaplayer/player.swf\",\"n0\",\"".$this->width."\",\"".$this->height."\",\"7\");
s1.addParam(\"allowfullscreen\",\"true\");
s1.addParam(\"allowscriptaccess\",\"always\");
s1.addParam(\"wmode\",\"opaque\");\n";
			if(isset($this->id) && $this->id!="")
			{
				$jscript .= $this->Add_variable("id",$this->id);
			}
	if(isset($this->author) && $this->author!="")
			{
				$jscript .= $this->Add_variable("author",$this->author);
			}
	if(isset($this->date) && $this->date!="")
			{
				$jscript .= $this->Add_variable("date",$this->date);
			}
	if(isset($this->description) && $this->description!="")
			{
				$jscript .= $this->Add_variable("description",$this->description);
			}
	if(isset($this->previewimage) && $this->previewimage!="")
			{
				$jscript .= $this->Add_variable("image",$this->previewimage);
			}
	if(isset($this->captions) && $this->captions!="")
			{
				$jscript .= $this->Add_variable("captions",$this->captions);
			}
	if(isset($this->controlbar) && $this->controlbar!="")
			{
				$jscript .= $this->Add_variable("controlbar",$this->controlbar);
			}
	if(isset($this->height) && $this->height!="")
			{
				$jscript .= $this->Add_variable("height",$this->height);
			}
	if(isset($this->playlist) && $this->playlist!="")
			{
				$jscript .= $this->Add_variable("playlist",$this->playlist);
			}
	if(isset($this->skin) && $this->skin!="")
			{
				$jscript .= $this->Add_variable("skin",base_url().'assets/players/skins/'.$this->skin.'/'.$this->skin.'.swf');
			}
	if(isset($this->width) && $this->width!="")
			{
				$jscript .= $this->Add_variable("width",$this->width);
			}
	if(isset($this->autostart) && $this->autostart!="")
			{
				$jscript .= $this->Add_variable("autostart",$this->autostart);
			}
	if(isset($this->bufferlength) && $this->bufferlength!="")
			{
				$jscript .= $this->Add_variable("bufferlength",$this->bufferlength);
			}
	if(isset($this->displayclick) && $this->displayclick!="")
			{
				$jscript .= $this->Add_variable("displayclick",$this->displayclick);
			}
	if(isset($this->icons) && $this->icons!="")
			{
				$jscript .= $this->Add_variable("icons",$this->icons);
			}
	if(isset($this->linktarget) && $this->linktarget!="")
			{
				$jscript .= $this->Add_variable("linktarget",$this->linktarget);
			}
	if(isset($this->logo) && $this->logo!="")
			{
				$jscript .= $this->Add_variable("logo",$this->logo);
			}
	if(isset($this->mute) && $this->mute!="")
			{
				$jscript .= $this->Add_variable("mute",$this->mute);
			}
	if(isset($this->quality) && $this->quality!="")
			{
				$jscript .= $this->Add_variable("quality",$this->quality);
			}
	if(isset($this->repeat) && $this->repeat!="")
			{
				$jscript .= $this->Add_variable("repeat",$this->repeat);
			}
	if(isset($this->resizing) && $this->resizing!="")
			{
				$jscript .= $this->Add_variable("resizing",$this->resizing);
			}
	if(isset($this->shuffle) && $this->shuffle!="")
			{
				$jscript .= $this->Add_variable("shuffle",$this->shuffle);
			}
	if(isset($this->resizing) && $this->resizing!="")
			{
				$jscript .= $this->Add_variable("resizing",$this->resizing);
			}
	if(isset($this->stretching) && $this->stretching!="")
			{
				$jscript .= $this->Add_variable("stretching",$this->stretching);
			}
	if(isset($this->volume) && $this->volume!="")
			{
				$jscript .= $this->Add_variable("volume",$this->volume);
			}
	if(isset($this->aboutlink) && $this->aboutlink!="")
			{
				$jscript .= $this->Add_variable("aboutlink",$this->aboutlink);
			}
	if(isset($this->file) && $this->file!="")
			{
				$jscript .= $this->Add_variable("file",$this->file);
			}
			
			$jscript .= "s1.write(\"video\");
			</script>\n";
		return $jscript;	
	}
	
	
	function Add_variable($key,$variable)
	{
		$string = "s1.addVariable(\"".$key."\",\"".$variable."\");\n";
		return $string;
	}
	
	function get_flowplayer()
	{
		$data = '
		<script type="text/javascript" src="'.base_url().'assets/players/flowplayer/flowplayer-3.1.4.min.js"></script>';
		$data .= '<br/><a  
			 href="'.$this->file.'"  
			 style="display:block;width:'.$this->width.';height:'.$this->height.'"  
			 id="player"> 
		</a>';
		
		$data.= '<script>
			flowplayer("player", "'.base_url().'assets/players/flowplayer/flowplayer-3.1.3.swf");
		</script>';
		return $data;
	}
	
}
// END Pagination Class

/* End of file Flash_video.php */
/* Location: ./system/libraries/Pagination.php */