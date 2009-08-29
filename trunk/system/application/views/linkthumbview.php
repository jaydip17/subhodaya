<div style="height:480px">

<? $count=0; foreach($details as $row):?>
<div style="height: 120px" id="telugufont1">
<a href="<?=base_url()?>news/newsdetails/<?=$row->id?>"><img src="<?=base_url();?>assets/news/news_img<?=$row->id ?>_thumb.jpg" border="0" style="padding: 2px 4px 2px 2px;float: left;"></img></a>
<font id="mainnews"><a href="<?=base_url()?>news/newsdetails/<?=$row->id?>"><? echo $row->heading; ?></a></font><br>
<? echo $row->summary; ?>
</div><hr/>
<?if($count==3){
	break;
}else{
	$count++;
}
endforeach; ?>

</div>
<div align="right" style="width: 100%"><? echo $paginate;?></div>
