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
	function tabs_block($tab)
	{
		$more=$this->CI->lang->line('more');
		 $link_cate='';
		switch ($tab)
		{
			case $this->CI->lang->line('mahila'):
				 $temp=$this->get_mahila();
				 $image_link=base_url().'assets/mahila/news_img'.$temp[0]->id.'_thumb.jpg';
				 $temp[0]->cat='mahila';
				 $more_link=base_url().'mahila';
				 $link=base_url().'mahila/mahiladetails/';
				break;
			case $this->CI->lang->line('news_rasriyam'):
				 $temp=$this->get_ardikam($cat_id=1);
				 $image_link=base_url().'assets/news/news_img'.$temp[0]->id.'_thumb.jpg';
				 $temp[0]->cat='news';
				 $more_link=base_url().'news/details/'.$temp[0]->type;
				 $link=base_url().'news/newsdetails/';
				 $link_cate=$temp[0]->type;
				break;
			case $this->CI->lang->line('news_jathiyam'):
				 $temp=$this->get_ardikam($cat_id=2);
				 $image_link=base_url().'assets/news/news_img'.$temp[0]->id.'_thumb.jpg';
				 $temp[0]->cat='news';
				 $more_link=base_url().'news/details/'.$temp[0]->type;
				 $link=base_url().'news/newsdetails/';
				 $link_cate=$temp[0]->type;
				break;
			case $this->CI->lang->line('news_antharja'):
				 $temp=$this->get_ardikam($cat_id=3);
				 $image_link=base_url().'assets/news/news_img'.$temp[0]->id.'_thumb.jpg';
				 $temp[0]->cat='news';
				 $more_link=base_url().'news/details/'.$temp[0]->type;
				 $link=base_url().'news/newsdetails/';
				 $link_cate=$temp[0]->type;
				break;
			case $this->CI->lang->line('news_kridalu'):
				  $temp=$this->get_ardikam($cat_id=8);
				  $image_link=base_url().'assets/news/news_img'.$temp[0]->id.'_thumb.jpg';
				  $temp[0]->cat='news';
				  $more_link=base_url().'news/details/'.$temp[0]->type;
				  $link=base_url().'news/newsdetails/';
				  $link_cate=$temp[0]->type;
				break;
			case $this->CI->lang->line('cini_pukarlu'):
				  $temp=$this->get_movie_reviews($cat_id=2,1);
				  $image_link=base_url().'assets/cinema/news_img'.$temp[0]->id.'_thumb.jpg';
				  $temp[0]->cat='cinema';
				  $more_link=base_url().'cinema/details/'.$temp[0]->type;
				  $link=base_url().'cinema/inner/';
				  $link_cate=$temp[0]->type;
				break;
			case $this->CI->lang->line('cini_vishesm'):
				  $temp=$this->get_movie_reviews($cat_id=1,1);
				  $image_link=base_url().'assets/cinema/news_img'.$temp[0]->id.'_thumb.jpg';
				  $temp[0]->cat='cinema';
				  $more_link=base_url().'cinema/details/'.$temp[0]->type;
				  $link=base_url().'cinema/inner/';
				  $link_cate=$temp[0]->type;
				break;
			case $this->CI->lang->line('sahithi'):
				 $temp=$this->get_sahithi();
				 $image_link=base_url().'assets/sahithi/news_img'.$temp[0]->id.'_thumb.jpg';
				 $temp[0]->cat='sahithi';
				 $more_link=base_url().'sahithi';
				 $link=base_url().'sahithi/sahithidetails/';
				break;
		}
				$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $tab,
						'more'			=> $more,
						'details'		=> $temp,
						'image_link'	=> $image_link,
						'more_link'		=> $more_link,
						'link'			=> $link,
						'link_cate'		=> $link_cate
		);
		return $this->CI->load->view('home/tabs_block',$data,TRUE);
	}
	function right_block($heading){
		$image_link='';
		$cat_id='';
		$more=$this->CI->lang->line('more');
		$eenka=$this->CI->lang->line('enka_chavandi');
		switch ($heading)
		{
			case $this->CI->lang->line('news_ardikam'):
				$temp=$this->get_ardikam($cat_id=5);
				$image_link=base_url().'assets/news/news_img'.$temp[0]->id.'_home_thumb.jpg';
				$link=base_url().'news/newsdetails/';
				$cat_id=$temp[0]->type;
				$more_link=base_url().'news/details/'.$temp[0]->type;
				break;			
			case $this->CI->lang->line('srungaram'):
				$temp=$this->get_movie_reviews($cat_id=7,1);;
				$image_link=base_url().'assets/cinema/news_img'.$temp[0]->id.'_home_thumb.jpg';
				$link=base_url().'cinema/inner/';
				$cat_id=$temp[0]->type;
				$more_link=base_url().'cinema/details/'.$cat_id;
				
				break;
				
		}
				$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> 	$heading,
						'more'			=>	$more,
						'eenka'			=>	$eenka,
						'image_link'	=>	$image_link,
						'details'		=>  $temp,
						'link'			=>	$link,
						'cat_id'		=>	$cat_id,
						'more_link'		=>	$more_link
		);
		return $this->CI->load->view('home/right_block',$data,TRUE);
	}
	function bavishyam_block($heading)
	{
		$rasi=$this->get_rasi();
		foreach ($rasi as $res )
				{
					$options[$res->id] = $res->astrolagy_type;
				}
		$data=array(
			'heading'	=>	$heading,
			'rasi'		=>	$options
		);
		return $this->CI->load->view('home/bavishyam_block',$data,TRUE);
	}
	function left_block($heading){
		$image_link='';
		$more=$this->CI->lang->line('more');
		$eenka=$this->CI->lang->line('enka_chavandi');
		switch ($heading){
			case $this->CI->lang->line('subh_spec'):
				 $temp=$this->get_news($cat_id=9);
				 $image_link=base_url().'assets/news/news_img'.$temp[0]->id.'_thumb.jpg';
				 $link=base_url().'news/newsdetails/'.$temp[0]->id.'/'.$temp[0]->type;
				break;
		}
				$data = array(
						'data' => 'somtext',
						'sub_heading'	=> $heading,
						'more'			=>	$more,
						'eenka'			=>	$eenka,
						'image_link'	=> 	$image_link,
						'details'		=>  $temp,
						'link'			=>	 $link
		);
		return $this->CI->load->view('home/left_block',$data,TRUE);
	}
	function songs_block($heading)
	{
		$more=$this->CI->lang->line('more');
		$data=array(
				'more'		=>	$more,
				'heading'	=>	$heading
		);
		return $this->CI->load->view('home/songs_block',$data,TRUE);
	}
	function reviews_block($heading)
	{
		$cat_id=3;
		$details=array();
		$more=$this->CI->lang->line('more');
		$temp=$this->get_movie_reviews($cat_id,0);
		
		$i=0;
		foreach ($temp as $row){
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
		$data=array(
				'more'	=>	$more,
			'heading'	=>	$heading,
			'details'	=>	$details
		);
		return $this->CI->load->view('home/reviews_block',$data,TRUE);
	}
	function middle_block($heading){
		$more=$this->CI->lang->line('more');
		$temp=$this->active_news();
		$image_link=base_url().'assets/news/news_img'.$temp[0]->id.'_thumb.jpg';
				$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'more'			=> $more,
						'details'		=> $temp,
						'image_link'	=> $image_link,
		);
		return $this->CI->load->view('home/middle_block',$data,TRUE);
	}
	function home_poll($heading){
		$homepoll=$this->CI->lang->line('homepoll');
		$yes=$this->CI->lang->line('yes');
		$no=$this->CI->lang->line('no');
		$yes_no=$this->CI->lang->line('yes_no');
		switch ($heading){
			case $homepoll:
				$temp=$this->get_homepoll();
				//$yes_poll=get_yes_poll(4);
				break;
		}
				$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'details'		=>	$temp,
						'yes'			=>	$yes,
						'no'			=>  $no,
						'yes_no'		=>  $yes_no,
						//'yes_poll'		=>	$yes_poll
		);
		return $this->CI->load->view('home/home_poll',$data,TRUE);
	}
	function photo_gallery($heading)
	{
		$temp=$this->get_gallry();
				$data = array(
						'data' => 'somtext',
						'sub_heading'	=> $heading,
						'details'		=> $temp
		);
		return $this->CI->load->view('home/photo_gallery',$data,TRUE);
	}
	function video_block($heading)
	{
		$temp=$this->get_home_videos();
	//print_r($temp);
		$re_res=array();
		foreach ($temp as $row)
			{
				//echo $row->video_id;
				$config['id'] = $row->video_id;
				$this->CI->youtube->initialize($config);
				$re_res[] = array(	'image' 		=> $this->CI->youtube->getImage(),
									'title'			=> $row->title,
				                    'video_name'	=> $row->video_name,
									'cat_id'		=> $row->video_cat_id,
									'no_of_views'	=> $row->no_of_views,
									'id'			=> $row->id,
									'yt_id'			=> $row->video_id,
									);
			}
	//print_r($re_res);
				$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						//'details'		=> $temp,
					    're_res'		=> $re_res
						

		);
		
		return $this->CI->load->view('home/video_block',$data,TRUE);
	}
	function greeting_block($heading)
	{
		$temp=$this->get_home_greetings();
				$data = array(
						'data' 			=> 'somtext',
						'sub_heading'	=> $heading,
						'details'		=>	$temp
		);
		return $this->CI->load->view('home/greeting_block',$data,TRUE);
	}
	function get_mahila()
	{
		$details=$this->CI->Mahila_Model->active_mahila(8);
		return $details;
	}
	function get_sahithi()
	{
		$details=$this->CI->Sahithi_Model->active_sahithi(8);
		return $details;
	}
	function get_ardikam($cat_id)
	{
		$details=$this->CI->News_Model->active_news($cat_id);
		return $details;
	}
	function get_news($cat_id)
	{
		$details=$this->CI->News_Model->get_newstype1($cat_id);
		return $details;
	}
	function get_homepoll()
	{
		$details=$this->CI->Poll_Model->get_newspolls(4,0);
		return $details;
	}
	function active_news()
	{
		$details=$this->CI->News_Model->all_active_news(0);
		return $details;
	}
	function get_movie_reviews($cat_id,$active)
	{
		$details=$this->CI->Cinema_Model->get_cinematype($cat_id,$active);
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
   function get_home_greetings()
   {
   		$details=$this->CI->Greeting_Model->get_active();
   		return $details;
   }
   function get_home_videos()
   {
   		$details=$this->CI->Videos_Model->active();
   		//print_r($details);
   		return $details;
   }
   function get_gallry()
   {
		$details=$this->CI->Gallery_Model->getimage1();
		return $details;
   }
   function get_rasi()
   {
	   	$details=$this->CI->Astrolagy_Model->get_astrolagytype();
		return $details;
   }
   function get_yes_poll($type)
   {
	   	$details=$this->CI->Poll_Model->get_yes_newspoll($type);
	   	return $details;
   }
}