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
		$link=base_url().'cinema/inner/';
		switch ($heading)
		{
			case $this->CI->lang->line('cini_news'):
				$details=$this->cine_news(1);
				if(!empty($details))
				{
					$img_link=base_url()."assets/cinema/news_img".$details[0]->id."_thumb.jpg";
					$content_link=base_url()."cinema/details/".$details[0]->type;
					$cate=$details[0]->type;
				}
				break;
			case $this->CI->lang->line('cini_pukarlu'):
				$details=$this->cine_news(2);
				if(!empty($details))
				{
					$img_link=base_url()."assets/cinema/news_img".$details[0]->id."_thumb.jpg";
					$content_link=base_url()."cinema/details/".$details[0]->type;
					$cate=$details[0]->type;
				}
				break;
			case $this->CI->lang->line('reviews'):
				$details=$this->cine_news(3);
				if(!empty($details))
				{
					$img_link=base_url()."assets/cinema/news_img".$details[0]->id."_thumb.jpg";
					$content_link=base_url()."cinema/details/".$details[0]->type;
					$cate=$details[0]->type;
				}
				$i=0;
				foreach ($details as $row){
				$rating=$this->get_movie_rating($row->id);
				if(!empty($rating)){
					$value=$this->get_rating($rating);
				}
				else{
					$value=0.5;
				}
				$details[$i]->rating=$value;
				$details[$i]->heading=$row->heading;
				$details[$i]->id=$row->id;
				$details[$i]->cat_id=$row->type;
				 $i++;
		}
				break;
			case $this->CI->lang->line('cini_shedul'):
				$details=$this->cine_news(4);
				if(!empty($details))
				{
					$img_link=base_url()."assets/cinema/news_img".$details[0]->id."_thumb.jpg";
					$content_link=base_url()."cinema/details/".$details[0]->type;
					$cate=$details[0]->type;
				}
				break;
			case $this->CI->lang->line('interviews'):
				$details=$this->cine_news(5);
				if(!empty($details))
				{
					$img_link=base_url()."assets/cinema/news_img".$details[0]->id."_thumb.jpg";
					$content_link=base_url()."cinema/details/".$details[0]->type;
					$cate=$details[0]->type;
				}
				break;
			case $this->CI->lang->line('therachatu'):
				$details=$this->cine_news(6);
				if(!empty($details))
				{
					$img_link=base_url()."assets/cinema/news_img".$details[0]->id."_thumb.jpg";
					$content_link=base_url()."cinema/details/".$details[0]->type;
					$cate=$details[0]->type;
					
				}
				break;
		}
		$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'more'			=> $more,
						'details'		=> $details,
						'img_link'		=> $img_link,
						'content_link'	=> $content_link,
						'link'			=> $link,
						'cate'			=> $cate
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
					$content_link=base_url().'mahila/details/'.$temp[0]->cat_id;
					$link=base_url().'mahila/mahiladetails/';
					$page='mahila';
				}
				break;
			case $this->CI->lang->line('home_carer'):
				$temp=$this->home_carer();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'mahila/details/'.$temp[0]->cat_id;
					$link=base_url().'mahila/mahiladetails/';
					$page='mahila';
				}
				break;
			case $this->CI->lang->line('mahila_fashon'):
				$temp=$this->mahila_fashon();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'mahila/details/'.$temp[0]->cat_id;
					$link=base_url().'mahila/mahiladetails/';
					$page='mahila';
				}
				break;
			case $this->CI->lang->line('mahila_yoga'):
				$temp=$this->mahila_yoga();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'mahila/details/'.$temp[0]->cat_id;
					$link=base_url().'mahila/mahiladetails/';
					$page='mahila';
				}
				break;
			case $this->CI->lang->line('dite_helth'):
				$temp=$this->dite_helth();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'mahila/details/'.$temp[0]->cat_id;
					$link=base_url().'mahila/mahiladetails/';
					$page='mahila';
				}
				break;
			case $this->CI->lang->line('mahila_mehandi'):
				$temp=$this->mahila_mehandi();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'mahila/details/'.$temp[0]->cat_id;
					$link=base_url().'mahila/mahiladetails/';
					$page='mahila';
				}
				break;
			case $this->CI->lang->line('mahi_buty'):
				$temp=$this->mahi_buty();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'mahila/details/'.$temp[0]->cat_id;
					$link=base_url().'mahila/mahiladetails/';
					$page='mahila';
				}
				break;
			case $this->CI->lang->line('mahila_food'):
				$temp=$this->mahila_food();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/mahila/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'mahila/details/'.$temp[0]->cat_id;
					$link=base_url().'mahila/mahiladetails/';
					$page='mahila';
				}
				break;
			//sahithi main page
			case $this->CI->lang->line('sahi_festiva'):
				$temp=$this->sahithi_festival();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/sahithi/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'sahithi/details/'.$temp[0]->cat_id;
					$link=base_url().'sahithi/sahithidetails/';
					$page='sahithi';
				}
				break;
			case $this->CI->lang->line('sahi_kathalu'):
				$temp=$this->sahi_kathalu();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/sahithi/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'sahithi/details/'.$temp[0]->cat_id;
					$link=base_url().'sahithi/sahithidetails/';
					$page='sahithi';
				}
				break;
			case $this->CI->lang->line('matru_basha'):
				$temp=$this->matru_basha();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/sahithi/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'sahithi/details/'.$temp[0]->cat_id;
					$link=base_url().'sahithi/sahithidetails/';
					$page='sahithi';
				}
				break;
			case $this->CI->lang->line('sahi_sametha'):
				$temp=$this->sahi_sametha();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/sahithi/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'sahithi/details/'.$temp[0]->cat_id;
					$link=base_url().'sahithi/sahithidetails/';
					$page='sahithi';
				}
				break;
			case $this->CI->lang->line('sahi_kavithalu'):
				$temp=$this->sahi_kavithalu();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/sahithi/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'sahithi/details/'.$temp[0]->cat_id;
					$link=base_url().'sahithi/sahithidetails/';
					$page='sahithi';
				}
				break;
			case $this->CI->lang->line('sahi_kavithm'):
				$temp=$this->sahi_kavithm();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/sahithi/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'sahithi/details/'.$temp[0]->cat_id;
					$link=base_url().'sahithi/sahithidetails/';
					$page='sahithi';
				}
				break;
			case $this->CI->lang->line('sahi_janapadam'):
				$temp=$this->sahi_janapadam();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/sahithi/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'sahithi/details/'.$temp[0]->cat_id;
					$link=base_url().'sahithi/sahithidetails/';
					$page='sahithi';
				}
				break;
			case $this->CI->lang->line('sahi_vyasam'):
				$temp=$this->sahi_vyasam();
				if(!empty($temp))
				{
					$img_link=base_url()."assets/sahithi/news_img".$temp[0]->id."_thumb.jpg";
					$content_link=base_url().'sahithi/details/'.$temp[0]->cat_id;
					$link=base_url().'sahithi/sahithidetails/';
					$page='sahithi';
				}
				break;
		}
		$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'more'			=> $more,
						'img_link'		=> $img_link,
						'details'		=>	$temp,
						'content_link'	=>  $content_link,
						'link'			=>	$link,
						'page'			=>	$page
		);
		
		return $this->CI->load->view('cinema/mahila_block',$data,TRUE);
	}
	
// cinema pages
	function cine_news($cat_id)
	{
		$details=$this->CI->Cinema_Model->get_cinematype($cat_id);
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
	function get_movie_rating($id)
	{
		$details=$this->CI->Cinema_Model->reviews_rating($id);
		return $details;
	}
	function get_rating($rating)
	{
		$total_votes=$rating[0]->total_votes;
		$total_value=$rating[0]->total_value;
		if($total_votes!=0 && $total_value!=0){
		$rat_value=$total_value/$total_votes;
		}
		else{
			$value=0.5;
			return $value;
		}
		$value=$this->ceil_temp($rat_value);
		return $value;
	}
	function ceil_temp($value)
   	{
	   	$temp = explode('.',$value);
	   	if(isset($temp[1]))
	   	{
		   	if($temp[1] < 5)
		   	{
		   		$temp = floor($value);
		   	}
		   	else if($temp[1] > 5)
		   	{
		   		$temp = round($value);
		   	}
		   	else 
		   	 $temp = $value;
	   	}
	   	else 
	   	 $temp = $value;
	   	 return $temp;
   }
}