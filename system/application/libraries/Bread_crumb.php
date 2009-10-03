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
class Bread_crumb{
	
	function Bread_crumb(){
		$this->CI = &get_instance();
		//loads necessary libraries
      
       
	}
	function get_code($segments)
	{ 
		
		$bread_crum = '<div style="float:left" class="pages"  >&nbsp;'.anchor('',$segments['home']);
		if($segments['seg1']!='' || $segments['seg1']!=0)
		{

			switch($segments['seg1'])
			{
				case 'news': 
							$bread_crum .= '&nbsp;&raquo;&nbsp;'.anchor($segments['seg1'],$segments['main']);
							break;
			}
			
		}
	if(($segments['seg2']!='' || $segments['seg2']!=0) && ($segments['seg1']!='' || $segments['seg1']!=0))
		{
			if(($segments['seg4']!='' || $segments['seg4']!=0))
			{
			$root_cat_id = $segments['seg4'];
			$seg3 = $segments['seg4'];
			}
			else {
			$root_cat_id = $segments['seg3'];
			$seg3 = $segments['seg3'];
			}
			switch($segments['seg1'])
			{
				case 'news': 
						$seg2 = 'details';
							$this->CI->load->model("admin/News_Model");
							$second = $this->CI->News_Model->get_root_cat_by_id($root_cat_id);
							$bread_crum .= '&nbsp;&raquo;&nbsp;'.anchor($segments['seg1'].'/'.$seg2.'/'.$seg3,$second);
							break;
			}
			
		}
	if(($segments['seg4']!='' || $segments['seg4']!=0))
		{
		switch($segments['seg1'])
			{
				case 'news': 
							$seg2 = 'newsdetails';
							(isset($segments['heading'])) ? $segments['heading']!='' ? $heading = $segments['heading'] : '' : '';
							$bread_crum .= '&nbsp;&raquo;&nbsp;'.anchor($segments['seg1'].'/'.$seg2.'/'.$segments['seg3'].'/'.$segments['seg4'],$heading);
							break;
			}
		}
		$bread_crum .= "</div>";
		
		return $bread_crum;
	}
	function left_block($heading)
	{
		$data = array(
						'data' => 'somtext',
						'sub_heading'	=> $heading,
						);
		return $this->CI->load->view('maahome/leftblock',$data,TRUE);
	}
	function center_block($heading)
	{
		$data = array(
						'data' => 'somtext',
						'sub_heading'	=> $heading,
						);
		return $this->CI->load->view('maahome/centerblock',$data,TRUE);
	}
	function right_block($heading,$data)
	{
		$data = array(
						'data' => $data,
						'sub_heading'	=> $heading,
						);
		return $this->CI->load->view('maahome/rightblock',$data,TRUE);
	}
	

}