<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
font-size:14px;

}
li{
padding-bottom:5px;
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
							<img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type1['0']->id?>_thumb.jpg" style="padding:5px 0px 0px 20px; ">
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
						<td align="left" valign="top" height="295px"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->cinema_type;}?></div></div>
						<div style="height: 265px;border:1px solid #9FA0A0;" id="left_news">
							<img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type1['0']->id?>_thumb.jpg" style="padding:5px 0px 0px 20px; ">
							<ul id="mainnews">
								<?php
								if(!empty($news_type1))
								{ 
								$count=0; foreach ($news_type1 as $row):?>
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
				</table>
			</div>
		</td>
		<td valign="top" >
			<table cellpadding="1px" width="100%">
			<tr><td><div id="news_heading" class="heading"><span id="newsheading"><?=$result['0']->heading ?></span></div></td></tr>
			<tr><td align="center">
			<div id="maindiv-news">
			<div class="help">
			</div>
			</div>
			</tr>
			<tr>
			<td>
			
			<div class="content" align="left">
			<img src="<?=base_url();?>assets/<?=$type?>/news_img<?=$result['0']->id?>.jpg" style="float: left;padding:0px 30px 30px 0px;border: 0px solid  #9FA0A0; margin: 10px 0px 0px 10px;" ></img>
			<?=$result['0']->description ?></div>
		
		</td></tr>
			<tr><td><div id="news_heading" class="heading"><span id="newsheading"><?=$more['25']->matter;?></span></div></td></tr>
			<tr><td align="center"><div style="border:1px solid #9FA0A0;">
			<form method="post" action="<?=base_url();?>subhodaya/sendmail">
			
			<input type="hidden" name="url" value="<?=base_url()?>subhodaya/<?=$type?>/<?=$type?>details/<?=$result['0']->id?>">
			<table id="formdiv">
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td width="150px" align="left"><?=$more['27']->matter;?></td><td><input type="text" name="name" size="30"></td></tr>
				<tr><td width="150px" align="left"><?=$more['28']->matter;?></td><td><input type="text" name="email" size="30"></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
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
					<li><a href="<?=$type?>/<?=$type?>details/<?$item->id?>"><?echo $item->heading;?></a></li>
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
					<td valign="top" align="left" height="295px"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if($type=="mahila"){echo $more['9']->matter;}else {echo $more['8']->matter;}?></div></div>
						<div style="height: 265px;border:1px solid #9FA0A0;" id="left_news">
							<img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type1['0']->id?>_thumb.jpg" style="padding:5px 0px 0px 20px; ">
							<ul id="mainnews">
								<?php
								if(!empty($details_more)){
								
          				        foreach($details_more as $item){
          				 		$i=1;
          				         foreach($item as $article){?>
          				         <li><a href="<?=base_url();?><?=$link?>/<?=$link?>details/<?=$article->id?>"><? echo $article->heading;?></a></li>
          				         <?if($i==1)break; $i++;}?>
          				 		   <?} }
	       											
								else
								echo 'No data found';?>
							</ul>
							<div id="more-news-div"><a href="<?=base_url();?><?=$link;?>/details/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->type;}?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
						
						</td>
					</tr>
			</table>
		
			<table>
				<tr>
					<td valign="top" align="left" height="295px"><div class="heading" style="width: 181px;" id="news_heading"><div style="padding-top:5px;" id="newsheading"><?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->cinema_type;}?></div></div>
						<div style="height: 265px;border:1px solid #9FA0A0;" id="left_news">
							<img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type1['0']->id?>_thumb.jpg" style="padding:5px 0px 0px 20px; ">
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
						
						</td>
					</tr>
			</table>
			</div>
          </td>
	</tr>
</table>