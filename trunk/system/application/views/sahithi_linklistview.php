<style type="text/css">
li{
line-height:16px;
}
body{
font-size:14px;
line-height:16px;
}
</style>


<div style="height: 470px;">
<? foreach($details as $row):?>
<ul id="mainnews">
<?if(isset($type) && $type=="sahithi"){ ?>
<li style="padding: 3px;"><a href="<?=base_url()?>sahithi/sahithidetails/<?=$row->id?>/<?=$row->cat_id?>"><? echo $row->heading; ?></a></li>
<?} else if(isset($type) && $type=="mahila"){?>
<li style="padding: 3px;"><a href="<?=base_url()?>mahila/mahiladetails/<?=$row->id?>/<?=$row->cat_id?>"><? echo $row->heading; ?></a></li>
<?} ?>
</ul>
<?   endforeach;  ?></div>
<div align="right" style="width: 100%;"><? echo $paginate;?></div>  


