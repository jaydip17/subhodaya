
<div id="" style="width:98%;" align="left">
								<?php if(file_exists("./assets/".$details[0]->cat."/news_img".$details[0]->id."_thumb.jpg")){?>
									<a href="<?=$link?><?=$details[0]->id?>/<?php if(!empty($link_cate)){echo $link_cate;}else{echo $details[0]->cat_id;}?>" >
										<img style="float:left; margin:5px 20px 2px 0px;" src="<?=(isset($image_link)) ? $image_link : ''?>" id="img"/>
									</a>
									<?php }?>
										<ul style="margin:0px; padding:0px 0px 0px 10px;">
										<?php foreach ($details as $row):?>
											<li style="color:#228BEE;line-height: 19px;" >
												<a href="<?=$link?><?=$row->id?>/<?php if(!empty($link_cate)){echo $link_cate;}else{echo $row->cat_id;}?>" style="color:#228BEE; font-size:12px; text-decoration:none">
												<?=$row->heading?>
												</a>
											</li>
											<?php endforeach;?>
											
									</ul>	
										<div style="color:#AEAEAE; font-size:10px; margin-top:0px" align="right"><a href="<?= (isset($more_link)) ? $more_link : '' ?>"><?= (isset($more)) ? $more : '' ?></a></div>
										
									</div>