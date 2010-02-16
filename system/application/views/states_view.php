<? if(file_exists("./assets/districts/news_img".$details[0]->id."_thumb.jpg")){ ?>
									<a href="<?=base_url()?>news/newsdetails/"><img style="float:left; margin:5px 20px 2px 0px; " src="<?=(isset($image_link)) ? $image_link : ''?>" id="img"></a>
									<?php }?>
										<ul style="padding-top:5px; padding-left:25px;">
										<?php foreach ($details as $row):?>
											<li style="line-height: 19px;"><a href="<?=base_url()?>news/statenews/<?=$row->id?>/<?=$type?>" style="font-size:12px;margin-top: 5px; "><?=$row->heading?></a></li>
											<?php endforeach;?>		
										</ul>