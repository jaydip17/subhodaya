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
			      				<link>'.base_url().'</link>
			                    <title>Subhodaya.com</title>
			                    <url>'.base_url().'assets/imgs/logo128 x 31.jpg</url>
			               </image>';
			    $output .= '<title>subhodaya special news</title>';
			    $output .= '<description>Latest news in suhodaya</description>';
			    $output .= '<link>http://www.subhodaya.com/news</link>';
			    $output .= '<copyright>CopyRight 2008-2009</copyright>';
			  
			foreach($query->result() as $row)
			{	
					$output .= "<item><title>".strip_tags($row->heading)."</title>
				                    <link>".base_url()."news/newsdetails/".($row->id)."/".($row->type)."</link>
				                    <pubDate>".strip_tags($row->insert_date)."</pubDate>
				                                       
				<description>"."<![CDATA[<p><a href=".base_url()."news/newsdetails/".($row->id)."/".($row->type).">"."<img src=".base_url()."assets/news/news_img".($row->id)."_thumb.jpg  align=left border=0></a></p><p>".strip_tags($row->summary)."]]>"."</description>
				                </item>
				                "."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";
			}
			  $output .= '</channel>';
			  $output .= '</rss>';
			 
			  echo($output);
		}
		function cinema()
		{
			$query=$this->feeds_model->cinema();
				header('Content-type: text/xml');
						
				$output = '<rss version="2.0">';
			    $output .= '<channel>';
			    $output .= '<image>
			      				<link>'.base_url().'</link>
			                    <title>Subhodaya.com</title>
			                    <url>'.base_url().'assets/imgs/logo128 x 31.jpg</url>
			               </image>';
			    $output .= '<title>subhodaya special news</title>';
			    $output .= '<description>Latest cinema news in suhodaya</description>';
			    $output .= '<link>http://www.subhodaya.com/cinema</link>';
			    $output .= '<copyright>CopyRight 2008-2009</copyright>';
			foreach($query->result() as $row)
			{	
					$output .= "<item><title>".strip_tags($row->heading)."</title>
				                    <link>".base_url()."cinema/inner/".($row->id)."/".($row->type)."</link>
				                    <pubDate>".strip_tags($row->insert_date)."</pubDate>
				                    
				               <image>
								    <url>".base_url()."assets/cinema/news_img".($row->id)."_thumb.jpg</url>
								    <title>W3Schools.com</title>
								    <link>http://www.w3schools.com</link>
							  </image>                       
				<description>"."<![CDATA[<p><a target='_blank' href=".base_url()."cinema/inner/".($row->id)."/".($row->type).">"."<img src=".base_url()."assets/cinema/news_img".($row->id)."_thumb.jpg  align=left border=0></a></p><p>".strip_tags($row->summary)."]]>"."</description>
				                </item>
				                "."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";
			}
			  $output .= '</channel>';
			  $output .= '</rss>';
			  echo($output);
		}
function mahila()
		{
			$query=$this->feeds_model->mahila();
				header('Content-type: text/xml');
						
				$output = '<rss version="2.0">';
			    $output .= '<channel>';
			    $output .= '<image>
			      				<link>'.base_url().'</link>
			                    <title>Subhodaya.com</title>
			                    <url>'.base_url().'assets/imgs/logo128 x 31.jpg</url>
			               </image>';
			    $output .= '<title>subhodaya special news</title>';
			    $output .= '<description>Latest mahila news in suhodaya</description>';
			    $output .= '<link>http://www.subhodaya.com/mahila</link>';
			    $output .= '<copyright>CopyRight 2008-2009</copyright>';
			foreach($query->result() as $row)
			{	
					$output .= "<item><title>".strip_tags($row->heading)."</title>
				                    <link>".base_url()."mahila/mahiladetails/".($row->id)."/".($row->cat_id)."</link>
				                    <pubDate>".strip_tags($row->insert_date)."</pubDate>
				                                       
				<description>"."<![CDATA[<p><a href=".base_url()."mahila/mahiladetails/".($row->id)."/".($row->cat_id).">"."<img src=".base_url()."assets/mahila/news_img".($row->id)."_thumb.jpg  align=left border=0></a></p><p>".strip_tags($row->summary)."]]>"."</description>
				                </item>
				                "."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";
			}
			  $output .= '</channel>';
			  $output .= '</rss>';
			  echo($output);
		}
	function sahithi()
		{
			$query=$this->feeds_model->sahithi();
				header('Content-type: text/xml');
						
				$output = '<rss version="2.0">';
			    $output .= '<channel>';
			    $output .= '<image>
			      				<link>'.base_url().'</link>
			                    <title>Subhodaya.com</title>
			                    <url>'.base_url().'assets/imgs/logo128 x 31.jpg</url>
			               </image>';
			    $output .= '<title>subhodaya special news</title>';
			    $output .= '<description>Latest sahithi news in suhodaya</description>';
			    $output .= '<link>http://www.subhodaya.com/sahithi</link>';
			    $output .= '<copyright>CopyRight 2008-2009</copyright>';
			foreach($query->result() as $row)
			{	
					$output .= "<item><title>".strip_tags($row->heading)."</title>
				                    <link>".base_url()."sahithi/sahithidetails/".($row->id)."/".($row->cat_id)."</link>
				                    <pubDate>".strip_tags($row->insert_date)."</pubDate>
				                                       
				<description>"."<![CDATA[<p><a href=".base_url()."sahithi/sahithidetails/".($row->id)."/".($row->cat_id).">"."<img src=".base_url()."assets/sahithi/news_img".($row->id)."_thumb.jpg  align=left border=0></a></p><p>".strip_tags($row->summary)."]]>"."</description>
				                </item>
				                "."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";
			}
			  $output .= '</channel>';
			  $output .= '</rss>';
			  echo($output);
		}
		function sports()
		{
				$query=$this->feeds_model->sports();
				header('Content-type: text/xml');
				$output = '<rss version="2.0">';
			    $output .= '<channel>';
			    $output .= '<image>
			      				<link>'.base_url().'</link>
			                    <title>Subhodaya.com</title>
			                    <url>'.base_url().'assets/imgs/logo128 x 31.jpg</url>
			               </image>';
			    $output .= '<title>subhodaya special news</title>';
			    $output .= '<description>Latest news in suhodaya</description>';
			    $output .= '<link>http://www.subhodaya.com/news</link>';
			    $output .= '<copyright>CopyRight 2008-2009</copyright>';
			  
			foreach($query->result() as $row)
			{	
					$output .= "<item><title>".strip_tags($row->heading)."</title>
				                    <link>".base_url()."news/newsdetails/".($row->id)."/".($row->type)."</link>
				                    <pubDate>".strip_tags($row->insert_date)."</pubDate>
				                                       
				<description>"."<![CDATA[<p><a href=".base_url()."news/newsdetails/".($row->id)."/".($row->type).">"."<img src=".base_url()."assets/news/news_img".($row->id)."_thumb.jpg  align=left border=0></a></p><p>".strip_tags($row->summary)."]]>"."</description>
				                </item>
				                "."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";
			}
			  $output .= '</channel>';
			  $output .= '</rss>';
			 
			  echo($output);	
		}
		function special()
		{
				$query=$this->feeds_model->special();
				header('Content-type: text/xml');
				$output = '<rss version="2.0">';
			    $output .= '<channel>';
			    $output .= '<image>
			      				<link>'.base_url().'</link>
			                    <title>Subhodaya.com</title>
			                    <url>'.base_url().'assets/imgs/logo128 x 31.jpg</url>
			               </image>';
			    $output .= '<title>subhodaya special news</title>';
			    $output .= '<description>Latest news in suhodaya</description>';
			    $output .= '<link>http://www.subhodaya.com/news</link>';
			    $output .= '<copyright>CopyRight 2008-2009</copyright>';
			  
			foreach($query->result() as $row)
			{	
					$output .= "<item><title>".strip_tags($row->heading)."</title>
				                    <link>".base_url()."news/newsdetails/".($row->id)."/".($row->type)."</link>
				                    <pubDate>".strip_tags($row->insert_date)."</pubDate>
				                                 
				<description>"."<![CDATA[<p><a href=".base_url()."news/newsdetails/".($row->id)."/".($row->type).">"."<img src=".base_url()."assets/news/news_img".($row->id)."_thumb.jpg  align=left border=0></a></p><p>".strip_tags($row->summary)."]]>"."</description>
				                </item>
				                "."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";
			}
			  $output .= '</channel>';
			  $output .= '</rss>';
			 
			  echo($output);	
		}
}
?>