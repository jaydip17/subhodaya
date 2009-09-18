
<script language="javascript">
//<!--
function detectBrowser()
{
var browser = navigator.appName;
var b_version=navigator.appVersion;
var version=parseFloat(b_version);

}
function getFlexApp(appName) {
	  if (navigator.appName.indexOf ("Microsoft") !=-1) {
	    return window[appName];
	  } else {
	    return document[appName];
	  }
	}

function display_text(sample) {
	var browser = navigator.appName;
	if(browser == 'Microsoft Internet Explorer')
	{
	getFlexApp("FlashID").display_text(sample);	
	}
	if(browser == 'Netscape')
	{
    getFlexApp("sample123").display_text(sample);
	}
	
}
var limit_time = 2000;
function display_text_1(){
	detectBrowser();
	display_text(1);
		window.setTimeout("display_text_2(2)",limit_time);
}
function display_text_2(ss){
	display_text(ss);
	window.setTimeout("display_text_3(3)",limit_time);
}
function display_text_3(ss){
	display_text(ss);
	window.setTimeout("display_text_4(4)",limit_time);
}
function display_text_4(ss){
	display_text(ss);
	window.setTimeout("display_text_5(5)",limit_time);
}
function display_text_5(ss){
	display_text(ss);
	window.setTimeout("display_text_34(1)",limit_time);
}
function display_text_34(ss){
	display_text(ss);
	window.setTimeout("display_text_1()",limit_time);
}
function display(value)
{
  document.getElementById('flash-content').innerHTML = value;
}

//-->
</script> 

<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
padding-left: 20px;
}
</style>
<table width="99%"  border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="420" valign="top" >
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   	<tr>
       	<td valign="top">
       	<table width="0"  border="0" cellpadding="0" cellspacing="0">
    		<tr>
	       		<td  valign="top" width="500">
		       		
	                <table width="100%"  border="0"  cellpadding="0" cellspacing="0">
	                    <tr><td >
	                    
	                    
	                   <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="486" height="341">
  <param name="movie" value="<?=base_url();?>assets/subh.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="9.0.45.0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
  <param name="expressinstall" value="<?=base_url();?>assets/Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object id="sample123" type="application/x-shockwave-flash" data="<?=base_url();?>assets/subh.swf" width="486" height="341">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="9.0.45.0" />
    <param name="expressinstall" value="<?=base_url();?>assets/Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<script type="text/javascript">
//<!--
var browser = navigator.appName;
if(browser == 'Microsoft Internet Explorer')
{
	swfobject.registerObject("FlashID");
}
else
	swfobject.registerObject("sample123");
//-->
</script>
<div id="flash-content" style="position:absolute; width:604px; top: 385px; color:white; padding:5px 5px 5px 5px; vertical-align:top; left:41px; height: 40px;text-align: left;"> 
sample sf dsfsd fdsf
</div>
	                    
	                    
	                    
	                    </td>
	                    </tr>
	                </table></td></tr>
         </table>
         </td>
     </tr>
     </table>
     </td>
     <td width="245" valign="top" align="center">
     	<div style="width: 237px;height: 337px;border: 1px solid red;" >
            <img src="<?=base_url();?>assets/ads/Cinema1.jpg" style="border: 1px solid #50BCFC;"></img>
<img src="<?=base_url();?>assets/ads/Cinema2.jpg" style="border: 1px solid #50BCFC;"></img></div>
     </td>     <td width="185" align="center" valign="top" rowspan="3">
		<table width="100%" style="border:1px solid #50BCFC;">
			<tr>
				<td style="border:1px solid #50BCFC;height: 25px;" id="news_heading" align="center"><span id="telugufont"><?=$more['17']->matter ?></span></td>
			</tr>
			<tr>
				<td style="border:1px solid #50BCFC;height: 25px;" align="center">
				<table style="padding-left:0px" >
				  <?php
						if(!empty($video_result)){
						 foreach($video_result as $item){?>
					<tr>
           <td align="center"><div style="margin-left:4px;padding-top:3px;"><a href="<?=base_url();?>video/index/<?=$item->id?>/<?=$item->video_cat_id?>"><div id="cinemavideo_time"><?=$item->time?></div><img id="img" src="<?=base_url();?>assets/videos/image_preview/home_image<?=$item->id?>_thumb.jpg"></a></div></td>
           <td><div id="li-vi"><?=$item->insert_date?><br/><?=$item->name?><br/><span style="color:#FF6507;"><?=$item->no_of_views?> views</span><br/><?=$more['36']->matter?>:<span style="color:#FF6507;"><?=$item->rating?></span></div></td>
          </tr>
					<?}} ?>
						</table>
				</td>
			</tr>
			</table>
			<div style="padding-top: 10px">
			<table style="border:1px solid #50BCFC;" bgcolor="#9CD8FC" width="100%" >
				<tr>
					<td align="center">
					<div><img src="<?=base_url();?>assets/ads/Side_right1.jpg"></div>
					</td>
				</tr>
				<tr>
					<td align="center"><div><img src="<?=base_url();?>assets/ads/Side_right2.jpg"></div></td>
				</tr>
				
			</table>
			<table style="border:1px solid #50BCFC;"  width="100%" >
				<tr>
					<td id="news_heading" colspan="3" align="left"><span style="font-weight: bold;font-size: 14px;"><?=$more['16']->matter ?></span></td>
				</tr>
				<tr>
					<td>
					<div id="home_poll" >
                 	<div><? if(!empty($cinemapoll['0']->question)){
						echo   $cinemapoll['0']->question;               		
                 	     ?></div>

     				<table width="100%">
              			<tr>
              				<td align="right">
              					<input type="hidden" name="poll_id" value="<?=$cinemapoll['0']->id?>">
              					<? $attributes = 'onClick= "loadPoll(\''.base_url().'poll/index/'.$cinemapoll[0]->id.'\',this.value,\''.base_url().'assets/imgs/bigrotation2.gif\')";' ?>
              					<?=form_radio('answer','a',True,$attributes) ?>
              				</td>
              				<td align="left"><?=$more['18']->matter ?></td></tr>
              			<tr><td align="right"><?=form_radio('answer','b',FALSE,$attributes) ?></td><td align="left"><?=$more['19']->matter ?></td></tr>
              			<tr><td align="right"><?=form_radio('answer','c',FALSE,$attributes) ?></td><td align="left"><?=$more['20']->matter ?></td></tr>
     				</table>
     				<? }else echo 'To day no poll.'; ?>
     			<br><span style="font-weight: bold;font-size: 14px;color:maroon;">yesterday poll</span>
                <div><?if(!empty($yes_poll['0']->question)){
                	echo $yes_poll['0']->question;
                	?></div>
		                <div align="right" id="result"><A HREF="javascript:void(0)"
					onclick="window.open('<?=base_url();?>poll/yes_result/<?=$yes_poll['0']->id?>',
						'welcome','width=300,height=200')">
						Result</A></div>
              
                <?} else echo 'Yesterday no no poll.';?>
                </div>
					</td>
				</tr>
			</table>
			</div>
          </td>
          </tr>
          <tr>
          	<td valign="top" align="left"  colspan="2">
  
          		<table width="100%" cellspacing="10" height="500">
          			<tr>
          				<td width="375" style="border: 1px solid #50BCFC;" id="newstable" valign="top" height="235">
          				<div style="width:100%;" id="news_heading"><span id="newsheading"><?=$cinema_type1['0']->cinema_type?></span></div>
          				<div id='telugufont1' style="height: 200px;padding: 0px 3px 0px 4px;text-align: justify;">
          				 <? if(!empty($cinema_type1)){
           					if(file_exists("./assets/cinema/ceni_img".$cinema_type1['0']->id."_thumb.jpg")){ ?>
							 		<a href="<?=base_url();?>cinema/inner/<?=$cinema_type1['0']->id?>/<?=$cinema_type1['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type1['0']->id?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px;border: 0px;"></img></a>
							 		<?} ?>
							 		<div id="mainnews"><a href="<?=base_url();?>cinema/inner/<?=$cinema_type1['0']->id?>/<?=$cinema_type1['0']->type?>"><?=$cinema_type1['0']->heading?></a></div>
							 		<?=$cinema_type1['0']->summary?>
							 		<ul id="mainnews">
							 			<?php
          									$count=0; 
          									foreach($cinema_type1 as $row):
          									if($count==0)
          											{
					          							$count++;
					          							continue;
          											}
          						  		?>
							 			<li style="padding: 1px;"><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
							 			<? if($count==3)
							 			 {
          									break;
          								 }else{
          										$count++;
          									 }
          								 endforeach; 
          									if($count==0)
          									{
          									echo 'No data found';
          									}}
          								?>
							 		</ul>
							 		</div>
							 			<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?=$cinema_type1['0']->type?>"><?=$more['0']->matter?></a></span></div>
          				</td>
          				<td style="border: 1px solid #50BCFC;" valign="top" id="newstable" height="235">
          				<div style="width:100%;" id="news_heading"><span id="newsheading"><?=$cinema_type2['0']->cinema_type?></span></div>
          				<div id='telugufont1' style="height: 200px;padding: 0px 3px 0px 4px;text-align: justify;">
          				   <? if(!empty($cinema_type2)){
           					if(file_exists("./assets/cinema/ceni_img".$cinema_type2['0']->id."_thumb.jpg")){ ?>
							 		<a href="<?=base_url();?>cinema/inner/<?=$cinema_type2['0']->id?>/<?=$cinema_type2['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type2['0']->id?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px;border: 0px;"></img></a>
							 		<?} ?>
							 		<div id="mainnews"><a href="<?=base_url();?>cinema/inner/<?=$cinema_type2['0']->id?>/<?=$cinema_type2['0']->type?>"><?=$cinema_type2['0']->heading?></a></div>
							 		<?=$cinema_type2['0']->summary?>
							 		<ul id="mainnews">
							 			<?php
          									$count=0; 
          									foreach($cinema_type2 as $row):
          									if($count==0)
          											{
					          							$count++;
					          							continue;
          											}
          						  		?>
							 			<li style="padding: 1px;"><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
							 			<? if($count==3)
							 			 {
          									break;
          								 }else{
          										$count++;
          									 }
          								 endforeach; 
          									if($count==0)
          									{
          									echo 'No data found';
          									}}
          								?>
							 		</ul>
							 		</div>
							 			<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?=$cinema_type2['0']->type?>"><?=$more['0']->matter?></a></span></div>
          				</td>
          			</tr>
          			<tr>
          				<td width="375" style="border: 1px solid #50BCFC;" valign="top" id="newstable">
          				<div id="TabbedPanels1" class="TabbedPanels" style="padding-left: 0px;">
							  <ul class="TabbedPanelsTabGroup" >
							    <li class="TabbedPanelsTab" tabindex="0"><span id="newsheading"><?=$cinema_type3['0']->cinema_type?></span></li>
							    <li class="TabbedPanelsTab" tabindex="0"><span id="newsheading"><?=$cinema_type4['0']->cinema_type?></span></li>
							  </ul>
							  <div class="TabbedPanelsContentGroup">
							    <div class="TabbedPanelsContent">
							    <div id='telugufont1' style="height: 200px;padding: 0px 3px 0px 4px;text-align: justify;">
							    <? if(!empty($cinema_type3)){
           					   if(file_exists("./assets/cinema/ceni_img".$cinema_type3['0']->id."_thumb.jpg")){ ?>
							 		<a href="<?=base_url();?>cinema/inner/<?=$cinema_type3['0']->id?>/<?=$cinema_type3['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type3['0']->id?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px;border: 0px;"></img></a>
							 		<?} ?>
							 		<div id="mainnews"><a href="<?=base_url();?>cinema/inner/<?=$cinema_type3['0']->id?>/<?=$cinema_type3['0']->type?>"><?=$cinema_type3['0']->heading?></a></div>
							 		<?=$cinema_type3['0']->summary?>
							 		<ul id="mainnews">
							 			<?php
          									$count=0; 
          									foreach($cinema_type3 as $row):
          									if($count==0)
          											{
					          							$count++;
					          							continue;
          											}
          						  		?>
							 			<li style="padding: 1px;"><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
							 			<? if($count==3)
							 			 {
          									break;
          								 }else{
          										$count++;
          									 }
          								 endforeach; 
          									if($count==0)
          									{
          									echo 'No data found';
          									}}
          								?>
							 		</ul>
							 		</div>
							 		<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?=$cinema_type3['0']->type?>"><?=$more['0']->matter?></a></span></div>
          						</div>
							    <div class="TabbedPanelsContent">
							   		 <div id='telugufont1' style="height: 200px;padding: 0px 3px 0px 4px;text-align: justify;">
							   		 <? if(!empty($cinema_type4)){
           					          if(file_exists("./assets/cinema/ceni_img".$cinema_type4['0']->id."_thumb.jpg")){ ?>
							 		<a href="<?=base_url();?>cinema/inner/<?=$cinema_type4['0']->id?>/<?=$cinema_type4['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type4['0']->id?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px;border: 0px;"></img></a>
							 		<?} ?>
							 		<div id="mainnews"><a href="<?=base_url();?>cinema/inner/<?=$cinema_type4['0']->id?>/<?=$cinema_type4['0']->type?>"><?=$cinema_type4['0']->heading?></a></div>
							 		<?=$cinema_type4['0']->summary?>
							 		<ul id="mainnews">
							 			<?php
          									$count=0; 
          									foreach($cinema_type4 as $row):
          									if($count==0)
          											{
					          							$count++;
					          							continue;
          											}
          						  		?>
							 			<li style="padding: 1px;"><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
							 			<? if($count==3)
							 			 {
          									break;
          								 }else{
          										$count++;
          									 }
          								 endforeach; 
          									if($count==0)
          									{
          									echo 'No data found';
          									}}
          								?>
							 		</ul>
							 		</div>
							 			<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?=$cinema_type4['0']->type?>"><?=$more['0']->matter?></a></span></div>
								</div>
							  </div>
							</div>
          				</td>
          				<td style="border: 1px solid #50BCFC;" id="newstable" valign="top" >
          				<div id="TabbedPanels2" class="TabbedPanels" style="padding-left: 0px;">
							  <ul class="TabbedPanelsTabGroup">
							    <li class="TabbedPanelsTab" tabindex="0"><span id="newsheading"><?=$cinema_type5['0']->cinema_type?></span></li>
							    <li class="TabbedPanelsTab" tabindex="0"><span id="newsheading"><?=$cinema_type6['0']->cinema_type?></span></li>
							  </ul>
							  <div class="TabbedPanelsContentGroup">
							    <div class="TabbedPanelsContent">
							   		  <div id='telugufont1' style="height: 200px;padding: 0px 3px 0px 4px;text-align: justify;">
							   		  <? if(!empty($cinema_type5)){
           					if(file_exists("./assets/cinema/ceni_img".$cinema_type5['0']->id."_thumb.jpg")){ ?>
							 		<a href="<?=base_url();?>cinema/inner/<?=$cinema_type5['0']->id?>/<?=$cinema_type5['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type5['0']->id?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px;border: 0px;"></img></a>
							 		<?} ?>
							 		<div id="mainnews"><a href="<?=base_url();?>cinema/inner/<?=$cinema_type5['0']->id?>/<?=$cinema_type5['0']->type?>"><?=$cinema_type5['0']->heading?></a></div>
							 		<?=$cinema_type5['0']->summary?>
							 		<ul id="mainnews">
							 			<?php
          									$count=0; 
          									foreach($cinema_type5 as $row):
          									if($count==0)
          											{
					          							$count++;
					          							continue;
          											}
          						  		?>
							 			<li style="padding: 1px;"><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
							 			<? if($count==3)
							 			 {
          									break;
          								 }else{
          										$count++;
          									 }
          								 endforeach; 
          									if($count==0)
          									{
          									echo 'No data found';
          									}}
          								?>
							 		</ul>
							 		</div>
							 			<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?=$cinema_type5['0']->type?>"><?=$more['0']->matter?></a></span></div>
          						</div>
							 	<div class="TabbedPanelsContent">
									  <div id='telugufont1' style="height: 200px">
									  <? if(!empty($cinema_type6)){
           					if(file_exists("./assets/cinema/ceni_img".$cinema_type6['0']->id."_thumb.jpg")){ ?>
							 		<a href="<?=base_url();?>cinema/inner/<?=$cinema_type6['0']->id?>/<?=$cinema_type6['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type6['0']->id?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px;border: 0px;"></img></a>
							 		<?} ?>
							 		<div id="mainnews"><a href="<?=base_url();?>cinema/inner/<?=$cinema_type6['0']->id?>/<?=$cinema_type6['0']->type?>"><?=$cinema_type6['0']->heading?></a></div>
							 		<?=$cinema_type6['0']->summary?>
							 		<ul id="mainnews">
							 			<?php
          									$count=0; 
          									foreach($cinema_type6 as $row):
          									if($count==0)
          											{
					          							$count++;
					          							continue;
          											}
          						  		?>
							 			<li style="padding: 1px;"><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
							 			<? if($count==3)
							 			 {
          									break;
          								 }else{
          										$count++;
          									 }
          								 endforeach; 
          									if($count==0)
          									{
          									echo 'No data found';
          									}}
          								?>
							 		</ul>
							 		</div>
							 			<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?=$cinema_type6['0']->type?>"><?=$more['0']->matter?></a></span></div>
							 	</div>
							
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
//-->
</script>
          				</td>
          			</tr>
          		</table>
          	</td>
          </tr>
          <table width="99%"  border="0" cellpadding="0" cellspacing="5">
          <tr><td valign="bottom" align="left" width="200" >
         <div class=" yui-skin-sam" style="width: 470px; border: 1px solid #50BCFC; " >
                      	<div id="demo1" class="yui-navset" style="color: #EDF5FF;">
	    						<ul class="yui-nav">
							        <li style="text-align: center;" class="selected"><a href="#tab2"><em style="width: 80px;"><span id="telugufont"><?=$more['13']->matter ?></span></em></a></li>
							        <li style="text-align: center;"><a href="#tab3"><em style="width: 80px;"><span id="telugufont"><?=$more['14']->matter ?></span></em></a></li>
									<li style="text-align: center;"><a href="#tab3"><em style="width: 80px;"><span id="telugufont"><?=$more['15']->matter ?></span></em></a></li>
	    						</ul>            
    							<div class="yui-content" style="height: 150px;text-align: center;">
							        <div id="tab1"><p>
							        <table width="100%" height="100%"><tr>
							   			<?php if(!empty($images)){
							   			$count=1;
							   			foreach ($images as $item):
							   			foreach ($item as $sub):
							   			//print_r($sub);					
							   			?>
							   		<td width="125" valign="top" >
									<div style="height: 95px;border: 0px solid red;width: 100%;text-align: left;">
									<? if(file_exists("./assets/gallery/image".$sub['id']."_thumb.jpg")){ ?>
										<a href="<?=base_url();?>gallery/content/<?=$sub['id']?>/<?=$sub['parentid']?>"><img src="<?=base_url();?>assets/gallery/image<?=$sub['id']?>_thumb.jpg" height="95px" width="130px" border="0"></a>
									<?} ?>
									</div>
									<div id="gall_botto_img"><a href="<?=base_url();?>gallery/content/<?=$sub['id']?>/<?=$sub['parentid']?>"><?=$sub['title']?></a></div></td>
							   			<? $count++;
							   			if($count==2)
							   				break;
							   			
							   				
							   			
							   			endforeach;
							   			endforeach; }
							   			else 'No data found';?>
							   			</tr>
							   			</table><div style="width: 100%;height: 15px;" id="more-news-div"><a href="<?=base_url();?>gallery/inner/<?=$sub['parentid']?>"><?=$more['0']->matter;?></a></div>
							        </p></div>
							        <div id="tab2"><p>
							        <table width="100%" height="100%">
							        <tr>
							        <? if(!empty($gall_topviews)){
							        $count=1;
							        foreach ($gall_topviews as $row): ?>
							   			<td width="125" valign="bottom">
							   				<div style="border: 0px solid red;width: 100%;text-align: left;">
							   				<a href="<?=base_url();?>gallery/content/<?=$row->id?>/<?=$row->parentid?>"><img src="<?=base_url();?>assets/gallery/image<?=$row->id?>_thumb.jpg" border="0"></a>
							   				</div>
							   				<div id="gall_botto_img"><a href="<?=base_url();?>gallery/content/<?=$row->id?>/<?=$row->parentid?>"><?=$row->title?></a></div>
										</td>
										<? if($count==3){
											break;
										}else {
											$count++;
										}endforeach;}
										?>

							   		</tr>
							   		</table>
							        </p></div>
							        <div id="tab3"><p>Tab Three Content</p></div>
    							</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo1');
    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
						</div>
						</div>
                      </td>
                      <td valign="bottom"><div style="border: 1px solid red;height: 120px;width: 450px;background-color: gray;">add space</div></td>
</table>
