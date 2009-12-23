<div id="news_poll">
							<div id="news_window_title" style="color:#FE0002;">
								<div id="news_title_left_curve">
								</div>
								<div id="news_title_right_curve">
								</div>
								<?=(isset($sub_heading)) ? $sub_heading : ''?>
							</div>
							<div id="news_window_content" style="">
								<div id="question" style="font-size: 12px;">
								<?=(isset($details[0]->question)) ? $details[0]->question : ''?>
								</div>
								<div id="options" align="left" style="font-size:12px; margin-left:10px">
								
										<input type="radio" name="sex" value="male" /><?=(isset($yes)) ? $yes : ''?>
											<br />
										<input type="radio" name="sex" value="female" /><?=(isset($no)) ? $no : ''?>
										<br />
										<input type="radio" name="sex" value="female" /><?=(isset($yes_no)) ? $yes_no : ''?>
								</div>
								<div style="width:100%; height:40px; ">
									<div style="float:left; height:46px;margin-left:5px;margin-top:0px; width:100px;font-size:11px;color:#FF0000" align="left">
										<div style="margin-top:5px">
										<div id=""><a href="" style="color:#FF0000; text-decoration:none">View Result</a></div>
										<div id=""><a href="" style="color:#FF0000; text-decoration:none">Yesterday's Poll</a></div>
									</div>
									</div>
									<div style="float:left;height:46px; width:47px">
										<a href="#">
											<img style="margin:0px 0px 0px 0px; " src="<?=base_url()?>assets/image/vote.png" border="0">
										</a>
									</div>
								</div>
								<div style="height: 15px;text-align: right;font-size: 11px;padding-right: 5px;"><a href="<?=base_url()?>home_poll">More</a></div>
							</div>
							
							<div id="news_window_footer" style="height:9px;width:100%" align="left">
								
								<div id="news_footer_left_curve" >
								</div>
								<div id="news_footer_right_curve">
								</div>
							</div>
						</div>