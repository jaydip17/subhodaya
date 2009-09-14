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
<script language="javascript">
//<!--
function telugu_typing()
{
	if(document.telugu_send.telugu_type.checked == true)
	{
		window.location="javascript:(t13nb=window.t13nb||function(l){var%20t=t13nb,d=document,o=d.body,c=\"createElement\",a=\"appendChild\",w=\"clientWidth\",i=d[c](\"span\"),s=i.style,x=o[a](d[c](\"script\"));if(o){if(!t.l){t.l=x.id=\"t13ns\";o[a](i).id=\"t13n\";i.innerHTML=\"Loading%20transliteration\";s.cssText=\"z-index:99;font-size:18px;background:#FFF1A8;top:0\";s.position=d.all?\"absolute\":\"fixed\";s.left=((o[w]-i[w])/2)+\"px\";x.src=\"http://t13n.googlecode.com/svn/trunk/blet/rt13n.js?l=\"+l}}else%20setTimeout(t,500)})('te')";

	}
	else

	{
		window.location="javascript:(t13nb=window.t13nb||function(l){var%20t=t13nb,d=document,o=d.body,c=\"createElement\",a=\"appendChild\",w=\"clientWidth\",i=d[c](\"span\"),s=i.style,x=o[a](d[c](\"script\"));if(o){if(!t.l){t.l=x.id=\"t13ns\";o[a](i).id=\"t13n\";i.innerHTML=\"Loading%20transliteration\";s.cssText=\"z-index:99;font-size:18px;background:#FFF1A8;top:0\";s.position=d.all?\"absolute\":\"fixed\";s.left=((o[w]-i[w])/2)+\"px\";x.src=\"http://t13n.googlecode.com/svn/trunk/blet/rt13n.js?l=\"+l}}else%20setTimeout(t,500)})('te')";
	}
}
//-->
</script> 
<table width="99%">
	<tr>
		<td width="185" height="100%" valign="top" >
			<div>
				<table>
					<tr>
						<td valign="top" align="left" height="295px"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->cinema_type;}?></div></div>
						<div style="height: 265px;border:1px solid #9FA0A0;" id="left_news">
							<? if(file_exists("./assets/cinema/ceni_img".$cinema_type1['0']->id."_thumb.jpg")){?><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type1['0']->id?>_thumb.jpg" style="padding:5px 0px 0px 20px; "><?} ?>
							<ul id="mainnews">
								<?php
								if(!empty($cinema_type1))
								{ 
								$count=0; foreach ($cinema_type1 as $row):?>
								<li><a href="<?=base_url();?>cinema/inner/<?=$row->id?>"><?=$row->heading?></a></li>
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
						if(file_exists("./assets/news/news_img".$news_type2['0']->id."_thumb.jpg")){ ?>
							<a href="<?=base_url();?>news/newsdetails/<?=$news_type2['0']->id?>/<?=$news_type2['0']->type?>">
							<? if(file_exists("./assets/news/news_img".$news_type2['0']->id."_thumb.jpgg")){?><img src="<?=base_url();?>assets/news/news_img<?=$news_type2['0']->id?>_thumb.jpg" style="padding:5px 0px 0px 20px;" border="0"><?} ?></a>
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
			</div>
		</td>
		<td valign="top" >
			<table cellpadding="1px" width="100%">
			<tr><td><div id="news_heading" class="heading"><span id="newsheading"><?=$result['0']->heading ?></span></div></td></tr>
			<tr><td align="center">
			<!--<div id="maindiv-news">
			<font color="red"> <? if($this->uri->segment(4)==-1){echo "can't send mail";}else if($this->uri->segment(4)==1){echo "mail sent succesfully";}?></font>
			</div>-->
			</tr>
			<tr>
			<td>
			
			<div id="maindiv-news" align="left" style="font-size:14px;letter-spacing:1px">
			<?if(file_exists("./assets/".$type."/news_img".$result['0']->id."_thumb.jpg")){ ?><img src="<?=base_url();?>assets/<?=$type?>/news_img<?=$result['0']->id?>.jpg" style="float: left;padding:0px 30px 30px 0px;border: 0px solid  #9FA0A0; margin: 10px 0px 0px 10px;" ></img><?} ?>
			<?=$result['0']->description ?></div>
		
		</td></tr>
			<tr><td><div id="news_heading" class="heading"><span id="newsheading"><?=$more['25']->matter;?></span></div></td></tr>
			<tr><td align="center"><div style="border:1px solid #9FA0A0;">
			<form name="telugu_send" method="post" action="<?=base_url();?>subhodaya/sendmail">
			
			<input type="hidden" name="url" value="<?=base_url()?><?=$type?>/<?=$type?>details/<?=$result['0']->id?>">
			<table id="formdiv" cellspacing="5">
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td width="150px" align="left" style="padding-left: 15px"><?=$more['27']->matter;?></td><td><input type="text" name="name" size="30"></td></tr>
				<tr><td width="150px" align="left" style="padding-left: 15px"><?=$more['28']->matter;?></td><td><input type="text" name="email" size="30"></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td colspan="2" align="left" style="padding-left: 10px;"><input type="checkbox" onclick="telugu_typing()" id="telugu_type" name="telugu_type">&nbsp;Type in telugu</td></tr>
				<tr><td colspan="2" align="center"><textarea style="height: 190px;width: 95%" name="description"></textarea></td></tr>
				<tr><td colspan="2" align="center"><input type="submit" name="send" value="Send"><input type="reset" ></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
			</table>
			</form>
		</td></tr>
			<tr><td><div id="news_heading" class="heading" style="height: 23px"><span id="newsheading"><?=$more['26']->matter;?></span></div></td></tr>
			<tr><td>
				<div style="border:1px solid #9FA0A0;">
					<ul>
					<? $i=1; 
					foreach($evenmore as $item){
					?>
					<li><a href="<?=base_url();?><?=$type?>/<?=$type?>details/<?=$item->id?>"><?echo $item->heading;?></a></li>
					<?if($i>=5)
					break;
					$i++;} ?>
					</ul>
				</div>
			</td></tr>
			<tr><td><div id="news_heading" class="heading" style="height: 23px"><span id="newsheading">More...Categeories</span></div></td></tr>
			<tr><td>
				<div style="border:1px solid #9FA0A0;">
					<ul>
					<?foreach($details as $item){ ?>
					<li><a href="<?=base_url()?>/<?=$type?>/details/<?=$item->id?>"><?=$item->cat_name;?></li>
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
          				 		<div style="padding:5px;height:82px;"><a href="<?=base_url();?>video/index/<?php if(isset($item)) {echo $item->id;}?>"><img src="<?=base_url();?>assets/videos/image_preview/home_image<?=$item->id?>_thumb.jpg" border="0"></a></div>
							        		<div id="gall_botto_img"><a href="<?=base_url();?>video/index/<?php if(isset($item)) {echo $item->id;}?>"><?=$item->name?></a></div>
							        		<div style="height:12px;">Views:<?=$item->no_of_views?>	</div>
							        			
								<? }}else
								    echo 'No data found';?>
							
								</div>
						</td>
					</tr>
			</table>
		
			<table>
				<tr>
					<td valign="top" align="left" height="295px"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if($type=="mahila"){echo $more['9']->matter;}else {echo $more['8']->matter;}?></div></div>
						<div style="height: 265px;border:1px solid #9FA0A0;" id="left_news">
						<?if(!empty($details_more)){?>	<img src="<?=base_url();?>assets/<?=$link?>/news_img<?=$details_more[$key]->id?>_thumb.jpg" style="padding:5px 0px 0px 20px; " /><?} ?>
							<ul id="mainnews">
								<?php
								if(!empty($details_more)){
								
          				        foreach($details_more as $article){
          				 		?>
          				          <li><a href="<?=base_url();?><?=$link?>/<?=$link?>details/<?=$article->id?>"><? echo $article->heading;?></a></li>
          				       <?} }
	       											
								else
								echo 'No data found';?>
							</ul>
							<div id="more-news-div"><a href="<?=base_url();?><?=$link;?>/details/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->type;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
						
						</td>
					</tr>
			</table>
			</div>
          </td>
	</tr>
</table>