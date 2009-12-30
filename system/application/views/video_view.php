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
					 <div   style="float:right; height:100%;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="194" />
					   <div   ><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="243" height="487" /></div>
					   <div style="border:1px #000 solid;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="268" /></div>
				      </div>
				      <div style="width:560px; height:900px; float:left; margin-left:5px;border:1px solid #cee2ec;">
						     <div style="width:560px; height:50px;" id="bgslis1">
					         <div id="tvshows">TV Shows</div>
							 <div style="width:385px; height:44px; background-color:#f4f4f4; float:left;" id="bgcolor">
							    <div style="float:left;"><img src="<?=base_url()?>assets/image/left.gif" /></div>
									<div style="float:right;"><img src="<?=base_url()?>assets/image/right.gif" /></div>
							        <div style="float:left;">
								        <img src="<?=base_url()?>assets/image/etv.png" />
								        <img src="<?=base_url()?>assets/image/ctv.png" />
								        <img src="<?=base_url()?>assets/image/gemini.png" />
								        <img src="<?=base_url()?>assets/image/maa.png" />
								        <img src="<?=base_url()?>assets/image/inews.png" />
								        <img src="<?=base_url()?>assets/image/vissa.png" />
								        <img src="<?=base_url()?>assets/image/ztelugu.png" />
							        </div>
							  </div>
							  </div>
							   <div style="float:right;width:560px;height:20px;text-align:right;margin-top:10px;">Prev | Next</div>
							   <div id="video_main">
							   <?php $count=1; foreach ($latestvideos as $video):?>
										 <div id="vi_d" style="float: left;padding: 0px 3px 0px 5px;margin-top:10px;">
										<span id="vi_div"><a href="<?=base_url()?>videos/playvideo/<?=$video->id?>/<?=$video->video_cat_id?>">
										 	Views:<?=$video->no_of_views?><br />
										 	<div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png" border="0"/></div>
										 	<div id="video_time"><?=$video->time?></div>
										 	<img src="<?=base_url();?>assets/videos/image_preview/image<?=$video->id?>_thumb.jpg" id="img2" height="88" width="126"/><br />
										 	<?=$video->name?></a></span>
										 </div> 
										 <?php if($count==4){ ?>
										 	 </div><div style="height:150px;" id="video_main">
										<?php  }
										 $count++;
										  endforeach;?>
										  </div>
						</div>
