  <div id="mahi_content" style="width: 350px;">
	<span style="letter-spacing: 2px;"><?= (isset($sub_heading)) ? $sub_heading : '' ?></span><br />
	<?php if(file_exists("./assets/cinema/ceni_img".$details[0]->id."_thumb.jpg")){ ?>
	<img src="<?= (isset($img_link)) ? $img_link : '' ?>" id="mahila_img"/>
	<?php }?>
	<span id="headings"><a href="#"><?=$details[0]->heading?></a></span><br />
	<span id="summery"><?=$details[0]->summary?></span>
	<ul>
		<? $count=0; foreach($details as $row):
          	if($count==0)
          		{
	          	$count++;
	          	continue;
          		} ?>
		<li><a href="#"><?=$row->heading?></a></li>
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