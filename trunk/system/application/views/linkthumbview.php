<? $count=0; foreach($details as $row):?>
<table cellpadding="0">
<tr>
	<th colspan="2" id="mainnews"><a href="<?=base_url()?>news/newsdetails/<?=$row->id?>"><? echo $row->heading; ?></a></th>
</tr>
<tr>
<td><a href="<?=base_url()?>news/newsdetails/<?=$row->id?>"><img src="<?=base_url();?>assets/news/news_img<?=$row->id ?>_thumb.jpg" border="0"></img></a></td>
<td valign="top"><? echo $row->summery; ?></td>
</tr>
</table>
<?if($count==3){
	break;
}else{
	$count++;
}
endforeach; ?>
