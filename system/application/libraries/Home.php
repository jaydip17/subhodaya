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
class Home{
	
	function Home(){
		$this->CI = &get_instance();
		//loads necessary libraries
		$this->CI->lang->load('telugu', 'telugu');
	}
	function tabs_block($tab){
		$image_link='';
		$details=array();
		$more=$this->CI->lang->line('more');
			switch ($tab)
			{
				case $this->CI->lang->line('mahila'):
					 $temp	=	$this->get_mahila(0);
					 $count=0;
					 foreach ($temp as $item){
					 	$image_link=base_url().'assets/mahila/';
					 	$count++;
					 }
				case $this->CI->lang->line('sahithi'):
					$temp=$this->get_mahila(0);
			}
				$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $tab,
						'more'			=> $more,
						'details'		=> $details,
						'image_link'	=> $image_link
		);
		return $this->CI->load->view('home/tabs_block',$data,TRUE);
	}
	function right_block($heading){
		$image_link='';
		$more=$this->CI->lang->line('more');
		$eenka=$this->CI->lang->line('enka_chavandi');
		switch ($heading)
		{
			case $this->CI->lang->line('news_ardikam'):
				$temp=$this->get_ardikam();
				$image_link=base_url().'assets/news/news_img'.$temp[0]->id.'_home_thumb.jpg';
				break;			
			case $this->CI->lang->line('srungaram'):
				$temp=$this->get_srungaram();
				$image_link=base_url().'assets/srungaram/news_img'.$temp[0]->id.'_home_thumb.jpg';
				break;
				
		}
				$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'more'			=>	$more,
						'eenka'			=>	$eenka,
						'image_link'	=>	$image_link,
						'details'		=> $temp,
		);
		return $this->CI->load->view('home/right_block',$data,TRUE);
	}
	function left_block($heading){
		$image_link='';
		//$reviews=$this->CI->lang->line('reviews');
		$more=$this->CI->lang->line('more');
		$eenka=$this->CI->lang->line('enka_chavandi');
		switch ($heading){
			case $this->CI->lang->line('subh_spec'):
				 $temp=$this->get_sub_special();
				 $image_link=base_url().'assets/news/news_img'.$temp[0]->id.'_home_thumb.jpg';
		}
				$data = array(
						'data' => 'somtext',
						'sub_heading'	=> $heading,
						'more'			=>	$more,
						'eenka'			=>	$eenka
		);
		return $this->CI->load->view('home/left_block',$data,TRUE);
	}
	function middle_block($heading){
		$more=$this->CI->lang->line('more');
				$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'more'			=> $more
		);
		return $this->CI->load->view('home/middle_block',$data,TRUE);
	}
	function home_poll($heading){
		$homepoll=$this->CI->lang->line('homepoll');
		switch ($heading){
			case $homepoll:
		}
				$data = array(
						'data' => 'somtext',
						'sub_heading'	=> $heading,
		);
		return $this->CI->load->view('home/home_poll',$data,TRUE);
	}
	function photo_gallery($heading){
				$data = array(
						'data' => 'somtext',
						'sub_heading'	=> $heading,
		);
		return $this->CI->load->view('home/photo_gallery',$data,TRUE);
	}
	function video_block($heading){
				$data = array(
						'data' => 'somtext',
						'sub_heading'	=> $heading,
		);
		return $this->CI->load->view('home/video_block',$data,TRUE);
	}
	function get_mahila(){
		$details=$this->CI->Mahila_Model->active_mahila(0);
		return $details;
	}
	function get_sahithi(){
		$details=$this->CI->Sahithi_Model->active_mahila(0);
		return $details;
	}
	function get_ardikam(){
		$details=$this->CI->News_Model->active_news(5);
		return $details;
	}
	function get_sub_special(){
		$details=$this->CI->Subho_Model->get_home_stories(0);
		print_r($details);
		return $details;
	}
	function get_srungaram(){
		$details=$this->CI->Srungaram_Model->active_srung(0);
		return $details;
	}
}