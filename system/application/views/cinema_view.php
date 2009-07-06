<table width="99%"  border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="420" valign="top" >
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   	<tr>
       	<td valign="top">
       	<table width="0"  border="0" cellpadding="0" cellspacing="0">
    		<tr>
	       		<td  valign="top" width="500">
		       		<table width="100%"  border="0" cellpadding="0" cellspacing="0">
		     			<tr><td height="4" valign="bottom"><img src="<?=base_url();?>assets/imgs/top-cor-line.jpg" width="500" height="4" /></td></tr>
		            </table>
	                <table width="100%"  border="0" style="border-left:1px solid #0872BC; border-right:1px solid #0872BC;" cellpadding="0" cellspacing="0">
	                    <tr><td height="330"></td>
	                    </tr>
	                </table></td></tr>
	                <tr><td><img src="<?=base_url();?>assets/imgs/top-crow-botom.jpg" width="500"/></td></tr>
         </table>
         </td>
     </tr>
     </table>
     </td>
     <td width="245" valign="top" align="center">
     	<img src="<?=base_url();?>assets/imgs/18.jpg" style="border: 1px solid #50BCFC;"></img>
     	<div align="center" style="padding-top: 8px">
     		<img src="<?=base_url();?>assets/imgs/19.jpg" style="border: 1px solid #50BCFC;"></img>
     	<div>
     </td>
     <td width="185" align="center" valign="top" rowspan="3">
		<table width="100%" style="border:1px solid #50BCFC;">
			<tr>
				<td style="border:1px solid #50BCFC;height: 25px;" id="news_heading" align="center"><span id="telugufont"><?=$more['17']->matter ?></span></td>
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
			<table style="border:1px solid #50BCFC;" bgcolor="#9CD8FC" width="100%" >
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
  
          		<table width="100%" cellspacing="10" height="500">
          			<tr>
          				<td width="375" style="border: 1px solid #50BCFC;" id="newstable" valign="top" height="235">
          				<div style="width:100%;" id="news_heading"><span id="newsheading"><?=$cinema_type1['0']->cinema_type?></span></div>
          				<a href="#"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type1['0']->id?>_thumb.jpg" style="float: left;padding:3px 20px 3px 3px; border:0px;"></img></a>
          					<ul id="mainnews">
          					<? $count=0; foreach ($cinema_type1 as $row): ?>
          						<li><a href="#"><?=$row->heading?></a></li>
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
          				<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?=$cinema_type1['0']->type?>"><?=$more['0']->matter?></a></span></div>
          				</td>
          				<td style="border: 1px solid #50BCFC;" valign="top" id="newstable" height="235">
          				<div style="width:100%;" id="news_heading"><span id="newsheading"><?=$cinema_type2['0']->cinema_type?></span></div>
          				<a href="#"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type2['0']->id?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px;border: 0px;"></img></a>
          					<ul id="mainnews">
          					<? $count=0; foreach ($cinema_type2 as $row): ?>
          						<li><a href="#"><?=$row->heading?></a></li>
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
          				<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?=$cinema_type2['0']->type?>"><?=$more['0']->matter?></a></span></div>
          				</td>
          			</tr>
          			<tr>
          				<td width="375" style="border: 1px solid #50BCFC;" valign="top" id="newstable" height="235">
          				<div id="TabbedPanels1" class="TabbedPanels" style="padding-left: 0px;">
							  <ul class="TabbedPanelsTabGroup">
							    <li class="TabbedPanelsTab" tabindex="0"><span id="newsheading"><?=$cinema_type3['0']->cinema_type?></span></li>
							    <li class="TabbedPanelsTab" tabindex="0"><span id="newsheading"><?=$cinema_type4['0']->cinema_type?></span></li>
							  </ul>
							  <div class="TabbedPanelsContentGroup">
							    <div class="TabbedPanelsContent">	
							  <a href="#"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type3['0']->id?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px;border:0px;"></img></a>
          					<ul id="mainnews">
          					<? $count=0; foreach ($cinema_type3 as $row): ?>
          						<li><a href="#"><?=$row->heading?></a></li>
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
          					<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?=$cinema_type3['0']->type?>"><?=$more['0']->matter?></a></span></div>
          				</div>
							    <div class="TabbedPanelsContent">
							   <a href="#"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type4['0']->id?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px;border: 0px;"></img></a>
          					<ul id="mainnews">
          					<? $count=0; foreach ($cinema_type4 as $row): ?>
          						<li><a href="#"><?=$row->heading?></a></li>
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
          					<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?=$cinema_type4['0']->type?>"><?=$more['0']->matter?></a></span></div>
								</div>
							  </div>
							</div>
          				</td>
          				<td style="border: 1px solid #50BCFC;" id="newstable" valign="top" height="235">
          				<div id="TabbedPanels2" class="TabbedPanels" style="padding-left: 0px;">
							  <ul class="TabbedPanelsTabGroup">
							    <li class="TabbedPanelsTab" tabindex="0"><span id="newsheading"><?=$cinema_type5['0']->cinema_type?></span></li>
							    <li class="TabbedPanelsTab" tabindex="0"><span id="newsheading"><?=$cinema_type6['0']->cinema_type?></span></li>
							  </ul>
							  <div class="TabbedPanelsContentGroup">
							    <div class="TabbedPanelsContent">
							    <a href="#"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type5['0']->id?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px; border: 0px;"></img></a>
          					<ul id="mainnews">
          					<? $count=0; foreach ($cinema_type5 as $row): ?>
          						<li><a href="#"><?=$row->heading?></a></li>
          					<? if($count==8){
          						break;
          					}else{
          						$count++;
          					}
          					endforeach;
          					if($count==0){
          					echo 'No data found';}?>
          					</ul>
          					<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?=$cinema_type5['0']->type?>"><?=$more['0']->matter?></a></span></div>
          				</div>
							 <div class="TabbedPanelsContent">
									<a href="#"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type6['0']->id?>_thumb.jpg" style="float: left;padding:3px 20px 3px 3px;border: 0px;"></img></a>
				          					<ul id="mainnews">
				          					<? $count=0; foreach ($cinema_type6 as $row): ?>
				          						<li><a href="#"><?=$row->heading?></a></li>
				          					<? 
				          					if($count==8){
				          						break;
				          					}
				          					else{
				          						$count++;
				          					}
				          					endforeach; ?>
				          					<? if($count==0){
				          					echo 'No data found'; }
				          					 ?>
				          					</ul>
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
          <table width="99%"  border="0" cellpadding="0" cellspacing="0">
          <tr><td valign="bottom" align="left" width="200">
         <div class=" yui-skin-sam" style="width: 470px; border: 1px solid #50BCFC; height: 190px" >
                      	<div id="demo1" class="yui-navset" style="color: #EDF5FF;">
	    						<ul class="yui-nav">
							       <li class="selected" style="text-align: center;"><a href="#tab1"><em style="width: 80px;">Politics</em></a></li>
							        <li style="text-align: center;"><a href="#tab2"><em style="width: 80px;"><span id="telugufont"><?=$more['13']->matter ?></span></em></a></li>
							        <li style="text-align: center;"><a href="#tab3"><em style="width: 80px;"><span id="telugufont"><?=$more['14']->matter ?></span></em></a></li>
									<li style="text-align: center;"><a href="#tab3"><em style="width: 80px;"><span id="telugufont"><?=$more['15']->matter ?></span></em></a></li>
	    						</ul>            
    							<div class="yui-content" style="height: 150px;text-align: center;">
							        <div id="tab1"><p>Tab four Content</p></div>
							        <div id="tab2"><p>Tab Two ContentTab One ContentTab One Content</p></div>
							        <div id="tab3"><p>Tab Three Content</p></div>
									<div id="tab3"><p>Tab four Content</p></div>
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
</table>
