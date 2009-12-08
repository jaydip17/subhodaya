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
class Cinema_lib{
	
	function Cinema_lib()
	{
		$this->CI = &get_instance();
		//loads necessary libraries
		$this->CI->lang->load('telugu', 'telugu');
	}
	function cinema_block($heading)
	{
		$more=$this->CI->lang->line('more');
		switch ($heading)
		{
			case $this->CI->lang->line('cini_news'):
				$temp=$this->cine_news();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/cinema/ceni_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('cini_pukarlu'):
				$temp=$this->cine_pukarlu();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/cinema/ceni_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('reviews'):
				$temp=$this->cine_riviews();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/cinema/ceni_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('cini_shedul'):
				$temp=$this->cine_shedul();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/cinema/ceni_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('interviews'):
				$temp=$this->cine_interviews();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/cinema/ceni_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('therachatu'):
				$temp=$this->cine_therachatu();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/cinema/ceni_img".$temp[0]->id."_thumb.jpg";
				}
				break;
		}
		$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'more'			=> $more,
						'details'		=> $temp,
						'img_link'		=> $img_link
		);
		return $this->CI->load->view('cinema/cinema_block',$data,TRUE);
	}
	function cine_news()
	{
		$details=$this->CI->Cinema_Model->get_cinematype(1);
		return $details;
	}
	function cine_pukarlu()
	{
		$details=$this->CI->Cinema_Model->get_cinematype(2);
		return $details;
	}
	function cine_riviews()
	{
		$details=$this->CI->Cinema_Model->get_cinematype(3);
		return $details;
	}
	function cine_shedul()
	{
		$details=$this->CI->Cinema_Model->get_cinematype(4);
		return $details;
	}
	function cine_interviews()
	{
		$details=$this->CI->Cinema_Model->get_cinematype(5);
		return $details;
	}
	function cine_therachatu()
	{
		$details=$this->CI->Cinema_Model->get_cinematype(6);
		return $details;
	}
}