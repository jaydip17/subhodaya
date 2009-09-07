<?php
class Subhodaya extends Controller {
	var $layout = 'default'; 
	function Subhodaya(){
		parent::Controller();
		$this->load->helper('directory');
		$this->load->model('admin/News_Model');
		$this->load->model("admin/Cinema_Model");
		$this->load->model("admin/Poll_Model");
		$this->load->model("admin/Mahila_Model");
		$this->load->model("admin/Sahithi_Model");
		$this->load->Model("admin/Gallery_Model");
		$this->load->Model('admin/Greeting_Model');
		
	}
	function index(){
		$news_type7=$this->News_Model->get_newstype1(7);
		$active_news=$this->News_Model->active_news(2);
		$active_news1=$this->News_Model->active_news(7);
		$news_type4=$this->News_Model->get_newstype1(4);
		$cinema_type2=$this->Cinema_Model->get_cinematype(2);
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$more=$this->News_Model->more_news();
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=4);
		$newspoll=$this->Poll_Model->get_newspolls($type=4);
		$sahithi_details=$this->Sahithi_Model->active_sahithi(1,$type='home');
		$mahila_details=$this->Mahila_Model->active_mahila(1,$type='home');
		//print_r($mahila_details);
	    $greetings1=$this->Greeting_Model->get_main_greetings(1);
        //$details=$this->Gallery_Model->get_cateimage(11);
        $home_stories=$this->Sahithi_Model->get_home_stories($type=2);
		$images=array();
		/*foreach($details as $item)
		{
			$images[$item->id]=$this->Gallery_Model->getimage($item->id);
		}*/
		//get all categeories of gallery where active=1
		$gallery_maincategeories = $this->Gallery_Model->get_categeory($active=1);
		
		if(!empty($gallery_maincategeories))//if atleast one main categeory exists..
		{
			
		  foreach($gallery_maincategeories as $item)
		  {
			$subcategeories[$item->id]=$this->Gallery_Model->subcat($item->id);
		  }
		//  print_r($subcategeories);
		 	
	       foreach($subcategeories as $item)
	       {  
	       	$eachone=$item->result();
	    	if(!empty($eachone))
	    	{
	    		foreach ($eachone as $row){
	    			//print_r($row);
	    			
	 				$images[$row->id]=$this->Gallery_Model->getimage1($row->id);
	    		}
	 		
	    	}
		   }
		 // print_r($images);
	    }
	    	
	
		$data=array('more'				=>	$more,
		            'news_type7'		=>	$news_type7,
					'news_type4'		=>	$news_type4,
					'cinema_type2'		=>	$cinema_type2,
					'cinema_type1'		=>	$cinema_type1,
					'newspoll'			=>	$newspoll,
					'yes_poll'			=>	$yes_poll,
					'active_news'		=>	$active_news,
		            'active_news1'		=>	$active_news1,
		            'sahithi_details'	=>	$sahithi_details,
		            'mahila_details'	=>	$mahila_details,
					'greetings1'		=>	$greetings1,
		            'home_stories' 		=>	$home_stories,
					'images'			=>	$images
					);
		$this->load->view('home',$data);
	}
	function sendmail()
	{
		$to = $_POST['email'];
        $subject = "Shubhodaya nice article";
        $message= "Dear ".$_POST['email'].".. Your friend ".$_POST['name']." sent u an article on shubhodaya".$_POST['description'];
        $message.="\n";
        $message.= "To read this article follow the below link.\n".$_POST['url'];
        $message.="Thanks and Regards.\n Shubhodaya Team.";
        $headers = "From:";
        if( mail($to,$subject,$message,$headers))
        $status= "1";
        else
        $status= "-1";
        redirect($_POST['url'].'/'.$status);
     
	    }

}
?>