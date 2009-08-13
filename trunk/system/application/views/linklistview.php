<div style="height: 470px;">
<? foreach($details as $row):?>
<ul id="mainnews">
<li><a href="<?=base_url()?>news/newsdetails/<?=$row->id?>"><? echo $row->heading; ?></a></li>
</ul>
<?   endforeach;  ?></div>
<div align="right" style="width: 100%;"><? echo $paginate;?></div>


