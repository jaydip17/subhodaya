<div style="height:480px">

<? $count=0; foreach($details as $row):
if(isset($type) && $type=="sahithi")
{?>
<div style="height: 120px" id="telugufont1">
<a href="<?=base_url()?>sahithi/sahithidetails/<?=$row->id?>"><? if(file_exists("./assets/sahithi/news_img".$row->id."_thumb.jpg")){ ?><img src="<?=base_url();?>assets/sahithi/news_img<?=$row->id ?>_thumb.jpg" border="0" style="padding: 2px 4px 2px 2px;float: left;"></img><?} ?><? echo $row->heading; ?></a>
<font id="mainnews">
<a href="<?=base_url()?>sahithi/sahithidetails/<?=$row->id?>"></a></font><br>
<? echo $row->summary; ?>
</div><hr />
<? }
else if(isset($type) && $type=="mahila"){?>
<div style="height: 120px" id="telugufont1">
<a href="<?=base_url()?>mahila/mahiladetails/<?=$row->id?>"><? if(file_exists("./assets/mahila/news_img".$row->id."_thumb.jpg")){ ?><img src="<?=base_url();?>assets/mahila/news_img<?=$row->id ?>_thumb.jpg" border="0" style="padding: 2px 4px 2px 2px;float: left;"></img><?} echo $row->heading; ?></a>
<font id="mainnews">
<a href="<?=base_url()?>mahila/mahiladetails/<?=$row->id?>"></a></font><br>
<? echo $row->summary; ?>
</div><hr />

<?}if($count==3){
	break;
}else{
	$count++;
}
endforeach; ?>

</div>
<div align="right" style="width: 100%"><? echo $paginate;?></div>
