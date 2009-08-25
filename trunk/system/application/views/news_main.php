<table width="99%"  border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="480" valign="top" >
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   	<tr>
       	<td valign="top">
       	<table width="0"  border="0" cellpadding="0" cellspacing="0">
    		<tr>
       		<td  valign="top">
	       		<table width="100%"  border="0" cellpadding="0" cellspacing="0">
	     			<tr><td height="4" valign="bottom"><img src="<?=base_url();?>assets/imgs/top-cor-line.jpg" width="482" height="4" /></td></tr>
	            </table>
                 <table width="100%"  border="0" style="border-left:1px solid #0872BC; border-right:1px solid #0872BC;"cellpadding="0" cellspacing="0">
                    <tr><td width="100%" height="310" valign="top" align="left" class=" yui-skin-sam" >
                          <div id="demo" class="yui-navset" style="color: #EDF5FF;">
	    					<ul class="yui-nav">
							        <li class="selected"><a href="#tab1"><em><?if(isset($news_type1['0'])){echo $news_type1['0']->news_cat;} ?></em></a></li>
							        <li><a href="#tab2"><em><?if(isset($news_type2['0'])){echo $news_type2['0']->news_cat;} ?></em></a></li>
							       <li><a href="#tab3"><em><?if(isset($news_type3['0'])){echo $news_type3['0']->news_cat;} ?></em></a></li>
									 <li><a href="#tab4"><em><?if(isset($news_type4['0'])){echo $news_type4['0']->news_cat;} ?></em></a></li>
	    					</ul>            
    						<div class="yui-content">
							 		<div id="tab1"> 
							 			<div id="telugufont1">
								 			<img src="<?=base_url();?>assets/news/news_img<?=$active_news1['0']->id?>_thumb.jpg.jpg" align="top" style="float: left;"></img>
											<font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$active_news1['0']->id?>"><?=$active_news1['0']->heading?></a></font><br>
												<?=$active_news1['0']->summary?>
												<ul id="mainnews">
												<?php
          											$count=0; foreach($active_news1 as $row):
          						  					if($count==0)
          											{
					          							$count++;
					          							continue;
          											} ?>
													<li><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><?=$row->heading?></a></li>
									 			<? if($count==3){
          											break;
          												}else{
          												$count++;
          												}
          											endforeach; 
          											if($count==0){
          											echo 'No data found';
          											}
          										?>
												</ul>
										</div>
									</div>
							        <div id="tab2"> 
							        	<div id="telugufont1">
											 <img src="<?=base_url();?>assets/news/news_img<?=$active_news2['0']->id?>_thumb.jpg.jpg" align="top" style="float: left;"></img>
											 <font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$active_news2['0']->id?>"><?=$active_news2['0']->heading?></a></font><br>
											<?=$active_news2['0']->summary?>
											<ul id="mainnews">
												<?php
          										$count=0; foreach($active_news2 as $row):
          						  				if($count==0)
          										{
	          										$count++;
	          										continue;
          										} ?>
												<li><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><?=$row->heading?></a></li>
									 			<? if($count==3){
          												break;
          											}else{
          											$count++;
          											}
          											endforeach; 
          										if($count==0){
          										echo 'No data found';
          										}
          									?>
									</ul>
								</div>
							</div>
							<div id="tab3">sfdsfg</div>
							<div id="tab4">jku</div>  
									
									
							</div>
    					</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo');

    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
							</table>
                      <img src="<?=base_url();?>assets/imgs/top-crow-botom.jpg" width="480"/></td>
                  </tr>
                </table></td>
            </tr>
          </table></td>
          <td width="245" valign="top"><img src="<?=base_url();?>assets/imgs/add-img.jpg" style="border: 1px solid #3789C3;"></img></td>
          <td width="185" align="center" valign="top" rowspan="3">
			<table width="100%" style="border:1px solid #3789C3;">
			<tr>
				<td style="border:1px solid #3789C3;height: 25px;" id="news_heading" align="center"><span id="telugufont"><?=$more['6']->matter ?></span></td>
			</tr>
			<tr>
				<td align="center">
						<table style="padding-left: 5px" >
					<tr><td><div><img src="<?=base_url();?>assets/imgs/cini-img.jpg"></div></td></tr>
					<tr><td>sometext sometext sometext sometext</td></tr>
					<tr><td><div><img src="<?=base_url();?>assets/imgs/cini-img.jpg"></div></td></tr>
					<tr><td>sometext sometext sometext sometext</td></tr>
					<tr><td><div><img src="<?=base_url();?>assets/imgs/cini-img.jpg"></div></td></tr>
					<tr><td>sometext sometext sometext sometext</td></tr>
					</table>
				</td>
			</tr>
			</table>
			<div style="padding-top: 10px">
			<table style="border:1px solid #3789C3;" bgcolor="#9CD8FC" width="100%" >
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
			<!--<img src="<?=base_url();?>assets/imgs/3.jpg" style="padding: 4px;">
			--></div>
          </td>
          </tr>
          <tr>
          	<td valign="top" align="left"  colspan="2">
          		<table width="100%" cellspacing="10" height="505">
          			<tr>
          				<td id="newstable" valign="top">
          				 <div  id="news_heading"><span id="newsheading"><?if(isset($news_type1['0'])){echo $news_type1['0']->news_cat;} ?></span></div>
          				 <div style="height:190px;" id="telugufont1">
          				 <a href="<?=base_url();?>news/newsdetails/<?=$news_type1['0']->id?>"><img src="<?=base_url();?>assets/news/news_img<?=$news_type1['0']->id?>_thumb.jpg" style="float: left;padding: 2px 19px 2px 1px;text-align: justify;" height="121" width="93" border="0"></img></a>
          				 <font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$news_type1['0']->id?>"><?php echo $news_type1['0']->heading;?></a></font><br>
          				 <?php echo $news_type1['0']->summary;?>
          				 <ul id="mainnews">
          				 	<?
          						$count=0; foreach($news_type1 as $row):
          						  if($count==0)
          							{
	          							$count++;
	          							continue;
          							} ?>
          					<li style="padding: 2px;"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><?=$row->heading ?></a></li>
          				 <? if($count==3){
          						break;
          					}else{
          						$count++;
          					}
          					endforeach; 
          					if($count==0){
          						echo 'No data found';
          					}
          					?>
          				 </ul>
          				 </div>
          				 <div id="more-news-div" style="padding-right: 2px;"><span id="news-more"><a href="<?=base_url();?>news/details/<?if(isset($news_type1['0'])){ echo $news_type1['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
          				</td>
          				<td  valign="top" id="newstable">
          				 <div  id="news_heading"><span id="newsheading"><? if(isset($news_type2['0'])){ echo $news_type2['0']->news_cat;}?></span></div>
          				 <div style="height: 190px;padding-top:2px; " id="telugufont1" >
          				 <a href="<?=base_url();?>news/newsdetails/<?=$news_type2['0']->id?>"><img src="<?=base_url();?>assets/news/news_img43_thumb.jpg" style="float: left;padding: 1px 10px 2px 1px;text-align: justify;" height="121" width="92" border="0"></img></a>
          				 <font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$news_type2['0']->id?>"><?php echo $news_type2['0']->heading;?></a></font><br>
          				 <?php echo $news_type2['0']->summary;?>
          				 <ul id="mainnews">
          				<?
          						$count=0; foreach($news_type2 as $row):
          						  if($count==0)
          							{
	          							$count++;
	          							continue;
          							} ?>
          					<li style="padding: 2px;"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><?=$row->heading ?></a></li>
          				
          				 <? if($count==6){
          						break;
          					}else{
          						$count++;
          					}
          					endforeach; 
          					if($count==0){
          						echo 'No data found';
          					}
          					?>
          				 </ul>
          				 </div>
          				 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>news/details/<?if(isset($news_type2['0'])){ echo $news_type2['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
          				</td>
          			</tr>
          			<tr>
          				<td  valign="top" id="newstable" >
          				  <div  id="news_heading"><span id="newsheading"><?if(isset($news_type3['0'])){ echo $news_type3['0']->news_cat; }?></span></div>
          				 <div style="height:190px;padding-top:2px;" id="telugufont1">
          				 <a href="<?=base_url();?>news/newsdetails/<?=$news_type3['0']->id?>"><img src="<?=base_url();?>assets/news/news_img43_thumb.jpg" style="float: left;padding: 1px 17px 2px 1px;text-align: justify;" height="120" width="92" border="0"></img></a>
          				 <font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$news_type3['0']->id?>"><?php echo $news_type3['0']->heading;?></a></font><br>
          				 <?php echo $news_type3['0']->summary;?>
          				 <ul id="mainnews">
          				<?
          						$count=0; foreach($news_type3 as $row):
          						  if($count==0)
          							{
	          							$count++;
	          							continue;
          							} ?>
          					<li><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><?=$row->heading ?></a></li>
          				 <? if($count==3){
          						break;
          					}else{
          						$count++;
          					}
          					endforeach; 
          					if($count==0){
          						echo 'No data found';
          					}
          					?>
          				 </ul>
          				 </div>
          				 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>news/details/<?if(isset($news_type3['0'])){ echo $news_type3['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
          				</td>
          				<td  id="newstable" valign="top" >
          				  <div  id="news_heading">
          				  	<span id="newsheading" ><? if(isset($news_type4['0'])){ echo $news_type4['0']->news_cat; }?></span>
          				  </div>
          				 <div style="height:190px;padding-top:2px;" id="telugufont1">
          				 <a href="<?=base_url();?>news/newsdetails/<?=$news_type4['0']->id?>"><img src="<?=base_url();?>assets/news/news_img<?=$news_type4['0']->id?>_thumb.jpg" style="float: left;padding: 1px 17px 2px 1px;text-align: justify;" height="120" width="92" border="0"></img></a>
          				 <font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$news_type4['0']->id?>"><?php echo $news_type4['0']->heading;?></a></font><br>
          				 <?php echo $news_type4['0']->summary;?>
          				 <ul id="mainnews">
          				 	<?
          						$count=0; foreach($news_type4 as $row):
          						  if($count==0)
          							{
	          							$count++;
	          							continue;
          							} ?>
          					<li style="padding: 1px;"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><?=$row->heading ?></a></li>
          				
          				 	<? if($count==4){
          						break;
          					}else{
          						$count++;
          					}
          					endforeach; 
          					if($count==0){
          						echo 'No data found';
          					}
          					?>
          				 </ul>
          				 </div>
          				  <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>news/details/<?if(isset($news_type4['0'])){ echo $news_type4['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
          				</td>
          			</tr>
          		</table>
          	</td>
          </tr>
          <table width="99%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="5" valign="top" id="botomtop"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="top" id="botomtop" align="left"><!--<img src="<?=base_url();?>assets/imgs/001.gif" style="margin:4px 0px 0px 0px;"></img>-->
          	<div style="padding-top: 6px;"><span id="newsheading"><?if(isset($news_type5['0'])) { echo $news_type5['0']->news_cat; }?></span></div></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
          <td width="8">&nbsp; </td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="top" id="botomtop" align="left"><!--<img src="<?=base_url();?>assets/imgs/001.gif" style="margin:4px 0px 0px 0px;"></img>-->
          	<div style="padding-top: 6px;"><span id="newsheading"><?if(isset($news_type6['0'])){ echo $news_type6['0']->news_cat; }?></span></div></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
          <td width="8">&nbsp; </td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="top"  id="botomtop" align="left"><!--<img src="<?=base_url();?>assets/imgs/001.gif" style="margin:4px 0px 0px 0px;"></img>-->
          	<div style="padding-top: 6px;"><span id="newsheading"><?=$more['16']->matter?></span></div></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
        </tr>
        <tr>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="109" /></td>
          <td valign="top" id="botom-ser" align="left">
          <div style="height: 70px;padding-top:2px;">
          <ul>
          	<?php if(isset($news_type5))
          	{
          		$count=0;
          		foreach ($news_type5 as $row):
          	?>
          		<li id="mainnews" style="padding: 1px;"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><?=$row->heading?></a></li>
          		<?php 
          		if($count==3)
          		{
          			break;
          		}else{
          			$count++;
          		}
          		endforeach;
          	}
          	else echo 'no datafound';?>
          	</ul>
          	</div>
          	<div style="padding: 0px 0px 0px 250px;" id="more-news-div"><a href="<?=base_url();?>news/details/<?if(isset($news_type5['0'])){ echo $news_type5['0']->type; }?>"><?=$more['0']->matter?></a></div>
          </td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="109" /></td>
          <td width="8">&nbsp;</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="109" /></td>
          <td valign="top" id="botom-ser" align="left">
          <div style="height: 70px;padding-top:2px;">
          	<ul>
          	<?php if(isset($news_type6)){
          		foreach($news_type6 as $row):
          	?>
          		<li id="mainnews" style="padding: 1px;"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><?=$row->heading?></a></li>
          			<?php 
          		if($count==3)
          		{
          			break;
          		}else{
          			$count++;
          		}
          		endforeach;
          	}
          	else echo 'no datafound';?>
          	</ul>
          </div>
          <div style="padding: 0px 0px 0px 250px;" id="more-news-div"><a href="<?=base_url();?>news/details/<?if(isset($news_type6['0'])){ echo $news_type6['0']->type; }?>"><?=$more['0']->matter?></a></div>
          </td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="109" /></td>
          <td width="8">&nbsp;</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="109" /></td>
          <td valign="top" id="botom-ser">
          <div id="home_poll" >
               <div><? if(!empty($newspoll['0']->question)){
                echo $newspoll['0']->question;
               	?></div>

     				<table width="100%">
              			<tr>
              				<td align="right">
              					<input type="hidden" name="poll_id" value="<?=$newspoll['0']->id?>">
              					<? $attributes = 'onClick= "loadPoll(\''.base_url().'poll/index/'.$newspoll[0]->id.'\',this.value)";' ?>
              					<?=form_radio('answer','a',True,$attributes) ?>
              				</td>
              				<td align="left"><?=$more['18']->matter ?></td></tr>
              			<tr><td align="right"><?=form_radio('answer','b',FALSE,$attributes) ?></td><td align="left"><?=$more['19']->matter ?></td></tr>
              			<tr><td align="right"><?=form_radio('answer','c',FALSE,$attributes) ?></td><td align="left"><?=$more['20']->matter ?></td></tr>
     				</table>
     				<? }else echo 'to day no poll'; ?>
     			<span style="font-weight: bold;font-size: 14px;color:maroon;">yesterday poll</span>
                <div><?if(!empty($yes_poll['0']->question)){
                	echo $yes_poll['0']->question;
                	?></div>
                       <div align="right" id="result"><A HREF="javascript:void(0)"
					onclick="window.open('<?=base_url();?>poll/yes_result/<?=$yes_poll['0']->id?>',
						'welcome','width=300,height=150')">
						Result</A></div>
                <?} else echo 'Yesterday no poll.'; ?>
                </div>
          </td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="109" /></td>
        </tr>
    </table>