<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
font-size:14px;
padding-left:20px;
}
li{
padding-bottom:5px;
padding-left:6px;
line-height:16px;
}
body{
font-size:14px;
line-height:16px;
}
</style>
<table width="99%">
	<tr>
		<td width="185" height="100%" valign="top" >
			<div>
				<table>
					<tr>
						<td valign="top" align="left" height="295px"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->cinema_type;}?></div></div>
						<div style="height: 265px;border:1px solid #9FA0A0;" id="left_news">
							<? if(file_exists("./assets/cinema/ceni_img".$cinema_type1['0']->id."_thumb.jpg")){?>
							<a href="<?=base_url();?>cinema/inner/<?=$cinema_type1['0']->id?>/<?=$cinema_type1['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type1['0']->id?>_thumb.jpg" style="margin:5px 0px 3px 20px;" id="img"></a><?} ?>
							<ul id="mainnews">
								<?php
								if(!empty($cinema_type1))
								{ 
								$count=0; foreach ($cinema_type1 as $row):?>
								<li><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
								<?php
								if($count==2){
								break;}
								else{$count++;}
								 endforeach;
								 }
								else
								echo 'No data found';?>
							</ul>
							<div id="more-news-div"><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->type;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
						</div>
						</td>
					</tr>
					<tr>
						<td align="left"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($news_type2['0'])){echo $news_type2['0']->news_cat;}?></div></div>
						<div style="height: 275px;" id="left_news">
						<div style="height: 250px">
						<?if(!empty($news_type2)){
							if(file_exists("./assets/news/news_img".$news_type2['0']->id."_thumb.jpg")){?>
							<a href="<?=base_url();?>news/newsdetails/<?=$news_type2['0']->id?>/<?=$news_type2['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$news_type2['0']->id?>_thumb.jpg" style="margin:5px 0px 3px 20px;" id="img"><?} ?></a>
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
			</div>
		</td>
		<td valign="top" >
			<table cellpadding="1px" width="100%">
			<tr><td><div id="news_heading" class="heading"><span id="newsheading"><?=$result['0']->heading ?></span></div></td></tr>
			<tr><td align="center">
			<?=$this->session->flashdata('mahila'); ?>
			</tr>
			<tr>
			<td>
			
			<div id="maindiv-news" align="left" style="font-size:14px;letter-spacing:1px">
			<?if(file_exists("./assets/".$type."/news_img".$result['0']->id."_thumb.jpg")){ ?><img src="<?=base_url();?>assets/<?=$type?>/news_img<?=$result['0']->id?>.jpg" style="float: left;padding:0px 0px 0px 0px;border: 2px solid  gray; margin: 10px 20px 20px 10px;" ></img><?} ?>
			<?=$result['0']->description ?></div>
		</td></tr>
		<?php $flash_mesg=$this->session->flashdata('mahila');
		if($flash_mesg!=''){?>
		<tr><td align="center"><div style="color: black;background-color: yellow;"><?=$this->session->flashdata('mahila')?></div></td></tr>
		<?php }?>
			<tr><td><div id="news_heading" class="heading"><div id="newsheading" style="width: 50%;text-align: left;float: left;"><?=$more['25']->matter;?></div><div style="text-align: right;padding: 0px 5px 20px 10px;" id="newsheading">Comment</div></div></td></tr>
			<tr><td align="center"><div style="border:1px solid #9FA0A0;">
			<?=form_open('index.php/subhodaya/sendmail','name="telugu_send"') ?>
			
			<input type="hidden" name="url" value="<?=current_url()?>">
			<table id="formdiv" cellspacing="5">
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td width="150px" align="left" style="padding-left: 15px"><?=$more['27']->matter;?></td><td><input type="text" name="name" size="30"></td></tr>
				<?=form_hidden('heading',$result['0']->heading)?>
				<tr><td width="150px" align="left" style="padding-left: 15px;"><?php if(isset($more['38'])){ echo $more['38']->matter;}?></td><td><input type="text" name="uemil" size="30"></td></tr>
				<tr><td width="150px" align="left" style="padding-left: 15px;"><?php if(isset($more['39'])){ echo $more['39']->matter;}?></td><td><input type="text" name="fname" size="30"></td></tr>
				<tr><td width="150px" align="left" style="padding-left: 15px"><?=$more['28']->matter;?></td><td><input type="text" name="email" size="30"></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td colspan="2" align="left" style="padding-left: 10px;"><input type="checkbox" id="checkboxId" onclick="javascript:checkboxClickHandler()" name="telugu_type">&nbsp;Type in telugu</td></tr>
				<tr><td colspan="2" align="center"><textarea style="height: 190px;width: 95%" name="description" id="transl2"></textarea></td></tr>
				<tr><td colspan="2" align="center"><input type="submit" name="send" value="Send"><input type="reset" ></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
			</table>
			</form>
		</td></tr>
			<tr><td><div id="news_heading" class="heading" style="height: 23px"><span id="newsheading"><?=$more['26']->matter;?></span></div></td></tr>
			<tr><td>
				<div style="border:1px solid #9FA0A0;padding:5px">
					<ul>
					<? $i=1; 
					foreach($evenmore as $item){
					?>
					<li style="padding-bottom:10px;"><a href="<?=base_url();?><?=$type?>/<?=$type?>details/<?=$item->id?>/<?=$item->cat_id?>"><?echo $item->heading;?></a></li>
					<?if($i>=5)
					break;
					$i++;} ?>
					</ul>
				</div>
			</td></tr>
			<tr><td><div id="news_heading" class="heading" style="height: 23px"><span id="newsheading">More...Categeories</span></div></td></tr>
			<tr><td>
				<div style="border:1px solid #9FA0A0;padding:3px;">
					<ul>
					<?foreach($details as $item){ ?>
					<li style="padding-bottom:10px;"><a href="<?=base_url()?><?=$type?>/details/<?=$item->id?>"><?=$item->cat_name;?></li>
					<?} ?>
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
          				 		<div style="padding:4px;height:82px;padding-top:8px;"><a href="<?=base_url();?>video/index/<?=$item->id?>/<?=$item->video_cat_id?>"><div id="cinemavideo_time"><?=$item->time?></div><img id="img" src="<?=base_url();?>assets/videos/image_preview/home_image<?=$item->id?>_thumb.jpg"></a></div>
							        		<div id="gall_botto_img" style="margin-left:2px;"align="center"><a href="<?=base_url();?>video/index/<?=$item->id?>/<?=$item->video_cat_id?>"><?=$item->name?></a></div>
							        		<div style="height:12px;"><!--Views:<?=$item->no_of_views?>	--></div>
							        			
								<? }}else
								    echo 'No data found';?>
							
								</div>
						</td>
					</tr>
			</table>
		
			<table>
				<tr>
					<td valigns="top" align="left" height="295px"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if($type=="mahila"){echo $more['9']->matter;}else {echo $more['8']->matter;}?></div></div>
						<div style="height: 265px;border:1px solid #9FA0A0;" id="left_news">
						<?if(!empty($details_more)){?>	<img src="<?=base_url();?>assets/<?=$link?>/news_img<?=$details_more[$key]->id?>_thumb.jpg" style="margin:5px 0px 3px 20px;" id="img"/><?} ?>
							<ul id="mainnews">
								<?php
								if(!empty($details_more)){
								$i=0;
          				        foreach($details_more as $article){
          				 		?>
          				          <li><a href="<?=base_url();?><?=$link?>/<?=$link?>details/<?=$article->id?>"><? echo $article->heading;?></a></li>
          				       <?
							if($i>=3)
								break;
								$i++;}
								} 
								?>
							</ul>
							<div id="more-news-div"><a href="<?=base_url();?><?=$link;?>/details/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->type;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
						
						</td>
					</tr>
			</table>
			</div>
          </td>
	</tr>
</table>