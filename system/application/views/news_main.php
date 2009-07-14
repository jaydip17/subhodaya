<table width="99%"  border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="420" valign="top" >
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   	<tr>
       	<td valign="top">
       	<table width="0"  border="0" cellpadding="0" cellspacing="0">
    		<tr>
       		<td  valign="top">
	       		<table width="100%"  border="0" cellpadding="0" cellspacing="0">
	     			<tr><td height="4" valign="bottom"><img src="<?=base_url();?>assets/imgs/top-cor-line.jpg" width="460" height="4" /></td></tr>
	            </table>
                 <table width="100%"  border="0" style="border-left:1px solid #0872BC; border-right:1px solid #0872BC;"cellpadding="0" cellspacing="0">
                    <tr><td width="100%" height="310" valign="top" align="left" class=" yui-skin-sam" >
                          <div id="demo" class="yui-navset" style="color: #EDF5FF;">
	    					<ul class="yui-nav">
							        <li class="selected"><a href="#tab1"><em>Politics</em></a></li>
							        <li><a href="#tab2"><em>Games</em></a></li>
							        <li><a href="#tab3"><em>cinemas</em></a></li>
									<li><a href="#tab3"><em>videos</em></a></li>
	    					</ul>            
    						<div class="yui-content">
							 <div id="tab1"><img src="<?=base_url();?>assets/imgs/move-img4.jpg" align="top"></img>
							        	</div>
							        <div id="tab2">
							        <img src="<?=base_url();?>assets/imgs/mov-img2.jpg" align="top"></img>
							        </div>
							        <div id="tab3">
							        <img src="<?=base_url();?>assets/imgs/mov-img3.jpg" align="top"></img>
							        </div>
									<div id="tab3">
									<img src="<?=base_url();?>assets/imgs/mov-img.jpg" align="top"></img>
									</div>
    							</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo');

    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
							</table>
                      <img src="<?=base_url();?>assets/imgs/top-crow-botom.jpg" width="460"/></td>
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
			<img src="<?=base_url();?>assets/imgs/3.jpg" style="padding: 4px;">
			</div>
          </td>
          </tr>
          <tr>
          	<td valign="top" align="left"  colspan="2">
          		<table width="100%" cellspacing="10" height="505">
          			<tr>
          				<td id="newstable" valign="top" >
          				 <div  id="news_heading"><span id="newsheading"><?if(isset($news_type1['0'])){echo $news_type1['0']->news_cat;} ?></span></div>
          				 <div >
          				 	<ul id="mainnews">
          				 	<? $count=0; foreach ($news_type1 as $row): ?>
          					<li><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><?=$row->heading ?></a></li>
          				 	<? if($count==8){
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
          				 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>news/details/<?=$news_type1['0']->type?>"><?=$more['0']->matter?></a></span></div>
          				 </div>
          				</td>
          				<td  valign="top" id="newstable">
          				 <div  id="news_heading"><span id="newsheading"><? if(isset($news_type2['0'])){ echo $news_type2['0']->news_cat;}?></span></div>
          				 <div>
          				 <ul id="mainnews">
          				 <? $count=0; foreach($news_type2 as $row): ?>
          					<li><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><?=$row->heading ?></a></li>
          				
          				 <? if($count==8){
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
          				 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>news/details/<?if(isset($news_type2['0'])){ echo $news_type2['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
          				 </div>
          				</td>
          			</tr>
          			<tr>
          				<td  valign="top" id="newstable" >
          				  <div  id="news_heading"><span id="newsheading"><?if(isset($news_type3['0'])){ echo $news_type3['0']->news_cat; }?></span></div>
          				 <div >
          				 <ul id="mainnews">
          				 <? $count=0; foreach($news_type3 as $row): ?>
          					<li><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><?=$row->heading ?></a></li>
          				 <? if($count==8){
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
          				 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>news/details/<?if(isset($news_type3['0'])){ echo $news_type3['0']->type;}?>"><?=$more['0']->matter?></a></span></div>
          				 </div>
          				</td>
          				<td  id="newstable" valign="top" >
          				  <div  id="news_heading">
          				  	<span id="newsheading" ><? if(isset($news_type4['0'])){ echo $news_type4['0']->news_cat; }?></span>
          				  </div>
          				 <div>
          				 <ul id="mainnews">
          				 <? $count=0; foreach ($news_type4 as $row): ?>
          					<li><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><?=$row->heading ?></a></li>
          				
          				 	<? if($count==8){
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
          				 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>news/details/<?if(isset($news_type4['0'])){ echo $news_type4['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
          				 </div>
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
          <td valign="top" id="botom-ser">
          	<!--<a href="#"><img src="<?=base_url();?>assets/news/news_img<?if(isset($news_type5['0'])){ echo $news_type5['0']->id;} ?>_thumb.jpg" style="padding: 3px 3px 3px 3px; border: 0px; height: 100px; width: 90px;"></a>
          	--><ul id="mainnews">
          	<?if(isset($news_type5['0'])){
          		foreach ($news_type5 as $row): ?>
          		<li><a href="#"><?=$row->heading ?></a></li>
          		<? endforeach; }?>
          	</ul>
          </td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="109" /></td>
          <td width="8">&nbsp;</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="109" /></td>
          <td valign="top" id="botom-ser">
          <div>
          	<ul id="mainnews">
          	<?if(isset($news_type6['0'])){
          	  foreach ($news_type6 as $type): ?>
          		<li><a href=""><?=$type->heading ?></a></li>
          	<? endforeach; }?>
          	</ul>
          </div>
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