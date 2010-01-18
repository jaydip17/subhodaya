<div style="height: 400px;width: 599px;text-align: left;">
<?  foreach($details as $row):?>

<div id="leftdiv">
<a href="<?=base_url()?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$row->id ?>_home_thumb.jpg" border="0" style="margin: 2px;"  align="middle" height="49px" width="49px"></img></a>
<span><a href="<?=base_url()?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><? echo $row->heading; ?></a></span>
</div>
<?
endforeach; ?>
</div>
</div>
<div align="right" style="width: 100%"><? echo $paginate;?></div>
