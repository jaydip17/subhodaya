<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
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
				<table>
					<tr>
						<td align="left"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->cinema_type;}?></div></div>
						<div style="height: 280px;" id="left_news">
							<div style="height: 248px;">
							<a href="<?=base_url();?>cinema/inner/<?=$cinema_type1['0']->id?>/<?=$cinema_type1['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type1['0']->id?>_thumb.jpg" style="padding:5px 0px 0px 20px;" border="0"></a>
							<ul >
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
						<td align="left"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($cinema_type3['0'])){echo $cinema_type3['0']->cinema_type;}?></div></div>
						<div style="height: 280px;" id="left_news">
							<div style="height: 248px;">
							<a href="<?=base_url();?>cinema/inner/<?=$cinema_type3['0']->id?>/<?=$cinema_type3['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type3['0']->id?>_thumb.jpg" style="padding:5px 0px 0px 20px; ">
							<ul >
								<?php
								if(!empty($cinema_type3))
								{ 
								$count=0; foreach ($cinema_type1 as $row):?>
								<li id="mainnews"><a href="<?=base_url();?>cinema/inner/<?=$row->id?>"><?=$row->heading?></a></li>
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
			<tr><td><div id="news_heading" class="heading"><span id="newsheading"><?=$result['0']->heading ?></span></div></td></tr>
			<tr><td align="center"><div  id="maindiv-news">
			<div class="maindiv-news" style="text-align: justify;margin: 5px;font-size: 14px;">
			<img src="<?=base_url();?>assets/news/news_img<?=$result['0']->id?>.jpg" style="float: left;padding:2px 2px 2px 2px;border: 1px solid  #9FA0A0; margin: 10px 10px 10px 10px;" ></img>
			<?=$result['0']->description ?></div>
			</div></td></tr>
			<tr><td><div id="news_heading" class="heading"><span id="newsheading"><?php if(isset($more['25'])){echo $more['25']->matter;}?></span></div></td></tr>
			<tr><td align="center"><div style="border:1px solid #9FA0A0;">
			<form>
			<table id="formdiv">
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td width="150px" align="left"><?php if(isset($more['27'])){ echo $more['27']->matter;}?></td><td><input type="text" name="uname" size="30"></td></tr>
				<tr><td width="150px" align="left"><?php if(isset($more['38'])){ echo $more['38']->matter;}?></td><td><input type="text" name="uname" size="30"></td></tr>
				<tr><td width="150px" align="left"><?php if(isset($more['39'])){ echo $more['39']->matter;}?></td><td><input type="text" name="uname" size="30"></td></tr>
				<tr><td width="150px" align="left"><?php if(isset($more['28'])){ echo $more['28']->matter;}?></td><td><input type="text" name="uname" size="30"></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td colspan="2" align="left"><input type="checkbox" onclick="telugu_typing()" id="telugu_type" name="telugu_type">Type in telugu</td></tr>
				<tr><td colspan="2" align="center"><textarea style="height: 190px;width: 95%"></textarea></td></tr>
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
					foreach ($news as $row):
				?>
			
					<li style="padding-top: 4px;"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
					<?php endforeach;
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
						<td id="telugufont1" ><div class="heading" style="width: 181px;" id="news_heading"><span id="newsheading"><?php if(isset($mahila_details['0'])){ echo $mahila_details['0']->cat_name;}?></span></div>
						<div style="height: 280px;border: 1px solid #9FA0A0;" id="left_news">
						<div style="height: 248px;">
						<a href="<?=base_url();?>mahila/mahiladetails/<?php if(isset($mahila_details['0'])){ echo $mahila_details['0']->id;}?>"><img src="<?=base_url();?>assets/mahila/news_img<?php if(isset($mahila_details['0'])){ echo $mahila_details['0']->id;}?>_thumb.jpg" style="padding: 5px 0px 2px 20px;" border="0"/></a>
						<ul id="mainnews">
						<?php if(isset($mahila_details )){
							foreach ($mahila_details as $row):							
						?>
						
							<li><a href="<?=base_url();?>mahila/mahiladetails/<?=$row->id?>"><?=$row->heading?></a></li>
							<?php if($count==2){
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
						<div id="more-news-div" ><a href="<?=base_url();?>mahila/details/<?php if(isset($mahila_details['0'])){echo $mahila_details['0']->cat_id;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
						</div></td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td align="center" valign="top">
					<table>
					<tr>
						<td id="telugufont1" ><div class="heading" style="width: 181px;" id="news_heading"><span id="newsheading"><?php if(isset($cinema_type5['0'])){ echo $cinema_type5['0']->cinema_type;}?></span></div>
						<div style="height: 280px;border: 1px solid #9FA0A0;" id="left_news">
						<div style="height: 248px;">
						<a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type5['0'])){ echo $cinema_type5['0']->id;}?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type5['0'])){ echo $cinema_type5['0']->id;}?>_thumb.jpg" style="padding: 5px 0px 2px 20px;" border="0"/></a>
						<ul id="mainnews">
						<?php if(isset($cinema_type5 )){
							foreach ($cinema_type5 as $row):							
						?>
						
							<li><a href="<?=base_url();?>cinema/inner/<?=$row->id?>"><?=$row->heading?></a></li>
							<?php if($count==2){
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