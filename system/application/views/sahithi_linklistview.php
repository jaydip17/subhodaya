<div style="height: 470px;">
<? foreach($details as $row):?>
<ul id="mainnews">
<?if(isset($type) && $type=="sahithi"){ ?>
<li><a href="<?=base_url()?>sahithi/sahithidetails/<?=$row->id?>"><? echo $row->heading; ?></a></li>
<?} else if(isset($type) && $type=="mahila"){?>
<li><a href="<?=base_url()?>mahila/mahiladetails/<?=$row->id?>"><? echo $row->heading; ?></a></li>
<?} ?>
</ul>
<?   endforeach;  ?></div>
<div align="right" style="width: 100%;"><? echo $paginate;?></div>


