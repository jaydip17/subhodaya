<div style="height:480px">
<table cellpadding="0">
<? if(!empty($details)){ 
$count=0; foreach($details as $row):?>
<tr>
	<th colspan="2" id="mainnews"><a href="<?=base_url()?>cinema/inner/<?=$row->id?>"><? echo $row->heading; ?></a></th>
</tr>
<tr>
<td><a href="<?=base_url()?>cinema/inner/<?=$row->id?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$row->id ?>_thumb.jpg" border="0"></img></a></td>
<td valign="top"><? echo $row->summary; ?></td>
</tr>
<?if($count==3){
	break;
}else{
	$count++;
}
endforeach; }
else{
echo 'No data found';
}
?>
</table>
</div>
<div align="right" style="width: 100%"><? echo $paginate;?></div>
