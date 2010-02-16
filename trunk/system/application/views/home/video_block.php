<div style="width:100%;height:148px; border:0px solid #000;font-size: 13px;">
<?php foreach ($re_res as $row):?>
	<div id="" style="float:left; width:140px;margin: 2px;">
		<div id="hr" style="width:135px;height:70px;text-align:center;">
			<a href="<?=base_url()?>videos/playvideo/<?=$row['cat_id']?>/<?=$row['id']?>" >
				<div style="border: 1px solid gray;padding: 1px;"><?=$row['image']?></div>
			</a>
			<span><?=$row['video_name']?></span><br/>
			<span style="color:#FF6407;">views:<?=$row['no_of_views']?></span><br/>
			<span >rating:</span><span style="color:#FF6407;"></span>
		</div>
	</div>
	<?php endforeach;?>
</div>