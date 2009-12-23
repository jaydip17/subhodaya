<div id="movie_review" style="margin-top:5px;">
							<div id="sub_window_title" >
								<div id="title_left_curve">
								</div>
								<div id="title_right_curve">
								</div>
								<div id="special"><?=(isset($heading)) ? $heading : ''?></div>
							</div>
							<div id="sub_window_content">
								<a href="<?=base_url()?>cinema/inner/<?=$details[0]->id?>/<?=$details[0]->cat_id?>"><img style="margin:5px 0px 2px 0px; " src="<?=base_url()?>assets/cinema/news_img<?=$details[0]->id?>_thumb.jpg" id="img"/></a>
								<div id="movie" style="width:100%" align="left">
									<ul style="padding-left:18px;">
									<?php $count=1;
									foreach ($details as $row):
									?>
											<li style="font-size: 12px;line-height: 20px;padding-right: 5px;"><a href="<?=base_url()?>cinema/inner/<?=$row->id?>/<?=$row->cat_id?>"><?=$row->heading?></a>
											<img src="<?=base_url();?>assets/stars/<?=$row->rating?>rating.jpg" align="middle" style="width: 60px;"/>
											</li>
											<?php 
											if($count==4){
												break;
											}
											$count++;
											 endforeach;?>
									</ul>
								</div>
								<div id="news_more" >
									<a href="<?=base_url()?>cinema/details/<?=$details[0]->cat_id?>"><?=(isset($more)) ? $more : ''?></a>
								</div>
							</div>
							<div id="sub_window_footer">
								<div id="footer_left_curve" >
								</div>
								<div id="footer_right_curve">
								</div>
							</div>
						</div>