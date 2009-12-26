<div style="width:100%;height:148px; border:0px solid #000">
<?php foreach ($details as $row):?>
	<div id="" style="float:left; width:110px;">
		<div id="" style="width:99px;height:70px;text-align:center;">
			<a href="<?=base_url()?>videos/playvideo/<?=$row->id?>/<?=$row->video_cat_id?>">
				<img src="<?=base_url();?>assets/videos/image_preview/image<?=$row->id?>_thumb.jpg" border="0" style="border:1px solid #779AAC">
			</a>
			<span><?=$row->name?></span><br/>
			<span style="color:#FF6407;">views:<?=$row->no_of_views?></span><br/>
			<span >rating:</span><span style="color:#FF6407;"><?=$row->rating?></span>
		</div>
	</div>
	<?php endforeach;?>
</div>