<div style="height: 400px;width: 599px;text-align: left;">
<?  foreach($details as $row):?>

<div id="leftdiv">
<a href="<?=base_url()?><?=$link?><?=$row->id?>/<?=$row->cat_id?>"><img src="<?=$image_link?>news_img<?=$row->id ?>_home_thumb.jpg" border="0" style="margin: 2px;"  align="middle" height="49px" width="49px"></img></a>
<span><a href="<?=base_url()?><?=$link?><?=$row->id?>"><? echo $row->heading; ?></a></span>
</div>
<?
endforeach; ?>
</div>
</div>
<div align="right" style="width: 100%"><? echo $paginate;?></div>