<div style="height:248px;">
								<div><span style="letter-spacing: 2px;"><?=(isset($sub_heading)) ? $sub_heading : ''?></span></div>
								<?php if(file_exists("./assets/news/news_img".$details[0]->id."_thumb.jpg")){ ?>
								<a href="#"><img src="<?=(isset($image_link)) ? $image_link : ''?>" style="margin: 7px 20px 0px 0px;"/></a>
								<?php }?>
								<span id="headings"><a href="#"><?=(isset($details[0]->heading)) ? $details[0]->heading : ''?></a></span><br>
								<span id="summery"><?=(isset($details[0]->summary)) ? $details[0]->summary : ''?></span>
									<ul>
									<? $count=0; foreach($details as $row):
          						 					 if($count==0)
          											{
	          											$count++;
	          											continue;
          											} ?>
										<li><a href="#"><?=$row->heading?></a></li>
											<? if($count==7){
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
								</div>
								<div id="news_more"><a href="<?=(isset($content_link)) ? $content_link : ''?>"><?=(isset($more)) ? $more : ''?></a></div>
								</div>