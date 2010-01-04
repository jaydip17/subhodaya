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
						$content_link=base_url()."news/details/".$temp[0]->type;
						$link=base_url()."news/newsdetails/";
					}
					break;
			case $this->CI->lang->line('news_jathiyam'):
					$temp=$this->get_jathiya();
					if(!empty($temp))
					{
						$image_link=base_url()."assets/news/news_img".$temp[0]->id."_thumb.jpg";
						$content_link=base_url()."news/details/".$temp[0]->type;
						$link=base_url()."news/newsdetails/";
					}
					break;
			case $this->CI->lang->line('news_antharja'):
					$temp=$this->get_antharja();
					if(!empty($temp))
					{
						$image_link=base_url()."assets/news/news_img".$temp[0]->id."_thumb.jpg";
						$content_link=base_url()."news/details/".$temp[0]->type;
						$link=base_url()."news/newsdetails/";
					}
					break;
			case $this->CI->lang->line('state_news'):
					$temp=$this->get_state();
					if(!empty($temp))
					{
						$image_link=base_url()."assets/news/news_img".$temp[0]->id."_thumb.jpg";
						$content_link=base_url()."news/details/".$temp[0]->type;
						$link=base_url()."news/newsdetails/";
					}
					break;
		}
		$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'more'			=> $more,
						'details'		=> $temp,
						'image_link'	=> $image_link,
						'content_link'	=>	$content_link,
						'link'			=>	$link
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
					$content_link=base_url()."news/details/".$temp[0]->type;
					$link=base_url()."news/newsdetails/";
				}
				break;
			case $this->CI->lang->line('news_setier'):
				$temp=$this->get_setair();
				if(!empty($temp))
				{
					$details=$temp;
					$content_link=base_url()."news/details/".$temp[0]->type;
					$link=base_url()."news/newsdetails/";
				}
				break;
			case $this->CI->lang->line('news_setier'):
				$temp=$this->get_setair();
				if(!empty($temp))
				{
					$details=$temp;
					$content_link=base_url()."news/details/".$temp[0]->type;
					$link=base_url()."news/newsdetails/";
				}
				break;
		}
		$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'more'			=> $more,
						'details'       => $details,
						'content_link'	=> $content_link,
						'link'			=>	$link
		);
		return $this->CI->load->view('news/news_left',$data,TRUE);
	}
	function news_main($heading)
	{
		$temp=$this->breking_news();
		$link=base_url()."news/newsdetails/";
		if(!empty($temp)){
			
			$details=$temp;
		}
		$data = array(
						'data' => 'somtext',
						'sub_heading'	=> $heading,
						'details'		=> $details,
						'link'			=> $link
		);
		return $this->CI->load->view('news/news_main',$data,TRUE);
	}
	function news_content($news_cat)
	{
		
			$more_news=$this->CI->lang->line('marinni_visheshalu');
			$most_read_news=$this->most_read_news($news_cat);
			$thaja_varhta=$this->thaja_vartha($news_cat);
			$link=base_url()."news/newsdetails/";
			$image_link=base_url().'assets/news/news_img'.$thaja_varhta[0]->id.'_thumb.jpg';
			$list='newslist';
			$cat_name=$most_read_news[0]->news_cat;
				$data = array(
						'most_read_news'=>	$most_read_news ,
						'thaja_varhta'	=>	$thaja_varhta,
						'more_news'		=>	$more_news,
						'link'			=>	$link,
						'image_link'	=>	$image_link,
						'list'			=>	$list,
						'cat_id'		=>	$news_cat,
						'cat_name'		=>	$cat_name
		);
		return $this->CI->load->view('news/news_content',$data,TRUE);
	}
	function cinema_content($cine_cat)
	{
		$more_news=$this->CI->lang->line('marinni_visheshalu');
		$most_read_news=$this->most_read_cini_news($cine_cat);
		$thaja_varhta=$this->cine_thaja_vartha($cine_cat);
		$link=base_url()."cinema/inner/";
		$image_link=base_url().'assets/cinema/ceni_img'.$thaja_varhta[0]->id.'_thumb.jpg';
		$list='cinemalist';
		$cat_name=$most_read_news[0]->cinema_type;
				$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $cine_cat,
						'most_read_news'	=>	$most_read_news,
						'thaja_varhta'	=>	$thaja_varhta,
						'more_news'		=>	$more_news,
						'link'			=>  $link,
						'image_link'	=>  $image_link,
						'list'			=>	$list,
						'cat_id'		=>	$cine_cat,
						'cat_name'		=>	$cat_name
		);
		return $this->CI->load->view('news/news_content',$data,TRUE);
	}
	function mahila_content($mahila_cat)
	{
		$more_news=$this->CI->lang->line('marinni_visheshalu');
		$most_read_news=$this->most_read_mahila_news($mahila_cat);
		$thaja_varhta=$this->mahila_thaja_vartha($mahila_cat);
		$link=base_url()."mahila/mahiladetails/";
		$image_link=base_url().'assets/mahila/ceni_img'.$thaja_varhta[0]->id.'_thumb.jpg';
		$list='mahilalist';
		$cat_name=$most_read_news[0]->cat_name;
				$data = array(
						'most_read_news'	=>	$most_read_news,
						'thaja_varhta'	=>	$thaja_varhta,
						'more_news'		=>	$more_news,
						'link'			=>  $link,
						'image_link'	=>  $image_link,
						'list'			=>	$list,
						'cat_id'		=>	$mahila_cat,
						'cat_name'		=>	$cat_name
		);
		return $this->CI->load->view('news/news_content',$data,TRUE);
	}
	function sahithi_content($sahithi_cat)
	{
		$more_news=$this->CI->lang->line('marinni_visheshalu');
		$most_read_news=$this->most_read_sahithi_news($sahithi_cat);
		$thaja_varhta=$this->sahithi_thaja_vartha($sahithi_cat);
		$link=base_url()."sahithi/sahithidetails/";
		$image_link=base_url().'assets/sahithi/ceni_img'.$thaja_varhta[0]->id.'_thumb.jpg';
		$list='sahithilist';
		$cat_name=$most_read_news[0]->cat_name;
				$data = array(
						'most_read_news'	=>	$most_read_news,
						'thaja_varhta'	=>	$thaja_varhta,
						'more_news'		=>	$more_news,
						'link'			=>  $link,
						'image_link'	=>  $image_link,
						'list'			=>	$list,
						'cat_id'		=>	$sahithi_cat,
						'cat_name'		=>	$cat_name
		);
		return $this->CI->load->view('news/news_content',$data,TRUE);
	}
	function news_inner($id,$cat_id)
	{
		$temp=$this->get_this_news($id);
		$realtion=$this->realtion_news($cat_id);
		$link=base_url()."assets/news/";
		$this->insert_views($id);
		$more_news=$this->more_news($cat_id);
		$cat_name=$temp[0]->news_cat;
		$type='news';
		$comments=$this->get_comments($type,$id);
		$total_com=$this->count_comments($type,$id);
		$hed_link=base_url().'news/newsdetails/';
		$data=array(
			'details' 	=> $temp,
			'link'	  	=> $link,
			'realtion'	=> $realtion,
			'morenews'	=> $more_news,
			'cat_name'	=> $cat_name,
			'type'	 	=> $type,
			'comments'	=> $comments,
			'total_com'	=> $total_com,
			'hed_link'	=> $hed_link,
			'cat_id'    => $cat_id
		);
		return $this->CI->load->view('news/news_inner',$data,TRUE);
	}
	function cinema_inner($id,$cat_id)
	{
		$temp=$this->get_cinema_news($id);
		$this->insert_cinema_views($id);
		$realtion=$this->cinema_realtion_news($cat_id);
		$link=base_url()."assets/cinema/";
		$more_news=$this->active_cinema_news($cat_id);
		$this->CI->load->model('ratings_model', 'ratings');
		$cat_name=$temp[0]->cinema_type;
		if($cat_id==3){
		$rating=1;
		}else 
		$rating=0;
		$type='cinema';
		$comments=$this->get_comments($type,$id);
		$total_com=$this->count_comments($type,$id);
		$hed_link=base_url().'cinema/inner/';
		$data=array(
			'details' => $temp,
			'link'	  => $link,
			'realtion'=> $realtion,
			'morenews'=> $more_news,
			'rating'  => $rating,
			'cat_name'=> $cat_name,
			'type'	  => $type,
			'comments'=> $comments,
			'total_com'=>$total_com,
			'hed_link'=> $hed_link,
			'cat_id'  => $cat_id
		);
		return $this->CI->load->view('news/news_inner',$data,TRUE);
	}
	function mahila_inner($id,$cat_id)
	{
		$temp=$this->get_mahila_news($id);
		$this->insert_mahila_views($id);
		$realtion=$this->mahila_realtion_news($cat_id);
		$link=base_url()."assets/mahila/";
		$more_news=$this->mahila_active_news($cat_id);
		$cat_name=$temp[0]->cat_name;
		$type='mahila';
		$comments=$this->get_comments($type,$id);
		$total_com=$this->count_comments($type,$id);
		$hed_link=base_url().'mahila/mahiladetails/';
		$data=array(
			'details' => $temp,
			'link'	  => $link,
			'realtion'=> $realtion,
			'morenews'=> $more_news,
			'cat_name'=> $cat_name,
			'type'	  => $type,
			'comments'=> $comments,
			'total_com'=>$total_com,
			'hed_link'=> $hed_link,
			'cat_id'  => $cat_id
		);
		return $this->CI->load->view('news/news_inner',$data,TRUE);
	}
	function sahithi_inner($id,$cat_id)
	{
		$temp=$this->get_sahithi_news($id);
		$this->insert_sahithi_views($id);
		$realtion=$this->sahithi_realtion_news($cat_id);
		$link=base_url()."assets/sahithi/";
		$more_news=$this->sahithi_active_news($cat_id);
		$cat_name=$temp[0]->cat_name;
		$type='sahithi';
		$comments=$this->get_comments($type,$id);
		$total_com=$this->count_comments($type,$id);
		$hed_link=base_url().'sahithi/sahithidetails/';
		$data=array(
			'details' => $temp,
			'link'	  => $link,
			'realtion'=> $realtion,
			'morenews'=> $more_news,
			'cat_name'=> $cat_name,
			'type'	  => $type,
			'comments'=> $comments,
			'total_com'=>$total_com,
			'hed_link'=> $hed_link,
			'cat_id'  => $cat_id
		);
		return $this->CI->load->view('news/news_inner',$data,TRUE);
	}	
//news main page
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
		$details=$this->CI->News_Model->active_news1(4);
		return $details;
	}
//news contentpage
	function get_news_details($news_cat)
	{
		$details=$this->CI->News_Model->get_news($news_cat);
		return $details;
	}
	function most_read_news($news_cat)
	{
		$details=$this->CI->News_Model->most_read_news($news_cat);
		return $details;
	}
	function thaja_vartha($news_cat)
	{
		$details=$this->CI->News_Model->breaking_news($news_cat);
		return $details;
	}
//cinema content
	function cine_thaja_vartha($cine_cat)
	{
		$details=$this->CI->Cinema_Model->breaking_news($cine_cat);
		return $details;	
	}
	function most_read_cini_news($news_cat)
	{
		$details=$this->CI->Cinema_Model->most_read_news($news_cat);
		return $details;
	}
//news inner news
	function get_this_news($id)
	{
		$details=$this->CI->News_Model->inner_news($id);
		return $details;
	}
	function realtion_news($cat_id)
	{
		$details=$this->CI->News_Model->get_news($cat_id);
		return $details;
	}
	function more_news($cat_id)
	{
		$details=$this->CI->News_Model->breaking_news($cat_id);
		return $details;	
	}
	function insert_views($id)
	{
		$details=$this->CI->News_Model->get_views($id);
		return $details;
	}
//mahila content page
	function most_read_mahila_news($mahila_cat)
	{
		$details=$this->CI->Mahila_Model->most_read_mahila_news($mahila_cat);
		return $details;
	}
	function mahila_thaja_vartha($mahila_cat)
	{
		$details=$this->CI->Mahila_Model->mahila_active_news($mahila_cat);
		return $details;
	}
//sahithi content page
	function most_read_sahithi_news($sahithi_cat)
	{
		$details=$this->CI->Sahithi_Model->most_read_sahithi_news($sahithi_cat);
		return $details;
	}
	function sahithi_thaja_vartha($sahithi_cat)
	{
		$details=$this->CI->Sahithi_Model->sahithi_active_news($sahithi_cat);
		return $details;
	}
//cinema inner page
	function get_cinema_news($id)
	{
		$details=$this->CI->Cinema_Model->inner($id);
		return $details;
	}
	function cinema_realtion_news($cat_id)
	{
	$details=$this->CI->Cinema_Model->get_cinematype($cat_id,0);
	return $details;
	}
	function active_cinema_news($cat_id)
	{
		$details=$this->CI->Cinema_Model->get_activenews1($cat_id);
		return $details;
	}
	function insert_cinema_views($id)
	{
		$details=$this->CI->Cinema_Model->get_views($id);
		return $details;
	}
//mahila inner page
	function get_mahila_news($id)
	{
		$details=$this->CI->Mahila_Model->inner_mahila($id);
		return $details;
	}
	function mahila_realtion_news($cat_id)
	{
		$details=$this->CI->Mahila_Model->get_mahilatype1($cat_id);
		return $details;
	}
	function mahila_active_news($cat_id)
	{
		$details=$this->CI->Mahila_Model->mahila_active_news($cat_id);
		return $details;
	}
	function insert_mahila_views($id)
	{
		$details=$this->CI->Mahila_Model->get_views($id);
		return $details;
	}
//sahithi inner page
	function get_sahithi_news($id)
	{
		$details=$this->CI->Sahithi_Model->inner_sahithi($id);
		return $details;
	}
	function sahithi_realtion_news($cat_id)
	{
		$details=$this->CI->Sahithi_Model->get_sahithi($cat_id);
		return $details;
	}
	function sahithi_active_news($cat_id)
	{
		$details=$this->CI->Sahithi_Model->sahithi_active_news($cat_id);
		return $details;
	}
	function insert_sahithi_views($id)
	{
		$details=$this->CI->Sahithi_Model->get_views($id);
		return $details;
	}
//subhodaya special content page
	function most_subho_news()
	{
		$details=$this->CI->Subho_Model->most_subho_news(0);
		return $details;
	}
	function sub_thaja_vartha()
	{
		$details=$this->CI->Subho_Model->active_subho_news(0);
		return $details;
	}
//srungaram content page
	function most_sex_news()
	{
		$details=$this->CI->Srungaram_Model->sex_read_news(0);
		return $details;
	}
	function sex_thaja_vartha()
	{
		$details=$this->CI->Srungaram_Model->sex_thaja_vartha(0);
		return $details;
	}
//get comments
	function get_comments($type,$id)
	{
		$details=$this->CI->News_Model->get_comments($type,$id);
		return $details;
	}
	function count_comments($type,$id)
	{
		$details=$this->CI->News_Model->count_comments($type,$id);
		return $details;
	}
}
