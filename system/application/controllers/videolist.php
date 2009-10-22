<?php
class Videolist extends Controller {
	function Videolist()
	{
		parent::Controller();
		$this->load->model('video_Model');
		
	}
	function videoview()
	{
		$this->load->model('admin/News_Model');
		 $more=$this->News_Model->more_news();
		 //pagination for hot videos view
		 $id=$this->uri->segment(3,0);
		 $query=" from videos where video_cat_id=$id order by insert_date desc ";
		 $a =base_url().'videolist/videoview/'.$id;
		 $this->load->library('paginationnew');$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	 $this->paginationnew->limit =6;
         $this->paginationnew->filePath ='javascript:loadNews(\''.$id.'\',\''.$a;
      
         $this->paginationnew->select_what = '*';
         $this->paginationnew->nbItems = $this->video_Model->count_videos($id);
         $this->paginationnew->add_query = $query;
      
   		 $result = $this->paginationnew->getQuery(TRUE);
   		 $hotvideos=$result;
   		 $paginate = $this->paginationnew->paginate(); 
   		 $segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['5']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);           
	     //pagination for hot videos view 		
		 $data=array( 	'more' 		 =>	$more,			
		                'paginate'	 =>	$paginate,
		                'hotvideos'  =>	$hotvideos,
		 				'bread_crumb'=> $bread_crumb
		 );
		$this->load->view('video_view',$data);
	}
      function videonamesview()
	{
		 $this->load->model('admin/News_Model');
		 $more=$this->News_Model->more_news();
		 //pagination for mottam videosnames view
		 //$id=$this->uri->segment(3,0);
		 $query=" from videos order by insert_date desc";
		 $a =base_url().'videolist/videonamesview';
		 $this->load->library('paginationnew');
		 $this->paginationnew->start = ($this->uri->segment(3)) ? $this->uri->segment(3) : '0';
    	 $this->paginationnew->limit =16;
         $this->paginationnew->filePath ='javascript:loadNews(\'allimg\',\''.$a;
         $this->paginationnew->select_what = '*';
         $this->paginationnew->nbItems = $this->video_Model->count_videos(0);
         $this->paginationnew->add_query = $query;                                  
      
   		 $result = $this->paginationnew->getQuery(TRUE);
   		 $videosnames=$result->result();
   		 //print_r($videosnames);
   		 //exit;		
  	     $paginate_videosnames = $this->paginationnew->paginate(); 
	     //pagination for mottam videosnames view	
	     $segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['5']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments); 
  	     
		 $data=array( 	'more' 					=>	$more,			
		                'paginate_videosnames'	=> 	$paginate_videosnames,
		                'videosnames' 			=> 	$videosnames,
		 				'bread_crumb'			=>	$bread_crumb
		 );
		$this->load->view('total_videos_view',$data);
	}
}
?>