<div style="height:480px">
<table cellpadding="0">
<? $count=0; foreach($details as $row):?>
<tr>
	<th colspan="2" id="mainnews"><a href="<?=base_url()?>news/newsdetails/<?=$row->id?>"><? echo $row->heading; ?></a></th>
</tr>
<tr>
<td><a href="<?=base_url()?>news/newsdetails/<?=$row->id?>"><img src="<?=base_url();?>assets/news/news_img<?=$row->id ?>_thumb.jpg" border="0"></img></a></td>
<td valign="top"><? echo $row->summery; ?></td>
</tr>
<?if($count==3){
	break;
}else{
	$count++;
}
endforeach; ?>
</table>
</div>
<div align="right" style="width: 100%"><? echo $paginate;?></div>
