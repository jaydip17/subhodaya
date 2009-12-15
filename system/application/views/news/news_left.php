    <div id="side_add" style="width:225px;">
						<div style="height:248px;">
							<span style="letter-spacing: 2px;"><?=(isset($sub_heading)) ? $sub_heading : ''?></span>
							<ul>
							 <?php foreach ($details as $row):?>
								<li><a href="<?=$link?><?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
								<?php endforeach;?>
							</ul>
							</div>
							<div id="news_more"><a href="<?=(isset($content_link)) ? $content_link : ''?>"><?=(isset($more)) ? $more : ''?></a></div>
						</div>