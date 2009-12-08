<div id="special_story">
							<div id="sub_window_title" >
								<div id="title_left_curve">
								</div>
								<div id="title_right_curve">
								</div>
								<div id="special"><?=(isset($sub_heading)) ? $sub_heading : ''?></div>
							</div>
							<div id="sub_window_content">
								<center>
								<img style="margin:5px 0px 2px 0px; " src="<?=(isset($image_link)) ? $image_link : ''?>">
								<div id="story_title" style="color:#2571C4; font-size:12px"><?=$details['0']->heading?>
								</div>
								<div id="story" align="justify" style="line-height:20px; width:90%;font-size:12px">
									<?=$details['0']->summary?>
								</div>
								<div id="" align="right" style="font-size: 12px;">
									<a href="#" style="color:red; text-decoration:none;margin-right:4px;"><?=(isset($eenka)) ? $eenka : ''?></a>
								</div>
							</div>
							<div id="sub_window_footer">
								<div id="footer_left_curve" >
								</div>
								<div id="footer_right_curve">
								</div>
							</div>
						</div>