
	
		
			<div style="width:963px; background-color:#fff;border:0px dotted #000">
				<div id="header" style="border:1px solid #ccc; margin-bottom:0px;float:left;background-color:#fff; width:100%">
					
					
					<div style="width:100%; height:950px; float:left">
					<div style="width:144px; height:350px; float:left; border:1px solid #979797;">
					
					        <div id="videomenu">
		                  <ul>
			
			<?foreach($videocategeories->result() as $item){?>
			<li><a href="<?=base_url()?>video/index/<?=$item->id?>"><?=$item->name ?></a></li>
			 <?}?>
			<!-- <li><a href="#2">Blog Videos</a></li>
			<li><a href="#3">Movi-Trailers</a></li>
			<li><a href="#4">Yoga</a></li>
			<li><a href="#1">Commedy Videos</a></li>
			<li><a href="#1">Music Videos</a></li>
			<li><a href="#5">Believe It Or Not</a></li>
			<li><a href="videomenu1.zip">Religious Journey</a></li>
			<li><a href="#2">Movie Scenes</a></li>
			<li><a href="#3">TV Shows</a></li>
			<li><a href="#4">Emotional Scenes</a></li>-->
			
			
		                </ul>
	                    </div> 
					
					
					
					</div>
					 <div   style="float:right; height:900px;;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="194" />
					   <div><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="243" height="487" /></div>
					   <div style="border:1px #000 solid;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad2.jpg" width="243" height="268" /></div>
				      </div>
					    <div style="width:560px; height:950px; float:left; margin-left:5px;border:1px solid #cee2ec;">
						      <div style="width:560px; height:68px; border:1px solid;"><img src="<?=base_url();?>assets/image/banar.jpg"/>
					          
							  </div>
							      
							        <div style=" width:560px; text-align:center; margin-top:20px;margin-right:20px; font-size:16px;color:red;"><?=$item->name?></div>
									<div style="float:left; width:560px; height:350px; margin-top:20px; border:1px solid;"><?=$videoplayer?>
									  
									 <div style="float:left;"></div>
							        </div>
									<div>
									<div style="float:left; width:560px; height:18px; margin-top:10px;"><img src="<?=base_url();?>assets/stars/5rating.jpg" align="left"/><span style="padding-right:430px;">rating</span></div>
									
									 <div style="float:left; width:560px; height:28px; margin-top:20px; border:1px solid #CECECE; background-color:#EBEBEB;"><div style="float:left;padding-top:6px;padding-left:5px;font-size:14px;color:#812D00;font-weight:bold;"><img src="<?=base_url();?>assets/image/video.gif">Top Videos</div><div style="float:right;padding-top:4px;padding-right:5px;"><?echo $paginate; ?></div></div>
									
									  
									  <!-- <div style="float:left;" ></div>-->
							        <!-- </div>-->
							        <div style="float:left; width:560px; height:93px; margin-top:30px;">
									         <?$count=1;
          	                                foreach($topviewedvideos->result() as $item):  
          	                                ?>
									  <div id="vi_d"><span id="vi_div"><a href="<?=base_url();?>video/playvideo/<?=$item->id?>/<?=$item->video_cat_id?>">Views:<?=$item->no_of_views?></a></span><br /><div id="video_img"><a href="<?=base_url();?>video/playvideo/<?=$item->id?>/<?=$item->video_cat_id?>"><img src="<?=base_url();?>assets/image/buttion.png" border="0px"/></a></div><div id="video_time"><a href="<?=base_url();?>video/playvideo/<?=$item->id?>/<?=$item->video_cat_id?>"><?=$item->time?></a></div><a href="<?=base_url();?>video/playvideo/<?=$item->id?>/<?=$item->video_cat_id?>"><img src="<?=base_url();?>assets/videos/image_preview/home_image<?=$item->id?>_thumb.jpg" id="img2" height="88" width="126"/></a><br /><span id="vi_div"><a href="<?=base_url();?>video/playvideo/<?=$item->id?>/<?=$item->video_cat_id?>"><?=$item->name?></a></span></div>
									          <?if ($count==2){
							   	            $count=0;
							   	            echo '<div></div>';
							                   }$count++;
							                 endforeach;
							                ?>
							               
									  
									  <div style="float:left;"></div>
									    
							        </div>
							       <!--  <div style="float:left; width:560px; height:93px; margin-top:50px;">
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div style="float:left;"></div>
							        </div>-->
							        </div>
								</div>
									
							</div>
					</div>
					
					
					
				
				
		
	
