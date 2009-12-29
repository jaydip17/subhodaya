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
	function astrology_block($cat_id)
	{
		$rasi_details=array();
		$type=$this->get_astrolagytype();
		$rasi=$this->get_rasi();
		if($cat_id==0){
		$temp=$this->get_today_rasi(1);
		}
		else{
		
			$day=$this->get_day_details($cat_id,1);
			$month=$this->get_month_details($cat_id,3);
			$week=$this->get_week_details($cat_id,2);
			$year=$this->get_year_details($cat_id);
			$rasi_details[0]->day=$day[0]->description;
			$rasi_details[0]->month=$month[0]->description;
			$rasi_details[0]->week=$week[0]->description;
			$rasi_details[0]->year=$year[0]->description;
				}
		print_r($rasi_details);
		$data=array(
				'types'		=>	$type,
				'rasi'		=>	$rasi,
		
		);
		return $this->CI->load->view('cinema/astrology_block',$data,TRUE);
	}
	function get_astrolagytype()
	{
		$details=$this->CI->Astrolagy_Model->get_astrolagytype();
		return $details;
	}
	function get_rasi()
	{
		$details=$this->CI->Astrolagy_Model->get_astrolagytype();
		return $details;
	}
	function get_today_rasi($as_cat)
	{
		$datestring = "%Y-%m-%d";
		$date=mdate($datestring);
		$details=$this->CI->Astrolagy_Model->get_today_rasi($date,$as_cat);
		return $details;
	}
	function get_day_details($as_cat,$id)
	{
		$datestring = "%Y-%m-%d";
		$date=mdate($datestring);
		$day_details=$this->CI->Astrolagy_Model->get_day_details($as_cat,$date,$id);	
		return $day_details;
	}
	function get_week_details($as_cat,$id)
	{
		$ye= "%Y";
		$y=mdate($ye);
		$mo="%m";
		$m=mdate($mo);
		$da="%d";
		$d=mdate($da);
		$date=mktime(0,0,0,$m,$d,$y);
		echo $week = (int)date('W', $date);
		$week1=$week-1;
		$day_details=$this->CI->Astrolagy_Model->get_week_details($as_cat,$week1,$id);
		return $day_details;
	}
	function get_month_details($cat_id,$id)
	{
		$mo="%m";
		$m=mdate($mo);
		$month_details=$this->CI->Astrolagy_Model->get_month_details($cat_id,$m,$id);
		return $month_details;
	}
	function get_year_details($cat_id,$id)
	{
		$mo="%Y";
		$m=mdate($mo);
		$month_details=$this->CI->Astrolagy_Model->get_year_details($cat_id,$m,$id);
		return $month_details;
	}
	
}