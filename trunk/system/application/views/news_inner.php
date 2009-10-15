<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
padding-left: 20px;
}
li{
line-height:18px;
}
body{
font-size:14px;
line-height:18px;
}
</style>
<table width="99%">
	<tr>
		<td width="185" height="100%" valign="top" >
				<table>
					<tr>
						<td align="left"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->cinema_type;}?></div></div>
						<div style="height: 280px;" id="left_news">
							<div style="height: 248px;">
							<?if(!empty($cinema_type1['0'])){
							if(file_exists("./assets/cinema/ceni_img".$cinema_type1['0']->id."_thumb.jpg")){ ?>
							<a href="<?=base_url();?>cinema/inner/<?=$cinema_type1['0']->id?>/<?=$cinema_type1['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type1['0']->id?>_thumb.jpg" style="margin:5px 0px 0px 20px;" id="img"></a>
							<?} }?>
							<ul style="padding-top: 5px;">
								<?php
								if(!empty($cinema_type1))
								{ 
								$count=0; foreach ($cinema_type1 as $row):?>
								<li id="mainnews"><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
								<?php
								if($count==2){
								break;}
								else{$count++;}
								 endforeach;
								 }
								else
								echo 'No data found';?>
							</ul>
							</div>
							<div id="more-news-div" ><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->type;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
						</div>
						</td>
					</tr>
					<tr>
						<td align="left" valign="top"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($cinema_type3['0'])){echo $cinema_type3['0']->cinema_type;}?></div></div>
						<div style="height: 280px;" id="left_news">
							<div style="height: 248px;">
							<? if(!empty($cinema_type3['0'])){
							if(file_exists("./assets/cinema/ceni_img".$cinema_type3['0']->id."_thumb.jpg")){ ?>
							<a href="<?=base_url();?>cinema/inner/<?=$cinema_type3['0']->id?>/<?=$cinema_type3['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type3['0']->id?>_thumb.jpg" style="margin:5px 0px 0px 20px; " id='img'></a>
							<?} }?>
							<ul>
								<?php
								if(!empty($cinema_type3))
								{ 
								$count=0; foreach ($cinema_type3 as $row):?>
								<li id="mainnews" ><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
								<?php
								if($count==2){
								break;}
								else{$count++;}
								 endforeach;
								 }
								else
								echo 'No data found';?> 
							</ul>
							</div>
							<div id="more-news-div" ><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type3['0'])){echo $cinema_type3['0']->type;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
						</div>
						</td>
					</tr>
				</table>
		</td>
		<td valign="top" >
			<div><table cellpadding="1px" width="100%">
			<tr><td align="left"><div id="news_heading" style="font-weight: bold;font-size: 14px;border: 1px solid #9FA0A0;"><div style="padding-top: 5px;">&nbsp;<?=$result['0']->heading ?></div></div></td></tr>
			<tr><td align="center"><div  id="maindiv-news">
			<div class="maindiv-news">
			<? if(!empty($result['0'])){
			if(file_exists("./assets/news/news_img".$result['0']->id."_thumb.jpg")){ ?>
			<img src="<?=base_url();?>assets/news/news_img<?=$result['0']->id?>.jpg" style="float: left;padding:2px 2px 2px 2px;border: 1px solid  #9FA0A0; margin: 10px 10px 10px 10px;" ></img>
			<?}} ?>
			<?=$result['0']->description ?></div>
			</div></td></tr><?=$this->session->flashdata('news'); ?>
			<tr><td><div id="news_heading" class="heading"><span id="newsheading"><?php if(isset($more['25'])){echo $more['25']->matter;}?></span></div></td></tr>
			<tr><td align="center"><div style="border:1px solid #9FA0A0;">
			<?=form_open('index.php/subhodaya/sendmail','name="telugu_send"') ?>
			
			<input type="hidden" name="url" value="<?=current_url()?>">
			<table id="formdiv" cellspacing="5">
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td width="150px" align="left" style="padding-left: 15px"><?=$more['27']->matter;?></td><td><input type="text" name="name" size="30"> <?=form_hidden('heading',$result[0]->heading)?></td></tr>
								<tr><td width="150px" align="left" style="padding-left: 15px;"><?=$more['38']->matter;?></td><td><input type="text" name="uemail" size="30"></td></tr>
				<tr><td width="150px" align="left" style="padding-left: 15px;"><?=$more['39']->matter;?></td><td><input type="text" name="fname" size="30"></td></tr>
				<tr><td width="150px" align="left" style="padding-left: 15px"><?=$more['28']->matter;?></td><td><input type="text" name="email" size="30"></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td colspan="2" align="left" style="padding-left: 10px;"><input type="checkbox" id="checkboxId" onclick="javascript:checkboxClickHandler()" name="telugu_type">&nbsp;Type in telugu</td></tr>
				<tr><td colspan="2" align="center"><textarea style="height: 190px;width: 95%" name="description" id="transl2"></textarea></td></tr>
				<tr><td colspan="2" align="center"><input type="submit" name="send" value="Send"><input type="reset" ></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
			</table>
			</form>
			</div></td></tr>
			<tr><td><div id="news_heading" class="heading" style="height: 23px"><span id="newsheading"><?php if(isset($more['26'])){echo $more['26']->matter;}?></span></div></td></tr>
			<tr><td>
				<div style="border:1px solid #9FA0A0;">
					<ul id="mainnews">
				<?php if(isset($news)){
					$count=1;
					foreach ($news as $row):
				?>
			
					<li style="padding-top: 4px;"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
					<?php 
					if($count==5)
					break;
					$count++;
					endforeach;
					}
					?>
					</ul>
				</div>
			</td></tr>
			<tr><td><div id="news_heading" class="heading" style="height: 23px"><span id="newsheading"><?php if(isset($more['0'])){echo $more['0']->matter;}?></span></div></td></tr>
			<tr><td>
				<div style="border:1px solid #9FA0A0;">
					<ul id="mainnews">
					<?php if(isset($news_cat)){
						foreach ($news_cat as $row):						
					?>
						<li style="padding-top: 4px;"><a href="<?=base_url();?>news/details/<?=$row->id?>"><?=$row->news_cat?></a></li>
						<?php endforeach;
					}?>
					</ul>
				</div>
			</td></tr>
		</table>
		</div>
		</td>
		 <td width="185" align="center" valign="top">
			<table width="100%">
			<tr>
				<td align="center" valign="top">
					<table>
					<tr>
					<td valign="top" align="left" height="295px"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php echo $more['5']->matter;?></div></div>
						<div style="height:265px;border:1px solid #9FA0A0;padding-left:20px" id="left_news">
									<?php
								if(!empty($video_result)){
								
          				        foreach($video_result as $item){?>
          				 		<div style="padding:4px;height:82px;padding-top:7px;"><a href="<?=base_url();?>video/index/<?php if(isset($item)) {echo $item->id;}?>"><div id="cinemavideo_time"><?=$item->time?></div><img id="img" src="<?=base_url();?>assets/videos/image_preview/home_image<?=$item->id?>_thumb.jpg"></a></div>
							        		<div id="gall_botto_img" align="center"style="margin-left:2px;"><a href="<?=base_url();?>video/index/<?php if(isset($item)) {echo $item->id;}?>"><?=$item->name?></a></div>
							        		<div style="height:12px;"><!--Views:<?=$item->no_of_views?>	--></div>
							        			
								<? }}else
								    echo 'No data found';?>
							
								</div>
						</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td align="center" valign="top">
					<table>
					<tr>
						<td id="telugufont1" align="left"><div class="heading" style="width: 181px;" id="news_heading"><span id="newsheading"><?php if(isset($cinema_type5['0'])){ echo $cinema_type5['0']->cinema_type;}?></span></div>
						<div style="height: 280px;border: 1px solid #9FA0A0;" id="left_news">
						<div style="height: 248px;">
						<? if(!empty($cinema_type5['0'])){
						if(file_exists("./assets/cinema/ceni_img".$cinema_type5['0']->id."_thumb.jpg")){ ?>
						<a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type5['0'])){ echo $cinema_type5['0']->id;}?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type5['0'])){ echo $cinema_type5['0']->id;}?>_thumb.jpg" style="margin: 5px 0px 2px 20px;" id="img"/></a>
						<?}} ?>
						<ul id="mainnews" style="padding-top: 5px;">
						<?php if(isset($cinema_type5 )){
							$count=1;
							foreach ($cinema_type5 as $row):							
						?>
						
							<li><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
							<?php if($count==4){
								break;
							}else {
								$count++;
							}if($count==0)
							echo 'no datafound';
							endforeach;
						}
							?>
						</ul>
						</div>
						<div id="more-news-div" ><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type5['0'])){echo $cinema_type5['0']->type;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
						</div></td>
					</tr>
				</table>
				</td>
			</tr>
			</table>
			<div style="padding-top: 5px">
			<table style="border:1px solid #3789C3;" bgcolor="#9CB8FB" width="100%">
				<tr>
					<td align="center">
					<div><img src="<?=base_url();?>assets/imgs/add-img1.jpg"></div>
					</td>
				</tr>
				<tr>
					<td align="center"><div><img src="<?=base_url();?>assets/imgs/add-img2.jpg"></div></td>
				</tr>
				<tr>
					<td align="center"><div><img src="<?=base_url();?>assets/imgs/2.jpg"></div></td>
				</tr>
			</table>
			</div></div>
          </td>
	</tr>
</table>