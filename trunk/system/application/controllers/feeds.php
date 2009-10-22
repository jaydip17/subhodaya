<?php
class Feeds extends Controller {
	function __construct()
	{
		parent::Controller();
		$this->load->model('feeds_model');
	}
	function news()
		{
			$query=$this->feeds_model->news();
			header('Content-type: text/xml');
	$output = '<rss version="2.0">';
    $output .= '<channel>';
    $output .= '<title>About Rss Feed</title>';
    $output .= '<description>Explaining about RSS Feeds</description>';
    $output .= '<link>http://www.subhodaya.com/news</link>';
    $output .= '<copyright>CopyRight 2008-2009</copyright>';
foreach($query->result() as $row)
{	
	$output .= "<item><title>".strip_tags($row->heading)."</title>
                    <link>".base_url()."news/newsdetails/".($row->id)."/".($row->type)."</link>
                    <lastBuildDate>".strip_tags($row->insert_date)."</lastBuildDate>
                    
                    
<description>"."<![CDATA[".strip_tags($row->summary)."<img src=http://localhost/subhodaya/assets/rssimages/loksatta.jpg align=left width=126 height=76]]>"."</description>
                </item>
                ";
	
}
  $output .= '</channel>';
  $output .= '</rss>';
  echo($output);
		}
}
?>