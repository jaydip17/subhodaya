<div style="height: 400px;width: 479px;text-align: left;">
<table width="100%"><tr>
<?
$count=0;
foreach($details as $row):

?>
	<td><li style="padding: 3px;"><a href="<?=base_url()?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><? echo $row->heading; ?></a></li></td>
	
<? 
 $count++;
if($count%2==0){
	echo '</tr><tr>';
}
 endforeach;  ?>
</table>
</div>
<div align="right" style="width: 479px;"><? echo $paginate;?></div>