<div style="height: 470px;">
<? foreach($details as $row):?>
<ul id="mainnews">
<li style="padding: 3px;"><a href="<?=base_url()?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><? echo $row->heading; ?></a></li>
</ul>
<?   endforeach;  ?></div>
<div align="right" style="width: 100%;"><? echo $paginate;?></div>


