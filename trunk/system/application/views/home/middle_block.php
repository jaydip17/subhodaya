<div id="today_news">
							<div id="sub_window_title">
								<div id="title_left_curve">
								</div>
								<div id="title_right_curve">
								</div>
								<div id="enati_vishe"><?=(isset($sub_heading)) ? $sub_heading : ''?></div>
							</div>
							<div id="sub_window_content" >
								<div id="" style="width:98%;padding-left: 10px;" align="left" >
								<? if(file_exists("./assets/news/news_img".$details[0]->id."_thumb.jpg")){ ?>
									<img style="float:left; margin:5px 20px 2px 0px; " src="<?=(isset($image_link)) ? $image_link : ''?>">
									<?php }?>
										<ul style="margin:0px; padding-left:25px;">
										<?php foreach ($details as $row):?>
											<li><a href="#" style="font-size:12px;margin-top: 5px; "><?=$row->heading?></a></li>
											<?php endforeach;?>		
										</ul>		
										<div id="news_more"><a href="#"><?=(isset($more)) ? $more : ''?></a>	</div>
										
									</div>
							</div>
							<div id="sub_window_footer">
								<div id="footer_left_curve" >
								</div>
								<div id="footer_right_curve">
								</div>
							</div>
						</div>