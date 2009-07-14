<? foreach($details as $row):?>
<ul id="mainnews">
<li><a href="<?=base_url()?>news/newsdeatils/<?=$row->id?>"><? echo $row->heading; ?></a></li>
</ul>
<?   endforeach;  echo $paginate; ?>


