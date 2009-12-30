
<div style="width:100%; float:left">
	<div style="width:144px; height:350px; float:left;">
		<div id="greet_menu">
			<ul style="list-style: none;padding: 0px;margin: 0px;">
			    <li id="categori"></li>
			    <?php foreach ($type as $cat):?>
				<li id="gree_m"><a href="<?=base_url()?>videos/content/<?=$cat->id?>"><?=$cat->name?></a></li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>
	<div style="float:right; height:100%;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="194" />
		<div><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="243" height="487" /></div>
		<div style="border:1px #000 solid;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="268" /></div>
	</div>
	<div style="width:560px; height:950px; float:left; margin-left:5px;border:0px solid #cee2ec;">
		<div style="width:560px; height:68px; border:1px solid;"><img src="<?=base_url();?>assets/home_images/ads/video_add.jpg"/></div>
		<div style=" width:560px; text-align:center;font-size:16px;color:red;text-align:center;padding:3px 0px 3px 2px;"><?=$thisvideo[0]->name?></div>
		<div style="float:left; width:560px; height:350px; border:1px solid;"><?=$videoplay?></div>
		<div style="float:left; width:560px; height:18px;"><div style="float: left;text-align: left;width: 50%;"><img src="<?=base_url();?>assets/stars/<?=$thisvideo[0]->rating?>rating.jpg" align="left"/><span><?=$more['36']->matter?></span></div><div style="float: right;width: 40%;text-align: right;"><?=$thisvideo[0]->no_of_views?> views</div></div>
		<div style="float:left; width:560px; height:28px;border:1px solid #CECECE; background-color:#EBEBEB;margin-top:10px;"><div style="float:left;padding-top:6px;padding-left:5px;font-size:14px;color:#812D00;font-weight:bold;"><img src="<?=base_url();?>assets/image/video.gif"><?=$more['34']->matter?></div><div style="float:right;padding-top:4px;padding-right:5px;"><?=$paginate?></div></div>
		 <div id="video_main">
		 <?php $count=0; foreach ($topvideos as $video):?>
			<div id="vi_d" style="float: left;padding: 0px 3px 0px 5px;margin-top:20px;">
				<span id="vi_div"><a href="<?=base_url()?>videos/playvideo/<?=$video->id?>/<?=$video->video_cat_id?>">
				Views:<?=$video->no_of_views?><br />
				<div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png" border="0"/></div>
				<div id="video_time"><?=$video->time?></div>
				<img src="<?=base_url();?>assets/videos/image_preview/image<?=$video->id?>_thumb.jpg" id="img2" height="88" width="126"/><br />
				<?=$video->name?></a></span>
			</div> 
			<?php if($count==4){?> 
			</div><div id="video_main">
			<?php 
			}endforeach;?>
			</div>
	</div>