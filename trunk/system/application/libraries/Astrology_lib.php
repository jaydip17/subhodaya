<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * FreakAuth_light Class to handle the front controller
 * this class make code more reusable and it makes easier to
 * integrate Freakauth_light in your on templating system
 *
 * The class requires the use of
 *
 * -----------------------------------------------------------------------------
 * Copyright (C) 2009 TechPundits (tech-pundits.com)
 * -----------------------------------------------------------------------------
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301  USA
 *------------------------------------------------------------------------------
 * @package     Maa Screen 2009-09-25
 * @subpackage  Libraries
 * @category    Authentication
 * @author      pradeep kumar
 * @copyright   Copyright (c) 2009,TechPundits (tech-pundits.com)
 * @license		http://www.gnu.org/licenses/lgpl.html
 * @link 		http://tech-pundits.com
 * 
 *
 */
class Astrology_lib{
	
	function Astrology_lib(){
		$this->CI = &get_instance();
		//loads necessary libraries
		$this->CI->lang->load('telugu', 'telugu');
	}
	function astrology_block()
	{
		$type=$this->get_astrolagycat();
		$rasi=$this->get_rasi();
		//print_r($type);
		$data=array(
		'types'	=>	$type,
		'rasi'	=>	$rasi
		);
		return $this->CI->load->view('cinema/astrology_block',$data,TRUE);
	}
	function get_astrolagycat()
	{
		$details=$this->CI->Astrolagy_Model->get_astrolagycat();
		return $details;
	}
	function get_rasi()
	{
		$details=$this->CI->Astrolagy_Model->get_astrolagytype();
		return $details;
	}
	function get_today_rasi()
	{
		$details=$this->CI->Astrolagy_Model->get_astrolagytype();
		return $details;
	}
}