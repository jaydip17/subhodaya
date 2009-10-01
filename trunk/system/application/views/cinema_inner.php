<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
font-size:14px;
padding-left: 20px;
}
li{
padding-bottom:5px;
}
</style>
<table width="99%">
	<tr>
		<td width="185" height="100%" valign="top" >
			<table>
					<tr>
						<td align="left"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($news_type4['0'])){echo $news_type4['0']->news_cat;}?></div></div>
						<div style="height: 280px;" id="left_news">
						<div style="height: 257px">
							<? if(!empty($news_type4['0'])){
							if(file_exists("./assets/news/news_img".$news_type4['0']->id."_thumb.jpg")){ ?>
							<a href="<?=base_url();?>news/newsdetails/<?=$news_type4['0']->id?>/<?=$news_type4['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$news_type4['0']->id?>_thumb.jpg" style="margin:5px 0px 0px 20px;" id="img"/></a>
							<?}} ?>
							<ul>
								<?php
								if(!empty($news_type4))
								{ 
								$count=0; foreach ($news_type4 as $row):?>
								<li id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
								<?php
								if($count==2){
								break;}
								else{$count++;}
								 endforeach;
								 }
								else
								echo 'No data found';?>
								</div>
								<div id="more-news-div" ><a href="<?=base_url();?>news/details/<?php if(isset($news_type4['0'])){echo $news_type4['0']->type;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
							</ul>
						</div>
						</td>
					</tr>
					<tr>
						<td align="left"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($mahila_details['0'])){echo $mahila_details['0']->cat_name;}?></div></div>
						<div style="height: 275px;" id="left_news">
						<div style="height: 250px;">
						<?if(!empty($mahila_details)){
							if(file_exists("./assets/mahila/news_img".$mahila_details['0']->id."_thumb.jpg")){ ?>
							<a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details['0']->id?>"><img src="<?=base_url();?>assets/mahila/news_img<?=$mahila_details['0']->id?>_thumb.jpg" style="margin:5px 0px 0px 20px;" id="img"></a>
							<?} ?>
							<ul >
								<?php
								 
								$count=0; foreach ($mahila_details as $row):?>
								<li id="mainnews"><a href="<?=base_url();?>mahila/mahiladetails/<?=$row->id?>"><?=$row->heading?></a></li>
								<?php
								if($count==2){
								break;}
								else{$count++;}
								 endforeach;
								 }
								else
								echo 'No data found';?>
								</div>
								<div id="more-news-div"><a href="<?=base_url();?>mahila/details/<?php if(isset($mahila_details['0'])){echo $mahila_details['0']->cat_id;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
							</ul>
						</div>
						</td>
					</tr>
				</table>
		</td>
		<td valign="top" >
			<div><table cellpadding="1px" width="100%">
			<tr><td align="left"><div id="news_heading" class="heading"><div id="newsheading" style="padding-top: 5px;"><?php if(isset($result['0'])){echo $result['0']->heading;}?></div></div></td></tr>
			<tr><td align="center" id="telugufont1"><div  id="maindiv-news">
			<div  style="text-align: justify; padding: 7px;font-size: 14px;">
			<?if(!empty($result)){
			if(file_exists("./assets/cinema/ceni_img".$result['0']->id."_thumb.jpg")){ ?>
			<img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($result['0'])){echo $result['0']->id;}?>.jpg" style="float: left;padding:1px 4px 2px 2px;border: 1px solid  #9FA0A0; margin: 10px 10px 10px 10px;" ></img>
			<?}} ?>
			<font style="padding: 2px;"><?php if(isset($result['0'])){echo $result['0']->description;}?></font></div>
			</div></td></tr>
			<tr><td><div id="news_heading" class="heading"><span id="newsheading"><?php if(isset($more['25'])){echo $more['25']->matter;}?></span></div></td></tr>
			<tr><td align="center"><div style="border:1px solid #9FA0A0;">
			<form name="telugu_send" action="<?=base_url();?>subhodaya/sendmail">
			<table id="formdiv">
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td width="150px" align="left" style="padding-left: 10px;"><?php if(isset($more['27'])){ echo $more['27']->matter;}?></td><td><input type="text" name="name" size="30"><?=form_hidden('heading',$result[0]->heading)?></td></tr>
				<tr><td width="150px" align="left" style="padding-left: 10px;"><?php if(isset($more['28'])){ echo $more['38']->matter;}?></td><td><input type="text" name="uemail" size="30"></td></tr>
				<tr><td width="150px" align="left" style="padding-left: 10px;"><?php if(isset($more['39'])){ echo $more['39']->matter;}?></td><td><input type="text" name="ufname" size="30"></td></tr>
				<tr><td width="150px" align="left" style="padding-left: 10px;"><?php if(isset($more['28'])){ echo $more['28']->matter;}?></td><td><input type="text" name="email" size="30"></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td colspan="2" align="left" style="padding-left: 10px;"><input type="checkbox" id="checkboxId" onclick="javascript:checkboxClickHandler()" name="telugu_type">&nbsp;Type in telugu</td></tr>
				<tr><td colspan="2" align="center"><textarea name="description" style="height: 190px;width: 95%" id="transl2"></textarea></td></tr>
				<tr><td colspan="2" align="center"><input type="submit" name="send" value="Send"><input type="reset" ></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
			</table>
			</form>
			</div></td></tr>
			<tr><td><div id="news_heading" class="heading" style="height: 23px"><span id="newsheading"><?php if(isset($more['26'])){echo $more['26']->matter;}?></span></div></td></tr>
			<tr><td>
				<div style="border:1px solid #9FA0A0;">
					<ul id="mainnews">
					<?php if(isset($result1)){
					foreach ($result1 as $row):
					?>
						<li style="padding-top: 4px; "><a href="<?=base_url()?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
						<?php endforeach;}?>
					</ul>
				</div>
			</td></tr>
			<tr><td><div id="news_heading" class="heading" style="height: 23px"><span id="newsheading"><?php if(isset($more['0'])){echo $more['0']->matter;}?></span></div></td></tr>
			<tr><td>
				<div style="border:1px solid #9FA0A0;">
					<ul id="mainnews">
					<?php if(isset($cinema_cat)){
					foreach ($cinema_cat as  $row):
					?>
						<li style="padding-top: 4px;"><a href="<?=base_url();?>cinema/details/<?=$row->id?>"><?=$row->cinema_type?></a></li>
						<?php endforeach;}?>
					</ul>
				</div>
			</td></tr>
		</table>
		</div>
		</td>
		 <td width="185" align="center" valign="top">
				<table>
					<tr>
					<td valign="top" align="left" height="295px"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php echo $more['5']->matter;?></div></div>
						<div style="height:265px;border:1px solid #9FA0A0;padding-left:20px" id="left_news">
									<?php
								if(!empty($video_result)){
								
          				        foreach($video_result as $item){?>
          				 		<div style="padding:4px;height:82px;padding-top:7px;"><a href="<?=base_url();?>video/index/<?php if(isset($item)) {echo $item->id;}?>"><div id="cinemavideo_time"><?=$item->time?></div><img id="img"src="<?=base_url();?>assets/videos/image_preview/home_image<?=$item->id?>_thumb.jpg" border="0"></a></div>
							        		<div id="gall_botto_img" align="center" style="margin-left:2px;"><a href="<?=base_url();?>video/index/<?php if(isset($item)) {echo $item->id;}?>"><?=$item->name?></a></div>
							        		<div style="height:12px;"><!--Views:<?=$item->no_of_views?>	--></div>
							        			
								<? }}else
								    echo 'No data found';?>
							
								</div>
						</td>
					</tr>
					<tr>
						<td align="left"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($news_type2['0'])){echo $news_type2['0']->news_cat;}?></div></div>
						<div style="height: 275px;" id="left_news">
						<div style="height: 250px">
						<?if(!empty($news_type2)){
						if(file_exists("./assets/news/news_img".$news_type2['0']->id."_thumb.jpg")){ ?>
							<a href="<?=base_url();?>news/newsdetails/<?=$news_type2['0']->id?>/<?=$news_type2['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$news_type2['0']->id?>_thumb.jpg" style="margin:5px 0px 0px 20px;" id="img"></a>
							<?} ?>
							<ul >
								<?php
								$count=0; foreach ($news_type2 as $row):?>
								<li id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
								<?php
								if($count==2){
								break;}
								else{$count++;}
								 endforeach;
								 }
								else
								echo 'No data found';?>
								</div>
								<div id="more-news-div" ><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type2['0'])){echo $cinema_type2['0']->type;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
							</ul>
						</div>
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
			</div>
			<div style="width:100%"></div>
          </td>
	</tr>
</table>