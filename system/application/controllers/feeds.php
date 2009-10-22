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
    $output .= '<image>
      				<width>126</width>
                    <height>15</height>
                    <link>'.base_url().'</link>
                    <title>Subhodaya.com</title>
                    <url>'.base_url().'assets/imgs/logo.jpg</url>
               </image>';
    $output .= '<title>About Rss Feed</title>';
    $output .= '<description>Explaining about RSS Feeds</description>';
    $output .= '<link>http://www.subhodaya.com/news</link>';
    $output .= '<copyright>CopyRight 2008-2009</copyright>';
foreach($query->result() as $row)
{	
	$output .= "<item><title>".strip_tags($row->heading)."</title>
                    <link>".base_url()."news/newsdetails/".($row->id)."/".($row->type)."</link>
                    <pubDate>".strip_tags($row->insert_date)."</pubDate>
                                       
<description>"."<![CDATA[<p><a href=".base_url()."news/newsdetails/".($row->id)."/".($row->type).">"."<img src=http://localhost/subhodaya/assets/rssimages/loksatta.jpg align=left width=126 height=76 align=left></a></p><p>".strip_tags($row->summary)."]]>"."</description>
                </item>
                ";
}
  $output .= '</channel>';
  $output .= '</rss>';
  echo($output);
		}
}
?>