  <div id="mahi_content" style="width: 350px;">
  <div style="height: 220px;">
	<span style="letter-spacing: 2px;"><?= (isset($sub_heading)) ? $sub_heading : '' ?></span><br />
	<?php if(file_exists("./assets/cinema/news_img".$details[0]->id."_thumb.jpg")){ ?>
	<a href="<?=$link?><?=$details[0]->id?>/<?=$cate?>"><img src="<?= (isset($img_link)) ? $img_link : '' ?>" id="mahila_img"/></a>
	<?php }?>
	<span id="headings"><a href="<?=$link?><?=$details[0]->id?>/<?=$cate?>"><?=$details[0]->heading?></a>
	<?php if(isset($details[0]->rating)){?>
		<img src="<?=base_url();?>assets/stars/<?=$details[0]->rating?>rating.jpg" align="middle" style="width: 60px;"/>
		<?php }?>
	</span><br />
	<span id="summery"><?=$details[0]->summary?></span>
	
	<ul>
		<? $count=0; foreach($details as $row):
          	if($count==0)
          		{
	          	$count++;
	          	continue;
          		} ?>
		<li><a href="<?=$link?><?=$row->id?>/<?=$cate?>"><?=$row->heading?></a>
		<?php if(isset($row->rating)){?>
		<img src="<?=base_url();?>assets/stars/<?=$row->rating?>rating.jpg" align="middle" style="width: 60px;"/>
		<?php }?>
		</li>
	<? if($count==6){
		break;
		}else{
		$count++;
			}endforeach; 
	if($count==0){
	echo 'No data found';
		}
	?>
	</ul>
	</div>
	<div id="news_more"><a href="<?=(isset($content_link)) ? $content_link : ''?>"><?=(isset($more)) ? $more : ''?></a></div>
 </div>
 