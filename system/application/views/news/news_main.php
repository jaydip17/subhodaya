<?php foreach ($details as $row):?>
<div id="main_news1">
	<?php if(file_exists("./assets/news/news_img".$row->id."_home_thumb.jpg")){ ?>
		<a href="#"><img src="<?=base_url()?>assets/news/news_img<?=$row->id?>_home_thumb.jpg" height="45px;" width="46px;"></img></a>
		<?php }?>
		<span id="headings"><a href="#"><?=$row->heading?></a></span>
</div>
<?php endforeach;?>