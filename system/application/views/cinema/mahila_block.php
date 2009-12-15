  <div id="mahi_content" style="height: 200px;">
  	<div style="height: 175px;">
	<span style="letter-spacing: 2px;"><?= (isset($sub_heading)) ? $sub_heading : '' ?></span><br />
	<?php if(file_exists("./assets/".$page."/news_img".$details[0]->id."_thumb.jpg")){ ?>
	<a href="<?=$link?><?=$details[0]->id?>/<?=$details[0]->cat_id?>"><img src="<?= (isset($img_link)) ? $img_link : '' ?>" id="mahila_img"/></a>
	<?php }?>
	<span id="headings"><a href="<?=$link?><?=$details[0]->id?>/<?=$details[0]->cat_id?>"><?=$details[0]->heading?></a></span><br />
	<span id="summery"><?=$details[0]->summary?></span>

	<ul>
		<? $count=0; foreach($details as $row):
          	if($count==0)
          		{
	          	$count++;
	          	continue;
          		} ?>
		<li><a href="<?=$link?><?=$row->id?>/<?=$row->cat_id?>"><?=$row->heading?></a></li>
	<? if($count==4){
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