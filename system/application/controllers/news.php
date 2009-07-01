<?php
class News extends Controller {
	var $layout = 'default'; 
	function News(){
		parent::Controller();
		$this->load->model("admin/News_Model");
	}
	function index(){
		$more=$this->News_Model->more_news();
		$details=$this->News_Model->get_newstype1();
		$news_type2=$this->News_Model->get_newstype2();
		$news_type3=$this->News_Model->get_newstype3();
		$news_type4=$this->News_Model->get_newstype4();
		$data=array('news_type1'=>$details,
					'news_type2'=>$news_type2,
					'news_type3'=>$news_type3,
					'news_type4'=>$news_type4,
					'more'      =>$more
		);
		$this->load->view("news_main",$data);
	}
	function details(){
		$type=$this->uri->segment(3,0);
		$totel_rows=$this->News_Model->get_news($type,$count=true,$limit=0);
	/*	$this->load->library('pagination');
		$config['base_url'] = base_url()."news/details/";
		$config['total_rows'] = $totel_rows;
		$config['per_page'] = '13';
		$this->pagination->initialize($config);
		$pagination=$this->pagination->create_links();*/
		$news=$this->News_Model->get_news($type,$count=false);
		$data=array(	'news'  =>$news,
					/*'pagination'=>$pagination*/);
		$this->load->view("news_content",$data);
	}
	function newsdetails(){
		$id=$this->uri->segment(3,0);
		$result=$this->News_Model->inner_news($id);
		$data=array('result'=>$result);
		$this->load->view('news_inner',$data);
	}
}
?>