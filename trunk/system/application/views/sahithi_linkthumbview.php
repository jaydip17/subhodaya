<div style="height:480px">
<table cellpadding="0" id="telugufont1">
<? $count=0; foreach($details as $row):
if(isset($type) && $type=="sahithi")
{?>
<tr>
	<th colspan="2" id="mainnews"><a href="<?=base_url()?>sahithi/sahithidetails/<?=$row->id?>"><? echo $row->heading; ?></a></th>
</tr>
<tr>
<td><a href="<?=base_url()?>sahithi/sahithidetails/<?=$row->id?>"><img src="<?=base_url();?>assets/sahithi/news_img<?=$row->id ?>_thumb.jpg" border="0"></img></a></td>
<td valign="top"><? echo $row->summary; ?></td>
</tr>	
<? }
else if(isset($type) && $type=="mahila"){?>
<tr>
	<th colspan="2" id="mainnews"><a href="<?=base_url()?>mahila/mahiladetails/<?=$row->id?>"><? echo $row->heading; ?></a></th>
</tr>
<tr>
<td><a href="<?=base_url()?>mahila/mahiladetails/<?=$row->id?>"><img src="<?=base_url();?>assets/mahila/news_img<?=$row->id ?>_thumb.jpg" border="0"></img></a></td>
<td valign="top"><? echo $row->summary; ?></td>
</tr>

<?}if($count==3){
	break;
}else{
	$count++;
}
endforeach; ?>
</table>
</div>
<div align="right" style="width: 100%"><? echo $paginate;?></div>
