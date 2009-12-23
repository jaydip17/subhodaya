<div style="width:100%;height:148px; border:0px solid #000">
<?php foreach ($details as $row):?>
	<div id="" style="float:left; width:130px;">
		<div id="" style="width:129px;height:70px;text-align:center;">
			<a href="<?=base_url()?>greetings/inner/<?=$row->id?>/<?=$row->type?>">
				<img src="<?=base_url()?>assets/greetings/gree_img<?=$row->id?>_thumb.jpg" border="0" style="border:1px solid #779AAC;width: 120px;height: 95px;">
			</a>
			<span><a href="<?=base_url()?>greetings/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->gree_cat?></a></span><br/>
			<span >Total views:</span><span style="color:#FF6407;"><?=$row->views?></span><br/>
		</div>
	</div>
	<?php endforeach;?>
</div>
