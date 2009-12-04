<div id="ardhikam" align="left">
							<div id="sub_window_title_tab" >
								<div id="title_left_curve">
								</div>
								<div id="title_right_curve">
								</div>
								<div id="special"><?=(isset($sub_heading)) ? $sub_heading : ''?></div>
							</div>
							<div id="sub_window_content" class="ardikam">
								
								<div id="" style="width:98%;padding-top: 2px;" align="left" >
									<img style="float:left; margin:4px 20px 2px 4px; " src="<?=(isset($image_link)) ? $image_link : ''?>">
										<a href="#" style="color:#228BEE; font-size:12px; text-decoration:none"><?=$details[0]->heading?></a>
												<div style="color:#000; font-size:12px" align="justify"><?=$details[0]->summary?></div>
												<div style="color:red; font-size:12px; margin-top:2px; line-height:8px" align="right">
													<a href="#" style="text-decoration:none;color:red"><?=(isset($eenka)) ? $eenka : ''?></a>
												</div>
										<ul>
											<? $count=0; foreach($details as $row):
          						 					 if($count==0)
          											{
	          											$count++;
	          											continue;
          											} ?>
											<li style="color:#228BEE;" >
												<a href="#" style="color:#228BEE; font-size:12px; text-decoration:none"><?=$row->heading?></a>
											</li>
											<? if($count==2){
							         					break;
							          					}else{
							          						$count++;
							          					}
							          					endforeach; 
							          					if($count==0){
							          						echo 'No data found';
							          					}
							          					?>
										</ul>
										
										<div id="news_more">
											<a href="#" ><?=(isset($more)) ? $more : ''?></a>
											</div>
									</div>
								
							</div>
							<div id="sub_window_footer">
								<div id="footer_left_curve" >
								</div>
								<div id="footer_right_curve">
								</div>
							</div>
						</div>