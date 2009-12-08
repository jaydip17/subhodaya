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
class News_lib{
	
	function News_lib()
	{
		$this->CI = &get_instance();
		//loads necessary libraries
		$this->CI->lang->load('telugu', 'telugu');
	}
	function news_block($heading)
	{
		$more=$this->CI->lang->line('more');
		switch ($heading)
		{
			case $this->CI->lang->line('news_rasriyam'):
					$temp=$this->get_rastiya();
					if(!empty($temp))
					{
						$image_link=base_url()."assets/news/news_img".$temp[0]->id."_thumb.jpg";
					}
					break;
			case $this->CI->lang->line('news_jathiyam'):
					$temp=$this->get_jathiya();
					if(!empty($temp))
					{
						$image_link=base_url()."assets/news/news_img".$temp[0]->id."_thumb.jpg";
					}
					break;
			case $this->CI->lang->line('news_antharja'):
					$temp=$this->get_antharja();
					if(!empty($temp))
					{
						$image_link=base_url()."assets/news/news_img".$temp[0]->id."_thumb.jpg";
					}
					break;
			case $this->CI->lang->line('state_news'):
					$temp=$this->get_state();
					if(!empty($temp))
					{
						$image_link=base_url()."assets/news/news_img".$temp[0]->id."_thumb.jpg";
					}
					break;
		}
		$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'more'			=> $more,
						'details'		=> $temp,
						'image_link'	=> $image_link
		);
		return $this->CI->load->view('news/news_block',$data,TRUE);
	}
	function news_left($heading)
	{
		$more=$this->CI->lang->line('more');
		
		switch ($heading)
		{
			case $this->CI->lang->line('news_ardikam'):
				$temp=$this->get_sensex();
				if(!empty($temp))
				{
					$details=$temp;
				}
				break;
			case $this->CI->lang->line('news_setier'):
				$temp=$this->get_setair();
				if(!empty($temp))
				{
					$details=$temp;
				}
				break;
			case $this->CI->lang->line('news_setier'):
				$temp=$this->get_setair();
				if(!empty($temp))
				{
					$details=$temp;
				}
				break;
		}
		$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'more'			=> $more,
						'details'       => $details
		);
		return $this->CI->load->view('news/news_left',$data,TRUE);
	}
	function news_main($heading)
	{
		$temp=$this->breking_news();
		if(!empty($temp)){
			
			$details=$temp;
			$count=0;
			foreach ($temp as $row){
				$count++;
			}
		}
		$data = array(
						'data' => 'somtext',
						'sub_heading'	=> $heading,
						'details'		=> $details,
		);
		return $this->CI->load->view('news/news_main',$data,TRUE);
	}
	function get_rastiya()
	{
		$details=$this->CI->News_Model->get_newstype1(1);
		return $details;
	}
	function get_jathiya()
	{
		$details=$this->CI->News_Model->get_newstype1(2);
		return $details;
	}
	function get_antharja()
	{
		$details=$this->CI->News_Model->get_newstype1(3);
		return $details;
	}
	function get_state()
	{
		$details=$this->CI->News_Model->get_newstype1(7);
		return $details;
	}
	function get_sensex()
	{
		$details=$this->CI->News_Model->get_newstype1(5);
		return $details;
	}
	function get_setair()
	{
		$details=$this->CI->News_Model->get_newstype1(6);
		return $details;	
	}
	function breking_news()
	{
		$details=$this->CI->News_Model->active_news1(3);
		//print_r($details);
		return $details;
	}
	
}