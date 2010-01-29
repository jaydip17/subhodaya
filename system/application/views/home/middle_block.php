<div id="today_news">
							<div id="sub_window_title">
								<div id="title_left_curve">
								</div>
								<div id="title_right_curve">
								</div>
								<div id="enati_vishe"><?=(isset($sub_heading)) ? $sub_heading : ''?></div>
							</div>
							<div id="sub_window_content" >
								<div id="mib_block" style="width:98%;padding-left: 10px;" align="left" >
								<? if(file_exists("./assets/news/news_img".$details[0]->id."_thumb.jpg")){ ?>
									<a href="<?=base_url()?>news/newsdetails/<?=$details[0]->id?>/<?=$details[0]->type?>"><img style="float:left; margin:5px 20px 2px 0px; " src="<?=(isset($image_link)) ? $image_link : ''?>" id="img"></a>
									<?php }?>
										<ul style="padding-top:5px; padding-left:25px;">
										<?php foreach ($details as $row):?>
											<li style="line-height: 19px;"><a href="<?=base_url()?>news/newsdetails/<?=$row->id?>/<?=$row->type?>" style="font-size:12px;margin-top: 5px; "><?=$row->heading?></a></li>
											<?php endforeach;?>		
										</ul>		
									</div>
							</div>
							<div id="sub_window_footer">
								<div id="footer_left_curve" >
								</div>
								<div id="footer_right_curve">
								</div>
							</div>
						</div>