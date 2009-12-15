



<div style="height: 400px;width: 589px;text-align: left;">

<?
foreach($details as $row):
$count=0;
?>
	<div id="rightdiv"><li style="padding: 3px;"><a href="<?=base_url()?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><? echo $row->heading; ?></a></li></div>
	
<?  $count++;

 endforeach;  ?>
</div>
<div align="right" style="width: 479px;"><? echo $paginate;?></div>