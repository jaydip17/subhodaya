<script>
menu[2] = {  // REQUIRED!!  This menu explicitly declares all available options even if they are the same as the defaults
id:'menu2', //use unique quoted id (quoted) REQUIRED!!
/////////////////////////////////////
///////////// no quotes for these properties (numbers represent pixels unless otherwise noted): ////////////
/////////////////////////////////////
user_defined_stylesheet:false, //if true, prevents script from generating stylesheet for this menu
user_defined_markup:false, //if true, prevents script from generating markup for this menu
design_mode:false,  //if true, generates a report of the script generated/intended styles and markup (as a design aid)
menutop:145,     // initial top offset - except for top menu, where it is meaningless
menuleft:'45%',    // initial left offset - only for top menu, as pixels (can be a quoted percentage - ex: '50%')
keepinview:80,   // Use false (for not static) - OR - true or numeric top offset when page scrolls
menuspeed:20,    // Speed of menu sliding smaller is faster (interval of milliseconds)
menupause:500,   // How long menu stays out when mouse leaves it (in milliseconds)
d_colspan:3,     // Available columns in menu body as integer
allowtransparent:false, // true to allow page to show through menu if other bg's are transparent or border has gaps
barwidth:30,     // bar (the vertical cell) width
wrapbar:true,    // extend and wrap bar below menu for a more solid look (default false) - will revert to false for top menu
hdingwidth:200,  // heading - non linked horizontal cells width
hdingheight:25,  // heading - non linked horizontal cells height
hdingindent:1,   // heading - non linked horizontal cells text-indent represents ex units (@8 pixels decimals allowed)
linkheight:20,   // linked horizontal cells height
linktopad:3,     // linked horizontal cells top padding
borderwidth:0,   // inner border-width used for this menu
/////////////////////////// quote these properties: /////////////////////
bordercolor:'#78CCFB', // inner border color
borderstyle:'solid',    // inner border style (solid, dashed, inset, etc.)
outbrdwidth:'0ex 0ex 0ex 0ex', // outer border-width used for this menu (top right bottom left)
outbrdcolor:'#78CCFB',  // outer border color
outbrdstyle:'solid',     // outer border style (solid, dashed, inset, etc.)
barcolor:'black',        // bar (the vertical cell) text color
barbgcolor:'#78CCFB',   // bar (the vertical cell) background color
barfontweight:'bold',    // bar (the vertical cell) font weight
baralign:'center',       // bar (the vertical cell) right left or center text alignment
menufont:'verdana',      // menu font
fontsize:'100%',          // express as percentage with the % sign
hdingcolor:'red',      // heading - non linked horizontal cells text color
hdingbgcolor:'#78CCFB',  // heading - non linked horizontal cells background color
hdingfontweight:'bold',  // heading - non linked horizontal cells font weight
hdingvalign:'center',    // heading - non linked horizontal cells vertical align (top, middle or center)
hdingtxtalign:'center',    // heading - non linked horizontal cells right left or center text alignment
linktxtalign:'center',     // linked horizontal cells right left or center text alignment
linktarget:'',           // default link target, leave blank for same window (other choices: _new, _top, or a window or frame name)
kviewtype:'absolute',       // Type of keepinview - 'fixed' utilizes fixed positioning where available, 'absolute' fluidly follows page scroll
menupos:'left',         // set side that menu slides in from (right or left or top)
bartext:'GREETINGS MENU',       // bar text (the vertical cell) use text or img tag

menuItems:[
//[name, link, target, colspan, endrow?] - leave 'link' and 'target' blank to make a header
["GREETINGS"], //create header
<?php if(!empty($type)){ foreach($type as $row):?>
["<?php echo $row->gree_cat;?>", "<?=base_url();?>greetings/content/<?=$row->id?>", ""],
<?php endforeach;} else 'No data found';?>
//["Birthday", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Good morning", "http://www.loisimages.com", "_new"],
//["State Street Blues", "http://www.statestreetbluesstroll.com/","_new"],
//["Media Jazz by Night", "http://www.mediajazzbynight.com/", "_new"],
//["DD Help Forum", "http://www.dynamicdrive.com/forums", "_new"],
//
//["Ansi Art Gallery", "http://home.comcast.net/~ansiguy", "_new"],
//["John's Javascript ", "http://home.comcast.net/~jscheuer1/side", "_new"]  //no comma after last entry

]}; // REQUIRED!! do not edit or remove
make_menus();
</script>

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
	var content = document.getElementById('flash_'+value).innerHTML;
  document.getElementById('flash-content').innerHTML = content;
}

//-->
</script> 
<table width="99%"  border="0" cellpadding="0" cellspacing="0">
	<tr>
    	<td  valign="top">
    	<table width="100%" border="0" cellpadding="0" cellspacing="8">
   		<tr>
       	<td valign="top">
       	<table width="0"  border="0" cellpadding="0" cellspacing="0">
    		<tr>
	       		<td  valign="top" width="604" >
		       		
	                <table width="100%"  border="0" cellpadding="0" cellspacing="0">
	                    <tr>
	                    
	                     <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="604" height="319">
  <param name="movie" value="<?=base_url();?>assets/greetingd.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="9.0.45.0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
  <param name="expressinstall" value="<?=base_url();?>assets/Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object id="sample123" type="application/x-shockwave-flash" data="<?=base_url();?>assets/greetingd.swf" width="604" height="319">
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
<div id="flash-content" style="position:absolute; width:604px; top: 425px; color:white; padding:0px 5px 20px 5px; vertical-align:top; left:41px; height: 40px;text-align: left;"> 
<?=$query['0']->text?>
</div>
<? foreach ($query as $image): ?>
<div id='flash_<?=$image->id?>' style="display: none;"><?=$image->text?></div>
<?endforeach; ?>
					</td></tr>
	                </table></td></tr>
	                <tr><td></td></tr>
         </table>
         </td>
    	 </tr>
     	</table>
     	</td>
     	<td width="300" align="center" valign="top" >
		<div style="background-color: gray;width: 290px;height: 330px;">google ads</div>
		</td>
		</tr>
	<tr>
		<td align="left">
			<table>
				<tr>
					<td colspan="2" valign="top"><div id="gree_bar" style="padding: 0px 0px 0px 10px;"><?php if(isset($more['23'])){echo $more['23']->matter;}?></div></td>
				</tr>
				<tr>
					<td width="50%" align="left" valign="top">
						<div id="gree_cen">
							<div style="height: 140px;width: 290px;"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings10['0'])) {echo $greetings10['0']->type;}?>"><img src="<?=base_url();?>assets/greetings/gree_img<?php if(isset($greetings10['0'])) {echo $greetings10['0']->id;}?>_thumb.jpg" style="margin: 5px 10px 5px 10px;float: left;text-align: justify;" id="img"></a>
							<div style="padding: 6px 15px 0px 0px;"><span id="more-news-div"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings10['0'])) {echo $greetings10['0']->type;}?>"><?php if(isset($greetings10['0'])) {echo $greetings10['0']->name;}?></a></span></div>
							<span><?php if(isset($greetings10['0'])) {echo $greetings10['0']->summery;}?></span></div>
							<div style="" id="more-news-div"><span><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings10['0'])) {echo $greetings10['0']->type;}?>"><?php if(isset($more['0'])){ echo $more['0']->matter;}?></a></span></div>
						</div>
						<div id="gree_bar1" ><span style="padding: 5px 10px 0px 100px;"><?php if(isset($greetings10['0'])){echo $greetings10['0']->gree_cat;}?></span></div>
					</td>
					<td width="50%" align="left" valign="top">
						<div id="gree_cen">
							<div style="height: 140px;width: 290px;"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings9['0'])) {echo $greetings9['0']->type;}?>"><img src="<?=base_url();?>assets/greetings/gree_img<?php if(isset($greetings9['0'])) {echo $greetings9['0']->id;}?>_thumb.jpg" style="margin: 5px 10px 5px 10px;float: left;text-align: justify;" id="img"></a>
							<div style="padding: 6px 15px 0px 0px;"><span id="more-news-div"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings9['0'])) {echo $greetings9['0']->type;}?>"><?php if(isset($greetings9['0'])) {echo $greetings9['0']->name;}?></a></span></div>
							<span><?php if(isset($greetings9['0'])) {echo $greetings9['0']->summery;}?></span></div>
							<div style="" id="more-news-div"><span><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings9['0'])) {echo $greetings9['0']->type;}?>"><?php if(isset($more['0'])){ echo $more['0']->matter;}?></a></span></div>
						</div>
						<div id="gree_bar1" ><span style="padding: 5px 10px 0px 100px;"><?php if(isset($greetings9['0'])){echo $greetings9['0']->gree_cat;}?></span></div>
					</td>
				</tr>
				<tr>
					<td width="50%" align="left" valign="top">
						<div id="gree_cen">
							<div style="height: 140px; width: 290px;"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings8['0'])) {echo $greetings8['0']->type;}?>"><img src="<?=base_url();?>assets/greetings/gree_img<?php if(isset($greetings8['0'])) {echo $greetings8['0']->id;}?>_thumb.jpg" style="margin: 5px 10px 5px 10px;float: left;text-align: justify;" id="img"></a>
							<div style="padding: 6px 15px 0px 0px;"><span id="more-news-div"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings8['0'])) {echo $greetings8['0']->type;}?>"><?php if(isset($greetings8['0'])) {echo $greetings8['0']->name;}?></a></span></div>
							<?php if(isset($greetings8['0'])) {echo $greetings8['0']->summery;}?></div>
							<div style="" id="more-news-div"><span><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings8['0'])) {echo $greetings8['0']->type;}?>"><?php if(isset($more['0'])){ echo $more['0']->matter;}?></a></span></div>
						</div>
						<div id="gree_bar1" ><span style="padding: 5px 10px 0px 100px;"><?php if(isset($greetings8['0'])){echo $greetings8['0']->gree_cat;}?></span></div>
					</td>
					<td width="50%" align="left" valign="top">
						<div id="gree_cen">
							<div style="height: 140px; width: 290px;"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings6['0'])) {echo $greetings6['0']->type;}?>"><img src="<?=base_url();?>assets/greetings/gree_img<?php if(isset($greetings6['0'])) {echo $greetings6['0']->id;}?>_thumb.jpg" style="margin: 5px 10px 5px 10px;float: left;text-align: justify;" id="img"></a>
							<div style="padding: 6px 15px 0px 0px;"><span id="more-news-div"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings6['0'])) {echo $greetings6['0']->type;}?>"><?php if(isset($greetings6['0'])) {echo $greetings6['0']->name;}?></a></span></div>
							<?php if(isset($greetings6['0'])) {echo $greetings6['0']->summery;}?></div>
							<div style="" id="more-news-div"><span><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings6['0'])) {echo $greetings6['0']->type;}?>"><?php if(isset($more['0'])){ echo $more['0']->matter;}?></a></span></div>
						</div>
						<div id="gree_bar1" ><span style="padding: 5px 10px 0px 100px;"><?php if(isset($greetings6['0'])){echo $greetings6['0']->gree_cat;}?></span></div>
					</td>
				</tr>
				<tr>
					<td width="50%" align="left" valign="top">
						<div id="gree_cen">
							<div style="height: 140px; width: 290px;"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings4['0'])) {echo $greetings4['0']->type;}?>"><img src="<?=base_url();?>assets/greetings/gree_img<?php if(isset($greetings4['0'])) {echo $greetings4['0']->id;}?>_thumb.jpg" style="margin: 5px 10px 5px 10px;float: left;text-align: justify;" id="img"></a>
							<div style="padding: 6px 15px 0px 0px;"><span id="more-news-div"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings4['0'])) {echo $greetings4['0']->type;}?>"><?php if(isset($greetings4['0'])) {echo $greetings4['0']->name;}?></a></span></div>
							<?php if(isset($greetings4['0'])) {echo $greetings4['0']->summery;}?></div>
							<div style="" id="more-news-div"><span><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings4['0'])) {echo $greetings4['0']->type;}?>"><?php if(isset($more['0'])){ echo $more['0']->matter;}?></a></span></div>
						</div>
						<div id="gree_bar1" ><span style="padding: 5px 10px 0px 100px;"><?php if(isset($greetings4['0'])){echo $greetings4['0']->gree_cat;}?></span></div>
					</td>
					<td width="50%" align="left" valign="top">
						<div id="gree_cen">
							<div style="height: 140px; width: 290px;"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings7['0'])) {echo $greetings7['0']->type;}?>"><img src="<?=base_url();?>assets/greetings/gree_img<?php if(isset($greetings7['0'])) {echo $greetings7['0']->id;}?>_thumb.jpg" style="margin: 5px 10px 5px 10px;float: left;text-align: justify;" id="img"></a>
							<div style="padding: 6px 15px 0px 0px;"><span id="more-news-div"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings7['0'])) {echo $greetings7['0']->type;}?>"><?php if(isset($greetings7['0'])) {echo $greetings7['0']->name;}?></a></span></div>
							<?php if(isset($greetings7['0'])) {echo $greetings7['0']->summery;}?></div>
							<div style="" id="more-news-div"><span><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings7['0'])) {echo $greetings7['0']->type;}?>"><?php if(isset($more['0'])){ echo $more['0']->matter;}?></a></span></div>
						</div>
						<div id="gree_bar1" ><span style="padding: 5px 10px 0px 100px;"><?php if(isset($greetings7['0'])){echo $greetings7['0']->gree_cat;}?></span></div>
					</td>
				</tr>
				<tr>
					<td colspan="2"><div id="gree_bar" style="padding: 0px 0px 0px 10px;"></div></td>
				</tr>
			</table>
		</td>
		<td rowspan="5" align="left" valign="top">
		<div id="gre_tabs_div">
		         <div class=" yui-skin-sam" style="width: 299px; border: 1px solid #50BCFC; height: 590px;padding: 2px;" >
                      	<div id="demo1" class="yui-navset" style="color: #EDF5FF;">
	    						<ul class="yui-nav">
							       <li class="selected" style="text-align: center;"><a href="#tab1"><em style="width: 70px;"><?php if(isset($greetings1['0'])){echo $greetings1['0']->gree_cat;}?></em></a></li>
							        <li style="text-align: center;"><a href="#tab2"><em style="width: 70px;"><span id="telugufont"><?php if(isset($greetings2['0'])){echo $greetings2['0']->gree_cat;}?></span></em></a></li>
							         <li style="text-align: center;"><a href="#tab2"><em style="width: 70px;"><span id="telugufont"><?php if(isset($greetings12['0'])){echo $greetings12['0']->gree_cat;}?></span></em></a></li>
	    						</ul>            
    							<div class="yui-content" style="height: 150px;" >
							        <div id="tab1"><p>
							        <?php if(!empty($greetings1)){ $count=1; foreach($greetings1 as $row):?>
							       	<div style="height:97px;">
							        	<div style="padding:1px;">
							        		<a href="<?=base_url();?>greetings/content/<?=$row->type?>"><img src="<?=base_url();?>assets/greetings/gree_img<?=$row->id?>_thumb.jpg" width="80px;" height="87px;" style="float: left;margin:2px 5px 2px 2px;" id="img"></a>
							        		<font ><a href="<?=base_url();?>greetings/content/<?=$row->type?>"><?=$row->name;?></a></font>
							        		<div><?=$row->summery;?></div>
							        	</div>
							        </div>
							        <hr>
							        <?php if($count==5){ break;}else { $count++;}endforeach;}
							        else{ echo 'No data found';}?>
							        </p></div>
							        <div id="tab2"><p>
							        	<?php if(!empty($greetings2)){ $count=1; foreach($greetings2 as $row):?>
							       		<div style="height:97px;">
							        	<div style="padding:1px;">
							        		<a href="<?=base_url();?>greetings/content/<?=$row->type?>"><img src="<?=base_url();?>assets/greetings/gree_img<?=$row->id?>_thumb.jpg" height="87px;" width="70px" style="float: left;margin:2px 5px 2px 2px;" id="img"></a>
							        		<font ><a href="<?=base_url();?>greetings/content/<?=$row->type?>"><?=$row->name;?></a></font>
							        		<div><?=$row->summery;?></div>
							        	</div>
							        </div>
							       <hr>
							        <?php 
									if($count==5){ break;}else { $count++;}
							        endforeach;}
							        else { echo 'No data found';}?>
							        </p></div>
							        <div id="tab3"><p>
							        <?php if(!empty($greetings12)){ $count=1; foreach($greetings12 as $row):?>
							       	<div style="height:97px;">
							        	<div style="padding:1px;">
							        		<a href="<?=base_url();?>greetings/content/<?=$row->type?>"><img src="<?=base_url();?>assets/greetings/gree_img<?=$row->id?>_thumb.jpg" height="87px;" width="70px" style="float: left;margin:2px 5px 2px 2px;" id="img"></a>
							        		<font style="text-align: left;"><a href="<?=base_url();?>greetings/inner/<?=$row->type?>"><?=$row->name;?></a></font>
							        		<div ><?=$row->summery;?></div>
							        	</div>
							        </div>
							       <hr>
							        <?php 
									if($count==5){ break;}else { $count++;}
							        endforeach;}
							        else {
							        	echo 'No data found';
							        }
							        ?>
							        	
							        </p></div>
    							
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo1');
    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
						</div>
						</div>
		</div>
		</div>
		</td>
	</tr>
	
</table>
		