<div style="width:100%;height:128px; border:0px solid #000;font-size: 13px;">
<?php foreach ($details as $row):?>
	<div id="hr" style="float:left; width:110px;text-align:center;height:105px;">
			<a href="<?=base_url()?>gallery/inner/<?=$row['cat_id']?>">
				<img src="<?=base_url()?>assets/gallery/thumbnail_images/<?=$row['folder_path']?>/<?=$row['image_path']?>.jpg" border="0" width="100px"  height="120px" id="img">
			</a><!--<span><?=$row['title']?></span>
	--></div>	
	<?php endforeach;?>
</div>