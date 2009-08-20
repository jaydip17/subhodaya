<table width="99%">
	<tr>
		<td width="185" height="100%" valign="top" >
			<table>
					<tr>
						<td align="left"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($news_type4['0'])){echo $news_type4['0']->news_cat;}?></div></div>
						<div style="" id="left_news">
							<img src="<?=base_url();?>assets/news/news_img<?=$news_type4['0']->id?>_thumb.jpg" style="padding:5px 0px 0px 20px; ">
							<ul >
								<?php
								if(!empty($news_type4))
								{ 
								$count=0; foreach ($news_type4 as $row):?>
								<li id="mainnews"><a href="<?=base_url();?>news/inner/<?=$row->id?>"><?=$row->heading?></a></li>
								<?php
								if($count==2){
								break;}
								else{$count++;}
								 endforeach;
								 }
								else
								echo 'No data found';?>
								<div id="more-news-div" ><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->type;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
							</ul>
						</div>
						</td>
					</tr>
				</table>
		</td>
		<td valign="top" >
			<div><table cellpadding="1px" width="100%">
			<tr><td align="left"><div id="news_heading" class="heading"><div id="newsheading" style="padding-top: 5px;"><?php if(isset($result['0'])){echo $result['0']->heading;}?></div></div></td></tr>
			<tr><td align="center"><div  id="maindiv-news">
			<div class="help"></div>
			<div class="content" >
			<img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($result['0'])){echo $result['0']->id;}?>.jpg" style="float: left;padding:2px 2px 2px 2px;border: 1px solid  #9FA0A0; margin: 10px 0px 0px 10px;" ></img>
			<?php if(isset($result['0'])){echo $result['0']->description;}?></div>
			</div></td></tr>
			<tr><td><div id="news_heading" class="heading"><span id="newsheading">Rate this Article</span></div></td></tr>
			<tr><td align="center"><div style="border:1px solid #9FA0A0;">
			<form>
			<table id="formdiv">
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td width="150px" align="left">Name</td><td><input type="text" name="uname" size="30"></td></tr>
				<tr><td width="150px" align="left">Email</td><td><input type="text" name="uname" size="30"></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td colspan="2" align="left"><input type="checkbox">type in english</td></tr>
				<tr><td colspan="2" align="center"><textarea style="height: 190px;width: 95%"></textarea></td></tr>
				<tr><td colspan="2" align="center"><input type="submit" name="send" value="Send"><input type="reset" ></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
			</table>
			</form>
			</div></td></tr>
			<tr><td><div id="news_heading" class="heading" style="height: 23px"><span id="newsheading">More...</span></div></td></tr>
			<tr><td>
				<div style="border:1px solid #9FA0A0;">
					<ul>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					</ul>
				</div>
			</td></tr>
			<tr><td><div id="news_heading" class="heading" style="height: 23px"></div></td></tr>
			<tr><td>
				<div style="border:1px solid #9FA0A0;">
					<ul>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					</ul>
				</div>
			</td></tr>
		</table>
		</div>
		</td>
		 <td width="185" align="center" valign="top">
				<table>
					<tr>
						<td align="left"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($news_type4['0'])){echo $news_type4['0']->news_cat;}?></div></div>
						<div style="" id="left_news">
							<img src="<?=base_url();?>assets/news/news_img<?=$news_type4['0']->id?>_thumb.jpg" style="padding:5px 0px 0px 20px; ">
							<ul >
								<?php
								if(!empty($news_type4))
								{ 
								$count=0; foreach ($news_type4 as $row):?>
								<li id="mainnews"><a href="<?=base_url();?>news/inner/<?=$row->id?>"><?=$row->heading?></a></li>
								<?php
								if($count==2){
								break;}
								else{$count++;}
								 endforeach;
								 }
								else
								echo 'No data found';?>
								<div id="more-news-div" ><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->type;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
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