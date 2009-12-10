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
	function mahila_block($heading)
	{
		$more=$this->CI->lang->line('more');
		switch ($heading)
		{
			case $this->CI->lang->line('mahila_spec'):
				$temp=$this->mahila_spec();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('home_carer'):
				$temp=$this->home_carer();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('mahila_fashon'):
				$temp=$this->mahila_fashon();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('mahila_yoga'):
				$temp=$this->mahila_yoga();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('dite_helth'):
				$temp=$this->dite_helth();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('mahila_mehandi'):
				$temp=$this->mahila_mehandi();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('mahi_buty'):
				$temp=$this->mahi_buty();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('mahila_food'):
				$temp=$this->mahila_food();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('sahi_festiva'):
				$temp=$this->sahithi_festival();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('sahi_kathalu'):
				$temp=$this->sahi_kathalu();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('matru_basha'):
				$temp=$this->matru_basha();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('sahi_sametha'):
				$temp=$this->sahi_sametha();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('sahi_kavithalu'):
				$temp=$this->sahi_kavithalu();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('sahi_kavithm'):
				$temp=$this->sahi_kavithm();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('sahi_janapadam'):
				$temp=$this->sahi_janapadam();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
			case $this->CI->lang->line('sahi_vyasam'):
				$temp=$this->sahi_vyasam();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
				}
				break;
		}
		$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'more'			=> $more,
						'img_link'		=> $img_link,
						'details'		=>	$temp
		);
		
		return $this->CI->load->view('cinema/mahila_block',$data,TRUE);
	}
	
// cinema pages
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
// mahila pages
	function mahila_spec()
	{
		$details=$this->CI->Mahila_Model->get_mahila(1);
		return $details;	
	}
	function home_carer()
	{
		$details=$this->CI->Mahila_Model->get_mahila(2);
		return $details;	
	}
	function mahila_fashon()
	{
		$details=$this->CI->Mahila_Model->get_mahila(3);
		return $details;	
	}
	function mahila_yoga()
	{
		$details=$this->CI->Mahila_Model->get_mahila(4);
		return $details;	
	}
	function dite_helth()
	{
		$details=$this->CI->Mahila_Model->get_mahila(5);
		return $details;	
	}
	function mahila_mehandi()
	{
		$details=$this->CI->Mahila_Model->get_mahila(6);
		return $details;	
	}
	function mahila_food()
	{
		$details=$this->CI->Mahila_Model->get_mahila(8);
		return $details;	
	}
	function mahi_buty()
	{
		$details=$this->CI->Mahila_Model->get_mahila(7);
		return $details;	
	}
// sahithi pages
	function sahithi_festival()
	{
		$details=$this->CI->Sahithi_Model->get_sahithi(1);
		return $details;
	}
	function sahi_kathalu()
	{
		$details=$this->CI->Sahithi_Model->get_sahithi(2);
		return $details;
	}
	function matru_basha()
	{
		$details=$this->CI->Sahithi_Model->get_sahithi(3);
		return $details;
	}
	function sahi_sametha()
	{
		$details=$this->CI->Sahithi_Model->get_sahithi(4);
		return $details;
	}
	function sahi_kavithalu()
	{
		$details=$this->CI->Sahithi_Model->get_sahithi(5);
		return $details;
	}
	function sahi_kavithm()
	{
		$details=$this->CI->Sahithi_Model->get_sahithi(6);
		return $details;
	}
	function sahi_janapadam()
	{
		$details=$this->CI->Sahithi_Model->get_sahithi(7);
		return $details;
	}
	function sahi_vyasam()
	{
		$details=$this->CI->Sahithi_Model->get_sahithi(8);
		return $details;
	}
}