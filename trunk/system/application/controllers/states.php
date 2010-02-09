<?php
class States extends Controller {
	function States()
	{
		parent::Controller();
	}
	function hyderabed()
	{
		$rs=$this->News_Model->get_statenews(11);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=11;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);
	}
	function kadapa()
	{
		$rs=$this->News_Model->get_statenews(10);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=10;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);
	}
	function ananthapur()
	{
		$rs=$this->News_Model->get_statenews(14);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=14;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);	
	}
	function chittoor()
	{
		$rs=$this->News_Model->get_statenews(13);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=13;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);	
	}
	function nellore()
	{
		$rs=$this->News_Model->get_statenews(12);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=12;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function prakasam()
	{
		$rs=$this->News_Model->get_statenews(15);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=15;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function kurnool()
	{
		$rs=$this->News_Model->get_statenews(16);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=16;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function mahabubnagar()
	{
		$rs=$this->News_Model->get_statenews(17);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=17;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function gunturu()
	{
		$rs=$this->News_Model->get_statenews(18);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=18;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function krishna()
	{
		$rs=$this->News_Model->get_statenews(19);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=19;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function west()
	{
		$rs=$this->News_Model->get_statenews(20);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=20;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function east()
	{
		$rs=$this->News_Model->get_statenews(21);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=21;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function vishakapatnam()
	{
		$rs=$this->News_Model->get_statenews(22);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=22;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function srikakulam()
	{
		$rs=$this->News_Model->get_statenews(23);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=23;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function vijayanagaram()
	{
		$rs=$this->News_Model->get_statenews(24);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=24;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function khammam()
	{
		$rs=$this->News_Model->get_statenews(25);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=25;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function nalgonda()
	{
		$rs=$this->News_Model->get_statenews(26);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=26;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function rangareddy()
	{
		$rs=$this->News_Model->get_statenews(27);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=27;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function medak()
	{
		$rs=$this->News_Model->get_statenews(28);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=28;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function warangal()
	{
		$rs=$this->News_Model->get_statenews(29);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=29;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function karimnagar()
	{
		$rs=$this->News_Model->get_statenews(30);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=30;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function nizamabad()
	{
		$rs=$this->News_Model->get_statenews(31);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=31;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
	function adilabad()
	{
		$rs=$this->News_Model->get_statenews(32);
		$image_link=base_url().'assets/districts/news_img'.$rs[0]->id.'_thumb.jpg';
		$type=32;
		$data=array('details'	=> $rs,
					'image_link'=> $image_link,
					'type'		=>	$type);
		$this->load->view('states_view',$data);		
	}
}
?>