
	
		
			<div style="width:963px; background-color:#fff;border:0px dotted #000">
				<div id="header" style="border:1px solid #ccc; margin-bottom:0px;float:left;background-color:#fff; width:100%">
					
					
					<div style="width:100%; height:950px; float:left">
					<div style="width:144px; height:350px; float:left; border:1px solid #979797;">
					
					        <div id="videomenu">
		                  <ul>
			
			   <?foreach($videocategeories->result() as $item){?>
			<li><a href="<?=base_url()?>video/index/<?=$item->id?>"><?=$item->name ?></a></li>
			 <?}?>
			
			
			
		                </ul>
	                    </div> 
					
					
					
					</div>
					 <div   style="float:right; height:900px;;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="194" />
					   <div><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="243" height="487" /></div>
					   <div style="border:1px #000 solid;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad2.jpg" width="243" height="268" /></div>
				      </div>
					       
					      
					    <div style="width:560px; height:900px; float:left; margin-left:5px;border:1px solid #cee2ec;">
						     
						      <div style="width:560px; height:50px;" id="bgslis">
					          <div style=" height:50px;" id="tvshows">TV Shows</div>
							  <div style="width:385px; height:44px; background-color:#f4f4f4; float:left;" id="bgcolor">
							    <div style="float:left;"><img src="<?=base_url();?>assets/gallery/left.gif" /></div>
									
									<div style="float:right;"><img src="<?=base_url();?>assets/gallery/right.gif" /></div>
							        <div style="float:left;"><img src="<?=base_url();?>assets/gallery/etv.png" /><img src="<?=base_url();?>assets/gallery/ctv.png"  border="0px"/><img src="<?=base_url();?>assets/gallery/gemini.png" /><img src="<?=base_url();?>assets/gallery/maa.png" /><img src="<?=base_url();?>assets/gallery/inews.png" /><img src="<?=base_url();?>assets/gallery/vissa.png" /><img src="<?=base_url();?>assets/gallery/ztelugu.png" /></div>
							  </div>
							  </div>
							                
							        <div style="float:right; width:560px; text-align:right; margin-top:20px;margin-right:20px;"><!-- <img src="<?=base_url();?>assets/image/small.png" style="padding-bottom:1px;"/>--><?echo $paginate; ?><!-- <img src="<?=base_url();?>assets/image/small1.png" style="padding-bottom:1px;" />--></div>
									     
									<div style="float:left; width:560px; height:93px; margin-top:20px;">
									          
									       <? 
                                             if(($latestvideos->num_rows() == 0 ))
		                                   {   echo"<div style='text-align:center' width='560px'>";
		                                     	echo" <h4>No Results to display</h4></td>";
		                                   }
			                                else{
			                                $i=1; foreach ($hotvideos->result() as $item) {?>
									       
									     <div id="vi_d"><span id="vi_div">views:<?=$item->no_of_views?></span><br /><div id="video_img"><a href="<?=base_url();?>video/playvideo/<?=$item->id?>/<?=$item->video_cat_id?>"><img src="<?=base_url();?>assets/image/buttion.png" border="0px"/></a></div><div id="video_time"><a href="<?=base_url();?>video/playvideo/<?=$item->id?>/<?=$item->video_cat_id?>"><?=$item->time?></a></div><a href="<?=base_url();?>video/playvideo/<?=$item->id?>/<?=$item->video_cat_id?>"><img src="<?=base_url();?>assets/videos/image_preview/home_image<?=$item->id?>_thumb.jpg" id="img2" height="88" width="126"/></a><br /><span id="vi_div"><a href="<?=base_url();?>video/playvideo/<?=$item->id?>/<?=$item->video_cat_id?>"><?=$item->name?></a></span></div>
									         <? 
		
			       
			                           if($i%4==0)
			                             {
			       	                   echo"<div></div>";
			                              }
                                       $i++;  }?>
                                       
			                         
									  <!--<div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>-->
									 
									 <div style="float:left;"></div>
							            <?}?>
							        </div>
									
									
									 
									<!-- <div style="float:left; width:560px; height:93px; margin-top:60px;">
									<div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									<div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									<div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									<div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									<div style="float:left;"></div>
							        </div>-->
									
									
								 
									<!--  <div style="float:left; width:560px; height:93px; margin-top:50px;">
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126" /><br /><span id="vi_div">hbdvhv</span></div>
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div style="float:left;"></div>
							        </div>-->
							        <!-- <div style="float:left; width:560px; height:93px; margin-top:50px;">
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div id="vi_d"><span id="vi_div">4rf5tg6y</span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time">00:03</div><img src="<?=base_url();?>assets/gallery/im1.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div">hbdvhv</span></div>
									  <div style="float:left;"></div>
							        </div>-->
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
					
					
					
				
				
		
	
